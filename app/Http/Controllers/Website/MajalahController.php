<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\FlipBook;
use App\Models\Flipbook\CategoryFlipbook;
use App\Models\Website\Viewer;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class MajalahController extends Controller
{
    public function index()
    {
        $book       = FlipBook::where("status",1)->orderBy("id","desc")->paginate(20);
        $featured   = FlipBook::where("status",1)->where("unggulan","ya")->get();
        $trending   = Viewer::selectRaw("count(id) as jumlah, content_id as content") 
                                ->where("type","majalah")
                                ->groupBy("content")
                                ->orderBy("jumlah","desc")
                                ->limit(10)->get();
        $cate = CategoryFlipbook::all();
        return view('website.majalah.index',['page' => "Our Majalah"],compact('book','cate','featured','trending'));
    }

    public function detail($id)
    {
        $book = FlipBook::findOrFail($id); 
        $news = FlipBook::where("status",1)->orderBy("id","desc")->limit(3)->get();
        $agent = new Agent(); 

        $data = new Viewer();
        if($agent->isMobile() == false) {
            $data->device = $agent->platform();
        } else {
            $data->device = "Android";
        }
        $data->browser = $agent->browser();
        $data->content_id = $book->id;
        $data->type = "majalah";
        $data->save();
      
        return view('website.majalah.detail',['page' => $book->title],compact('book','news'));
    }

    public function category($id)
    {
        $book = FlipBook::where("status",1)->where("category_id",$id)->orderBy("id","desc")->paginate(20);
        $category = CategoryFlipbook::findOrFail($id);
        $cate = CategoryFlipbook::all();
        return view('website.majalah.category',["page" => $category->name],compact('book','category','cate'));
    }

    public function search(Request $request)
    {
        return $this->pencarian($request,"majalah");
    }

    public function loadMore(Request $request)
    {
        $request->category ? $book  = FlipBook::where("status",1)->where("category_id",$request->category)->orderBy('id', 'desc')->paginate(20, ['*'], 'page', $request->page) : $book  = FlipBook::orderBy('id', 'desc')->paginate(20, ['*'], 'page', $request->page);
        
        $callback = array();

        foreach ($book as $data) {
            $author = $data->author->name ?? '';
            if($data->unggulan = 'ya') {
                $featured = '<div class="vgwc-label vgwc-featured hot">Unggulan</div>';
            } else {
                $featured = '';
            }
            $pushing = array(
                'author'   => $author,
                'viewer'     => count($data->viewer),
                'link'   => route('majalah.detail',[$data->id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $data->title))]),
                'image'      => asset($data->thumbnail),
                'title'        => $data->title,
                'id'   => $data->id,
                'unggulan' => $featured,
                'author_link'   => route('author.detail',[$data->author_id,strtolower(preg_replace("/[^a-zA-Z0-9]/", "-", $data->author->name ?? 'none'))])
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
