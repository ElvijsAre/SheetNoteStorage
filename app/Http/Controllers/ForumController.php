<?php

namespace App\Http\Controllers;

//use App\Http\Requests;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;


class ForumController extends Controller
{

    /**
     * Function for getting all availabel categories for posts.
     * 
     * @param Request $request
     * @return type
     */
    
    
    public function getPost(Request $request)
    {
        
        if ($request->user()) 
            {
            
                $categories = Category::all();
                return view('post', compact('categories'));
            
            }
        else
        {
            return view('auth/login');
        }
        
    }
    /*
    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->only('title', 'text');
        $post = Post::find($id);
        $post->update($data);
        return \Redirect::route('edit', $id);
    }
    public function destroy($id)
    {
        Post::destroy($id);
        return \Redirect::to('/');
    }
    */
    public function postPost(CreatePostRequest $request)
    {
        
        //dd($request,$request['title'],$request['text']);
        
        $post = new Post();
        
        //$post->title = $request['title'];
        //$post->text = $request['text'];
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category;
        $post->title = $request->title;
        $post->text = $request->text;
        
        $post->save();
        
        return redirect('/');
         
    }
    
    public function getEdit($id)
    {
        return View::make('post.edit')
                ->with('title', 'Edit Post')
                ->with('title', Post::find($id));
    }
}
