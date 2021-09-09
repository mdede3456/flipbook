<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saveData($data)
    {
        if ($data->save()) {
            return back()->with(['flash' => "Berhasil"]);
        } else {
            return back()->with(['flash' => "Terjadi Kesalahan"]);
        }
    }

    public function uploadImage(Request $request, $name, $path)
    {
        if ($request->hasFile($name)) {
            return $request->file($name)->store('uploads/' . $path . '/');
        }
    }

    public function deleteData($data, $id)
    {
        if ($data->delete($id)) {
            return back()->with(['flash' => "Berhasil"]);
        } else {
            return back()->with(['gagal' => "Terjadi Kesalahan"]);
        }
    }

    public function page($file, $page_name, $data)
    {
        return $page_name ?  view($file, ['page' => $page_name]) : view($file, ['page' => $page_name], compact($data));
    }
}
