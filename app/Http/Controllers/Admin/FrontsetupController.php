<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Session;
use Image;
use App\Setup;

class FrontsetupController extends Controller
{
    public function Frontsetup(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();          

 // logo
            if($request->hasFile('image')){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){

                    $extension = $image_tmp->getClientOriginalExtension();
                    
                    $logoname =  rand(111, 99999).".".$extension;

                    $large_image_path = 'images/frontend_images/setups/large/'.$logoname;
                    $medium_image_path = 'images/frontend_images/setups/medium/'.$logoname;
                    $small_image_path = 'images/frontend_images/setups/small/'.$logoname;

                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } else if(!empty($data['current_image'])){
                $logoname = $data['current_image'];
            } else {
                $logoname = '';
            }

// favicon
            if($request->hasFile('favicon')){
                $image_tmp = Input::file('favicon');
                if($image_tmp->isValid()){

                    $extension = $image_tmp->getClientOriginalExtension();
                    
                    $favicon =  rand(111, 99999).".".$extension;

                    $large_image_path = 'images/frontend_images/setups/large/'.$favicon;
                    $medium_image_path = 'images/frontend_images/setups/medium/'.$favicon;
                    $small_image_path = 'images/frontend_images/setups/small/'.$favicon;

                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } else if(!empty($data['current_favicon'])){
                $favicon = $data['current_favicon'];
            } else {
                $favicon = '';
            }

// promo background
            if($request->hasFile('order_promo_bg')){
                $image_tmp = Input::file('order_promo_bg');
                if($image_tmp->isValid()){

                    $extension = $image_tmp->getClientOriginalExtension();
                    
                    $order_promo_bg_name =  rand(111, 99999).".".$extension;

                    $large_image_path = 'images/frontend_images/setups/large/'.$order_promo_bg_name;
                    $medium_image_path = 'images/frontend_images/setups/medium/'.$order_promo_bg_name;
                    $small_image_path = 'images/frontend_images/setups/small/'.$order_promo_bg_name;

                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } 
             else if(!empty($data['current_order_promo_bg'])){
                $order_promo_bg_name = $data['current_order_promo_bg'];
            } else {
                $order_promo_bg_name = '';
            }
            
            
            
            // nuur zurag 
            if($request->hasFile('leftimage')){
                $image_tmp = Input::file('leftimage');
                if($image_tmp->isValid()){

                    $extension = $image_tmp->getClientOriginalExtension();
                    
                    $leftimage =  rand(111, 99999).".".$extension;

                    $large_image_path = 'images/frontend_images/setups/large/'. $leftimage;
                    $medium_image_path = 'images/frontend_images/setups/medium/'. $leftimage;
                    $small_image_path = 'images/frontend_images/setups/small/'. $leftimage;

                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } 
             else if(!empty($data['current_image_left'])){
                $leftimage  = $data['current_image_left'];
            } else {
                $leftimage  = '';
            }
            
            

            Setup::where(['id'=>1])->update([
                'logo'=>$logoname,
                'favicon'=>$favicon,
                
                'site_title'=>$data['site_title'],

                'facebook_page'=>$data['facebook_page'],
                'banner_sidebar'=>$data['banner_sidebar'],
                

                'leftimage'=>$leftimage,
                

                // 'video_embed'=>$data['video_embed'],
                'video_description'=>$data['video_description'],


                'product_title'=>$data['product_title'],


                'blog_title'=>$data['blog_title'],


                'partner_title'=>$data['partner_title'],
                'partner_description'=>$data['partner_description'],
                

                'order_promo_bg'=>$order_promo_bg_name,
                'order_promo_title'=>$data['order_promo_title'],
                'order_promo_btn_text'=>$data['order_promo_btn_text'],
                'order_promo_btn_link'=>$data['order_promo_btn_link'],


                'facebook'=>$data['facebook-link'],
                'twitter'=>$data['twitter-link'],
                'youtube'=>$data['youtube-link'],
                'googleplus'=>$data['googleplus-link'],
                'instagram'=>$data['instagram-link'],


                'footer_address'=>$data['footer_address'],
            ]);
            
            return redirect()->back()->with('flash_message_success', 'Амжилттай шинэчлэгдлээ');
        }

        $setupDetails = Setup::where(['id'=>1])->first();
        return view('admin.frontend_setup')->with(compact('setupDetails'));
    }

    public function deleteLogo() {
        Setup::where(['id'=>1])->update(['logo'=>'']);
        return redirect()->back()->with('flash_message_success', 'Устгагдлаа');
    }

    public function deleteFavicon() {
        Setup::where(['id'=>1])->update(['favicon'=>'']);
        return redirect()->back()->with('flash_message_success', 'Устгагдлаа');
    } 

    public function deletebannersidebar() {
        Setup::where(['id'=>1])->update(['banner_sidebar'=>'']);
        return redirect()->back()->with('flash_message_success', 'Устгагдлаа');
    } 



    

    public function deletePromoBg() {
        Setup::where(['id'=>1])->update(['order_promo_bg'=>'']);
        return redirect()->back()->with('flash_message_success', 'Устгагдлаа');
    }
}