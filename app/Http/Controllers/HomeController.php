<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $latest_news = Post::orderBy('created_at', 'desc')->skip(0)->take(3)->get();
        $latest_news2 = Post::orderBy('created_at', 'desc')->offset(3)->limit(3)->get();

        // $posts = Post::with('author')->get();

        return view('home', compact('latest_news', 'latest_news2'));
    }

    public function news($slug)
    {
        $latest = Post::where('slug', '=', $slug)->firstOrFail();

        return view('news', compact('latest'));
    }
}
