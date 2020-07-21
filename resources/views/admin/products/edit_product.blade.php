@extends('layouts.adminLayout.admin_design') @section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb">
      <a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Нүүр</a>
      <a href="/admin/view-products">Бүх Бүтээгдэхүүн</a>
      <a href="#">Бүтээгдэхүүн засах</a>

    </div>
    <h1>Бүтээгдэхүүн засах</h1>
  </div>

  <div class="container-fluid">

    @if(Session::has('flash_message_error'))
    <div class="alert alert-error alert-block">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>{!! session('flash_message_error') !!}</strong>
    </div>
    @endif @if(Session::has('flash_message_success'))
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
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Бүтээгдэхүүн засах</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/edit-product/'. $productDetails->id) }}" name="edit_product" id="edit_product" novalidate="novalidate"> {{ csrf_field() }}

              <div class="control-group">
                <label class="control-label">Нийтэд харагдах</label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" @if($productDetails->status == "1") checked @endif value="1">
                </div>
              </div> 

              <div class="control-group">
                <label class="control-label">Тооцоолуур гаргах</label>
                <div class="controls">
                  <input type="checkbox" name="shingen" id="shingen" @if($productDetails->shingen == "1") checked @endif value="1">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Гарчиг</label>
                <div class="controls">
                  <input class="span6" type="text" name="title" id="title" value="{{$productDetails->title}}">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Онцлох зураг</label>
                <div class="controls">
                  <input type="file" name="image" id="image"> {{-- exist image --}} @if(!empty($productDetails->image))
                  <input type="hidden" name="current_image" value="{{ $productDetails->image }}">
                  <img style="width:50px;" src="{{ asset('/images/backend_images/products/small/'.$productDetails->image) }}"> |
                  <a href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}">Зураг устгах</a> @endif
                </div>
              </div>

              <div class="control-group">
                <div style="width:90%;">
                  <label class="control-label">Нийтлэл</label>
                  <div class="controls">
                    <textarea name="content" id="content" class="form-control my-editor">
                    {{$productDetails->content}}
                    </textarea>
                  </div>
                </div>
              </div>

              <div style="    background: #c5c5c5;
    color: white;
    font-size: 20px;
    padding: 20px;">Content </div>
              <div class="control-group">
                <div style="width:90%;">
                  <label class="control-label">Description</label>
                  <div class="controls">
                    <textarea name="description" class="form-control my-editor">
                    {{$productDetails->description}}
                    </textarea>
                  </div>
                </div>
              </div>
              <div style="    background: #c5c5c5;
    color: white;
    font-size: 20px;
    padding: 20px;">Content </div>

      <div class="control-group">
                      <label class="control-label">Бүтээгдэхүүн үнэ</label>
                        <div class ="controls">
                          <input type="text" name="mainprice" id="mainprice" 
                          value="{{$productDetails->mainprice}}">
                        </div>
                    </div> 
                    
              <div class="control-group">
                <label class="control-label">Үнэ1</label>
                <div class="controls">
                  <input type="text" name="une1" id="une1" value=" {{$productDetails->une1}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Үнэ2</label>
                <div class="controls">
                  <input type="text" name="une2" id="une2" value=" {{$productDetails->une2}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Үнэ2</label>
                <div class="controls">
                  <input type="text" name="une3" id="une3" value=" {{$productDetails->une3}}">
                </div>
              </div>

              <div style="    background: #c5c5c5;
    color: white;
    font-size: 20px;
    padding: 20px;">Серtификаt оруулах</div>

              <div class="control-group">
                <label class="control-label">Certificate 1</label>
                <div class="controls">
                     Линк <input type="text" name="cer1link" id="cer1link" value="{{ $productDetails->cer1link }}">
                  <input type="file" name="cer1" id="cer1"> {{-- exist image --}} @if(!empty($productDetails->cer1))
                  <input type="hidden" name="current_cer1" value="{{ $productDetails->cer1 }}">
                  <img style="width:50px;" src="{{ asset('/images/backend_images/products/small/'.$productDetails->cer1) }}"> |
                  <a href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}">Зураг устгах</a> @endif
                </div>

                <label class="control-label">Certificate 2</label>
                <div class="controls">
                     Линк <input type="text" name="cer2link" id="cer2link" value="{{ $productDetails->cer2link }}">
                  <input type="file" name="cer2" id="cer2"> {{-- exist image --}} @if(!empty($productDetails->cer2))
                  <input type="hidden" name="current_cer2" value="{{ $productDetails->cer2 }}">
                  <img style="width:50px;" src="{{ asset('/images/backend_images/products/small/'.$productDetails->cer2) }}"> |
                  <a href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}">Зураг устгах</a> @endif
                </div>

                <label class="control-label">Certificate 3</label>
                <div class="controls">
                     Линк <input type="text" name="cer3link" id="cer3link" value="{{ $productDetails->cer3link }}">
                  <input type="file" name="cer3" id="cer3"> {{-- exist image --}} @if(!empty($productDetails->cer3))
                  <input type="hidden" name="current_cer3" value="{{ $productDetails->cer3 }}">
                  <img style="width:50px;" src="{{ asset('/images/backend_images/products/small/'.$productDetails->cer3) }}"> |
                  <a href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}">Зураг устгах</a> @endif
                </div>

                <label class="control-label">Certificate 4</label>
                <div class="controls">
                     Линк <input type="text" name="cer4link" id="cer4link" value="{{ $productDetails->cer4link }}">
                  <input type="file" name="cer4" id="cer4"> {{-- exist image --}} @if(!empty($productDetails->cer4))
                  <input type="hidden" name="current_cer4" value="{{ $productDetails->cer4 }}">
                  <img style="width:50px;" src="{{ asset('/images/backend_images/products/small/'.$productDetails->cer4) }}"> |
                  <a href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}">Зураг устгах</a> @endif
                </div>

                <label class="control-label">Certificate 5</label>
                <div class="controls">
                     Линк <input type="text" name="cer5link" id="cer5link" value="{{ $productDetails->cer5link }}">
                  <input type="file" name="cer5" id="cer5"> {{-- exist cer5 --}} @if(!empty($productDetails->cer5))
                  <input type="hidden" name="current_cer5" value="{{ $productDetails->cer5 }}">
                  <img style="width:50px;" src="{{ asset('/images/backend_images/products/small/'.$productDetails->cer5) }}"> |
                  <a href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}">Зураг устгах</a> @endif
                </div>
                
                <label class="control-label">Certificate 6</label>
                <div class="controls">
                     Линк <input type="text" name="cer6link" id="cer6link" value="{{ $productDetails->cer6link }}">
                  <input type="file" name="cer6" id="cer6">
                  {{-- exist cer5 --}} 
                  
                  @if(!empty($productDetails->cer6))
                  <input type="hidden" name="current_cer6" value="{{ $productDetails->cer6 }}">
                  <img style="width:50px;" src="{{ asset('/images/backend_images/products/small/'.$productDetails->cer6) }}"> |
                  <a href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}">Зураг устгах</a> @endif
                </div>
                
                  <label class="control-label">Certificate 7</label>
                <div class="controls">
                     Линк <input type="text" name="cer7link" id="cer7link" value="{{ $productDetails->cer7link }}">
                  <input type="file" name="cer7" id="cer7"> {{-- exist cer5 --}} @if(!empty($productDetails->cer7))
                  <input type="hidden" name="current_cer7" value="{{ $productDetails->cer7 }}">
                  <img style="width:50px;" src="{{ asset('/images/backend_images/products/small/'.$productDetails->cer7) }}"> |
                  <a href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}">Зураг устгах</a> @endif
                </div>
                
                   <label class="control-label">Certificate 8</label>
                <div class="controls">
                     Линк <input type="text" name="cer8link" id="cer8link" value="{{ $productDetails->cer8link }}">
                  <input type="file" name="cer8" id="cer8"> {{-- exist cer5 --}} @if(!empty($productDetails->cer8))
                  <input type="hidden" name="current_cer8" value="{{ $productDetails->cer8 }}">
                  <img style="width:50px;" src="{{ asset('/images/backend_images/products/small/'.$productDetails->cer8) }}"> |
                  <a href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}">Зураг устгах</a> @endif
                </div>
                

              </div>

              <div style="    background: #c5c5c5;
    color: white;
    font-size: 20px;
    padding: 20px;">Видео оруулах</div>
              <div class="control-group">
                <label class="control-label">Онцлох видео линк</label>
                <div class="controls">
                  <input type="text" name="f_video" id="f_video" value=" {{$productDetails->f_video}}">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Линк 1</label>
                <div class="controls">
                  <input type="text" name="video_scroll_a" id="video_scroll_a" value=" {{$productDetails->video_scroll_a}}">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Линк 2</label>
                <div class="controls">
                  <input type="text" name="video_scroll_b" id="video_scroll_b" value=" {{$productDetails->video_scroll_b}}">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Линк 3</label>
                <div class="controls">
                  <input type="text" name="video_scroll_c" id="video_scroll_c" value=" {{$productDetails->video_scroll_c}}">
                </div>
              </div>



    <div style="    background: #c5c5c5;
    color: white;
    font-size: 20px;
    padding: 20px;">Асуулt хариулt</div>


             
              <div class="control-group">
                <div style="width:90%;">
                  <label class="control-label">Асуулt / Хариулt</label>
                  <div class="controls">
                    <textarea name="faq" id="faq" class="form-control my-editor">
                    {{$productDetails->faq}}
                    </textarea>
                  </div>
                </div>
              </div>

    


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
