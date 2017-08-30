<?php

namespace Demo\Http\Controllers;

use Demo\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['except' => ['index', 'show']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:128',
            //'url' => 'required|string|max:32|unique:articles',
            'text' => 'required',
        ]);

        $article = new Article($request->all());

        \Auth::user()->articles()->save($article);

        return redirect('articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:128|unique:articles',
            //'url' => 'required|string|max:32|unique:articles',
            'text' => 'required',
        ]);
        $article->update($request->all());

        redirect('articles');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        redirect('articles');
    }
}
