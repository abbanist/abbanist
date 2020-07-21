
@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
        <div id="content-header">
            <div id="breadcrumb"> <a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
              <i class="icon-home"></i> Нүүр</a> 
              <a href="/admin/view-products">Бүх бүтээгдэхүүн</a>
               </div>
      <h1>Бүх бүтээгдэхүүн</h1>
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
    
      <a class="btn btn-primary" href="{{url('admin/add-product')}}">Бүтээгдэхүүн нэмэх</a>
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
                    <th>Статус</th>
                    <th>Зураг</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        
                    <tr class="odd gradeX">
                        <td>{{ $product->id }}</td>
                        
                        <td>
                            <a href="/product/{{$product->id}}" target="_blank">{{ $product->title }}</a>
                        </td>
                        <td>/product/{{ $product->id }}</td>

                        <td>  
                              @if ($product->status) 
                                <i class="icon-globe icon-2x"></i>
                              @else
                                <i class="icon-eye-open"></i>
                              @endif 
                        </td>

                        @if(!empty('$product->image'))
                          <td style="text-align:center;">
                            <img src="{{ asset ('/images/backend_images/products/small/'.$product->image) }}" 
                            style="width:80px;height:40px;">
                          </td>
                        @endif

                        <td class="center">
                          <a href="{{ url('/admin/edit-product', $product->id ) }}" class="btn btn-primary">ЗАСАХ</a>
                           <a href="{{ url('/admin/add-images/'.$product->id ) }}" class="btn btn-primary"> Зураг нэмэх
                           </a>
                          <a id="delProductive" class="btn btn-danger"  href="{{ url('/admin/delete-product/'.$product->id ) }}">УСТГАХ
                          </a>
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