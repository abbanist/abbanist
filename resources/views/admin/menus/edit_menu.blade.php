@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom">
      <i class="icon-home"></i> Home</a> 
      <a href="/admin/view-menus">Цэснүүд</a> 
      <a href="#" class="current">Цэс засах</a> </div>
    <h1>Цэснүүд</h1>
    @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif   
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif
  </div>
  <div class="container-fluid">
    {{-- <a class="btn btn-primary" href="{{url('admin/add-menu')}}">Цэс нэмэх</a> --}}
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Засах</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('admin/edit-menu/'.$menuDetails->id) }}" 
              name="add_menu" id="add_menu" novalidate="novalidate">{{ csrf_field() }}
              
              <div class="control-group">
                <label class="control-label">lvl</label>
                <div class="controls">
                  <select name="parent_id" style="width:220px;">
                    <option value="0">Үндсэн</option>
                      @foreach($levels as $val)
                        <option value="{{ $val->id }}" @if($val->id==$menuDetails->parent_id) selected @endif>{{ $val->menu_name }}</option>
                      @endforeach
                  </select>
                </div>
              </div>

             {{--  <div class="control-group">
                <label class="control-label">lvl</label>
                <div class="controls">
                  <select name="parent_id" style="width:220px;">
                    <option value="0">Үндсэн</option>
                      @foreach($orderm as $val)
                        <option value="{{ $val->id }}" @if($val->id==$menuDetails->parent_id) selected @endif>{{ $val->menu_name }}</option>
                      @endforeach
                  </select>
                </div>
              </div> --}}

              <div class="control-group">
                <label class="control-label">Нэр</label>
                <div class="controls">
                  <input type="text" name="menu_name" id="menu_name" value="{{ $menuDetails->menu_name }}">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Menu order</label>
                <div class="controls">
                  <input type="text" name="orderm" id="orderm" value="{{ $menuDetails->orderm }}">
                </div>
              </div>
             
              <div class="control-group">
                <label class="control-label">Линк</label>
                <div class="controls">
                  <input type="text" name="menu_url" id="menu_url" value="{{ $menuDetails->menu_url }}">
                </div>
              </div> 


             {{--  <div class="control-group">
                <label class="control-label">Зураг</label>
                <div class="controls">
                  <input type="file" name="imager" id="image"> --}}
                  
                  {{-- exist image --}}
                  {{-- @if(!empty($menuDetails->imager)) 
                  <input type="hidden" name="current_image" value= " {{ $menuDetails->imager }} ">
                
                    <img style="width:50px;" src="{{ asset('/images/backend_images/menus/small/'.$menuDetails->imager) }}"> 
                    |
                    <a href="{{ url('/admin/delete-menu-image/'.$menuDetails->id) }}">Зураг устгах</a>
                  @endif
                </div>
              </div> --}}
            


             {{--  <div class="control-group">
                <label class="control-label">Дээд цэс</label>
                <div class="controls">
                  <input type="checkbox" name="status_header" id="status_header"
                   @if($menuDetails->status_header == "1") checked @endif value="1">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Доод цэс</label>
                <div class="controls">
                  <input type="checkbox" name="status_footer" id="status_footer"
                   @if($menuDetails->status_footer == "1") checked @endif value="1">
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