<?php

namespace App\Http\Controllers;

use App\Models\FlipBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FlipBookController extends Controller
{

    // FlipBook List Page 
    public function index()
    {
        $flipbook = FlipBook::orderBy("id", "desc")->get();
        $status = FlipBook::STATUS;
        return view('admin.flipbook.index', ["page" => "Daftar Flipbook"], compact('flipbook', 'status'));
    }

    // Create Flipbook Page
    public function create()
    {
        return $this->page('admin.flipbook.create', "Tambah Flipbook", null);
    }

    // Update Flipbook Page 
    public function update($id)
    {
        $flipbook = FlipBook::findOrFail($id);
        return view('admin.flipbook.update', ["page" => "Update Flipbook"], compact('flipbook'));
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
        $request->description ? $data->description = $request->description : null;
        $request->status ? $data->status = $request->status : null;
        $request->file ? $data->file = $this->uploadImage($request, 'file', 'berkas') : null;
        $data->category_id = $request->category_id;
        $data->author_id = Auth()->user()->id;
        $data->unggulan = $request->unggulan;
        $request->thumbnail ? $data->thumbnail = $this->uploadImage($request, 'thumbnail', 'flipbook') : null;
        $request->tag ? $data->tag = json_encode($request->tag) : null;
        return $this->saveData($data);
    }

   
}
