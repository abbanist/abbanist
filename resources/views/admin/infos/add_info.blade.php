@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Нүүр</a> 
        <a href="/admin/view-infos">Бүх танилцуулга</a>
        <a href="#">Нэмэх</a>
         </div>
      <h1> Танилцуулга нэмэх</h1>
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

      <a class="btn btn-primary" href="{{url('admin/add-info')}}">Танилцуулга нэмэх</a>
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Танилцуулга нэмэх</h5>
            </div>
            <div class="widget-content nopadding">
            <form enctype = "multipart/form-data" class="form-horizontal" method="post"
             action="{{ url('/admin/add-info') }}" 
            name="add_info" id="add_info" novalidate="novalidate"> {{ csrf_field() }}


                  <div class="control-group">
                    <label class="control-label">Гарчиг</label>
                    <div class="controls">
                      <input type="text" name="title" id="info_title">
                    </div>
                  </div>
                  

                  <div class="control-group">
                    <label class="control-label">Зураг</label>
                    <div class="controls">
                      <input type="file" name="image" id="info_image">
                    </div>
                  </div>


                  <div class="control-group">
                      <label class="control-label">Дэд гарчиг</label>
                      <div class="controls">
                        <input type="text" name="small_title" id="small_title">
                      </div>
                  </div>

                  
                  <div class="control-group">
                    <div style="width:90%;">
                      <label class="control-label">Нийтлэл</label>
                        <div class="controls">
                          <textarea name = "description" class="form-control my-editor"></textarea>
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