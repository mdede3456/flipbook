<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Flipbook\CategoryFlipbook;
use App\Models\Video\Video;
use App\Models\Website\Viewer;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class VideoController extends Controller
{
    public function index()
    {
        $video = Video::where("status",1)->orderBy("id","desc")->paginate(4);
        $category = CategoryFlipbook::all();
        return view('website.video.index',['page' => "Daftar Video"],compact('video','category'));
    }

    public function detail($id)
    {
        $video = Video::findOrFail($id);
        $category = CategoryFlipbook::all();
        $newlest = Video::where("status",1)->orderBy("id","desc")->limit(4)->get();

        $agent = new Agent(); 

        $data = new Viewer();
        if($agent->isMobile() == false) {
            $data->device = $agent->platform();
        } else {
            $data->device = "Android";
        }
        $data->browser = $agent->browser();
        $data->content_id = $video->id;
        $data->type = "video";
        $data->save();

        return view('website.video.detail',['page' => "Detail Video - ". $video->title],compact('video','category','newlest'));
    }

    public function search(Request $request)
    {
        return $this->pencarian($request,"video");
    }

    public function category($id)
    {
        $video = Video::where("status",1)->where("category_id",$id)->paginate(4);
        $category = CategoryFlipbook::findOrFail($id);
        $cate = CategoryFlipbook::all();
        return view('website.video.category',['page' => $category->name],compact('category','cate','video'));
    }

    public function loadMore(Request $request)
    {
        $request->category ? $book  = Video::where("status",1)->where("category_id",$request->category)->orderBy('id', 'desc')->paginate(20, ['*'], 'page', $request->page) : $book  = Video::orderBy('id', 'desc')->paginate(20, ['*'], 'page', $request->page);
        
        $callback = array();

        foreach ($book as $data) {
            $author = $data->author->name ?? '';
            if($data->unggulan = 'ya') {
                $featured = '<div class="vgwc-label vgwc-featured hot">Unggulan</div>';
            } else {
                $featured = '';
            }
            $pushing = array(
                'author'        => $author,
                'viewer'        => count($data->viewer),
                'link'          => route('web.video_detail',[$data->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $data->title))]),
                'image'         => asset($data->thumbnail),
                'title'         => $data->title,
                'id'            => $data->id,
                'unggulan'      => $featured
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
}