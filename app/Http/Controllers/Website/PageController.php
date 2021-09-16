<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting;
use App\Models\Frontend\About;
use App\Models\Frontend\Policy;
use App\Models\Frontend\Term;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $about = About::first();
        if($about->status != 'active') {
            return redirect()->route('web');
        }
        return view('website.page.about',['page' => $about->title],compact('about'));
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('website.page.contact',['page' => "Contact Us"],compact('setting'));
    }

    public function term()
    {
        $term = Term::first();
        if($term->status != 'active') {
            return redirect()->route('web');
        }
        return view('website.page.term',['page' => "Kebijakan Penggunaan"],compact('term'));
    }

    public function policy()
    {
        $policy = Policy::first();
        if($policy->status != 'active') {
            return redirect()->route('web');
        }
        return view('website.page.policy',['page' => "Policy"],compact('policy'));
    }
}
