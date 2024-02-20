<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index()
    {
        $all_news = Post::orderBy('created_at', 'desc')->skip(0)->take(10)->get();

        return view('_statistic.main_list');
    }


    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $latests = Post::orderBy('created_at', 'desc')->skip(0)->take(10)->get();


        return view('_news.content', $latests);
    }
}
