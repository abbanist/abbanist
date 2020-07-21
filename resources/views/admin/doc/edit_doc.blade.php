@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Нүүр</a> 
        <a href="/admin/view-products">Бүх Бүтээгдэхүүн</a>
        <a href="#">Бүтээгдэхүүн засах</a>
        
         </div>
      <h1>Бүтээгдэхүүн засах</h1>
    </div>



    <div class="container-fluid">

    @if(Session::has('flash_message_error'))
    <div class="alert alert-error alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{!! session('flash_message_error') !!}</strong>
    </div>
@endif

@if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{!! session('flash_message_success') !!}</strong>
    </div>
@endif
      <a class="btn btn-primary" href="{{url('admin/add-product')}}">Бүтээгдэхүүн нэмэх</a>
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Бүтээгдэхүүн засах</h5>
            </div>
            <div class="widget-content nopadding">
            <form enctype = "multipart/form-data" class="form-horizontal" method="post" 
            action="{{ url('/admin/edit-product/'. $productDetails->id) }}" 
            name="edit_product" id="edit_product" novalidate="novalidate"> {{ csrf_field() }}
                
<div class="control-group">
                <label class="control-label">Нийтэд харагдах</label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" @if($productDetails->status == "1") checked @endif value="1">
                </div>
              </div>

                  <div class="control-group">
                    <label class="control-label">Гарчиг</label>
                    <div class  ="controls">
                      <input class="span6" type="text" name="title" id="title" value="{{$productDetails->title}}">
                    </div>
                  </div>

                  <div class="control-group">
                      <div style="width:90%;">
                      <label class="control-label">Нийтлэл</label>
                        <div class="controls">
                          <textarea name = "content" id="content" class="form-control my-editor">
                            {{$productDetails->content}}
                          </textarea>
                        </div>
                    </div>
                    </div>


                    <div class="control-group">
                    <div style="width:90%;">
                      <label class="control-label">Description</label>
                        <div class="controls">
                          <textarea name = "description" class="form-control my-editor">
                             {{$productDetails->description}}
                          </textarea>
                        </div>
                    </div>
                  </div>


                   
                  <div class="control-group">
                    <label class="control-label">Онцлох зураг</label>
                      <div class="controls">
                          <input type="file" name="image" id="image">
                          {{-- exist image --}}
                            @if(!empty($productDetails->image)) 
                            <input type="hidden" name="current_image" value= "{{ $productDetails->image }}">
                              <img style="width:50px;" src="{{ asset('/images/backend_images/products/small/'.$productDetails->image) }}"> 
                              |
                              <a href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}">Зураг устгах</a>
                            @endif
                      </div>
                  </div>

<div class="control-group">
                      <label class="control-label">Онцлох видео линк</label>
                        <div class ="controls">
                          <input type="text" name="f_video" id="f_video" 
                          value=" {{$productDetails->f_video}}">
                        </div>
                    </div> 

<div class="control-group">
                      <label class="control-label">Линк 1</label>
                        <div class ="controls">
                          <input type="text" name="video_scroll_a" id="video_scroll_a" 
                          value=" {{$productDetails->video_scroll_a}}">
                        </div>
                    </div>

                     <div class="control-group">
                      <label class="control-label">Линк 2</label>
                        <div class ="controls">
                          <input type="text" name="video_scroll_b" id="video_scroll_b" 
                          value=" {{$productDetails->video_scroll_b}}">
                        </div>
                    </div> 

   <div class="control-group">
                      <label class="control-label">Линк 3</label>
                        <div class ="controls">
                          <input type="text" name="video_scroll_c" id="video_scroll_c" 
                          value=" {{$productDetails->video_scroll_c}}">
                        </div>
                    </div> 

                
                <div class="form-actions">
                  <input type="submit" value="Шинэчлэх" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>

@endsection