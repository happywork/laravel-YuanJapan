<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::all();        
        return view('article.articles')->with('articles', $articles);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('article.newarticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'article_name'=>'required',
        'author'=> 'required',
        'english_text' => 'required',
        'japanese_text' => 'required',
        'russian_text' => 'required'
      ]);

      $article = new Article([
        'article_name' => $request->get('article_name'),
        'author'=> $request->get('author'),        
        'english_text'=> $request->get('english_text'),
        'japanese_text'=> $request->get('japanese_text'),
        'russian_text'=> $request->get('russian_text')
      ]);
      
      $article->save();
      return redirect('/admin/article')->with('success', 'Article has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $article = Article::findOrFail($id);

        return view('article.editarticle')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article = Article::findOrFail($id);        
        return view('article.updatearticle')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
      $request->validate([
        'article_name'=>'required',
        'author'=> 'required',
        'english_text' => 'required',
        'japanese_text' => 'required',
        'russian_text' => 'required'
      ]);
      $article = Article::find($id);
      $article->article_name=$article->article_name;
      $article->author=$article->author;      
      $article->english_text=$article->english_text;
      $article->japanese_text=$article->japanese_text;
      $article->russian_text=$article->russian_text;
      $article->save();
      return redirect('/admin/article')->with('success', 'Article has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
     $article = Article::find($id);
     $article->delete();

     return redirect('/admin/article')->with('success', 'Stock has been deleted Successfully');
    }
}
