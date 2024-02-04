<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use jcobhams\NewsApi\NewsApi;

class GetNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get News EveryMinutes';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $newsapi = new NewsApi('8d05e3a60b2f4ba1a440f16a6b303040');
        $all_articles = $newsapi->getEverything(q:'apple', language:'en', page_size:9, page:2);
//        dd($all_articles);

        foreach($all_articles->articles as $article){
            $Post = new Post();

            $Post->title = $article->title;
            $Post->author = $article->author;
            $Post->urlToImage = $article->urlToImage;
            $Post->description = $article->description;
            $Post->url = $article->url;
            $Post->content = $article->content;

            $Post->save();
        }
    }
}
