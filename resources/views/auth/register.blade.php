
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


        </div>

    <div class="form-content">
        <div class="signup-form">
            <div class="title-singup">

                <div class="text">S’inscrire </div>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form">
                    <div class="input-boxes">
                        <div class="input-box name">
                            <label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"    placeholder="Nom association"   required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </label>
                            <i class="fa-solid fa-user"></i>
                            <div class="text-checked name-checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Approprié</p>
                            </div>

                            <!-- ccc -->
                            <div class="text-unchecked name-unchecked">
                                <i class="fa-solid fa-xmark"></i>
                                <p>Le nom est trop court</p>
                            </div>
                            <!-- vooo -->
                        </div>
                        <br/>
                        <div class="input-box domain">
                            <input id="domaine" name="domaine" type="text" placeholder="Domaine" required minlength="3">
                            <i class="fa-solid fa-network-wired"></i>


                            <!-- ccc -->

                            <!-- vooo -->
                        </div>
                        <!--adresse-->
                        <div class="input-box adress">
                            <input   id="adresse " name="adresse"  type="text" placeholder="Adresse" minlength="100" required>
                            <i class=" fa-solid fa-location-dot"></i>

                        </div>

                        <div class="input-box fiscal">
                            <input name="identifiscal" type="text" placeholder="Numéro identifiscal " required>
                            <i class=" fa-solid fa-id-card"></i>

                        </div>


                        <div class="input-box email">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"    placeholder="Entrer votre email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <i class="fa-solid fa-envelope"></i>
                            <div class="text-checked email-checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Nous vous enverrons une confirmation par email.</p>
                            </div>
                            <div class="text-unchecked email-unchecked">
                                <i class="fa-solid fa-xmark"></i>
                                <p>Email n'est pas validé</p>
                            </div>
                        </div>
                        <div class="input-box password">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"    placeholder="Mot dee passe"   required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <i class="fa-solid fa-lock"></i>
                            <div class="text-checked password-checked">
                                <i class="fa-solid fa-check"></i>
                                <p>Commodité </p>

                            </div>
                            <div class="text-unchecked password-unchecked">
                                <i class="fa-solid fa-xmark"></i>
                                <p>Entrez au moins 8 caractères </p>
                            </div>
                        </div>
                        <div class="input-box password">

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Confirmer mot de passe" required autocomplete="new-password">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <input class="button" type="submit" value=" Enregistrer ">
                        </div>


                    </div>

                </div>

            </form>
        </div>

    </div>
</div>


</body>
</html>


