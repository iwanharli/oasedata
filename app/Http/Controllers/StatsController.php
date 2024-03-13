<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use TCG\Voyager\Models\Category;

use Illuminate\Http\Request;

class StatsController extends Controller
{
	public function index()
	{
		$statistics = Statistic::orderBy('created_at', 'desc')->paginate(5);
		$randomStats = Statistic::inRandomOrder()->take(5)->get();

		return view('_statistic.main_list', compact('statistics', 'randomStats'));
	}


	public function show($slug)
	{
		$statistic = Statistic::where('slug', $slug)->first();
		$randomStats = Statistic::whereNot('slug', $slug)->inRandomOrder()->take(5)->get();

		return view('_statistic.single-post', compact('statistic', 'randomStats'));
	}
}
