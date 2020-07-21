<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Info;
use Image;

class InfoController extends Controller
{

// add Product 
public function addInfo(Request $request) {
        
    if($request->isMethod('post')){
        $data = $request->all();

        // echo "<pre>"; print_r($data); die;
            $info = new Info;

            $info->title = $data['title'];

            if($request->hasFile('image')){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();

                    $filename =  rand(111, 99999).".".$extension;

                    $large_image_path = 'images/backend_images/infos/large/'.$filename;
                    $medium_image_path = 'images/backend_images/infos/medium/'.$filename;
                    $small_image_path = 'images/backend_images/infos/small/'.$filename;
 
                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
 
                    //store image name in products table
                    $info->image = $filename;
                }
            }

            $info->small_title = $data['small_title'];

            $info->description = $data['description'];

            if(empty($data['small_title'])){
               $info->small_title = '';
            }else {
               $info->small_title = $data['small_title'];
            }
        
            $info->save();
        return redirect('/admin/view-infos')->with('flash_message_success', 'Амжилттай нэмэгдлээ');
    }

    return view('admin.infos.add_info');

}

// edit Product
public function editInfo(Request $request, $id=null){
    if($request->isMethod('post')){
        // getting info from user
        $data = $request->all();

        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename =  rand(111, 99999).".".$extension;
                $large_image_path = 'images/backend_images/infos/large/'.$filename;
                $medium_image_path = 'images/backend_images/infos/medium/'.$filename;
                $small_image_path = 'images/backend_images/infos/small/'.$filename;

                // resize image
                Image::make($image_tmp)->save($large_image_path);
                Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                Image::make($image_tmp)->resize(300,300)->save($small_image_path);
            }
        } else {
            $filename = $data['current_image'];
        }


        if(empty($data['small_title'])){
            $data['small_title'] = '';
        }

        Info::where(['id'=>$id])->update([
            'title'   =>$data['title'],
            'image'         =>$filename,
            'small_title'   =>$data['small_title'],
            'description'   =>$data['description'],
            // 'link'          =>$data['link'],
        ]);
            return redirect()->back()->with('flash_message_success','Амжилттай шинэчлэгдлээ');
        }
        // get details
       $infoDetails = Info::where(['id'=>$id])->first();

    // cat dropdown end
    return view('admin.infos.edit_info')->with(compact('infoDetails'));
}



// view posts
public function viewInfos(Request $request){
   $infos = Info::get();

    // foreach($posts as $key => $val){
    //     $category_name = Category::where(['id'=>$val->category_id])->first();
    //     $posts[$key]->category_name = $category_name->name;
    // }

    return view('admin.infos.view_infos')->with(compact('infos'));
}



// delete product image
public function deleteInfoImage($id=null) {

    // get post image name
    $infoImage = Info::where(['id'=>$id])->first();

    // Get Post image Paths
    $large_image_path = 'images/backend_images/infos/large/';
    $medium_image_path = 'images/backend_images/infos/medium/';
    $small_image_path = 'images/backend_images/infos/small/';


    // Delete large image if not exists in folder
    if(file_exists($large_image_path.$infoImage->image)){
        unlink($large_image_path.$infoImage->image);
    }
    if(file_exists($medium_image_path.$infoImage->image)){
        unlink($medium_image_path.$infoImage->image);
    }
    if(file_exists($small_image_path.$infoImage->image)){
        unlink($small_image_path.$infoImage->image);
    }


    Info::where(['id'=>$id])->update(['image'=>'']);
    return redirect()->back()->with('flash_message_success', 'Зураг устгагдлаа');
    
    }




public function deleteInfo($id=null) {
    Info::where(['id'=>$id])->delete();
    return redirect()->back()->with('flash_message_success', 'Нийтлэл устгагдлаа');
    }


}
