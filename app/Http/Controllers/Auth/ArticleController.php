<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlessController extends Controller
{
    public function articless($page)
    {
        $article = Artilce::all();
    	return view ('manage', ['article' => $article]);
    }
    public function index(){
        $article = Article::all();
        return view('manage');
    }
    public function add(){
        return view('addarticle');
    }
    public function create(Request $request){
        Article::create([
        'title' => $request->title,
        'content' => $request->content,
        'featured_image' => $request->image
    ]);
        return redirect('/manage');
    }
    public function __construct(){
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
        if(Gate::allows('manage-articles')) return $next($request);
        abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    } 
    public function update($id, Request $request){
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        if($article->featured_image &&  file_exists(storage_path('app/public/' . $article->featured_image))){
            \Storage::delete('public/'.$article->featured_image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $article->featured_image = $image_name;
        $article->save();
        return redirect('/manage');
    }
    public function cetak_pdf(){
        $article = Article::all();
        $pdf = PDF::loadview('articles_pdf',['article'=>$article]);
        return $pdf->stream();
       }
}