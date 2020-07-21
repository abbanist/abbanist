<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <!--<meta charset="ISO-8859-1">-->
    
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://ABBANIST.mn" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ABBANIST.mn" property="og:description"  >
    
    @foreach ($frontsetup as $element)
    <link rel="icon" href="{{asset('images/frontend_images/setups/large/'.$element->favicon)}}">
    <!--<title>{{$element->site_title}}</title>-->
    @endforeach

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/frontend_css/bootstrap.min.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('css/frontend_css/bootstrap-grid.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/frontend_css/bootstrap-reboot.css') }}" /> --}}

    {{-- fontawesome --}}
    <link href="{{ asset('fonts/frontend_fonts/fontawesome-free-5.6.3-web/css/fontawesome.css') }}" rel='stylesheet' />
    <link href="{{ asset('fonts/frontend_fonts/fontawesome-free-5.6.3-web/css/brands.css') }}" rel='stylesheet' />
    <link href="{{ asset('fonts/frontend_fonts/fontawesome-free-5.6.3-web/css/solid.css') }}" rel='stylesheet' />
    <link href="{{ asset('fonts/frontend_fonts/fontawesome-free-5.6.3-web/css/regular.css') }}" rel='stylesheet' />


    {{-- Owl Carousel --}}
    <link rel="stylesheet" href="{{ asset('css/frontend_css/OwlCarousel2-2.3.4/owl.carousel.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/frontend_css/OwlCarousel2-2.3.4/owl.theme.default.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/frontend_css/OwlCarousel2-2.3.4/owl.theme.green.css') }}">

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('css/frontend_css/custom.css') }}">

    {{-- weather icon --}}
    <link rel="stylesheet" href="{{ asset('css/frontend_css/weather-icons.css') }}">

  </head>

  <body>

    <div id="main">

      @include('layouts.frontLayout.front_header')

      <div class="container">

        @if(Request::is('/'))

        @yield('content')

        @else

        <div class="row">
          <div class="lc-col-md-12 col-md-12">
            {{-- <div class="row lc-row"> --}}

            {{-- <div class="col-md-8 detail_page"> --}}
            @yield('content')
            {{-- </div> --}}

            {{-- <div class="col-md-4"> --}}
            {{-- @include('layouts.frontLayout.front_sidebar')
 --}} {{-- </div> --}}

            {{-- </div> --}}
          </div>
        </div>

        @endif

      </div>

      @include('layouts.frontLayout.front_footer')

    </div>



    {{-- jquery --}}
    <script src="{{ asset('js/frontend_js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/popper.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>  --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script> --}}




    {{-- bootstrap --}}
    <script src="{{ asset('js/frontend_js/bootstrap.js') }}"></script>

    {{-- font awesome --}}
    {{-- <script src="{{ asset('js/frontend_js/fontawesome-free-5.5.0-web/brands.js')}}"></script> --}}
    <script src="{{ asset('js/frontend_js/fontawesome-free-5.5.0-web/fontawesome.js')}}"></script>
    {{-- <script src="{{ asset('js/frontend_js/fontawesome-free-5.5.0-web/regular.js')}}"></script> --}}
    {{-- <script src="{{ asset('js/frontend_js/fontawesome-free-5.5.0-web/solid.js')}}"></script> --}}
    {{-- <script src="{{ asset('js/frontend_js/fontawesome-free-5.5.0-web/v4-shims.js')}}"></script> --}}
    {{-- <script src="{{ asset('js/frontend_js/fontawesome-free-5.5.0-web/all.js')}}"></script> --}}

    {{-- owl carousel --}}
    <script src="{{ asset('js/frontend_js/OwlCarousel2-2.3.4/owl.carousel.js')}}"></script>
    <script src="{{ asset('js/frontend_js/custom.js')}}"></script>

    <script src="{{ asset('js/frontend_js/main.js') }}"></script>

    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

    {{-- <script type="text/javascript" src="http://flesler-plugins.googlecode.com/files/jquery.scrollTo-1.4.2.js"></script> --}}


    <script type="text/javascript">
      $('.carousel').carousel({
        interval: 4000
      });


      $(document).ready(function() {

        $('.owl-one').owlCarousel({
          // loop:true,
          margin: 25,
          nav: true,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 2
            },
            1000: {
              items: 6,
              nav: true
            }
          }
        });

        $('.owl-two').owlCarousel({
          // loop:true,
          margin: 25,
          nav: false,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 2
            },
            1000: {
              items: 3,
              nav: true
            }
          }
        });

        $('.owl-full').owlCarousel({
          // loop:true,
          margin: 25,
          nav: true,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 1
            },
            1000: {
              items: 1
            }
          }
        });
      });

    </script>

    <script type="text/javascript">
      //  $('#owl-two').owlCarousel({
      //     // rtl: true,
      //     loop: false,
      //     margin: 11,
      //     nav: true,
      //     // startPosition: ,

      //     // autoWidth: true,
      //     responsiveClass: true,
      //     responsive: {
      //         0: {
      //             items: 1
      //         },
      //         600: {
      //             items: 3
      //         },
      //         1000: {
      //             items: 5
      //         }
      //     }
      // })

    </script>

    {{--
<script>
// pagination
// $(document).ready(function(){

$(document).on('click', '.pagination a', function(event){
 event.preventDefault(); 
 var page = $(this).attr('href').split('page=')[1];
 fetch_data(page);
console.log($(this).attr('href').split('page=')[1]);
}); 

function fetch_data(page)
{
 $.ajax({
  url:"/pagination/fetch_data?page="+page,
  success:function(data)
  {
   $(document).html(data);
  }
 });
}

// });
</script> --}}


    {{-- Ширхэг tоолуур --}}
    <script>
      $(document).ready(function() {
        $('#qty_input').prop('disabled', true);
        $('#plus-btn').click(function() {
          $('#qty_input').val(parseInt($('#qty_input').val()) + 1);
        });
        $('#minus-btn').click(function() {
          $('#qty_input').val(parseInt($('#qty_input').val()) - 1);
          if ($('#qty_input').val() == 0) {
            $('#qty_input').val(1);
          }

        });
      });

    </script>

  </body>

</html>
