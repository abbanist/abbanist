@extends('layouts.adminLayout.admin_design')

@section('content')

<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="{{url('admin/dashboard/')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Нүүр</a> <a href="#"></a>
         </div>
      <h1>ЗАГВАР тохиргоо</h1>
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

      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Хэрэглэгч тохиргоо</h5>
            </div>
            <div class="widget-content nopadding">
                  <form enctype = "multipart/form-data" class="form-horizontal" method="post" 
                  action="{{ url('/admin/frontend-setup/') }}" 
                  name="frontend-setup" id="frontend-setup" novalidate="novalidate"> {{ csrf_field() }}
                  
                <div class="tabbable tabs-left">
                  <ul class="nav nav-tabs">
                    {{-- <li class="active"><a href="#lA" data-toggle="tab">GENERAL</a></li> --}}
                    <li class="active"><a href="#lB" data-toggle="tab">HEADER</a></li>
                    <li class=""><a href="#lC" data-toggle="tab">HOME PAGE</a></li>
                    <li class=""><a href="#lD" data-toggle="tab">SIDEBAR</a></li>
                    <li class=""><a href="#lE" data-toggle="tab">FOOTER</a></li>
                  </ul>

                  <div class="tab-content">
                   
                    <div class="tab-pane active" id="lB">

                    <div class="control-group">
                      <label class="control-label">Сайтын гарчиг</label>
                        <div class ="controls">
                          <input type="text" name="site_title" id="site_title"
                           value="{{$setupDetails->site_title}}">
                      </div>
                    </div>


                      <div class="control-group">
                        <label class="control-label">Сайтын лого</label>

                        <div class="controls">
                          <input type="file" name="image" id="logo">
                          
                          @if(!empty($setupDetails->logo))
                            <input type="hidden" name="current_image" value="{{$setupDetails->logo}}">
                            <div style="display:inline-block;width:100px;">
                            <img style="width: 100%;height: 30px;"  
                            src="{{ asset('/images/frontend_images/setups/large/'.$setupDetails->logo) }}"> 
                          </div>
                            |
                            <a href="{{ url('/admin/delete-logo/') }}">Зураг устгах</a>
                            @endif 
                          </div>
                        </div> 


                        <div class="control-group">
                        <label class="control-label">Favicon</label>

                          <div class="controls">
                          <input type="file" name="favicon" id="favicon">
                          
                            @if(!empty($setupDetails->favicon))
                            <input type="hidden" name="current_favicon" value="{{$setupDetails->favicon}}">
                            
                                <div style="display:inline-block;width:100px;">
                                    <img style="width: 100%;height: 30px;"  src="{{ asset('/images/frontend_images/setups/large/'.$setupDetails->favicon) }}"> 
                                </div>
                            |
                            <a href="{{ url('/admin/delete-favicon/') }}">Зураг устгах</a>
                            @endif 
                          </div>
                        </div> 
                    </div> 


{{-- sidebar --}}
                  <div class="tab-pane" id="lD">


                    <div class="control-group">
                      <label class="control-label">Facebook page url</label>
                        <div class ="controls">
                          <input type="text" name="facebook_page"  id="facebook_page" 
                          value="{{$setupDetails->facebook_page}}" style="width: 500px;">
                        </div>
                    </div> 





                     <div class="control-group">
                      <label class="control-label">Баннер </label>
                        <div class="footer-text" style="width:800px;">

                        <div class ="controls">
                          <textarea name ="banner_sidebar" id="banner_sidebar" class="form-control my-editor">
                            {{$setupDetails->banner_sidebar}}
                          </textarea>
                      </div>
                      </div>
                      
                    </div> 


                  </div>


{{-- home --}}

                  <div class="tab-pane" id="lC">

                    <!--<div class="control-group">-->
                    <!--  <label class="control-label">Видео embed</label>-->
                    <!--    <div class ="controls">-->
                    <!--      <input type="text" name="video_embed" id="video_embed" -->
                    <!--      value="{{$setupDetails->video_embed}}">-->
                    <!--    </div>-->
                    <!--</div> -->

                    <!--<div class="control-group">-->
                    <!--  <label class="control-label">Видео embed</label>-->
                    <!--    <div class ="controls">-->
                    <!--      <input type="text" name="video_embed" id="video_embed" -->
                    <!--      value="{{$setupDetails->video_embed}}">-->
                    <!--    </div>-->
                    <!--</div> -->

    
                      <div class="control-group">
                        <label class="control-label">Зүүн зураг</label>

                        <div class="controls">
                          <input type="file" name="leftimage" id="leftimage">
                          
                          @if(!empty($setupDetails->leftimage))
                            <input type="hidden" name="current_image_left" value="{{$setupDetails->leftimage}}">
                            <div style="display:inline-block;width:100px;">
                            <img style="width: 100%;height: 30px;"  
                            src="{{ asset('/images/frontend_images/setups/large/'.$setupDetails->leftimage) }}"> 
                          </div>
                            |
                            <a href="{{ url('/admin/delete-leftimage/') }}">Зураг устгах</a>
                            @endif 
                          </div>
                        </div> 

                    <div class="control-group">
                      <label class="control-label">Видео текст</label>
                      <div class="footer-text" style="width:800px;">
                        <div class ="controls">
                          <textarea name ="video_description" id="video_text" class="form-control my-editor">
                            {{$setupDetails->video_description}}</textarea>
                      </div>
                      </div>
                    </div>  

                    <div class="control-group">
                      <label class="control-label">БҮТЭЭГДЭХҮҮН</label>
                        <div class ="controls">
                          <input type="text" name="product_title" id="news_title"
                           value="{{$setupDetails->product_title}}">
                      </div>
                    </div>


