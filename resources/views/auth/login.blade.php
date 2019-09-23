<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>ACCES GESTION - Log in </title>
  
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
    
    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="../css/bootstrap-extend.css">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/master_style.css">

    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="../css/skins/_all-skins.css">  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition bg-img" style="background-image: url(../../images/gallery/full/6.jpg)" data-overlay="4">
    
    <div class="auth-2-outer row align-items-center h-p100 m-0">
        <div class="auth-2">
          <div class="auth-logo font-size-40">
            <a href="../index.html" class="text-white"><b>ACCES</b>GESTION</a>
          </div>
          <!-- /.login-logo -->
          <div class="auth-body">
            <p class="auth-msg">Connectez-vous pour commencer votre session</p>

            <form action="{{ route('login') }}" method="POST" >
                 @csrf
              <div class="form-group has-feedback">
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="ion ion-email form-control-feedback"></span>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                <span class="ion ion-locked form-control-feedback"></span>
              </div>

              <div class="row">
                <div class="col-6">
                  <div class="checkbox">
                    <input type="checkbox" id="basic_checkbox_1">
                    <label for="basic_checkbox_1">Remember Me</label>
                  </div>
                </div>
                <!-- /.col -->
                
                <!-- /.col -->
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-block mt-10 btn-success">
                  SE CONNECTER</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

            
    
          </div>
        </div>
    
    </div>
    

    <!-- jQuery 3 -->
    <script src="../../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
    
    <!-- popper -->
    <script src="../../assets/vendor_components/popper/dist/popper.min.js"></script>
    
    <!-- Bootstrap 4.0-->
    <script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>

