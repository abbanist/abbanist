@extends('layouts.adminLayout.admin_design') @section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
            <a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
                <i class="icon-home"></i> Нүүр</a>
            <a href="/admin/view-products">Бүх Бүтээгдэхүүн</a>
            <a href="#">Бүтээгдэхүүн нэмэх</a>
        </div>
        <h1>Бүтээгдэхүүн</h1>
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
                        <h5>Нийтлэл </h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add-product') }}" name="add_product" id="add_product" novalidate="novalidate"> {{ csrf_field() }}

                            <div class="control-group">
                                <label class="control-label">Нийтэд харагдах</label>
                                <div class="controls">
                                    <input type="checkbox" name="status" id="status" value="1" checked>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Тооцоолуур гаргах</label>
                                <div class="controls">
                                    <input type="checkbox" name="shingen" id="shingen" value="1" checked>
                                </div>
                            </div>

                            {{--
                            <div class="control-group">
                                <label class="control-label">Онцлох зураг</label>
                                <div class="controls">
                                    <input type="file" name="image" id="image">
                                </div>
                            </div>
                            --}}

                            <div class="control-group">
                                <label class="control-label">Онцлох зураг</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-undefined">
                                        <input name="image" id="image" type="file" size="19" style="opacity: 0;">
                                        <span class="filename">No file selected</span>
                                        <span class="action">Choose File</span>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Гарчиг</label>
                                <div class="controls">
                                    <input type="text" name="title" id="title">
                                </div>
                            </div>

                            <div class="control-group">
                                <div style="width:90%;">
                                    <label class="control-label">Нийтлэл</label>
                                    <div class="controls">
                                        <textarea name="content" class="form-control my-editor"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div style="width:90%;">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea name="description" class="form-control my-editor"></textarea>
                                    </div>
                                </div>
                            </div>


  <div style="    background: #c5c5c5;
    color: white;
    font-size: 20px;
    padding: 20px;">Content </div>
    
                            <div class="control-group">
                                <label class="control-label">Бүтээгдэхүүн үнэ</label>
                                <div class="controls">
                                    <input type="text" name="mainprice" id="mainprice" value="">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Үнэ1</label>
                                <div class="controls">
                                    <input type="text" name="une1" id="une1" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Үнэ2</label>
                                <div class="controls">
                                    <input type="text" name="une2" id="une2" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Үнэ2</label>
                                <div class="controls">
                                    <input type="text" name="une3" id="une3" value="">
                                </div>
                            </div>


 <div style="    background: #c5c5c5;
    color: white;
    font-size: 20px;
    padding: 20px;">Серtификаt оруулах</div>


                            <div class="control-group">
                               
                                <label class="control-label">Certificate 1</label>
                                <div class="controls">
                                    Линк <input type="text" name="cer1link" id="cer1link" value="">
                                    <div class="uploader" id="uniform-undefined">
                                        <input name="cer1" id="cer1" type="file" size="19" style="opacity: 0;">
                                        <span class="filename">No file selected</span>
                                        <span class="action">Choose File</span>
                                    </div>
                                </div>

                                <label class="control-label">Certificate 1</label>
                                <div class="controls">
                                     Линк <input type="text" name="cer2link" id="cer2link" value="">
                                    <div class="uploader" id="uniform-undefined">
                                        <input name="cer2" id="cer2" type="file" size="19" style="opacity: 0;">
                                        <span class="filename">No file selected</span>
                                        <span class="action">Choose File</span>
                                    </div>
                                </div>

                                <label class="control-label">Certificate 3</label>
                                <div class="controls">
                                     Линк <input type="text" name="cer3link" id="cer3link" value="">
                                    <div class="uploader" id="uniform-undefined">
                                        <input name="cer3" id="cer3" type="file" size="19" style="opacity: 0;">
                                        <span class="filename">No file selected</span>
                                        <span class="action">Choose File</span>
                                    </div>
                                </div>

                                <label class="control-label">Certificate 4</label>
                                <div class="controls">
                                     Линк <input type="text" name="cer4link" id="cer4link" value="">
                                    <div class="uploader" id="uniform-undefined">
                                        <input name="cer4" id="cer4" type="file" size="19" style="opacity: 0;">
                                        <span class="filename">No file selected</span>
                                        <span class="action">Choose File</span>
                                    </div>
                                </div>

                                <label class="control-label">Certificate 5</label>
                                <div class="controls">
                                     Линк <input type="text" name="cer5link" id="cer5link" value="">
                                    <div class="uploader" id="uniform-undefined">
                                        <input name="cer5" id="cer5" type="file" size="19" style="opacity: 0;">
                                        <span class="filename">No file selected</span>
                                        <span class="action">Choose File</span>
                                    </div>
                                </div>
                                
                                  <label class="control-label">Certificate 6</label>
                                <div class="controls">
                                     Линк <input type="text" name="cer6link" id="cer6link" value="">
                                    <div class="uploader" id="uniform-undefined">
                                        <input name="cer6" id="cer6" type="file" size="19" style="opacity: 0;">
                                        <span class="filename">No file selected</span>
                                        <span class="action">Choose File</span>
                                    </div>
                                </div>
                                
                                  <label class="control-label">Certificate 7</label>
                                <div class="controls">
                                     Линк <input type="text" name="cer7link" id="cer7link" value="">
                                    <div class="uploader" id="uniform-undefined">
                                        <input name="cer7" id="cer7" type="file" size="19" style="opacity: 0;">
                                        <span class="filename">No file selected</span>
                                        <span class="action">Choose File</span>
                                    </div>
                                </div>
                                
                                  <label class="control-label">Certificate 8</label>
                                <div class="controls">
                                     Линк <input type="text" name="cer8link" id="cer8link" value="">
                                    <div class="uploader" id="uniform-undefined">
                                        <input name="cer8" id="cer8" type="file" size="19" style="opacity: 0;">
                                        <span class="filename">No file selected</span>
                                        <span class="action">Choose File</span>
                                    </div>
                                </div>

                            </div>



              <div style="    background: #c5c5c5;
    color: white;
    font-size: 20px;
    padding: 20px;">Видео оруулах</div>
    
                            <div class="control-group">
                                <label class="control-label">Онцлох видео линк</label>
                                <div class="controls">
                                    <input type="text" name="f_video" id="f_video" value="">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Линк 1</label>
                                <div class="controls">
                                    <input type="text" name="video_scroll_a" id="video_scroll_a" value="">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Линк 2</label>
                                <div class="controls">
                                    <input type="text" name="video_scroll_b" id="video_scroll_b" value="">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Линк 3</label>
                                <div class="controls">
                                    <input type="text" name="video_scroll_c" id="video_scroll_c" value="">
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
                                        </textarea>
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