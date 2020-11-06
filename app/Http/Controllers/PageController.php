<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
    	return ('HelloWorld');
    }
    public function about(){
    	return ('daniel bagus christyanto <br> 1931710156');
    }
    public function articless(){
    	return ('Halaman artikel ini dengan id ') .$page;
    }
}
