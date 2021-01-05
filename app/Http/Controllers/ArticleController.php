<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;

class ArticleController extends Controller
{

    public function index()
    {
        if(request('tag')){
            $article = Tag::where('name',request('tag'))->firstOrFail()->articles;
        }
        else{
            $article = Article::latest()->get();
        }

        return view('article.index',compact('article'));
    }

    /**
     * Show the form for creating a new resource. 
     */
    public function create()
    {
        return view('article.create',['tags' => Tag::all()]);
    }

    /**
     * Store a newly created resource in storage. 
     */
    public function store()
    {
        dd(request()->all());
        Article::create(request()->validate([
            'title'      => 'required',
            'excert'  => 'required',
            'body'   => 'required'
        ]));
    
        return redirect(route('article.index'));
    }

    /**
     * Display the specified resource. 
     */
    public function show(Article $show)
    {
        return view('article.show',compact('show'));
    }

    /* Show the form for editing the specified resource. */
    public function edit(Article $edit)
    {
        return view('article.edit',compact('edit'));
    }

    /**  Update the specified resource in storage. */
    public function update(Article $id)
    {
        $id->update(request()->validate([
            'title'      => 'required',
            'excert'  => 'required',
            'body'   => 'required'
        ]));
        
        return redirect(route('article.index'));
    }
}
