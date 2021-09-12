<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index',["page" => "Admin Dashboard"]);
    }

    public function profile()
    {
        return view('admin.profile',["page" => "Update Profile"]);
    }

    public function profileStore(Request $request)
    {
        $validate = Validator::make($request->all(), [ 
            'email' => 'required|unique:users,email,' . Auth()->user()->id,
            'name' => 'required',
            'banner' => 'mimes:jpg,jpeg,png'
        ]);

        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        }

        $data = User::findOrFail(Auth()->user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $request->photo ? $data->photo = $this->uploadImage($request, 'photo', 'user') : null;
        $request->banner ? $data->banner = $this->uploadImage($request, 'banner', 'user') : null;
        return $this->saveData($data);
    }

    public function changePass(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'password' => 'required', 
            'confirm'   => 'required'
        ]);

        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        }

        if($request->password != $request->confirm) {
            return response()->json([
                'errors' => "Password & Konfirmasi Password harus sama",
                'message' => 'password'
            ]);
        }

        $data = User::findOrFail(Auth()->user()->id);
        $data->password = Hash::make($request->password);
        return $this->saveData($data);
    }

}
