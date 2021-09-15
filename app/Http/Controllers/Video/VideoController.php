<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\FlipBook;
use App\Models\Flipbook\CategoryFlipbook;
use App\Models\Video\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    public function index()
    {
        Auth()->user()->role == 'super_admin' ? $video = Video::orderBy("id","desc")->get() : $video = $video = Video::where("author_id",Auth()->user()->id)->orderBy("id","desc")->get();
        $status = FlipBook::STATUS;
        return view('admin.video.index',["page" => "Data Video"],compact('video','status'));
    }

    public function create()
    {
        $category = CategoryFlipbook::orderBy("name","desc")->get();
        return view('admin.video.create',["page" => "Tambah Video"],compact('category'));
    }

    public function update($id)
    {
        $category = CategoryFlipbook::orderBy("name","desc")->get();
        $video = Video::findOrFail($id);
        $unggulan = [
            'ya'    => "Ya",
            'tidak' => "Tidak"
        ];
        $status = [
            0       => "Tidak",
            1       => "Ya"
        ];
        return view('admin.video.update',["page" => "Edit Video"],compact('category','video','unggulan','status'));
    }

    public function delete($id)
    {
        $video = Video::findOrFail($id);
        return $this->deleteData($video,$id);
    }

    public function store(Request $request,$condition)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required', 
            'thumbnail' => 'mimes:jpg,jpeg,png',
            'video' => 'required'
        ]);

        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        }

        if(Auth()->user()->role == 'super_admin') {
            return response()->json([
                'errors' => "Gunakan Role Admin / Author untuk menambah atau memperbaharui content",
                'message' => 'superadmin'
            ]);
        }

        $condition == 'create' ? $data = new Video() : $data = Video::findOrFail($request->id);
        $data->title = $request->title;
        $data->video = $request->video;
        $data->category_id = $request->category_id;
        $data->status = $request->status;
        $data->author_id = Auth()->user()->id;
        $request->description ? $data->description = $request->description : null;
        $data->unggulan = $request->unggulan;
        $request->thumbnail ? $data->thumbnail = $this->uploadImage($request, 'thumbnail', 'video') : null;
        $request->tag ? $data->tag = json_encode($request->tag) : null;
        return $this->saveData($data);
    }
}
