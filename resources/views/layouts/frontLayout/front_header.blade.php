<nav class="navbar navbar-expand-md bg-white ">
    <div class="container">

        <div class="logo m-0 ">
            @foreach ($frontsetup as $fsetup)
            <a class="navbar-brand" href="/">
                    <img src="{{asset('images/frontend_images/setups/large/'.$fsetup->logo)}}"  class="d-inline-block align-top p-4 " alt="" style="width: 200px;">
                </a> @endforeach
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav nav-masthead  w-100 align-items-start ">

                @foreach($Menus as $item) @if($item->children->count() > 0) {{--
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Contact</a>
                </nav> --}}

                <li class="nav-item p-4 py-4 dropdown">
                    <a class="nav-link dropdown-toggle  m-0 p-0" href="{{$item->menu_url}}" id="dropdown06" aria-haspopup="true" aria-expanded="false">
                        <span class="arrow"></span> {{$item->menu_name}}
                    </a>

                    <div class="dropdown-menu" style="margin: 0;border-radius: 0;" aria-labelledby="dropdown06">
                        @foreach($item->children as $submenu)
                            <a class="dropdown-item" href="{{$submenu->menu_url}}">{{$submenu->menu_name}}</a> 
                        @endforeach
                    </div>
                </li>

                @else

                <li class="nav-item p-4 py-4">
                    <a class="nav-link m-0 p-0" href="{{$item->menu_url}}">{{$item->menu_name}}</a>
                </li>

                @endif 
                
                @endforeach

            </ul>

            @foreach ($frontsetup as $fsetup)

            <div class="social-groupping text-center" style="font-size: 15px;     font-size: 15px;

    position: relative;">
                <div class="facebook px-2 fb_header" style="display: inline;">
                    <a href="{{$fsetup->facebook}}" target="_blank">
                        <i class="fab fa-facebook fa-1x" style="color: #3a3e42;"></i>
                    </a>
                </div>

                <div class="twitter px-2 twi_header" style="display: inline;">
                    <a href="{{$fsetup->twitter}}" target="_blank">
                        <i class="fab fa-twitter fa-1x" style="color: #3a3e42;"></i>
                    </a>
                </div>
                @endforeach

                <style>
                    .dropdown:hover>.dropdown-menu {
                        display: block;
                    }
                </style>
            </div>
        </div>
</nav>

{{-- @if(Request::is('/')) --}} {{--
<div class="row lc-row" style="padding: 0;margin: 0;">
    <div class="col" style="padding: 0;">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach( $Banners as $ba )
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <div class="carousel-inner">
                @foreach ($Banners as $ba)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}  align-self-center">
                    <div class="lc-slider" style="background-size:100% auto;
                        background-image: url({{url('images/backend_images/banners/large/'.$ba->image)}})">
                        <div style="background-color: #11198608;height: 100%;">
                            <div class="carousel-caption">

                                <p style="text-transform: uppercase;"> {{$ba->description}}</p>

                                <h2 class="big-car-title mb-5">{{$ba->title}}</h2> @if($ba->button_txt != null)
                                <a href="{{$ba->link}}" style="    color: white;letter-spacing: 0.3px;padding: 17px 56px;background: #47aaff9c;">
                                    <strong>{{$ba->button_txt}}</strong>
                                </a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div> --}} {{-- @elseif(!Request::is('/')) --}} @if(!Request::is('/'))

<div class="breadcrump" style="background: #f6f8fa;">
    <div class="container">
        <i class="fas fa-home"></i>
        <i class="fas fa-angle-right" style="padding: 0 10px;"></i>
        <p class="br_call" style="display: inline;"></p>
    </div>
</div>

@endif