<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="System maneger PCP">
    <meta name="author" content="Jorge William Rodrigues">

    <title>System PCP - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">{{ $traducao['tituloLogin']}}</div>
        <div class="card-body">
        <div class="text-center">
          <a href="/pt-BR"><img src="../img/pt.png" width="32px" height="32px" styles="padding: 10px;margin-bottom: 25px;" alt="pt_BR"></a>
          <a href="/en"><img src="../img/en.png" width="32px" height="32px" styles="padding: 10px;margin-bottom: 25px;" alt="en"></a>
        </div>
        <br/>
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
          @endif
          <form action="/{{App::getLocale()}}/login" method="POST">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="{{ $traducao['campoEmail']}}" required="required" autofocus="autofocus">
                <label for="inputEmail">{{ $traducao['campoEmail']}}</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" nome="password" class="form-control" placeholder="{{ $traducao['campoSenha']}}" required="required">
                <label for="inputPassword">{{ $traducao['campoSenha']}}</label>
              </div>
            </div>
            @csrf
            <input type="submit" class="btn btn-primary btn-block" value="{{ $traducao['btEntar']}}" href="/{{App::getLocale()}}/painel"></button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="/{{App::getLocale()}}/register">{{ $traducao['linkRegistro']}}</a>
            <a class="d-block small" href="/{{App::getLocale()}}/re-password">{{ $traducao['linkRecuperarSenha']}}</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
