<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use Image;
// use App\Category;
use App\Hamt;


class HamtController extends Controller
{

// add Product 
    public function addHamt(Request $request) {
        
        if($request->isMethod('post')){
   
            $data = $request->all();
            
                $hamt = new Hamt;
   
                $hamt->link = $data['link'];
               
                if(empty($data['link'])){
                   $hamt->link = '';
                }else {
                   $hamt->link = $data['link'];
                }
              
                // upload image
                if($request->hasFile('image')){
                    $image_tmp = Input::file('image');
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $filename =  rand(111, 99999).".".$extension;
                        $large_image_path = 'images/backend_images/hamts/large/'.$filename;
                        $medium_image_path = 'images/backend_images/hamts/medium/'.$filename;
                        $small_image_path = 'images/backend_images/hamts/small/'.$filename;

                        // resize image
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                        //store image name in products table
                       $hamt->image = $filename;
                    }
                }
                $hamt->save();
            return redirect('/admin/view-hamts')->with('flash_message_success', 'Амжилттай нэмэгдлээ');
        }
            return view('admin.hamts.add_hamt');
    }



// edit 
    public function editHamt(Request $request, $id=null){
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
                    $large_image_path = 'images/backend_images/hamts/large/'.$filename;
                    $medium_image_path = 'images/backend_images/hamts/medium/'.$filename;
                    $small_image_path = 'images/backend_images/hamts/small/'.$filename;

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

            Hamt::where(['id'=>$id])->update([
                'link' =>$data['link'],
                'image'  => $filename
                ]);
                return redirect()->back()->with('flash_message_success','Амжилттай шинэчлэгдлээ');
            }
            // get details
           $hamtDetails = Hamt::where(['id'=>$id])->first();

        // cat dropdown end
        return view('admin.hamts.edit_hamt')->with(compact('hamtDetails'));
    }

// view hamts
    public function viewHamts(Request $request){
       $hamts = Hamt::get();

        return view('admin.hamts.view_hamts')->with(compact('hamts'));
    }

// delete hamt image
    public function deleteHamtImage($id=null) {
        // get post image name
        $hamtImage = Hamt::where(['id'=>$id])->first();

        // Get Post image Paths
        $large_image_path = 'images/backend_images/hamts/large/';
        $medium_image_path = 'images/backend_images/hamts/medium/';
        $small_image_path = 'images/backend_images/hamts/small/';

        // Delete large image if not exists in folder
        if(file_exists($large_image_path.$hamtImage->image)){
            unlink($large_image_path.$hamtImage->image);
        }
        if(file_exists($medium_image_path.$hamtImage->image)){
            unlink($medium_image_path.$hamtImage->image);
        }
        if(file_exists($small_image_path.$hamtImage->image)){
            unlink($small_image_path.$hamtImage->image);
        }

        Hamt::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success', 'Зураг устгагдлаа');
        }

    public function deleteHamt($id=null) {
        Hamt::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success', 'Нийтлэл устгагдлаа');
    }

}