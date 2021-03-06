<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function postsByCategory($category){
        $latest = DB::table('articles')
                ->latest()
                ->take(3)
                ->get();

        $posts = DB::table('articles')
                            ->select('id', 'title', 'category', 'image', 'body', 'created_at', 'author')
                            ->where('category', $category)
                            ->orderBy('id', 'desc')
                            ->paginate(10);
        return view('res.resource', ['posts' => $posts, 'category' => $category, 'latest' => $latest]);
    }

    public function postsByTag($tag){
        $tags = DB::table('articles')
                            ->select('id', 'title', 'category', 'image', 'body', 'created_at', 'author')
                            ->where('tag', 'like', '%' . $tag . '%')
                            ->orderBy('id', 'desc')
                            ->get();
        return view('res.resource', ['posts' => $posts, 'tags' => $tags, 'latest' => $latest]);
    }

    public function showPost($category, $id){
        $latest = DB::table('articles')
                ->latest()
                ->take(3)
                ->get();
        $getPost = DB::table('articles')
                        ->select('id', 'title', 'category', 'image', 'tags', 'body', 'created_at', 'author')
                        ->where('id', $id)
                        ->get();
        return view('res.post', ['post' => $getPost, 'latest' => $latest]);
    }
}
