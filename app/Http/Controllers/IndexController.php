<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Banners;
use App\Info;
use DB;

class IndexController extends Controller
{
    public function Index(){

        $banners = Banners::get(); 

        $infos = Info::get();    
        
        $urlagArgaHem_big= DB::table('posts')->where('category_id',5)->where('status','1')->take(1)->get();
        
        $products= DB::table('products')->where('status','1')->take(8)->orderByRaw('updated_at - created_at ASC')->get();
        $posts   = DB::table('posts')->where('status','1')->take(8)->orderByRaw('updated_at - created_at ASC')->get();

        // $urlagArgaHem_s= DB::table('posts')->where('category_id',5)->where('status','1')->skip(1)->take(5)->get();
        // $tolAjluud= DB::table('posts')->where('category_id',3)->get();
        // $uilBaig_s= DB::table('posts')->where('category_id',4)->get();
        // $videoMedee_s= DB::table('posts')->where('category_id',6)->get();
        // $photoMedee_s= DB::table('posts')->where('category_id',2)->get();


        $hamts = DB::table('hamts')->get();

        $frontsetup = DB::table('setups')->where('id',1)->first();

        return view('index')->with(compact(
            'urlagArgaHem_big',
            
            // 'urlagArgaHem_s',
            // 'tolAjluud',
            // 'uilBaig_s',
            // 'videoMedee_s',
            // 'photoMedee_s',

            'products',
            'posts',

            'banners',
            'frontsetup',
            'hamts',
            'infos'
        ));
    }

    // function fetch_data(Request $request)
    // {
    //  if($request->ajax())
    //     {
    //         $allPost = DB::table('Post')->paginate(6);
    //         return view('index')->with('allPost',$allPost)->render();
    //     }
    // }

}
