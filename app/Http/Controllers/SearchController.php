<?php

namespace App\Http\Controllers;

//use App\Http\Requests;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;


class SearchController extends Controller
{
    public function index()
    {
        $search = \Request::get('search'); //<-- we use global request to get the param of URI
 
        $posts = Post::where('title','like','%'.$search.'%')
            ->orWhereHas('category', function($query)  use ($search)
            {
                $query->where('name', 'like', '%'.$search.'%');
            })
            ->orWhereHas('user', function($query)  use ($search)
            {
                $query->where('name', 'like', '%'.$search.'%');
            })
            ->orderBy('title')
            ->paginate(20);
 
        return view('search',compact('posts'));
}
}