<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\PostRequest;
use App\Queries\API\AllPostQuery;
use App\Queries\API\GetPostQuery;
use App\Queries\API\SearchPostQuery;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\QueryBus;

class PostAPIController extends Controller
{
    public function __construct(protected QueryBus $QueryBus){}

    public function GetAll(): JsonResponse
    {
        $Query = new AllPostQuery();
        return $this->QueryBus->handle($Query);
    }

    public function GetPost(Request $request): JsonResponse
    {
        $Data = $request->only('id');
        $Query = new GetPostQuery($Data);
        return $this->QueryBus->handle($Query);

    }

    public function SearchPost(PostRequest $request): JsonResponse
    {

        $Data = $request->only('title', 'id');
        $Query = new SearchPostQuery($Data);
        return $this->QueryBus->handle($Query);


    }
}
