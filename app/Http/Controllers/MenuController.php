<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Menu;
use Image;

class MenuController extends Controller
{
     public function addMenu(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($image_tmp); die;
            $menu = new Menu;

            // upload image
            // if($request->hasFile('imager')){
            //     $image_tmp = Input::file('imager');
            //     if($image_tmp->isValid()){
            //         $extension = $image_tmp->getClientOriginalExtension();
            //         $filename =  rand(111, 99999).".".$extension;
            //         $large_image_path = 'images/backend_images/menus/large/'.$filename;
            //         $medium_image_path = 'images/backend_images/menus/medium/'.$filename;
            //         $small_image_path = 'images/backend_images/menus/small/'.$filename;

            //         // resize image
            //         Image::make($image_tmp)->save($large_image_path);
            //         Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
            //         Image::make($image_tmp)->resize(300,300)->save($small_image_path);

            //         //store image name in products table
            //        $menu->imager = $filename;
            //     }
            // }

            
// *****************

            $menu->parent_id = $data['parent_id'];
            if(empty($data['parent_id'])){
                $data['parent_id'] = '';
            }


// *****************
            
            $menu->menu_name = $data['menu_name'];
            if(empty($data['menu_name'])){
                $data['menu_name'] = '';
            }

// *****************
            if(empty($data['orderm'])){
                $data['orderm'] = '';
            }

            $menu->orderm = $data['orderm'];
            
// *****************

            if(empty($data['menu_url'])){
                $data['menu_url'] = '#';
            }
            $menu->menu_url = $data['menu_url'];


// *****************

            $menu->save();

            return redirect()->back()->with('flash_message_success', 'Цэс нэмэгдлээ');
        }

        $levels = Menu::where(['parent_id'=>0])->get();
        return view('admin.menus.add_menu')->with(compact('levels'));
    }






    public function editMenu(Request $request,$id=null){
        if($request->isMethod('post')){
            $data = $request->all();

        if(empty($data['orderm'])){
            $data['orderm'] = '';
        }

        if(empty($data['menu_name'])){
            $data['menu_name'] = '';
        }

        if(empty($data['menu_url'])){
            $data['menu_url'] = '';
        }

            Menu::where(['id'=>$id])->update([
                'parent_id'=>$data['parent_id'],
                'orderm'=>$data['orderm'],
                'menu_name'=>$data['menu_name'],
                'menu_url'=>$data['menu_url'],
            ]);

            return redirect()->back()->with('flash_message_success', 'Амжилттай шинэчлэгдлээ');
        }

        $menuDetails = Menu::where(['id'=>$id])->first();
        $levels = Menu::where(['parent_id'=>0])->get();
        return view('admin.menus.edit_menu')->with(compact('menuDetails','levels'));
    }

    public function deleteMenu($id = null){
        Menu::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success', 'Устгагдлаа');
    }

    public function viewMenus(){ 
        $menus = Menu::get();
        return view('admin.menus.view_menus')->with(compact('menus'));
    }


    // delete product image
    public function deleteMenuImage($id=null) {

        // get post image name
        $menuImage = Menu::where(['id'=>$id])->first();

        // Get menu image Paths
        $large_image_path = 'images/backend_images/menus/large/';
        $medium_image_path = 'images/backend_images/menus/medium/';
        $small_image_path = 'images/backend_images/menus/small/';

        // Delete large image if not exists in folder
        if(file_exists($large_image_path.$menuImage->imager)){
            unlink($large_image_path.$menuImage->imager);
        }
        if(file_exists($medium_image_path.$menuImage->imager)){
            unlink($medium_image_path.$menuImage->imager);
        }
        if(file_exists($small_image_path.$menuImage->imager)){
            unlink($small_image_path.$menuImage->imager);
        }

        Menu::where(['id'=>$id])->update(['imager'=>'']);
        return redirect()->back()->with('flash_message_success', 'Зураг устгагдлаа');
    }

}



