<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;

class PostController extends Controller{
    public function index() {
    $posts=DB::table('posts')->get();
    return view ('posts.index',compact('posts'));    
    }

    public function show($id) {
        $post=Posts::find($id);
        return view('posts.show',compact('post'));
    }
}
