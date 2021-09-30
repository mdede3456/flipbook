<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::where("role","super_admin")->orderBy("name","asc")->get();
        return view('admin.user.index',['page' => "Daftar Super Admin"],compact('user'));
    }

    public function admin()
    {
        $user = User::where("role","admin")->orderBy("name","asc")->get();
        return view('admin.user.admin',['page' => "Daftar Admin / Author"],compact('user'));
    }

    public function create()
    {
        return view('admin.user.create',['page' => "Tambah Pengguna"]);
    }

    public function update($id)
    {
        $user = User::findOrFail($id);
        $role = [
            'super_admin'   => "Super Admin",
            'admin'         => "Admin / Author"
        ];
        return view('admin.user.edit',['page' => "Edit Pengguna"],compact('user','role'));
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        return $this->deleteData($user,$id);
    }

    public function store(Request $request, $condition)
    {
        if($condition == 'create') {
            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'photo'  => 'mimes:jpg,jpeg,png',
                'banner'   => 'mimes:jpg,jpeg,png',
                'password'  => 'required', 
                'email' => 'required|unique:users,email'
            ]); 
        } else {
            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'photo'  => 'mimes:jpg,jpeg,png',
                'banner'   => 'mimes:jpg,jpeg,png', 
                'email' => 'required|unique:users,email,' . $request->id,
            ]); 
        }
       
        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        }

        $condition == 'create' ? $data = new User : $data = User::findOrFail($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->role = $request->role;
        $request->password ? $data->password = Hash::make($request->password) : null;
        $request->photo ? $data->photo = $this->uploadImage($request, 'photo', 'user') : null;
        $request->banner ? $data->banner = $this->uploadImage($request, 'banner', 'user') : null;;
        return $this->saveData($data);
    }
}
