<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Auth;

class PostController extends Controller {

      public function dashboard(){
        
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('dashboard', [
            'posts' => $posts]);
    }

public function postCreatePost(Request $request){ 
    //Validation
    $this->validate($request, [
        'body' => 'required|max:1000'
    ]);
    $post = new Post();
    $post->body = $request['body'];
    $message = "There was an error";
    if ($request->user()->posts()->save($post)) {
        $message = "Post was successfully created";
    return redirect()->route('dashboard')->with(['message' => $message]);
}
    }
    public function getDeletePost($post_id)
    {
        $post = Post::where('id', $post_id)->first();
        if (Auth::user() != $post->user) {
            return redirect()->back();
        }
        $deleted = $post->delete();
        if ($deleted) {
        return redirect()->route('dashboard')->with(['message'=> 'Successfully deleted']);
    } 
        return redirect()->route('dashboard')->with(['message'=> 'Ugh, something went wrong and the post wasn\'t deleted']);
    }
    
    public function postEditPost(Request $request) {
        $this->validate($request, [
        'body' => 'required'
        ]);
        $post = Post::find($request['postId']);
         if (Auth::user() != $post->user) {
            return redirect()->back();
        }
        if (!is_null($post)) { 
        $post->body = $request['body'];
        $post->update();
        return response()->json(['new_body' => $post->body], 200);
    }
    }
}