<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function all_blogs()
    {
       
        $posts_all= posts::all();
        //$new = News::orderBy('created_at', 'desc')->paginate(4);

        return view('Home.all_blogs', compact('posts_all',));
 

    }
}
