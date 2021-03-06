
@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
        <div id="content-header">
            <div id="breadcrumb"> <a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
              <i class="icon-home"></i> Нүүр</a> 
              <a href="/admin/view-posts">Бүх мэдээ</a>
               </div>
      <h1>Бүх мэдээ</h1>
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
    
      <a class="btn btn-primary" href="{{url('admin/add-post')}}">Мэдээ нэмэх</a>
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
                    <th>Линк</th>
                    <th>Category name</th>
                    <th>Статус</th>
                    <th>Зураг</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        
                    <tr class="odd gradeX">
                        <td>{{ $post->id }}</td>
                        <td><a href="/post/{{$post->id}}" target="_blank">{{ $post->post_title }}</a></td>
                        <td>/post/{{ $post->id }}</td>
                        <td>{{ $post->category_name }}</td>
                        <td>  
                              @if ($post->status) 
                                <i class="icon-globe icon-2x"></i>
                              @else
                                <i class="icon-eye-open"></i>
                              @endif 
                        </td>

                        @if(!empty('$post->image'))
                        <td style="text-align:center;">
                        
                  <img src="{{ asset ('/images/backend_images/posts/small/'.$post->image) }}" style="width:80px;height:40px;">

                        </td>
                        @endif

                        <td class="center">
                          <a href="{{ url('/admin/edit-post', $post->id ) }}" class="btn btn-primary">ЗАСАХ</a>
                        <a id="delPost" class="btn btn-danger"  href="{{ url('/admin/delete-post/'.$post->id ) }}">УСТГАХ</a>
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