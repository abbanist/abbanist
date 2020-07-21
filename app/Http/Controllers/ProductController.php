<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use Image;
use App\Product;
use App\ProductsImage;

class ProductController extends Controller
{
    public function addProduct(Request $request) {
        
        if($request->isMethod('post')){
   
            $data = $request->all();
            // dd($data);
                $product = new Product;

                $product->title = $data['title'];
               
                if(empty($data['content'])){
                   $product->content = '';
                }else {
                   $product->content = $data['content'];
                }

                if(empty($data['status'])){
                    $status='0';
                }else{
                    $status='1';
                } 

                 if(empty($data['shingen'])){
                    $shingen='0';
                }else{
                    $shingen='1';
                }
                
                // $post->price = $data['price'];
                // upload image
                if($request->hasFile('image')){
                    $image_tmp = Input::file('image');
                    
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $filename =  rand(111, 99999).".".$extension;
                        $large_image_path = 'images/backend_images/products/large/'.$filename;
                        $medium_image_path = 'images/backend_images/products/medium/'.$filename;
                        $small_image_path = 'images/backend_images/products/small/'.$filename;

                        // resize image
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                        //store image name in products table
                       $product->image = $filename;
                    }
                } 

                if($request->hasFile('cer1')){
                    $image_tmp = Input::file('cer1');
                    
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $cer1 =  rand(111, 99999).".".$extension;
                        $large_image_path = 'images/backend_images/products/large/'.$cer1;
                        $medium_image_path = 'images/backend_images/products/medium/'.$cer1;
                        $small_image_path = 'images/backend_images/products/small/'.$cer1;

                        // resize image
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                        //store image name in products table
                       $product->cer1 = $cer1;
                    }
                }
                if($request->hasFile('cer2')){
                    $image_tmp = Input::file('cer2');
                    
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $cer2 =  rand(111, 99999).".".$extension;
                        $large_image_path = 'images/backend_images/products/large/'.$cer2;
                        $medium_image_path = 'images/backend_images/products/medium/'.$cer2;
                        $small_image_path = 'images/backend_images/products/small/'.$cer2;

                        // resize image
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                        //store image name in products table
                       $product->cer2 = $cer2;
                    }
                } 

                if($request->hasFile('cer3')){
                    $image_tmp = Input::file('cer3');
                    
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $cer3 =  rand(111, 99999).".".$extension;
                        $large_image_path = 'images/backend_images/products/large/'.$cer3;
                        $medium_image_path = 'images/backend_images/products/medium/'.$cer3;
                        $small_image_path = 'images/backend_images/products/small/'.$cer3;

                        // resize image
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                        //store image name in products table
                       $product->cer3 = $cer3;
                    }
                }

                if($request->hasFile('cer4')){
                    $image_tmp = Input::file('cer4');
                    
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $cer4 =  rand(111, 99999).".".$extension;
                        $large_image_path = 'images/backend_images/products/large/'.$cer4;
                        $medium_image_path = 'images/backend_images/products/medium/'.$cer4;
                        $small_image_path = 'images/backend_images/products/small/'.$cer4;

                        // resize image
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                        //store image name in products table
                       $product->cer4 = $cer4;
                    }
                }
                
                if($request->hasFile('cer5')){
                    $image_tmp = Input::file('cer5');
                    
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $cer5 =  rand(111, 99999).".".$extension;
                        $large_image_path = 'images/backend_images/products/large/'.$cer5;
                        $medium_image_path = 'images/backend_images/products/medium/'.$cer5;
                        $small_image_path = 'images/backend_images/products/small/'.$cer5;

                        // resize image
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                        //store image name in products table
                       $product->cer5 = $cer5;
                    }
                }
            
            
               if($request->hasFile('cer6')){
                    $image_tmp = Input::file('cer6');
                    
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $cer6 =  rand(111, 99999).".".$extension;
                        $large_image_path = 'images/backend_images/products/large/'.$cer6;
                        $medium_image_path = 'images/backend_images/products/medium/'.$cer6;
                        $small_image_path = 'images/backend_images/products/small/'.$cer6;

                        // resize image
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                        //store image name in products table
                       $product->cer6 = $cer6;
                    }
                }
                
                   if($request->hasFile('cer7')){
                    $image_tmp = Input::file('cer7');
                    
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $cer7 =  rand(111, 99999).".".$extension;
                        $large_image_path = 'images/backend_images/products/large/'.$cer7;
                        $medium_image_path = 'images/backend_images/products/medium/'.$cer7;
                        $small_image_path = 'images/backend_images/products/small/'.$cer7;

                        // resize image
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                        //store image name in products table
                       $product->cer7 = $cer7;
                    }
                }
                
                   if($request->hasFile('cer8')){
                    $image_tmp = Input::file('cer8');
                    
                    if($image_tmp->isValid()){
                        $extension = $image_tmp->getClientOriginalExtension();
                        $cer8 =  rand(111, 99999).".".$extension;
                        $large_image_path = 'images/backend_images/products/large/'.$cer8;
                        $medium_image_path = 'images/backend_images/products/medium/'.$cer8;
                        $small_image_path = 'images/backend_images/products/small/'.$cer8;

                        // resize image
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                        //store image name in products table
                       $product->cer8 = $cer8;
                    }
                }
                

                $product->status = $status;
                $product->shingen = $shingen;

                $product->description = $data['description'];
                $product->f_video = $data['f_video'];
                $product->video_scroll_a = $data['video_scroll_a'];
                $product->video_scroll_b = $data['video_scroll_b'];
                $product->video_scroll_c = $data['video_scroll_c']; 

                $product->une1 = $data['une1'];
                $product->une2 = $data['une2'];
                $product->une3 = $data['une3'];
                
                $product->cer1link = $data['cer1link'];
                $product->cer2link = $data['cer2link'];
                $product->cer3link = $data['cer3link'];
                $product->cer4link = $data['cer4link'];
                $product->cer5link = $data['cer5link'];
                $product->cer6link = $data['cer6link'];
                $product->cer7link = $data['cer7link'];
                $product->cer8link = $data['cer8link'];

                $product->mainprice = $data['mainprice'];

                $product->faq = $data['faq'];

                $product->save();

            return redirect('/admin/view-products')->with('flash_message_success', 'Амжилттай нэмэгдлээ');
        }

        return view('admin.products.add_product');
    }


    
    // edit
    public function editProduct(Request $request, $id=null){
        if($request->isMethod('post')){
            // getting info from user
            $data = $request->all();

            if($request->hasFile('image')){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename =  rand(111, 99999).".".$extension;
                    $large_image_path = 'images/backend_images/products/large/'.$filename;
                    $medium_image_path = 'images/backend_images/products/medium/'.$filename;
                    $small_image_path = 'images/backend_images/products/small/'.$filename;

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

             if($request->hasFile('cer1')){
                $image_tmp = Input::file('cer1');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $cer1 =  rand(111, 99999).".".$extension;
                    $large_image_path = 'images/backend_images/products/large/'.$cer1;
                    $medium_image_path = 'images/backend_images/products/medium/'.$cer1;
                    $small_image_path = 'images/backend_images/products/small/'.$cer1;

                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } else if(!empty($data['current_cer1'])){
                $cer1 = $data['current_cer1'];
            } else {
                $cer1 = '';
            } 


             if($request->hasFile('cer2')){
                $image_tmp = Input::file('cer2');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $cer2 =  rand(111, 99999).".".$extension;
                    $large_image_path = 'images/backend_images/products/large/'.$cer2;
                    $medium_image_path = 'images/backend_images/products/medium/'.$cer2;
                    $small_image_path = 'images/backend_images/products/small/'.$cer2;

                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } else if(!empty($data['current_cer2'])){
                $cer2 = $data['current_cer2'];
            } else {
                $cer2 = '';
            } 

              if($request->hasFile('cer3')){
                $image_tmp = Input::file('cer3');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $cer3 =  rand(111, 99999).".".$extension;
                    $large_image_path = 'images/backend_images/products/large/'.$cer3;
                    $medium_image_path = 'images/backend_images/products/medium/'.$cer3;
                    $small_image_path = 'images/backend_images/products/small/'.$cer3;

                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } else if(!empty($data['current_cer3'])){
                $cer3 = $data['current_cer3'];
            } else {
                $cer3 = '';
            } 


            if($request->hasFile('cer4')){
                $image_tmp = Input::file('cer4');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $cer4 =  rand(111, 99999).".".$extension;
                    $large_image_path = 'images/backend_images/products/large/'.$cer4;
                    $medium_image_path = 'images/backend_images/products/medium/'.$cer4;
                    $small_image_path = 'images/backend_images/products/small/'.$cer4;

                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } else if(!empty($data['current_cer4'])){
                $cer4 = $data['current_cer4'];
            } else {
                $cer4 = '';
            } 


            if($request->hasFile('cer5')){
                $image_tmp = Input::file('cer5');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $cer5 =  rand(111, 99999).".".$extension;
                    $large_image_path = 'images/backend_images/products/large/'.$cer5;
                    $medium_image_path = 'images/backend_images/products/medium/'.$cer5;
                    $small_image_path = 'images/backend_images/products/small/'.$cer5;

                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } else if(!empty($data['current_cer5'])){
                $cer5 = $data['current_cer5'];
            } else {
                $cer5 = '';
            } 
         
if($request->hasFile('cer6')){
                $image_tmp = Input::file('cer6');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $cer6 =  rand(111, 99999).".".$extension;
                    $large_image_path = 'images/backend_images/products/large/'.$cer6;
                    $medium_image_path = 'images/backend_images/products/medium/'.$cer6;
                    $small_image_path = 'images/backend_images/products/small/'.$cer6;

                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } else if(!empty($data['current_cer6'])){
                $cer6 = $data['current_cer6'];
            } else {
                $cer6 = '';
            } 
            
            if($request->hasFile('cer7')){
                $image_tmp = Input::file('cer7');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $cer7 =  rand(111, 99999).".".$extension;
                    $large_image_path = 'images/backend_images/products/large/'.$cer7;
                    $medium_image_path = 'images/backend_images/products/medium/'.$cer7;
                    $small_image_path = 'images/backend_images/products/small/'.$cer7;

                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } else if(!empty($data['current_cer7'])){
                $cer7 = $data['current_cer7'];
            } else {
                $cer7 = '';
            } 
            
            
            if($request->hasFile('cer8')){
                $image_tmp = Input::file('cer8');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $cer8 =  rand(111, 99999).".".$extension;
                    $large_image_path = 'images/backend_images/products/large/'.$cer8;
                    $medium_image_path = 'images/backend_images/products/medium/'.$cer8;
                    $small_image_path = 'images/backend_images/products/small/'.$cer8;

                    // resize image
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                }
            } else if(!empty($data['current_cer8'])){
                $cer8 = $data['current_cer8'];
            } else {
                $cer8 = '';
            } 
            

            if(empty($data['status'])){
                $status='0';
            }else{
                $status='1';
            }

            if(empty($data['shingen'])){
                $shingen='0';
            }else{
                $shingen='1';
            }


            if(empty($data['content'])){
                $data['content'] = '';
            }

            Product::where(['id'=>$id])->update([
                'status'=>$status,
                'shingen'=>$shingen,
                // 'category_id'  =>$data['category_id'],
                'title' =>$data['title'],
                'content'  =>$data['content'],

                'image'  => $filename,
                'cer1'  => $cer1,
                'cer2'  => $cer2,
                'cer3'  => $cer3,
                'cer4'  => $cer4,
                'cer5'  => $cer5,
                'cer6'  => $cer6,
                'cer7'  => $cer7,
                'cer8'  => $cer8,

                'mainprice'  => $data['mainprice'],





                'description' => $data['description'],
                'f_video' => $data['f_video'],
                'video_scroll_a' => $data['video_scroll_a'],
                'video_scroll_b' => $data['video_scroll_b'],
                'video_scroll_c' => $data['video_scroll_c'],

                'cer1link' => $data['cer1link'],
                'cer2link' => $data['cer2link'],
                'cer3link' => $data['cer3link'],
                'cer4link' => $data['cer4link'],
                'cer5link' => $data['cer5link'],
                'cer6link' => $data['cer6link'],
                'cer7link' => $data['cer7link'],
                'cer8link' => $data['cer8link'],
                
                'faq' => $data['faq'],
                'faq' => $data['faq'],




                'video_scroll_a' => $data['video_scroll_a'],
                'video_scroll_b' => $data['video_scroll_b'],
                'video_scroll_c' => $data['video_scroll_c'],

                'une1' => $data['une1'],
                'une2' => $data['une2'],
                'une3' => $data['une3']

                ]);
                return redirect()->back()->with('flash_message_success','Амжилттай шинэчлэгдлээ');
            }
            
            // get details
           $productDetails = Product::where(['id'=>$id])->first();

          
        // Categories drop down end //
        return view('admin.products.edit_product')->with(compact('productDetails'));
    }




