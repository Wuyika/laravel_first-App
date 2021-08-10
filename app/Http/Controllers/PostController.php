<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $id = 7;
        $posts = DB::table('posts')
        ->insert([
            'title' => 'Hello',
            'body' => 'what'
        ]);
        

        dd($posts);
    }
}
