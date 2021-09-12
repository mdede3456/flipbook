<?php

namespace App\Http\Controllers\Flipbook;

use App\Http\Controllers\Controller;
use App\Models\Flipbook\CategoryFlipbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $category = CategoryFlipbook::orderBy("id","desc")->get();
        return view('admin.category.index',['page' => "Kategori Flipbook"],compact('category'));
    }

    public function create()
    {
        return view('admin.category.create',['page' => "Tambah Kategori"]);
    }

    public function update($id)
    {
        $category = CategoryFlipbook::findOrFail($id);
        return view('admin.category.update',['page' => "Edit Kategori"],compact('category'));
    }

    public function delete($id)
    {
        $category = CategoryFlipbook::findOrFail($id);
        return $this->deleteData($category,$id);
    }

    public function store(Request $request, $condition)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required', 
            'banner' => 'mimes:jpg,jpeg,png'
        ]);

        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        }

        $condition == 'create' ? $data = new CategoryFlipbook() : $data = CategoryFlipbook::findOrFail($request->id);
        $data->name = $request->name;
        $request->banner ? $data->banner = $this->uploadImage($request, 'banner', 'category') : null;
        return $this->saveData($data);
    }
}
