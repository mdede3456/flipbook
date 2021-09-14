<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\BannerSite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    public function index()
    {
        $banner = BannerSite::all();
        return view('admin.banner.index',['page' => "Web Banner Promo"],compact('banner'));
    }

    public function create()
    {
        $type = [
            'home1'     => "Home 1",
            'home2'     => "Home 2",
            'majalah'   => "Majalah",
            'komik'     => "Komik"
        ];
        return view('admin.banner.create',['page' => "Tambah Web Banner"],compact('type'));
    }

    public function update($id)
    {
        $banner = BannerSite::findOrFail($id);
        $type = [
            'home1'     => "Home 1",
            'home2'     => "Home 2",
            'majalah'   => "Majalah",
            'komik'     => "Komik"
        ];
        return view('admin.banner.update',['page' => "Update Web Banner"],compact('banner','type'));
    }

    public function delete($id)
    {
        $banner = BannerSite::findOrFail($id);
        return $this->deleteData($banner,$id);
    }

    public function store(Request $request, $condition)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'link'  => 'required',
            'banner' => 'mimes:jpg,jpeg,png',
            'position' => 'required'
        ]);

        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        }

        $condition == 'create'  ? $data = new BannerSite() : $data = BannerSite::findOrFail($request->id);
        $data->title = $request->title;
        $data->link = $request->link;
        $request->banner ? $data->banner = $this->uploadImage($request, 'banner', 'banner') : null;
        $data->position = $request->position;
        return $this->saveData($data);
    }
}
