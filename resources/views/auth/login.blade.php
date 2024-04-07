

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/normalise.css') }}">
    <!-- Font Awsome Library -->
    <!--<link rel="stylesheet" href="styleassociation/all.min.css">-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>page1</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">



</head>
<body>
    <div class="container">
        <input type="checkbox" name="" id="flip">
        <div class="cover">

            <div class="front">
                <div class="blur frontblur"></div>

                <img src="../img/don4.jpg " />
            </div>
                <div class="back">
                    <div class="blur backblur"></div>
                    <img src="../img/don4.jpg"  alt="">

                </div>

        </div>

    <div class="form-content">

        <div class="login-form"  >
            <div class="title-login">
                <img src="logo.jpeg" alt="" class="logo">
                <div class="text"> Connexion </div>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form">
                    <div class="input-boxes">
                        <div class="input-box ">
                            <input   id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email"    placeholder="Entrer votre email" required >
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="input-box">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Entrer votre mot de passe" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="fa-solid fa-lock"></i>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>



                        <div class="input-box">
                            <input class="button" type="submit" value="Connexion">
                        </div>
                    </div>
                    <div class="text-checking">
                        @if (Route::has('password.request'))
                        <div class="text pass-forgot"> <a href="{{ route('password.request') }}"> Mot de passe oublié ?</a></div>
                        <div class="text text-asking">Vous n’avez pas de compte ? <a href="{{ route('register') }}" >Créer un compte</a></div>
                        @endif
                    </div>
                </div>




            </form>
        </div>
