<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
// use Image;
use App\Page;

class PageController extends Controller
{
    public function addPage(Request $request) {
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
               $page = new Page;

                $page->page_title = $data['page_title'];
                $page->page_content = $data['page_content'];

                if(empty($data['page_content'])){
                   $page->page_content = '';
                } else {
                   $page->page_content = $data['page_content'];
                }

                $page->save();

            return redirect('/admin/view-pages')->with('flash_message_success', 'Амжилттай нэмэгдлээ');
        }
        return view('admin.pages.add_page');
    }

// edit
    public function editPage(Request $request, $id=null){
        if($request->isMethod('post')){
            // getting info from user
            $data = $request->all();

            if(empty($data['page_content'])){
                $data['page_content'] = '';
            }

            Page::where(['id'=>$id])->update([
                'page_title' =>$data['page_title'],
                'page_content'  =>$data['page_content'],
                ]);
                return redirect()->back()->with('flash_message_success','Амжилттай шинэчлэгдлээ');
            }
            // get details
           $pageDetails = Page::where(['id'=>$id])->first();
        // cat dropdown end
        return view('admin.pages.edit_page')->with(compact('pageDetails'));
    }

//view
    public function viewPages(Request $request){
       $pages = Page::get();
        return view('admin.pages.view_pages')->with(compact('pages'));
    }

//del   
    public function deletePage($id=null) {
        Page::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success', 'Амжилттай устгагдлаа');
        }

}