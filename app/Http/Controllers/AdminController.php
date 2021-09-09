<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required', 
        ]);

        $data = User::findOrFail(Auth()->user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $request->photo ? $data->photo = $this->uploadImage($request, 'photo', 'user') : null;
        $request->password ? $data->password = $request->password : null;
        return $this->saveData($data);
    }

}