// <?php

// namespace App\Http\Controllers\Admin;

// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
// // use Illuminate\Support\Facades\Input;
// use Auth;
// use Session;
// use Image;
// // use App\Category;
// // use App\Post;
// use App\Menu;

// class MenuController extends Controller
// {
//     public function addMenu(Request $request){
//         if($request->isMethod('post')){

//             $data = $request->all();
//             $menu = new Menu;

//                 // upload image
//                 if($request->hasFile('image')){
//                     $image_tmp = Input::file('image');

//             // echo "<pre>"; print_r($image_tmp); die;

//                     if($image_tmp->isValid()){
//                         $extension = $image_tmp->getClientOriginalExtension();
//                         $filename =  rand(111, 99999).".".$extension;
//                         $large_image_path = 'images/backend_images/posts/large/'.$filename;
//                         $medium_image_path = 'images/backend_images/posts/medium/'.$filename;
//                         $small_image_path = 'images/backend_images/posts/small/'.$filename;

//                         // resize image
//                         Image::make($image_tmp)->save($large_image_path);
//                         Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
//                         Image::make($image_tmp)->resize(300,300)->save($small_image_path);

//                         //store image name in products table
//                        $menu->image = $filename;
//                     }
//                 }
            
// // *****************

//             $menu->parent_id = $data['parent_id'];
            
// // *****************

//             $menu->menu_order = $data['menu_o'];

// // *****************
            
//             $menu->menu_name = $data['menu_name'];

// // *****************

//   $menu->orderm = $data['orderm'];

// // *****************

//             $menu->menu_url = $data['menu_url'];
//             if(empty($data['menu_url'])){
//                 $data['menu_url'] = '#';
//             }

// // *****************

//             $menu->save();

//             return redirect()->back()->with('flash_message_success', 'Цэс нэмэгдлээ');
//         }

//         $levels =    Menu::where(['parent_id'=>0])->get();
//         return view('admin.menus.add_menu')->with(compact('levels'));
//     }




//     public function editMenu(Request $request,$id=null){
//         if($request->isMethod('post')){
//             $data = $request->all();

//              if($request->hasFile('image')){
//                 $image_tmp = Input::file('image');
//                 if($image_tmp->isValid()){
//                     $extension = $image_tmp->getClientOriginalExtension();
//                     $filename =  rand(111, 99999).".".$extension;
//                     $large_image_path = 'images/backend_images/posts/large/'.$filename;
//                     $medium_image_path = 'images/backend_images/posts/medium/'.$filename;
//                     $small_image_path = 'images/backend_images/posts/small/'.$filename;

//                     // resize image
//                     Image::make($image_tmp)->save($large_image_path);
//                     Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
//                     Image::make($image_tmp)->resize(300,300)->save($small_image_path);
//                 }
//             } else if(!empty($data['current_image'])){
//                 $filename = $data['current_image'];
//             } else {
//                 $filename = '';
//             }

//             Menu::where(['id'=>$id])->update([
//                 'parent_id'=>$data['parent_id'],
//                 'orderm'=>$data['orderm'],
//                 'menu_name'=>$data['menu_name'],
//                 'image'=>$data['image'],
//                 'menu_url'=>$data['menu_url'],
//             ]);

//             return redirect()->back()->with('flash_message_success', 'Амжилттай шинэчлэгдлээ');
//         }

//         $menuDetails = Menu::where(['id'=>$id])->first();
//         $levels = Menu::where(['parent_id'=>0])->get();
//         return view('admin.menus.edit_menu')->with(compact('menuDetails','levels'));
//     }

//     public function deleteMenu($id = null){
//         Menu::where(['id'=>$id])->delete();
//         return redirect()->back()->with('flash_message_success', 'Устгагдлаа');
//     }

//     public function viewMenus(){ 
//         $menus = Menu::get();
//         return view('admin.menus.view_menus')->with(compact('menus'));
//     }
// }
