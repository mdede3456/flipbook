<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.page.about',['page' => "About Us"],compact('about'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'banner'  => 'mimes:jpg,png,jpeg', 
        ]);

        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        }

        $data = About::first();
        $data->title = $request->title;
        // $data->status = $request->status;
        $request->description ? $data->description = $request->description : null; 
        $request->banner ? $data->banner = $this->uploadImage($request, 'banner', 'page') : null;
        return $this->saveData($data);
    }
}
