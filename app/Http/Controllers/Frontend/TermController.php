<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TermController extends Controller
{
    public function index()
    {
        $term = Term::first();
        return view('admin.page.term',['page' => "Kebijakan Privacy"],compact('term'));
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

        $data = Term::first();
        $data->title = $request->title;
        // $data->status = $request->status;
        $request->description ? $data->description = $request->description : null; 
        $request->banner ? $data->banner = $this->uploadImage($request, 'banner', 'page') : null;
        return $this->saveData($data);
    }
}
