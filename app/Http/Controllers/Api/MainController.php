<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Post;
use App\Http\Resources\MainResource;
use App\Http\Resources\PostResource;

use App\Models\main;
use Illuminate\Http\Request;

class MainController extends Controller

{
    use ApiResponseTrait;

    public function index()
    {
        $main = main::get();
        return $this->apiResponse($main, 'yes', 200);
    }

    public function store(Request $request)
    {
        $main= main::create($request->all());
        if($main){
            return $this->apiResponse(new MainResource($main),'the post save',201);
        }
        return $this->apiResponse(null,'the post not save',400);
    }
}
