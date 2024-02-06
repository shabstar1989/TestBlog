<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use jcobhams\NewsApi\NewsApi;

class NewsController extends Controller
{
    public function GetNews()
    {
        $newsapi = new NewsApi('8d05e3a60b2f4ba1a440f16a6b303040');
        $all_articles = $newsapi->getEverything(q:'apple', sources:'bbc-news', language:'en', page_size:9, page:2);
//        $all_articles = $newsapi->getEverything($q, $sources, $domains, $exclude_domains, $from, $to, $language, $sort_by,  $page_size, $page);

        dd($all_articles);

        foreach($all_articles->articles as $article){
            echo "<img src='$article->urlToImage' width='100px'><br>";
            echo $article->author . '<br>';
            echo $article->title . '<br>';
            echo $article->description . '<br>';
            echo $article->url . '<br>';
            echo $article->publishedAt . '<br>';
            echo $article->content . '<br>';
            echo "<hr>";
        }
//        dd($sources);
    }
}
