<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Subcriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WebsiteController extends Controller
{
    public function index()
    {
        return view("index", ['page' => "Home Page"]);
    }

    public function globalSearch(Request $request)
    {
        return $this->pencarian($request,$request->type);
    }

    public function subcriber(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required||unique:users,email',
        ]);

        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        }

        $data = new Subcriber();
        $data->email = $request->email;
        return $this->saveData($data);
    }
}
