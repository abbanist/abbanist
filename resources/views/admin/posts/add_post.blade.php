@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
          <i class="icon-home"></i> Нүүр</a> 
          <a href="/admin/view-posts">Бүх нийтлэл</a>
          <a href="#">Нийтлэл нэмэх</a>
           </div>
      <h1>Нийтлэл </h1>
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
      <a class="btn btn-primary" href="{{url('admin/add-post')}}">Нийтлэл нэмэх</a>
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Нийтлэл </h5>
            </div>
            <div class="widget-content nopadding">
            <form enctype = "multipart/form-data" class="form-horizontal" method="post"
             action="{{ url('/admin/add-post') }}" 
            name="add_post" id="add_post" novalidate="novalidate"> {{ csrf_field() }}
                
                <div class="control-group">
                  <label class="control-label">Нийтэд харагдах</label>
                  <div class="controls">
                    <input type="checkbox" name="status" id="status" value="1" checked>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Ангилал</label>
                  <div class="controls">
                    <select name="category_id" id="category_id" style="width:220px;">
                      <?php echo $categories_drop_down; ?>
                    </select>
                  </div>
                </div>

                  <div class="control-group">
                    <label class="control-label">Онцлох зураг</label>
                    <div class="controls">
                      <input type="file" name="image" id="image">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Гарчиг</label>
                    <div class="controls">
                      <input type="text" name="post_title" id="post_title">
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <div style="width:90%;">
                      <label class="control-label">Нийтлэл</label>
                        <div class="controls">
                          <textarea name = "post_content" class="form-control my-editor"></textarea>
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