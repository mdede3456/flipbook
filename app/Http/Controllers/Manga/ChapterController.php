<?php

namespace App\Http\Controllers\Manga;

use App\Http\Controllers\Controller;
use App\Models\Manga\Chapter;
use App\Models\Manga\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChapterController extends Controller
{
    public function store(Request $request, $condition)
    {
        $validate = $this->chapter_validation($request, $request->upload_type);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        // if ($validate->fails()) {
        //     if ($request->ajax()) {
        //         return response()->json([
        //             'errors' => $validate->errors(),
        //             'message' => 'error'
        //         ]);
        //     }
        // }

        $condition == 'create' ? $data = new Chapter() : $data = Chapter::findOrFail($request->id);
        $data->name = $request->name;
        $data->upload_type = $request->upload_type;
        $data->komik_id = $request->id_komik;

        if ($request->upload_type == 'pdf') {
            $request->file ? $data->file = $this->uploadImage($request, 'file', 'komik/' . strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $data->komik->name))) : null;
        }

        $data->save();



        if ($request->upload_type == 'byimage') {

            $num = count($request->image);
            for ($x = 0; $x < $num; $x++) {
                if ($files = $request->file('image')[$x]) {
                    $name = $files->getClientOriginalName();
                    $files->move('uploads/' . strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $data->komik->name)) . "/" . strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $data->name)) . "/", $name);
                    if ($request->chapter_id[$x] != null) {
                        $media = Media::findOrFail($request->chapter_id[$x]);
                    } else {
                        $media = new Media();
                    }
                    $media = new Media();
                    $media->path = 'uploads/' . strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $data->komik->name)) . "/" . strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $data->name)) . "/" . $name;
                    $media->imageable_id = $data->id;
                    $media->imageable_type = 'App\Models\Manga\Chapter';
                    $media->save();
                }
            }
        }

        $detail['name'] = $data->name;
        $detail['chapter_id'] = $data->id;
        $detail['thumbnail']    = $data->komik->thumbnail;
        $detail['date'] = $data->created_at;

        return redirect()->back()->with(['flash' => "Penambahan " . $detail['name'] . " Berhasil"]);
    }

    public function chapter_validation($request, $type)
    {
        if ($type == 'pdf') {
            $validate = Validator::make($request->all(), [
                'name'  => 'required',
                'file'  => 'required|mimes:pdf'
            ]);

            return $validate;
        } else if ($type == 'byimage') {
            $validate = Validator::make($request->all(), [
                'name'  => 'required',

                "image"    => "required|array|min:0",
                "image.*"  => "required|min:0|mimes:jpg,jpeg,png",
            ]);

            return $validate;
        }
    }

    public function delete($id)
    {
        $data = Chapter::findOrFail($id);
        return $this->deleteData($data,$id);
    }

    public function detail($id)
    {
        $data = Chapter::findOrFail($id);
        return view('admin.komik.c_detail', ['page' => "Baca Manga - " . $data->komik->name], compact('data'));
    }

    public function getimage($id)
    {
        $data = Chapter::findOrFail($id);
        $image = [];
        if ($data->upload_type == 'byimage') {
            foreach ($data->check as $c) {
                $list = array(
                    'src' => asset($c->path),
                    'thumb' => asset($c->path),
                    'title' => "Baca Manga"
                );
                array_push($image, $list);
            }
        }
        return response()->json($image);
    }
}
