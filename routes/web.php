<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {
$document = YamlFrontMatter::parseFile(
    resource_path('posts/my-fourth-post.html')
); 

ddd($document);

});

Route::get('posts/{post}', function ($slug) {

    $post = Post::find($slug);
    
    return view('post', [
        'post' => post::find($slug)
    ]);

    })->where('post', '[A-z_\-]+');