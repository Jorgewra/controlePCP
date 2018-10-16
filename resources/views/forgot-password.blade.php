<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>System PCP - Forgot Password</title>

    <!-- Bootstrap core CSS-->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">{{ $traducao['titulo']}}</div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>{{ $traducao['mensagemInfo']}}</h4>
            <p>{{ $traducao['mensagemInstrucao']}}</p>
          </div>
          <form>
            <div class="form-group">
             <div class="form-row">
                <div class="col-md-12">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="{{ $traducao['campoEmail']}}" required="required" autofocus="autofocus">
                <label for="inputEmail">{{ $traducao['campoEmail']}}</label>
              </div>
              </div>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="/">{{ $traducao['btEnviar']}}</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="/{{App::getLocale()}}/register">{{ $traducao['linkRegistro']}}</a>
            <a class="d-block small" href="/{{App::getLocale()}}">{{ $traducao['linkLogin']}}</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
