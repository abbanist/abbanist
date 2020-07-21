@foreach ($frontsetup as $fronts) {{-- expr --}} {{--
<div class="row lc-row" style="background-size:cover;background-image: url({{url('images/frontend_images/setups/large/'.$fronts->order_promo_bg)}})">
    <div style="background-color: #2d2e8063;
    width: 100%;
    padding: 80px 0;">
        <div class="col-md-8 offset-2">

            <div class="box-quote text-center text-white">

                <h5 class="mb-5">{{$fronts->order_promo_title}}</h5>

                <a href="{{$fronts->order_promo_btn_link}}" style="color: #111986;
                                        letter-spacing: 0.3px;
                                        padding: 17px 56px;
                                        background: white;">

                    <strong>
                  {{$fronts->order_promo_btn_text}}
                </strong>
                </a>

            </div>
        </div>
    </div>
</div> --}}

<!-- FOOTER -->
<div class="footer" style="background-color:#bfbfbf61;  padding: 30px 0;">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-4">
                        <div class="text-left">
                            <div class="title-footer">
                                <h5 style="text-transform: uppercase;">contact</h5>
                            </div>

                            <div class="contact-info-widget mt-3 pt-3" style="font-family: 'Roboto Condensed', sans-serif;">
                                {!!$fronts->footer_address!!}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="text-left">
                            <div class="title-footer">
                                <h5 style="text-transform: uppercase;">#</h5>
                            </div>

                            <div class="contact-info-widget  mt-3 pt-3" style="font-family: 'Roboto Condensed', sans-serif;">
                                {{-- {!!$fronts->footer_address!!} --}}

                                <ul class="navbar-nav nav-masthead  w-100 align-items-start search-tootsooluur-word">

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
                                            <a class="dropdown-item" href="{{$submenu->menu_url}}">{{$submenu->menu_name}}</a> @endforeach
                                        </div>
                                    </li>

                                    @else

                                    <li class="nav-item  py-1">
                                        <a class="nav-link  text-dark m-0 p-0" href="{{$item->menu_url}}">{{$item->menu_name}}</a>
                                    </li>

                                    @endif @endforeach

                                </ul>

                            </div>
                        </div>


               


                    </div>

                    <div class="col-md-4">
                         <div class="text-left">
                            <div class="title-footer">
                                <h5 style="text-transform: uppercase;">Help</h5>
                            </div>

                            <div class="contact-info-widget mt-3 pt-3" style="font-family: 'Roboto Condensed', sans-serif;">
                                
                                    <ul class="navbar-nav nav-masthead  w-100 align-items-start ">

                                         <li class="nav-item  py-1">
                                            <a class="nav-link  text-dark m-0 p-0" href="/page/18">Он цагийн хүрд</a>
                                        </li>
                                        <li class="nav-item  py-1">
                                            <a class="nav-link  text-dark m-0 p-0" href="/page/19">Нууцлалын бодлого</a>
                                        </li>
                                        <li class="nav-item  py-1">
                                            <a class="nav-link  text-dark m-0 p-0" href="/page/20">Хамтын ажиллагаа</a>
                                        </li>
                                       

                                    </ul>
                            </div>
                        </div>

                          <div class="social-groupping text-left pt-2" style="font-size: 12px;">
                    <div class="facebook pr-2" style="display: inline;">
                        <a href="{{$fronts->facebook}}" target="_blank">
                            <i class="fab fa-facebook fa-2x" style="color: #3a3e42;"></i>
                        </a>
                    </div>

                    <div class="twitter pr-2" style="display: inline;">
                        <a href="{{$fronts->twitter}}" target="_blank">
                            <i class="fab fa-twitter fa-2x" style="color: #3a3e42;"></i>
                        </a>
                    </div>
                </div>
                
                    </div>



                </div>


            </div>
        </div>

    </div>
</div>
@endforeach

<div class="sub_footer" style="background-color: #3a3e42;">

    <div class="container">
        <p class="text-center py-3 m-0 text-white" style="font-family: 'Roboto Condensed', sans-serif;">Зохиогчийн эрх хуулиар хамгаалагдсан. Мэдээлэл хуулбарлах хориотой.Copyright © 2019 </p>
    </div>

</div>

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v4.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="448332702597858">
      </div>

<style>
    .title-footer:after {
        position: absolute;
        content: '';
        width: 60px;
        background: #ff7519;
        height: 2px;
    }
</style>




