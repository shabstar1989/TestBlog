<?php

namespace App\Repositories\API;


use App\Models\Post;
use App\Queries\API\GetPostQuery;
use Symfony\Component\HttpFoundation\JsonResponse;

class GetPostRepository
{
    public function __invoke(GetPostQuery $query): JsonResponse
    {
        $Posts = Post::find($query->GetId());
        return response()->json($Posts);

    }

}
