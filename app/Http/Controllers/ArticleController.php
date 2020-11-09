<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //

    public function view()
    {
        $article = Articles::find(1);
        echo $article->title;
    }

}
