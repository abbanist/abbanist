<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use Image;
use App\Category;
use App\Post;


class PostController extends Controller
{

// add Product 
    public function addPost(Request $request) {
        
        if($request->isMethod('post')){
   
            $data = $request->all();
            
               $post = new Post;
   
                $post->category_id = $data['category_id'];

                $post->post_title = $data['post_title'];
               
                if(empty($data['post_content'])){
                   $post->post_content = '';
                }else {
                   $post->post_content = $data['post_content'];
                }

                if(empty($data['status'])){
                    $status='0';
                }else{
                    $status='1';
                }
                
                // $post->price = $data['price'];
                // upload image
                if($request->hasFile('image')){
                    $image_tmp = Input::file('image');
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $filename =  rand(111, 99999).".".$extension;
                        $large_image_path = 'images/backend_images/posts/large/'.$filename;
                        $medium_image_path = 'images/backend_images/posts/medium/'.$filename;
                        $small_image_path = 'images/backend_images/posts/small/'.$filename;

                        // resize image
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                        //store image name in products table
                       $post->image = $filename;
                    }
                }
            
                $post->status = $status;
                $post->save();

            return redirect('/admin/view-posts')->with('flash_message_success', 'Амжилттай нэмэгдлээ');
        }
        
            $categories = Category::where(['parent_id' => 0])->get();
            $categories_drop_down = "<option value='' selected disabled>Select</option>";
            foreach($categories as $cat){
                $categories_drop_down .= "<option value='".$cat->id."'>".$cat->name."</option>";
                $sub_categories = Category::where(['parent_id' => $cat->id])->get();
                foreach($sub_categories as $sub_cat){
                    $categories_drop_down .= "<option value='".$sub_cat->id."'>&nbsp;&nbsp;--&nbsp;".$sub_cat->name."</option>";    
                }   
        }
        //echo "<pre>"; print_r($categories_drop_down); die;
        return view('admin.posts.add_post')->with(compact('categories_drop_down'));
            // echo "<pre>"; print_r($l); die;


            
            // $categories = Category::where(['parent_id'=>0])->get();
            // $categories_dropdown = "<option selected disabled>Select</option>";
            // foreach($categories as $cat){   
            //     $categories_dropdown = "<option value = '".$cat->id."'>".$cat->name."</option>";
                
            //     // sub category
            //     $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
            //     foreach($sub_categories as $sub_cat){
            //         $categories_dropdown = "<option value = '".$sub_cat->id."'> &nbsp;--&nbsp;".$sub_cat->name."</option>";
            //     }
            // }

    }


    // edit
    public function editPost(Request $request, $id=null){
        if($request->isMethod('post')){
            // getting info from user
            $data = $request->all();

            if($request->hasFile('image')){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename =  rand(111, 99999).".".$extension;
                    $large_image_path = 'images/backend_images/posts/large/'.$filename;
                    $medium_image_path = 'images/backend_images/posts/medium/'.$filename;
                    $small_image_path = 'images/backend_images/posts/small/'.$filename;

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


            if(empty($data['post_content'])){
                $data['post_content'] = '';
            }

            Post::where(['id'=>$id])->update([
                'status'=>$status,
                'category_id'  =>$data['category_id'],
                'post_title' =>$data['post_title'],
                'post_content'  =>$data['post_content'],
                'image'  => $filename
                ]);
                return redirect()->back()->with('flash_message_success','Амжилттай шинэчлэгдлээ');
            }
            
            // get details
           $postDetails = Post::where(['id'=>$id])->first();

           // Categories drop down start //
            $categories = Category::where(['parent_id' => 0])->get();
            $categories_drop_down = "<option value='' disabled>Select</option>";
            
            foreach($categories as $cat){
                if($cat->id==$postDetails->category_id){
                    $selected = "selected";
                }else{
                    $selected = "";
                }

            $categories_drop_down .= "<option value='".$cat->id."' ".$selected.">".$cat->name."</option>";
            $sub_categories = Category::where(['parent_id' => $cat->id])->get();
            foreach($sub_categories as $sub_cat){
                if($sub_cat->id==$postDetails->category_id){
                    $selected = "selected";
                }else{
                    $selected = "";
                }
                $categories_drop_down .= "<option value='".$sub_cat->id."' ".$selected.">&nbsp;&nbsp;--&nbsp;".$sub_cat->name."</option>";  
            }   
        }
        // Categories drop down end //
        return view('admin.posts.edit_post')->with(compact('postDetails','categories_drop_down'));
    }


// view posts
    public function viewPosts(Request $request){
        $posts = Post::get();

        foreach($posts as $key => $val){
            $category_name = Category::where(['id' => $val->category_id])->first();
            $posts[$key]->category_name = $category_name->name;
        }
        $posts = json_decode(json_encode($posts));

        return view('admin.posts.view_posts')->with(compact('posts'));
    }


// delete product image
    public function deletePostImage($id=null) {

        // get post image name
        $postImage = Post::where(['id'=>$id])->first();

        // Get Post image Paths
        $large_image_path = 'images/backend_images/posts/large/';
        $medium_image_path = 'images/backend_images/posts/medium/';
        $small_image_path = 'images/backend_images/posts/small/';

        // Delete large image if not exists in folder
        if(file_exists($large_image_path.$postImage->image)){
            unlink($large_image_path.$postImage->image);
        }
        if(file_exists($medium_image_path.$postImage->image)){
            unlink($medium_image_path.$postImage->image);
        }
        if(file_exists($small_image_path.$postImage->image)){
            unlink($small_image_path.$postImage->image);
        }

        Post::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success', 'Зураг устгагдлаа');
        }
    

    public function deletePost($id=null) {
        Post::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success', 'Нийтлэл устгагдлаа');
    }

}