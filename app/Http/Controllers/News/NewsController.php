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
        $sources = $newsapi->getSources('business', 'en', 'us');

        foreach($sources->sources as $source){
            echo $source->name . '<br>';

            echo $source->description . '<br>';
            echo $source->category . '<br>';
            echo "<hr>";
        }
//        dd($sources);
    }
}
