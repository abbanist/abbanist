<!DOCTYPE html>
<html lang="en">

    <head>
        <title>LOTTER</title><meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link
            rel="stylesheet"
            href="{{ asset('css/backend_css/bootstrap.min.css' ) }} "/>
        <link
            rel="stylesheet"
            href="{{ asset('css/backend_css/bootstrap-responsive.min.css' ) }}"/>
        <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-login.css') }} "/>
        <link
            href="{{ asset('fonts/backend_fonts/font-awesome/css/font-awesome.css') }}"
            rel="stylesheet"/>
        <link
            href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800'
            rel='stylesheet'
            type='text/css'>
    </head>

    <body>
        <div id="loginbox">
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

            <form
                id="loginform"
                class="form-vertical"
                role="form"
                method="post"
                action="{{ url('admin') }}">
                {{ csrf_field() }}
                <div class="control-group normal_text">
                    <h3>
                        <img
                            src="{{ asset('images/frontend_images/large/27135.png') }}"
                            style="width:200px;"
                            alt="Logo"/>
                    </h3>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg">
                                <i class="icon-user"></i>
                            </span><input id="email" type="email" name="email" placeholder="Хэрэглэгчийн нэр"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly">
                                <i class="icon-lock"></i>
                            </span><input id="password" type="password" name="password" placeholder="Нууц үг"/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left">
                        <a href="#" class="flip-link btn btn-info" id="to-recover">Нууц үгээ мартсан уу?</a>
                    </span>
                    <span class="pull-right"><input type="submit" class="btn btn-success" value="Нэвтрэх"/></span>
                </div>
            </form>

            <form id="recoverform" action="#" class="form-vertical">
                <p class="normal_text">Enter your e-mail address below and we will send you
                    instructions how to recover a password.</p>

                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lo">
                            <i class="icon-envelope"></i>
                        </span><input type="text" placeholder="E-mail address"/>
                    </div>
                </div>

                <div class="form-actions">
                    <span class="pull-left">
                        <a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Буцах</a>
                    </span>
                    <span class="pull-right"><a class="btn btn-info"/>Сэргээх</a>
                </span>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/backend_js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/backend_js/matrix.login.js') }}"></script>
    <script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script>

</body>

</html>