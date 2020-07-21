@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
      
      <div id="breadcrumb"> <a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Нүүр</a>
        <a href="/admin/view-pages">Бүх хуудас</a>
        <a href="#">Хуудас засах</a>
      </div>

      <h1>Хуудас засах</h1>
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

      <a class="btn btn-primary" href="{{url('admin/add-page')}}">Хуудас нэмэх</a>
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Хуудас засах</h5>
            </div>
            <div class="widget-content nopadding">
            <form enctype = "multipart/form-data" class="form-horizontal" method="post" 
            action="{{ url('/admin/edit-page/'. $pageDetails->id) }}" 
            name="edit_page" id="edit_page" novalidate="novalidate"> {{ csrf_field() }}
                
               
                  <div class="control-group">
                    <label class="control-label">Гарчиг</label>
                    <div class  ="controls">
                      <input type="text" name="page_title" id="page_name" value="{{$pageDetails->page_title}}">
                    </div>
                  </div>

                  
                  <div class="control-group">
                    <div style="width:90%;">
                      <label class="control-label">Нийтлэл</label>
                      {{-- <form> --}}
                        <div class="controls">
                          <textarea  name = "page_content" class="form-control my-editor">{{$pageDetails->page_content}}</textarea>
                        </div>
                      {{-- </form> --}}
                    </div>
                    </div>
                   
                  {{-- <div class="control-group">
                    <label class="control-label">Зураг</label>
                    <div class="controls">
                      <input type="file" name="image" id="image">

                      @if(!empty($pageDetails->image))
                      <input type="hidden" name="current_image" value= " {{ $pageDetails->image }} ">
                    
                        <img style="width:50px;" src="{{ asset('/images/backend_images/pages/small/'.$pageDetails->image) }}"> 
                        |
                        <a href="{{ url('/admin/delete-page-image/'.$pageDetails->id) }}">Зураг устгах</a>
                      @endif
                    </div>
                  </div> --}}
                
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