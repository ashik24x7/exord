<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Exord - Admin</title>

        <!-- Bootstrap -->
        <link href="/dashboard/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/dashboard/css/waves.min.css" type="text/css" rel="stylesheet"><link rel="stylesheet" href="/dashboard/css/nanoscroller.css">
        <!--        <link rel="stylesheet" href="css/nanoscroller.css">-->
        <link href="/dashboard/css/style.css" type="text/css" rel="stylesheet">
        <link href="/dashboard/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/dashboard/css/custom.css" type="text/css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="account">
        <div class="container">
            <div class="row">
                <div class="account-col text-center">
                    <h1>Exord-Admin</h1>
                    <h3>Log into your account</h3>
                    @if(session('message'))
                        <p class="error"> {{ session('message') }} </p>
                    @endif
                    <form class="m-t" role="form" action="{{ url('/admin/login') }}" method="post">
                        {{ csrf_field() }}
                         <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}">
                            <p class="errors"> {{ $errors->first('username') }}</p>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Passowrd" name="password" value="{{ old('password') }}">
                            <p class="errors"> {{ $errors->first('password') }}</p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block ">Login</button>
                        <a href="#"><small>Forgot password?</small></a>
                <p class=" text-center"><small>Do not have an account?</small></p>
                <a class="btn  btn-default btn-block" href="register">Create an account</a>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/dashboard/js/jquery.min.js"></script>
        <script type="text/javascript" src="/dashboard/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/pace.min.js"></script>
    </body>
</html>
