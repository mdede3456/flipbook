<?php

namespace App\Http\Controllers\Manga;

use App\Http\Controllers\Controller;
use App\Models\Manga\Genre;
use App\Models\Manga\Komik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KomikController extends Controller
{
    public function index()
    {
        $data = Komik::orderBy("name","asc")->get();
        return view('admin.komik.index',["page" => "Data Komik"],compact('data'));
    }

    public function create()
    {
        $genre = Genre::where("status", "active")->orderBy("name", "desc")->get();
        return view('admin.komik.create', ["page" => "Tambah Komik"], compact('genre'));
    }

    public function update($id)
    {
        $genre = Genre::where("status", "active")->orderBy("name", "desc")->get();
        $komik = Komik::findOrFail($id);
        $status = [
            'ongoing'   => "On Going",
            'selesai'   => "Selesai / Tamat"
        ];
        return view('admin.komik.update', ["page" => "Update Komik"], compact('genre','komik','status'));
    }

    public function delete($id)
    {
        $komik = Komik::findOrFail($id);
        return $this->deleteData($komik,$id);
    }

    public function detail($id)
    {
        $komik = Komik::findOrFail($id);
        return view('admin.komik.detail',['page' => "Detail Komik - ". $komik->name ],compact('komik'));
    }

    public function store(Request $request, $condition)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'status' => 'required',
            'rate'  => 'required',
            'thumbnail'  => 'mimes:jpg,png,jpeg',
            'genre_id' => 'required'
        ]);

        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        }

        $condition == 'create' ? $data = new Komik() : $data = Komik::findOrFail($request->id);
        $data->name = $request->name;
        $data->status = $request->status;
        $data->rate = $request->rate;
        $data->genre_id = $request->genre_id;
        $request->description ? $data->description = $request->description : null;
        $request->thumbnail ? $data->thumbnail = $this->uploadImage($request, 'thumbnail', 'manga') : null;
        return $this->saveData($data);
    }
}
