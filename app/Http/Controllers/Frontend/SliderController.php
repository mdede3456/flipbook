<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.index',['page' => "Slider"],compact('slider'));
    }

    public function create()
    {
        return view('admin.slider.create',['page' => "Tambah Slider"]);
    }

    public function update($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.update',['page' => "Edit Slider"],compact('slider'));
    }

    public function delete($id)
    {
        $slider = Slider::findOrFail($id);
        return $this->deleteData($slider,$id);
    }

    public function store(Request $request, $condition)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'link'  => 'required',
            'button'    => "required",
            'image' => 'mimes:jpg,jpeg,png', 
        ]);

        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        }

        $condition == 'create'  ? $data = new Slider() : $data = Slider::findOrFail($request->id);
        $data->title = $request->title;
        $data->link = $request->link;
        $data->button = $request->button;
        $request->image ? $data->image = $this->uploadImage($request, 'image', 'slider') : null; 
        return $this->saveData($data);
    }
}
