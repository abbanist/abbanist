<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use DB;

class PageController extends Controller
{
    public function page(Page $Page)
    {
    	return view('user.page',compact('Page'));
    }

    public function getContact()
    {
        
        $contactInfo = Page::where('id', 17)->first();
    	
    	return view('user.contact')->with(compact('contactInfo'));
    }

    public function getBlogGrid()
    {
        $posts = DB::table('posts')->get();
        return view('user.blog_grid')->with(compact('posts'));
    }
    
    public function getProductGrid()
    {
    	$products = DB::table('products')->where('status', 1)->get();
        return view('user.products_grid')->with(compact('products'));
    }


}
