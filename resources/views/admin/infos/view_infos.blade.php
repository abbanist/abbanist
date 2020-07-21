
@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Нүүр</a>
         <a href="#" class="current">Бүх танилцуулга</a> 
        </div>
      <h1>Бүх танилцуулга</h1>
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
    
      <a class="btn btn-primary" href="{{url('admin/add-info')}}">Нэмэх</a>
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
                    {{-- <th>Product Id</th>
                    <th>Category Id</th>
                    <th>Category name</th>
                    {{-- <th>Product Name</th> --}}
                    <th>#</th>
                    <th>Гарчиг</th>
                    <th>Зураг</th>
                    <th>Жижиг гарчиг</th>
                    {{-- <th>Нийтлэл</th> --}}
                    {{-- <th>Price</th> --}}
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($infos as $info)
                        
                    <tr class="odd gradeX">
                        <td>{{ $info->id }}</td>
                        {{-- <td>{{ $post->category_id }}</td> --}}
                        {{-- <td>{{ $post->category_name }}</td> --}}
                        <td>{{ $info->title }}</td>
                        {{-- <td>{{ $post->post_content }}</td> --}}
                        {{-- <td>{{ $post->post_code }}</td> --}}
                        {{-- <td>{{ $post->post_color }}</td> --}}
                        {{-- <td>{{ $post->price }}</td> --}}
                        
                        @if(!empty('$info->image'))
                        <td style="text-align:center;">
                            <img src="{{ asset ('/images/backend_images/infos/small/'.$info->image) }}" style="width:50px;">
                          </td>
                          @endif
                          <td>{{ $info->small_title }}</td>

                        <td class="center">
                          <a href="{{ url('/admin/edit-info', $info->id ) }}" class="btn btn-primary">ЗАСАХ</a>
                          <a id="delInfo" class="btn btn-danger"  href="{{ url('/admin/delete-info/'.$info->id ) }}">УСТГАХ</a>
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