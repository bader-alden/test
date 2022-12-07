<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\comentes;
use App\Models\main;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    use ApiResponseTrait;
    public function index()
    {
       
        $comments=comentes::get();
        return $this->apiResponse($comments, 'yes', 200);
    }

    public function show($id)
    {
        $comments=comentes::find($id);

        return $this->apiResponse ($comments, 'ok', 200);
    }

}
