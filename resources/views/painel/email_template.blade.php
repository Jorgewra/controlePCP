<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <style>
            html,body{
                min-height:100%
            }
            .layout-boxed html,.layout-boxed body{
                height:100%
            }
            body{
                -webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-family:'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;font-weight:400;overflow-x:hidden;overflow-y:auto
            }
            .login-logo,.register-logo{font-size:35px;text-align:center;margin-bottom:25px;font-weight:300}
            .login-logo a,.register-logo a{color:#444}
            .login-page,.register-page{background:#d2d6de}.login-box,
            .register-box{width:360px;margin:7% auto}
            @media (max-width:768px){
                .login-box,.register-box{width:90%;margin-top:20px}}
            .login-box-body,.register-box-body{background:#fff;padding:20px;color:#444;border-top:0;color:#666}
            .login-box-body .form-control-feedback,.register-box-body .form-control-feedback{color:#777}
            .login-box-msg,.register-box-msg{margin:0;text-align:center;padding:0 20px 20px 20px}
            .main-footer{
                -webkit-transition:-webkit-transform .3s cubic-bezier(.32, 1.25, .375, 1.15);
                -moz-transition:-moz-transform .3s cubic-bezier(.32, 1.25, .375, 1.15);
                -o-transition:-o-transform .3s cubic-bezier(.32, 1.25, .375, 1.15);
                transition:transform .3s cubic-bezier(.32, 1.25, .375, 1.15);
                -webkit-transition:margin-left .3s cubic-bezier(.32, 1.25, .375, 1.15);
                -o-transition:margin-left .3s cubic-bezier(.32, 1.25, .375, 1.15);
                transition:margin-left .3s cubic-bezier(.32, 1.25, .375, 1.15);
                margin-left:0px;z-index:820
            }
            .layout-top-nav .content-wrapper,.layout-top-nav .right-side,.layout-top-nav .main-footer{
                margin-left:0
            }
            @media (max-width:767px){
                .content-wrapper,.right-side,.main-footer{margin-left:0}}
            @media (min-width:768px){
                .sidebar-collapse .content-wrapper,.sidebar-collapse .right-side,.sidebar-collapse .main-footer{margin-left:0}
            }
            @media (max-width:767px){.sidebar-open .content-wrapper,.sidebar-open .right-side,.sidebar-open .main-footer{-webkit-transform:translate(230px, 0);-ms-transform:translate(230px, 0);-o-transform:translate(230px, 0);transform:translate(230px, 0)}}.content-wrapper,.right-side{min-height:100%;background-color:#ecf0f5;z-index:800}.main-footer{background:#fff;padding:15px;color:#444;border-top:1px solid #eee}
        </style>
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/')}}"><b>System PCP</b></a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">

                <p class="login-box-msg"> {!! $titulo!!} </p><br/>

                {!! $mensagem !!}

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->
        <footer class="main-footer">
            <div> <strong>Copyright &copy; 2018 <a href="{{ url('/')}}">{{ config('app.name') }}</a>.</strong> All rights reserved.</div>
        </footer>
    </body>
</html>