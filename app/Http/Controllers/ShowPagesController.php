<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Wxh;
use Illuminate\Support\Str;

class ShowPagesController extends Controller
{
    public function show(Article $article)
    {
        $WX = Wxh::where('use', 1)->first();
        $wxh = $WX->wxh;


        return  view('pages.show', compact('article','wxh'));
    }
}
