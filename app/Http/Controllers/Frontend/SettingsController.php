<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view('admin.settings.index',['page' => "Pengaturan Website"],compact('settings'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'logo'  => 'mimes:jpg,png,jpeg',
            'copyright' => 'required'
        ]);

        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        }

        $data = Setting::first();
        $data->name = $request->name;
        $data->copyright = $request->copyright;
        $request->about ? $data->about = $request->about : null;
        $request->instagram_link ? $data->instagram_link = $request->instagram_link : null;
        $request->twitter_link ? $data->twitter_link = $request->twitter_link : null;
        $request->facebook_link ? $data->facebook_link = $request->facebook_link : null;
        $request->youtube_link ? $data->youtube_link = $request->youtube_link : null;
        $request->notice ? $data->notice = $request->notice : null;
        $request->email ? $data->email = $request->email : null;
        $request->phone ? $data->phone = $request->phone : null;
        $request->address ? $data->address = $request->address : null;
        $request->fax ? $data->fax = $request->fax : null;
        $request->logo ? $data->logo = $this->uploadImage($request, 'logo', 'page') : null;
        return $this->saveData($data);
    }
}
