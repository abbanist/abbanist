@extends('layouts.adminLayout.admin_design') @section('content')

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb">
            <a href="/adminizer/dashboard" title="Go to Home" class="tip-bottom">
                <i class="icon-home"></i> Нүүр
            </a>
        </div>
    </div>
    <!--End-breadcrumbs-->
    <!--Action boxes-->
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb">
                    <a href="{{url('adminizer/dashboard/')}}">
                        <i class="icon-dashboard"></i>
                        <span class="label label-important">20</span>Хянах самбар
                    </a>
                </li>
                <li class="bg_lg span3">
                    <a href="#">
                        <i class="icon-signal"></i> Статус
                    </a>
                </li>
                <li class="bg_ly">
                    <a href="#">
                        <i class="icon-inbox"></i>
                        <span class="label label-success">101</span> Widgets
                    </a>
                </li>
                <li class="bg_lo">
                    <a href="#">
                        <i class="icon-th"></i> Tables
                    </a>
                </li>

                <li class="bg_ls">
                    <a href="#">
                        <i class="icon-fullscreen"></i>
                    </a>
                </li>
                {{--
                <li class="bg_lo span3">
                    <a href="form-common.html">
                        <i class="icon-th-list"></i> Forms
                    </a>
                </li>
                <li class="bg_ls">
                    <a href="buttons.html">
                        <i class="icon-tint"></i> Buttons
                    </a>
                </li>
                <li class="bg_lb">
                    <a href="interface.html">
                        <i class="icon-pencil"></i>Elements
                    </a>
                </li>
                <li class="bg_lg">
                    <a href="calendar.html">
                        <i class="icon-calendar"></i> Calendar
                    </a>
                </li>
                <li class="bg_lr">
                    <a href="error404.html">
                        <i class="icon-info-sign"></i> Error
                    </a>
                </li> --}}
            </ul>
        </div>
        <!--End-Action boxes-->
        <!--Chart-box-->
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title bg_lg">
                    <span class="icon">
						<i class="icon-signal"></i>
					</span>
                    <h5>Статус</h5>
                </div>
                <div class="widget-content">
                    <div class="row-fluid">

                        <div class="span6">
                            <ul class="site-stats">
                                <li class="bg_lh">
                                    <a href="/admin/view-posts" style="color:white;">
                                        <i class="icon-file"></i>
                                        <strong>{{$postCount}}</strong>
                                        <small>Нийтлэл</small>
                                    </a>
                                </li>
                                <li class="bg_lh">
                                    <a href="/admin/view-pages" style="color:white;">
                                        <i class="icon-file"></i>
                                        <strong>{{$pageCount}}</strong>
                                        <small> Хуудас</small>
                                    </a>
                                </li>
                                {{--
                                <li class="bg_lh">
                                    <a href="/admin/view-comus" style="color:white;">
                                        <i class="icon-file"></i>
                                        <strong>{{$comCount}}</strong>
                                        <small>Компаниуд</small>
                                    </a> --}}
                                </li>
                                <li class="bg_lh">
                                    <a href="/admin/view-infos" style="color:white;">
                                        <i class="icon-tag"></i>
                                        <strong>{{$infoCount}}</strong>
                                        <small>Танилцуулга</small>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="span6">
                            <div class="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End-Chart-box-->
        <hr/> {{--
        <div class="row-fluid">
            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2">
                        <span class="icon">
							<i class="icon-file"></i>
						</span>
                        <h5>Сүүлд оруулсан нийтлэл</h5>
                    </div>

                    <div class="widget-content nopadding collapse in" id="">
                        <ul class="recent-posts">
                            <li>
                                <div class="user-thumb">
                                    <img width="40" height="40" alt="User" src="{{ asset('images/backend_images/demo/av1.jpg') }}">
                                </div>
                                <div class="article-post">
                                    <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                                    <p>
                                        <a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="user-thumb">
                                    <img width="40" height="40" alt="User" src="{{ asset('images/backend_images/demo/av2.jpg' )}}">
                                </div>
                                <div class="article-post">
                                    <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                                    <p>
                                        <a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="user-thumb">
                                    <img width="40" height="40" alt="User" src="{{ asset('images/backend_images/demo/av4.jpg') }}">
                                </div>
                                <div class="article-post">
                                    <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                                    <p>
                                        <a href="#">This is a much longer one that will go on for a few lines.Itaffle to pad out the comment.</a>
                                    </p>
                                </div>
                                <li>
                                    <button class="btn btn-warning btn-mini">View All</button>
                                </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="span6">
                <div class="widget-box">
                    <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG3">
                        <span class="icon">
                          <i class="icon-file"></i>
                        </span>
                        <h5>Байгууллагууд</h5>
                    </div>

                    <div class="widget-content nopadding collapse in" id="">
                        <ul class="recent-posts">
                            <li>
                                <div class="user-thumb">
                                    <img width="40" height="40" alt="User" src="{{ asset('images/backend_images/demo/av1.jpg') }}">
                                </div>
                                <div class="article-post">
                                    <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                                    <p>
                                        <a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="user-thumb">
                                    <img width="40" height="40" alt="User" src="{{ asset('images/backend_images/demo/av2.jpg' )}}">
                                </div>
                                <div class="article-post">
                                    <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                                    <p>
                                        <a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="user-thumb">
                                    <img width="40" height="40" alt="User" src="{{ asset('images/backend_images/demo/av4.jpg') }}">
                                </div>
                                <div class="article-post">
                                    <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                                    <p>
                                        <a href="#">This is a much longer one that will go on for a few lines.Itaffle to pad out the comment.</a>
                                    </p>
                                </div>
                                <li>
                                    <button class="btn btn-warning btn-mini">View All</button>
                                </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div> --}}
    </div>
</div>
<!--end-main-container-part-->

@endsection