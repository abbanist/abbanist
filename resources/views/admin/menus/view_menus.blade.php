@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom">
      <i class="icon-home"></i> Нүүр</a> 
      <a href="#">Цэснүүд</a>
       {{-- <a href="#" class="current">View Categories</a>  --}}
      </div>
    <h1>Цэснүүд</h1>
    
  </div>
  <div class="container-fluid">
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
      <a class="btn btn-primary" href="{{url('admin/add-menu')}}">Цэс нэмэх</a>
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Цэснүүд</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered ">
              <thead>
                <tr>
                  <th>ID</th>
                  <th >Level </th>
                  <th>Цэсний нэр</th>
                  <th>Order</th>
                  <th>Линк</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($menus as $menu)

                    <tr class="odd gradeX">
                        <td>{{ $menu->id }}</td>
                        <td class="lvl_">{{ $menu->parent_id }}</td>
                        <td>{{ $menu->menu_name }}</td>
                        <td>{{ $menu->orderm }}</td>
                        <td>{{ $menu->menu_url }}</td>
                        {{-- <td>{{$menu->status_header == 1 ? 'Дээд цэс' : ''}} {{$menu->status_footer== 1 ? 'Доод цэс' : ''}}</td> --}}
                        <td class="center">
                          <a class="btn btn-primary" href="{{ url('/admin/edit-menu', $menu->id ) }}">
                            ЗАСАХ
                          </a>
                          <a id="delMenu" class="btn btn-danger"  href="{{ url('/admin/delete-menu', $menu->id ) }}">
                            УСТГАХ
                          </a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection