<?php

namespace App\Http\Controllers\Manga;

use App\Http\Controllers\Controller;
use App\Models\Manga\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genre = Genre::orderBy("name","asc")->get();
        return view('admin.genre.index',['page' => "Genre Manga"],compact('genre'));
    }

    public function delete($id)
    {
        $genre = Genre::findOrFail($id);
        return $this->deleteData($genre,$id);
    }

    public function store(Request $request, $condition)
    {
        $this->validate($request,[
            'name'  => 'required'
        ]);

        $condition == 'create' ? $data = new Genre : $data = Genre::findOrFail($request->id);
        $data->name = $request->name;
        $request->status ? $data->status = $request->status : null;
        return $this->saveData($data);
    }
    
}
