<?php

namespace App\Http\Controllers;

use App\Models\FlipBook;
use App\Models\Manga\Komik;
use App\Models\User;
use App\Models\Video\Video;
use App\Models\Website\Viewer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'majalah'   => FlipBook::count(),
            'komik'     => Komik::count(),
            'video'     => Video::count(),
            'viewer'    => Viewer::whereDate("created_at", Carbon::today())->count()
        ];
        return view('admin.index', ["page" => "Admin Dashboard"], compact('data'));
    }

    public function bycontent()
    {
        $viewer['majalah']      = Viewer::selectRaw('LEFT(created_at,10) as date, count(id) as total')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->groupBy('date')->get();
        $viewer['mobile']       = Viewer::selectRaw("count(id) as total")->where("device","Android")->groupBy('device')->get();
        $viewer['windows']      = Viewer::selectRaw("count(id) as total")->where("device","Windows")->groupBy('device')->get();

        $viewer['mjlh']      = Viewer::selectRaw("count(id) as total")->where("type","majalah")->groupBy('type')->get();
        $viewer['video']        = Viewer::selectRaw("count(id) as total")->where("type","komik")->groupBy('type')->get();
        $viewer['komik']        = Viewer::selectRaw("count(id) as total")->where("type","video")->groupBy('type')->get();
        return response()->json($viewer);
    }

    public function profile()
    {
        return view('admin.profile', ["page" => "Update Profile"]);
    }

    public function profileStore(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required|unique:users,email,' . Auth()->user()->id,
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

        $data = User::findOrFail(Auth()->user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $request->photo ? $data->photo = $this->uploadImage($request, 'photo', 'user') : null;
        $request->banner ? $data->banner = $this->uploadImage($request, 'banner', 'user') : null;
        return $this->saveData($data);
    }

    public function changePass(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'password' => 'required',
            'confirm'   => 'required'
        ]);

        if ($validate->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'errors' => $validate->errors(),
                    'message' => 'error'
                ]);
            }
        }

        if ($request->password != $request->confirm) {
            return response()->json([
                'errors' => "Password & Konfirmasi Password harus sama",
                'message' => 'password'
            ]);
        }

        $data = User::findOrFail(Auth()->user()->id);
        $data->password = Hash::make($request->password);
        return $this->saveData($data);
    }
}
