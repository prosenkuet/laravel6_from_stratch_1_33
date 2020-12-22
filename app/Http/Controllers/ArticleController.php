<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        if(request('tag')){
            $articles = Tag::where('name',request('tag'))->firstOrFail()->article;
        }else{
            $articles = Article::all();
        }
        return view('article.index',['articles'=>$articles]);
    }

    public function show(Article $article){
        return view('article.show',['article'=>$article]);
    }

    public function create(){

        return view('article.create',[
            'tags'=>Tag::all()
        ]);
    }

    public function store(){
        $this->validateArticle();

        $article = new Article(request(['title','body','excerpt']));
        $article->user_id = 2;
        $article->save();

        $article->tags()->attach(request('tags'));

        return redirect('/article');
    }

    public function edit(Article $article){
        return view('article.edit', compact('article'));
    }

    public function update(Article $article){
        $article->update($this->validateArticle());
        return redirect(route('article.show', $article));
    }

    public function validateArticle(){
        return request()->validate([
            'title'=> 'required',
            'excerpt'=> 'required',
            'body'=> 'required',
            'tags'=> 'exists:tags,id'
        ]);
    }
}
