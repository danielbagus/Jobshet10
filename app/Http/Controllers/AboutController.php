<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about($page){
    	return "daniel bagus Christyanto <br> 1931710156";
    }
}

public function __construct()
    {
        $this->middleware('auth');
    }

