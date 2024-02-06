<?php

namespace App\Repositories\API;



use App\Models\Post;
use App\Queries\API\AllPostQuery;

class AllPostRepository
{
    public function __invoke(AllPostQuery $query)
    {
        return  response()->json(Post::all());

    }
}
