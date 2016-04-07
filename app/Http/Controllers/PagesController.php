<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get(); 
        return view('welcome', compact('posts'));
    }
}
