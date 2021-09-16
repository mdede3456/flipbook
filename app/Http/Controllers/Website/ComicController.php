<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Manga\Chapter;
use App\Models\Manga\Genre;
use App\Models\Manga\Komik;
use App\Models\Website\Viewer;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class ComicController extends Controller
{
    public function  index()
    {
        $comic  = Komik::orderBy("id", "desc")->paginate(10);
        $cate   = Genre::all();
        return view('website.komik.index', ['page' => "Our Komik"], compact('comic', 'cate'));
    }

    public function detail($id)
    {
        $comic = Komik::findOrFail($id);
        return view('website.komik.detail', ['page' => "Komik - " . $comic->name], compact('comic'));
    }

    public function read($id)
    {
        $chapter = Chapter::findOrFail($id);

        $news = Komik::orderBy("id", "desc")->limit(4)->get();
        $genre = Genre::limit(5)->get();
        $agent = new Agent();

        $data = new Viewer();
        if ($agent->isMobile() == false) {
            $data->device = $agent->platform();
        } else {
            $data->device = "Android";
        }
        $data->browser = $agent->browser();
        $data->content_id = $chapter->id;
        $data->type = "komik";
        $data->save();

        return view('website.komik.read', ['page' => "Baca Komik - " . $chapter->komik->name ?? '' . " - " . $chapter->name], compact('chapter', 'news', 'genre'));
    }

    public function genre($id)
    {
        $comic = Komik::where("genre_id", $id)->orderBy("id", "desc")->paginate(20);
        $genre = Genre::findOrFail($id);
        $cate = Genre::all();
        return view('website.komik.genre', ["page" => $genre->name], compact('comic', 'genre', 'cate'));
    }

    public function loadMore(Request $request)
    {
        $request->genre ? $comic  = Komik::where("genre_id", $request->genre)->orderBy('id', 'desc')->paginate(20, ['*'], 'page', $request->page) : $comic  = Komik::orderBy('id', 'desc')->paginate(20, ['*'], 'page', $request->page);

        $callback = array();

        foreach ($comic as $data) {
            $genre = $data->genre->name ?? '';

            $pushing = array(
                'genre'   => $genre,
                'chapter'     => count($data->chapter),
                'link'   => route('comic.detail', [$data->id, strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $data->name))]),
                'image'      => asset($data->thumbnail),
                'name'        => $data->name,
                'id'   => $data->id,
                'description' => substr($data->description, 0, 150)
            );

            array_push($callback, $pushing);
        }

        $response = [
            'success' => true,
            'data'    => $callback,
            'message' => 'berhasil',
        ];

        return json_encode($response, true);
    }

    public function search(Request $request)
    {
        $comic = Komik::where('name', 'like', '%' . $request->name . '%')->get();
        $cate = Genre::all();
        return view('website.komik.search', ['page' => "Hasil Pencarian Komik - " . $request->name], compact('cate', 'comic'));
    }
}
