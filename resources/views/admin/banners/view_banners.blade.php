
@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
        <div id="content-header">
            <div id="breadcrumb"> <a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
              <i class="icon-home"></i> Нүүр</a> 
              <a href="#">Баннер ажиллагаа</a>
               </div>
      <h1>Бүгд</h1>
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
    
      <a class="btn btn-primary" href="{{url('admin/add-banner')}}">Нэмэх</a>
      <hr>

      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>Жагсаалт</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Гарчиг</th>
                    <th>Текст</th>
                    <th>Линк</th>
                    <th>Зураг</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                   
                    @foreach ($banners as $banner)
                        
                    <tr class="odd gradeX">
                       
                        <td>{{ $banner->id }}</td>
                        <td>{{ $banner->title }}</td>
                        <td>{{ $banner->description }}</td>
                        <td>{{ $banner->link }}</td>

                        @if(!empty('$banner->image'))
                        <td style="text-align:center;">
                              <img src="{{ asset ('/images/backend_images/banners/small/'.$banner->image) }}" style="width:80px;height:40px;">
                        </td>

                        @endif
                        
                        <td class="center">
                          <a href="{{ url('/admin/edit-banner', $banner->id ) }}" class="btn btn-primary">ЗАСАХ</a>
                          <a id="delBanner" class="btn btn-danger"  href="{{ url('/admin/delete-banner/'.$banner->id ) }}">УСТГАХ</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


 

@endsection