// view posts
    public function viewProducts(Request $request){
        $products = Product::get();

        // foreach($posts as $key => $val){
        //     $category_name = Category::where(['id' => $val->category_id])->first();
        //     $posts[$key]->category_name = $category_name->name;
        // }
        // $posts = json_decode(json_encode($posts));

        
        // $products = Product::get();
        // foreach($products as $key => $val){
        //     $category_name = Category::where(['id' => $val->category_id])->first();
        //     $products[$key]->category_name = $category_name->name;
        // }
        // $products = json_decode(json_encode($products));


        return view('admin.products.view_products')->with(compact('products'));
    }


// delete product image
    public function deleteProductImage($id=null) {

        // get post image name
        $productImage = Product::where(['id'=>$id])->first();

        // Get Post image Paths
        $large_image_path = 'images/backend_images/products/large/';
        $medium_image_path = 'images/backend_images/products/medium/';
        $small_image_path = 'images/backend_images/products/small/';

        // Delete large image if not exists in folder
        if(file_exists($large_image_path.$productImage->image)){
            unlink($large_image_path.$productImage->image);
        }
        if(file_exists($medium_image_path.$productImage->image)){
            unlink($medium_image_path.$productImage->image);
        }
        if(file_exists($small_image_path.$productImage->image)){
            unlink($small_image_path.$productImage->image);
        }

        Product::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success', 'Зураг устгагдлаа');
    
    }

    

    public function deleteProduct($id=null) {
        Product::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success', 'Бүтээгдэхүүн устгагдлаа');
    }



    public function addImages(Request $request, $id=null){
        $productDetails = Product::where(['id' => $id])->first();
        // $categoryDetails = Category::where(['id'=>$productDetails->category_id])->first();
        // $category_name = $categoryDetails->name;
        if($request->isMethod('post')){
            $data = $request->all();
            if ($request->hasFile('image')) {
                $files = $request->file('image');
                foreach($files as $file){
                    // Upload Images after Resize
                    $image = new ProductsImage;
                    $extension = $file->getClientOriginalExtension();
                    $fileName = rand(111,99999).'.'.$extension;
                    $large_image_path = 'images/backend_images/products/large'.'/'.$fileName;
                    $medium_image_path = 'images/backend_images/products/medium'.'/'.$fileName;  
                    $small_image_path = 'images/backend_images/products/small'.'/'.$fileName;  
                    Image::make($file)->save($large_image_path);
                    Image::make($file)->resize(600, 600)->save($medium_image_path);
                    Image::make($file)->resize(300, 300)->save($small_image_path);
                    $image->image = $fileName;  
                    $image->product_id = $data['product_id'];
                    $image->save();
                }   
            }
            return redirect('admin/add-images/'.$id)->with('flash_message_success', 'Product Images has been added successfully');
        }
        $productImages = ProductsImage::where(['product_id' => $id])->orderBy('id','DESC')->get();
        $title = "Add Images";
        return view('admin.products.add_images')->with(compact(
            'title',
            'productDetails',
            // 'category_name',
            'productImages'));
    }



    public function deleteProductAltImage($id=null){
        // Get Product Image
        $productImage = ProductsImage::where('id',$id)->first();
        // Get Product Image Paths
        $large_image_path = 'images/backend_images/products/large/';
        $medium_image_path = 'images/backend_images/products/medium/';
        $small_image_path = 'images/backend_images/products/small/';
        // Delete Large Image if not exists in Folder
        if(file_exists($large_image_path.$productImage->image)){
            unlink($large_image_path.$productImage->image);
        }   
        // Delete Medium Image if not exists in Folder
        if(file_exists($medium_image_path.$productImage->image)){
            unlink($medium_image_path.$productImage->image);
        }
        // Delete Small Image if not exists in Folder
        if(file_exists($small_image_path.$productImage->image)){
            unlink($small_image_path.$productImage->image);
        }
        // Delete Image from Products Images table
        ProductsImage::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success', 'Product alternate mage has been deleted successfully');
    }




    public function product($id = null){
        // Show 404 Page if Product is disabled
        $productCount = Product::where(['id'=>$id,'status'=>1])->count();
        if($productCount==0){
            abort(404);
        }
        // Get Product Details
        $productDetails = Product::where('id',$id)->first();
        // $relatedProducts = Product::where('id','!=',$id)->where(['category_id' => $productDetails->category_id])->get();
        /*foreach($relatedProducts->chunk(3) as $chunk){
            foreach($chunk as $item){
                echo $item; echo "<br>"; 
            }   
            echo "<br><br><br>";
        }*/
        
        // Get Product Alt Images
        $productAltImages = ProductsImage::where('product_id',$id)->get();
        /*$productAltImages = json_decode(json_encode($productAltImages));
        echo "<pre>"; print_r($productAltImages); die;*/
        // $categories = Category::with('categories')->where(['parent_id' => 0])->get();
        // $total_stock = ProductsAttribute::where('product_id',$id)->sum('stock');
        return view('user.product')->with(compact(
            'productDetails',
            // 'categories',
            'productAltImages'
            // 'total_stock',
            // 'relatedProducts'
        ));
    }


}
