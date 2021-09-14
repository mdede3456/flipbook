<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Policy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PolicyController extends Controller
{
    public function index()
    {
        $policy = Policy::first();
        return view('admin.page.policy',['page' => "Kebijakan Policy"],compact('policy'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'banner'  => 'mimes:jpg,png,jpeg',
            // 'status' => 'required'
        ]);

        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        }

        $data = Policy::first();
        $data->title = $request->title;
        // $data->status = $request->status;
        $request->description ? $data->description = $request->description : null; 
        $request->banner ? $data->banner = $this->uploadImage($request, 'banner', 'page') : null;
        return $this->saveData($data);
    }
}
