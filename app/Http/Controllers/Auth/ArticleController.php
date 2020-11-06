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
}