@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Нүүр</a> 
        <a href="/admin/view-pages">Бүх хуудас</a>
        <a href="#">Хуудас нэмэх</a>
         </div>
      <h1>Хуудас нэмэх</h1>
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
              <h5>Мэдээ нэмэх</h5>
            </div>
            <div class="widget-content nopadding">
            <form enctype = "multipart/form-data" class="form-horizontal" method="post"
             action="{{ url('/admin/add-page') }}" 
            name="add_page" id="add_page" novalidate="novalidate"> {{ csrf_field() }}
{{-- 
                  <div class="control-group">
                    <label class="control-label">Онцлох зураг</label>
                    <div class="controls">
                      <input type="file" name="image" id="image">
                    </div>
                  </div> --}}

                  <div class="control-group">
                    <label class="control-label">Гарчиг</label>
                    <div class="controls">
                      <input type="text" name="page_title" id="page_title">
                    </div>
                  </div>

                  {{-- <div class="control-group">
                    <label class="control-label">Линк</label>
                    <div class="controls">
                      <input type="text" name="page_slug" id="page_slug">
                    </div>
                  </div> --}}

                  <div class="control-group">
                      <div style="width:90%;">
                    <label class="control-label">Нийтлэл</label>
                    <div class="controls">
                      <textarea name="page_content" class="form-control my-editor"></textarea>
                    </div>
                    </div>

                  </div>
                
                  <div class="form-actions">
                    <input type="submit" value="Нийтлэх" class="btn btn-success">
                  </div>
                  
              </form>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>

@endsection