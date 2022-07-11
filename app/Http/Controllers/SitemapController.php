<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitemapController extends Controller
{
    
    public function index()
    {
    	$posts = DB::table('posts')->orderBy('created','DESC')->get();
        return view('sitemap', compact('posts'));
    }

    
}
