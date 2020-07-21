<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ABBANIST</title>
        <meta charset="UTF-8" />
        
        
    
    <meta property="og:title" content="Дугуйн хуяг" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://bears.mn" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="bears.mn" property="og:description"  >
    
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/backend_css/uniform.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/backend_css/fullcalendar.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/backend_css/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-media.css') }}" />
        <link                  href="{{ asset('css/backend_css/font-awesome.css') }}" rel='stylesheet' />
        <link rel="stylesheet" href="{{ asset('css/backend_css/jquery.gritter.css') }}" />
        {{-- <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-wysihtml5.css') }}" />  --}}
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        
</head>
<body>

@include('layouts.adminLayout.admin_header')

@include('layouts.adminLayout.admin_sidebar')

@yield('content')

@include('layouts.adminLayout.admin_footer')



<script src="{{ asset('js/backend_js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.uniform.js') }}"></script> 
<script src="{{ asset('js/backend_js/select2.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.validate.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.form_validation.js') }}"></script>
<script src="{{ asset('js/backend_js/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.tables.js') }}"></script>
<script src="{{ asset('js/backend_js/matrix.popover.js') }}"></script>
{{-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>  --}}
<script src="{{ asset('js/backend_js/tinymce.min.js') }}"></script>



{{-- filemanager --}}

  {{-- <script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
  </script> --}}


{{--   <script>
    $('#lfm').filemanager('image');
    $('#lfm2').filemanager('file');
  </script> --}}


  <script>

    // $('#lfm').filemanager('image');
    // $('#lfm2').filemanager('file');
    // $('#lfm').filemanager('image', {prefix: route_prefix});
    // $('#lfm2').filemanager('file', {prefix: route_prefix});
  </script>

{{-- ********************************************* --}}


{{-- tinymce --}}
<script>


  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    height : 250,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern template"
    ],
    toolbar: "template | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    templates: [
        
    {title: 'Accordion', description: 'Some desc 1', 
    content:'<div class="card border-0 mceTmpl"><div id="headingOne" class="card-header"><h5 class="mb-0"><button style="white-space:normal;" class="btn btn-link" data-toggle="collapse" data-target="#c1" aria-expanded="true" aria-controls="c1">..</button></h5></div><div id="c1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion"><div class="card-body"><p style="font-weight: 400;">...</p></div></div>'},
    
  ],
  

  
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image' ) {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>




<style>
#banner_title {
    width:700px;
}

</style>

    
</body>
</html>



