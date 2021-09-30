<?php

namespace App\Http\Controllers;

use App\Models\FlipBook;
use App\Models\Flipbook\CategoryFlipbook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FlipBookController extends Controller
{

    // FlipBook List Page 
    public function index()
    {
        Auth()->user()->role == 'super_admin' ?  $flipbook = FlipBook::orderBy("id", "desc")->get() : $flipbook = FlipBook::where("author_id",Auth()->user()->id)->orderBy("id", "desc")->get();
       
        $status = FlipBook::STATUS;
        return view('admin.flipbook.index', ["page" => "Daftar Flipbook"], compact('flipbook', 'status'));
    }

    // Create Flipbook Page
    public function create()
    {
        $category = CategoryFlipbook::all();
        $author = User::where("role","admin")->get();
        return view('admin.flipbook.create', ['page' => "Tambah Majalah"], compact('category','author'));
    }

    // Update Flipbook Page 
    public function update($id)
    {
        $flipbook = FlipBook::findOrFail($id);
        $category = CategoryFlipbook::all();
        $unggulan = [
            'ya'    => "Ya",
            'tidak' => "Tidak"
        ];
        $status = [
            "0"       => "Tidak",
            "1"       => "Ya"
        ];
        $author = User::where("role","admin")->get();
        return view('admin.flipbook.update', ["page" => "Update Flipbook"], compact('flipbook', 'category', 'unggulan', 'status','author'));
    }

    // Delete Flipbook Page
    public function delete($id)
    {
        $flipbook = FlipBook::findOrFail($id);
        return $this->deleteData($flipbook, $id);
    }

    // Flipbook Detail atau Overview
    public function detail($id)
    {
        $flipbook = FlipBook::findOrFail($id);
        return view('admin.flipbook.detail', ["page" => "Detail Flipbook - " . $flipbook->title], compact('flipbook'));
    }

    // Store Data Flipbook
    public function store(Request $request, $condition)
    { 
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'file'  => 'mimes:pdf',
            'category_id'   => 'required'
        ]);

        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        } 

        $condition == 'create' ? $data = new FlipBook : $data = FlipBook::findOrFail($request->id);
        $data->title = $request->title;
        $data->status = $request->status;
        $request->description ? $data->description = $request->description : null; 
        $request->file ? $data->file = $this->uploadImage($request, 'file', 'berkas') : null;
        $data->category_id = $request->category_id;
        $request->author ?  $data->author_id = $request->author_id : $data->author_id = Auth()->user()->id;
        $data->unggulan = $request->unggulan;
        $request->thumbnail ? $data->thumbnail = $this->uploadImage($request, 'thumbnail', 'flipbook') : null;
        $request->tag ? $data->tag = $request->tag : null;
        return $this->saveData($data);
    }
}
