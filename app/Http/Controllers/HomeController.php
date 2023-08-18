<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::where('status',1)->paginate('10');

        return view('index',compact('articles'));
    }
}
