<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index($header = 'All Article')
    {
        if (request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $header = 'Article in Category: ' . $category->name;
        }

        if (request('author')){
            $author = User::firstWhere('username', request('author'));
            $header = 'Article by Author: ' . $author->name;
        }

        return view('main.article.posts', [
            'title' => 'All Article',
            'active' => 'article',
            'header' => $header,
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)
        ]);
    }

    public function singlePost(Post $post)
    {
        return view('main.article.post', [
            'title' => $post->title,
            'active' => 'article',
            'post' => $post
        ]);
    }
}
