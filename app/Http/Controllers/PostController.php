<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Validation\Rule;


class PostController extends Controller
{
    public function index()
    {
                
        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate(6)->withQueryString()       
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    protected function getPosts()
    {
        return;
    }

    public function create()
    {
  
        return view('admin.posts.create');
    }

    public function store()
    {
  
        $attributes =request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'excerpt' => 'required',
            'body' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
        
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        
        Post::create($attributes);

        return redirect('/');

    }
}
