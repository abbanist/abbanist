
@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
        <div id="content-header">
            <div id="breadcrumb"> <a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
              <i class="icon-home"></i> Нүүр</a> 
              <a href="#">Хамтын ажиллагаа</a>
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
    
      <a class="btn btn-primary" href="{{url('admin/add-hamt')}}">Нэмэх</a>
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
                    <th>Линк</th>
                
                    <th>Зураг</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($hamts as $hamt)
                        
                    <tr class="odd gradeX">
                        <td>{{ $hamt->id }}</td>
                      
                        <td>{{ $hamt->link }}</td>
                        

                        @if(!empty('$hamt->image'))
                        <td style="text-align:center;">
                        
                              <img src="{{ asset ('/images/backend_images/hamts/small/'.$hamt->image) }}" style="width:80px;height:40px;">
                        </td>
                        @endif

                        
                        <td class="center">
                          <a href="{{$hamt->link}}" data-toggle="modal" class="btn btn-primary">ХАРАХ</a>
                          <a href="{{ url('/admin/edit-hamt', $hamt->id ) }}" class="btn btn-primary">ЗАСАХ</a>
                          <a id="delHamt" class="btn btn-danger"  href="{{ url('/admin/delete-hamt/'.$hamt->id ) }}">УСТГАХ</a>
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