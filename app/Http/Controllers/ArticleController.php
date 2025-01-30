<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke()
    {
        return view('articles', ['articles' => Article::query()->paginate(5)]);
    }
}
