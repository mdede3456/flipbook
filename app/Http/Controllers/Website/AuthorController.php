<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $author = User::where("role","admin")->get();
        return view("website.author.index",['page' => "Top Author"],compact('author'));
    }   

    public function detail($id)
    {
        $author = User::findOrFail($id);
        return view('website.author.detail',['page' => "Author - " . $author->name],compact('author'));
    }
}
