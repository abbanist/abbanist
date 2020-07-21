<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use Image;
use App\Banners;

class BannerController extends Controller
{

     public function addBanner(Request $request) {

        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data);  die;
               $banner = new Banners;
             
               // 1   Image
                if($request->hasFile('image')){
                    $image_tmp = Input::file('image');
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $filename =  rand(111, 99999).".".$extension;
                        $large_image_path = 'images/backend_images/banners/large/'.$filename;
                        $medium_image_path = 'images/backend_images/banners/medium/'.$filename;
                        $small_image_path = 'images/backend_images/banners/small/'.$filename;

                        // resize image
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                        //store image name in products table
                       $banner->image = $filename;
                    }
                }

             
                if(empty($data['status'])){
                    $status='0';
                }else{
                    $status='1';
                }
				
				

                $banner->status =   $status;
                $banner->title =        $data['title'];
                $banner->description =  $data['description'];
                $banner->link =         $data['link'];
                $banner->button_txt =         $data['button_txt'];


                if(empty($data['image'])) { 
                    $banner->image = ''; 
                }
              if(empty($data['title'])) { 
                    $banner->title = ''; 
                }
              if(empty($data['description'])) { 
                    $banner->description = ''; 
                }
              if(empty($data['link'])) { 
                    $banner->link = ''; 
                }
              if(empty($data['button_txt'])) { 
                    $banner->button_txt = ''; 
                }
                

                $banner->save();

            return redirect('/admin/add-banner')->with('flash_message_success', 'Амжилттай нэмэгдлээ');
        }
            return view('admin.banners.add_banner');
    }


    // view banners
    public function viewBanners(Request $request){
        $banners = Banners::get();

        // foreach($banners as $key => $val){
        //     $category_name = Category::where(['id' => $val->category_id])->first();
        //     $banners[$key]->category_name = $category_name->name;
        // }
        // $banners = json_decode(json_encode($banners));

        // $products = Product::get();
        // foreach($products as $key => $val){
        //     $category_name = Category::where(['id' => $val->category_id])->first();
        //     $products[$key]->category_name = $category_name->name;
        // }
        // $products = json_decode(json_encode($products));

        return view('admin.banners.view_banners')->with(compact('banners'));
    }



    // edit 
    public function editBanner(Request $request, $id=null){
        if($request->isMethod('post')){
            // getting info from user
            $data = $request->all();

            if(empty($data['link'])){
                $data['link'] = '';
            }
			
			

            if($request->hasFile('image')){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename =  rand(111, 99999).".".$extension;
                    $large_image_path = 'images/backend_images/banners/large/'.$filename;
                    $medium_image_path = 'images/backend_images/banners/medium/'.$filename;
                    $small_image_path = 'images/backend_images/banners/small/'.$filename;

                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } else if(!empty($data['current_image'])){
                $filename = $data['current_image'];
            } else {
                $filename = '';
            }

            if(empty($data['status'])){
                $status='0';
            }else{
                $status='1';
            }
				 
				if(empty($data['link'])){
                    $bannerlink = "";
                 }else {
                    $bannerlink = $data['link'];
                 }

                 if(empty($data['title'])){
                    $bannertitle = "";
				 }else {
				 	$bannertitle = $data['title'];
				 }
				 
				 
				 if(empty($data['description'])){
                    $bannerdescription = "";
                 }else{
                    $bannerdescription = $data['description'];
                 }

                  if(empty($data['button_txt'])){
                    $bannerbutton_txt = "";
				 }else{
				 	$bannerbutton_txt = $data['button_txt'];
				 }

            Banners::where(['id'=>$id])->update([
                'status'=>$status,
                'title' =>$bannertitle,
                'link' =>$bannerlink,
                'button_txt' =>$bannerbutton_txt,
                'description' =>$bannerdescription,
                'image'  => $filename
                ]);

                return redirect()->back()->with('flash_message_success','Амжилттай шинэчлэгдлээ');
            }

            // get details
           $bannerDetails = Banners::where(['id'=>$id])->first();

        // cat dropdown end
        return view('admin.banners.edit_banner')->with(compact('bannerDetails'));
    }


    // delete product image
    public function deleteBannerImage($id=null) {

        // get post image name
        $bannerImage = Banners::where(['id'=>$id])->first();

        // Get Post image Paths
        $large_image_path = 'images/backend_images/banners/large/';
        $medium_image_path = 'images/backend_images/banners/medium/';
        $small_image_path = 'images/backend_images/banners/small/';

        // Delete large image if not exists in folder
        if(file_exists($large_image_path.$bannerImage->image)){
            unlink($large_image_path.$bannerImage->image);
        }
        if(file_exists($medium_image_path.$bannerImage->image)){
            unlink($medium_image_path.$bannerImage->image);
        }
        if(file_exists($small_image_path.$bannerImage->image)){
            unlink($small_image_path.$bannerImage->image);
        }

        Banners::where(['id'=>$id])->update(['image'=>'']);
            return redirect()->back()->with('flash_message_success', 'Зураг устгагдлаа');
    }

    public function deleteBanner($id=null) {
        Banners::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success', 'Нийтлэл устгагдлаа');
    }


}