<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlessController extends Controller
{
    public function articless($page){
    	return "Halaman artikel ini dengan id " .$page;
    }
}
public function __construct()
    {
        $this->middleware('auth');
    }