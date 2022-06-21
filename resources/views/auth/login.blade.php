<!doctype html>
<html lang="en">

<head>
    <title>SIGENA - INICIO DE SESIÓN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

</head>

<body class="img js-fullheight" style="background-image: url(/assets/img/bg.jpg); overflow: hidden">
<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 py-5 px-5" style="background-color: #1c25639f; border-radius: 15px; ">
                <div class="login-wrap p-0">
                    <h3 class="mb-5 text-center"><b>Inicie sesión</b></h3>
                    <form method="POST" action="{{ route('login') }}" class="signin-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" placeholder="Contraseña" name="password" required autocomplete="current-password">
                            <span toggle="#password-field"class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn  submit px-3" style="background: #1c2563; border: solid 1px #ffffff30">Ingresar</button>
                        </div>
                        <div class="form-group mt-3 pt-3 d-md-flex">
                            <div class="w-50">
                                <style>
                                    .checkbox-wrap input:checked ~ .checkmark:after {
                                        color: #fbceb5;
                                    }
                                </style>
                                <label class="checkbox-wrap ">Recordarme
                                    <input type="checkbox"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#" onclick="alert('En desarrollo. Contacte a Radio Ayudas.')" style="color: #fff">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</body>

</html>
