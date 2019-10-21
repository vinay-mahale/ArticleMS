<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    public function index(){
        $articles= Article::paginate(5);
        return view('home',['articles'=>$articles]);
    }

}
