<?php

namespace App\Repositories\API;

use App\Models\Post;
use App\Queries\API\SearchPostQuery;
use Illuminate\Http\JsonResponse;

class SearchPostRepository
{
    public function __invoke(SearchPostQuery $query): JsonResponse
    {
        $id = $query->GetId();
        $title = $query->GetTitle();
        $posts = Post::where('id', 'like', "%$id%")
            ->orWhere('title', 'like', "%$title%")
            ->get();
        return response()->json($posts);

    }

}
