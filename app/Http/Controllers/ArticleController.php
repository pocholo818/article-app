<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $articles = Article::paginate(2);
        return view('home')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Article::create($input);
        return redirect('article')->with('flash_message', 'Article Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $articles = Article::find($id);
        return view('article.show')->with('articles', $articles);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $articles = Article::find($id);
        return view('article.edit')->with('articles', $articles);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $articles = Article::find($id);
        $input = $request->all();
        $articles->update($input);
        return redirect('article')->with('flash_message', 'Article Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Article::destroy($id);
        return redirect('article')->with('flash_message', 'Article Deleted!');
    }
}
