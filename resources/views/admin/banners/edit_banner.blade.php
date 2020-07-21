@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Нүүр</a> 
        <a href="/admin/view-banners">Бүгд</a>
        <a href="#">Засах</a>
        
         </div>
      <h1>Засах</h1>
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

      <a class="btn btn-primary" href="{{url('admin/add-banner')}}">Нийтлэл нэмэх</a>
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Нийтлэл засах</h5>
            </div>
            <div class="widget-content nopadding">
            <form enctype = "multipart/form-data" class="form-horizontal" method="post" 
            action="{{ url('/admin/edit-banner/'. $bannerDetails->id) }}" 
            name="edit_banner" id="edit_banner" novalidate="novalidate"> {{ csrf_field() }}
                
                <div class="control-group">
                  <label class="control-label">Нийтэд харагдах</label>
                    <div class="controls">
                      <input type="checkbox" name="status" id="status" @if($bannerDetails->status == "1") checked @endif value="1">
                    </div>
                </div>

                  <div class="control-group">
                    <label class="control-label">Линк</label>
                    <div class ="controls">
                      <input type="text" name="link" id="link" value="{{$bannerDetails->link}}">
                    </div>
                  </div>
                    <div class="control-group">
                    <label class="control-label">Гарчиг</label>
                    <div class ="controls">
                      <input type="text" name="title" id="title" value="{{$bannerDetails->title}}">
                    </div>
                  </div>

 <div class="control-group">
                    <label class="control-label">Текст</label>
                    <div class ="controls">
                      <input type="text" name="description" id="link" value="{{$bannerDetails->description}}">
                    </div>
                  </div>

<div class="control-group">
                    <label class="control-label">Button текст</label>
                    <div class="controls">
                      <input type="text" name="button_txt" id="button_txt" value="{{$bannerDetails->button_txt}}">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Зураг</label>
                    <div class="controls">
                      <input type="file" name="image" id="image">
                      
                      {{-- exist image --}}
                      @if(!empty($bannerDetails->image)) 

                      <input  type="hidden" 
                              name="current_image" 
                              data-input="thumbnail" 
                              data-preview="holder" 
                              id="lfm" 
                              data-input="thumbnail"

                              value="{{ $bannerDetails->image }}">
                        <img style="width:50px;" src="{{ asset('/images/backend_images/banners/small/'.$bannerDetails->image) }}"> 
                        |
                        <a href="{{ url('/admin/delete-banner-image/'.$bannerDetails->id) }}">Зураг устгах</a>
                      @endif

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