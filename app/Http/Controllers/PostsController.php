<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use DB;

class PostsController extends Controller
{
    public function show($slug) {

        return view('post',[
            'post' => Post::where('slug',$slug)->firstOrFail()
        ]);
    }
}
