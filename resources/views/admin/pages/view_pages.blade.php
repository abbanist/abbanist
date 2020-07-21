@extends('layouts.adminLayout.admin_design') @section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
            <a href="/admin/dashboard" title="Go to Home" class="tip-bottom">
                <i class="icon-home"></i>
                Нүүр</a>
            <a href="#" class="current">Бүх хуудас</a>
        </div>
        <h1>Бүх хуудас</h1>
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
        <a class="btn btn-primary" href="{{url('admin/add-page')}}">Хуудас нэмэх</a>
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon">
                            <i class="icon-th"></i>
                        </span>
                        <h5>Жагсаалт</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Гарчиг</th>
                                    <th>Линк</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)

                                <tr class="odd gradeX">
                                    <td>{{ $page->id }}</td>
                                    <td>{{ $page->page_title }}</td>
                                    <td>/page/{{ $page->id }}</td>

                                    {{-- @if(!empty('$page->image'))
                                    <td
                                        style="background-size:cover; background-image:url('{{ asset ('/images/backend_images/products/small/'.$page->image) }}');"> --}}
                                        {{-- <img src="{{ asset ('/images/backend_images/products/small/'.$product->image) }}" style="width:40px;"> --}}
                                    {{-- </td>
                                    @endif --}}

                                    <td class="center">
                                        <a href="{{ url('/admin/edit-page', $page->id ) }}" class="btn btn-primary">ЗАСАХ</a>
                                        <a
                                            id="delPage"
                                            class="btn btn-danger"
                                            href="{{ url('/admin/delete-page/'.$page->id ) }}">УСТГАХ</a>
                                    </td>
                                </tr>

                                {{-- <div id="myModal{{$page->id}}" class="modal hide">
                                    <div class="modal-header">
                                        <button data-dismiss="modal" class="close" type="button">×</button>
                                        <h3>{{ $page->page_title }}</h3>
                                    </div>
                                    <div class="modal-body">
                                        <p>Агуулга:
                                            {{ $page->page_content }}</p>
                                    </div>
                                </div> --}}
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