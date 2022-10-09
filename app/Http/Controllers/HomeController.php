<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::All();
        $posts = Post::when(request('category_id'), function ($query) {
            $query->where('category_id', request('category_id'));
            })
            ->latest()
            ->paginate(4);

        return view('home', compact('categories', 'posts'));
    }
}