{{-- blog --}}
                    <div class="control-group">
                      <label class="control-label">МЭДЭЭЛЭЛ</label>
                        <div class ="controls">
                          <input type="text" name="blog_title" id="news_title" 
                          value="{{$setupDetails->blog_title}}">
                      </div>
                    </div>


{{-- partner --}}
                    <div class="control-group">
                      <label class="control-label">ХАМТРАГЧ БАЙГУУЛЛАГУУД</label>
                        <div class ="controls">
                          <input type="text" name="partner_title" id="hamts_title" 
                          value="{{$setupDetails->partner_title}}">
                      </div>
                    </div>


                    <div class="control-group">
                      <label class="control-label">Текст</label>
                      <div class="footer-text" style="width:800px;">
                        <div class ="controls">
                          <textarea name ="partner_description" id="partner_description" class="form-control my-editor">
                            {{$setupDetails->partner_description}}
                          </textarea>
                      </div>
                      </div>
                    </div> 
                  </div>  


{{-- ******************************** FOOTER ********************************** --}}

                <div class="tab-pane" id="lE">
                  
                   <div class="control-group">
                    <label class="control-label">BACKGROUND IMAGE</label>

                    <div class="controls">
                      <input type="file" name="order_promo_bg" id="order_promo_bg">
                      
                      @if(!empty($setupDetails->order_promo_bg))
                        <input type="hidden" name="current_order_promo_bg" value="{{$setupDetails->order_promo_bg}}">
                        <div style="display:inline-block;width:300px;">
                        <img style="width: 100%;height: 100px;"  
                        src="{{ asset('/images/frontend_images/setups/large/'.$setupDetails->order_promo_bg) }}"> 
                      </div>
                        |
                        <a href="{{ url('/admin/delete-promo-bg/') }}">Зураг устгах</a>
                        @endif 
                      </div>
                    </div> 

                   
                    <div class="control-group">
                      <label class="control-label">SHORT TITLE</label>
                        <div class ="controls">
                          <input type="text" name="order_promo_title" id="order_promo_title" 
                          value="{{$setupDetails->order_promo_title}}">
                      </div>
                    </div>

                     <div class="control-group">
                      <label class="control-label">BUTTON TEXT</label>
                        <div class="footer-text" style="width:800px;">
                          <div class ="controls">

                            <input type="text" name="order_promo_btn_text" id="order_promo_btn_text" 
                          value="{{$setupDetails->order_promo_btn_text}}">

                          </div>
                        </div>
                    </div>

                     <div class="control-group">
                      <label class="control-label">BUTTON LINK</label>
                        <div class="footer-text" style="width:800px;">
                          <div class ="controls">

                            <input type="text" name="order_promo_btn_link" id="order_promo_btn_link" 
                          value="{{$setupDetails->order_promo_btn_link}}">

                          </div>
                        </div>
                    </div>


                    <div class="control-group">
                      <label class="control-label">ХАЯГ</label>
                        <div class="footer-text" style="width:800px;">
                          <div class ="controls">
                            <textarea name ="footer_address" id="footer_address" 
                            class="form-control my-editor">{{$setupDetails->footer_address}}</textarea>
                          </div>
                        </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">Фэйсбүүк линк</label>
                        <div class ="controls">
                          <input type="text" name="facebook-link" id="facebook" value="{{$setupDetails->facebook}}">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">Twitter линк</label>
                        <div class ="controls">
                          <input type="text" name="twitter-link" id="twitter" value="{{$setupDetails->twitter}}">
                      </div>
                    </div>

                     <div class="control-group">
                      <label class="control-label">Youtube линк</label>
                        <div class ="controls">
                          <input type="text" name="youtube-link" id="youtube-link" value="{{$setupDetails->youtube}}">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label">Googleplus линк</label>
                        <div class ="controls">
                          <input type="text" name="googleplus-link" id="googleplus-link" value="{{$setupDetails->googleplus}}">
                      </div>
                    </div>
                      
                    <div class="control-group">
                      <label class="control-label">Инстаграм линк</label>
                        <div class ="controls">
                          <input type="text" name="instagram-link" id="instagram-link" value="{{$setupDetails->instagram}}">
                      </div>
                    </div> 
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