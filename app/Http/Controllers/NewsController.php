<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
            $all_news       = Post::orderBy('created_at', 'desc')->skip(0)->get();
            $random_news    = Post::inRandomOrder()->take(5)->get();
            $categories     = Category::all();
            $categoriesWithCount = Category::withCount('posts')->orderByDesc('posts_count')->get();

            // var_dump($all_news);

            return view('_news.main-list', compact('all_news', 'random_news', 'categoriesWithCount'));
    }


    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $random_news = Post::inRandomOrder()->take(5)->get();

        $title  = $post->title;
        $desc   = $post->excerpt;
        $image  = $post->image;

        // dd($post);
        return view('_news.single-post', compact('post', 'random_news', 'title', 'desc', 'image'));
    }
}
