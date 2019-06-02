<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function postsByCategory($category){
        $posts = DB::table('articles')
                            ->select('id', 'title', 'category', 'image', 'body', 'created_at', 'author')
                            ->where('category', $category)
                            ->orderBy('id', 'desc')
                            ->get();
        
        $date = DB::table('articles')
                ->select(DB::raw('date(created_at) as date'))
                ->get();
        return view('res.resource', ['posts' => $posts, 'category' => $category]);
    }

    public function showPost($category, $id){
        $getPost = DB::table('articles')
                        ->select('id', 'title', 'category', 'image', 'body', 'created_at', 'author')
                        ->where('id', $id)
                        ->get();
        return view('res.post', ['post' => $getPost]);
    }
}
