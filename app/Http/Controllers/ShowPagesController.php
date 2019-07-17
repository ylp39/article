<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ShowPagesController extends Controller
{
    public function show(Article $article)
    {
        $wxh = 'asd';
        return  view('pages.show', compact('article','wxh'));
    }
}
