<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Post;
use App\Models\BecomeTraderPost;

class EducationPageController extends Controller
{
    public function index(){
        // $education = Page::with('pagePost')->get();
        $education = Post::with('pageTitle')->get(); 
        return response()->json($education);
    }

    public function traderPost(){
        $traderPost = BecomeTraderPost::all();

        return response()->json($traderPost);
    }


}
