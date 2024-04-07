@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=false">
<title>Forget password</title>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<link rel='stylesheet' href=" {{ asset('css/oublier.css') }}">
<style>
body {
    font-family: 'Roboto';
}
</style>
</head>
<body>
<div class="box">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<form method="POST" action="{{ route('password.email') }}">
    @csrf
<center><img src="https://img.icons8.com/bubbles/100/000000/lock-2.png"></center>
<h3>Réinitialiser le mot de passe</h3>
<p class="tip">Indiquez l’adresse e-mail de votre compte pour le traitement</p>
<label style="font-family: 'Times New Roman', Times, serif;">Email address</label>
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
<div class="btn">
<button type="submit">Renitialiser</button>


</div>
<hr>

<p>By processing, you're agree with our <a href="#">Terms and conditions</a> and <a href="#">Privacy policy</a>.</p>
</form>
</div>
</body>
</html>

