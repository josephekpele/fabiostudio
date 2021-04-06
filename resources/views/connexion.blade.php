<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fabio Studio</title>
       
        <!-- links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="w3.css">
        <link rel="icon" href="images/image9.png" sizes="16x16" type="image/png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="w3.css">
        <link rel="icon" href=".png" sizes="16x16" type="image/png">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles pour le formulaire login -->

       <style>
                                    body{
                                        margin:0;
                                        padding:0;
                                        background-image: url(images/4.jpg);
                                        background-position:top center;
                                        background-repeat:no-repeat;
                                        background-attachment: fixed;
                                        background-size:cover;
                                    }
/*                                     body:before{
                                    content:'';
                                    position:fixed;
                                    width:100vw;
                                    height:100vh;
                                    background-image: url(.jpg);
                                    background-position:center center;
                                    background-repeat:no-repeat;
                                    background-attachment: fixed;
                                    background-size:cover;
                                    -webkit-filter:blur(10px);
                                    -moz-filter:blur(10px);
                                    
                                    } */
                                    .contact-form{
                                        position:absolute;
                                        top:50%;
                                        left:50%;
                                        -webkit-transform: translate(-50%,-50%);
                                        -moz-transform: translate(-50%,-50%);
                                        -ms-transform: translate(-50%,-50%);
                                        -o-transform: translate(-50%,-50%);
                                        width:400px;
                                        height:500px;
                                        padding: 80px 40px;
                                        background:rgba(0,0,0,0.6);
                                    }
                                    .avatar{
                                        position:absolute;
                                        height:80px;
                                        width:80px;
                                        border-radius:50%;
                                        overflow:hidden;
                                        top:calc(-80px/2);
                                        left:calc(50% - 40px);
                                    }
                                    .contact-form h2{
                                        margin:0;
                                        padding:0 0 20px;
                                        color:#fff;
                                        text-align:center;
                                        text-transform:uppercase;
                                    }
                                    .contact-form p{
                                        margin:0;
                                        padding:0;
                                        font-weight:bold;
                                        color:#fff;
                                    }
                                    .contact-form input{
                                        width:100%;
                                        margin-bottom:20px;

                                    }
                                    .contact-form input[type=email],
                                    .contact-form input[type=password]{
                                        border:none;
                                        border-bottom: 1px solid #fff;
                                        background: transparent;
                                        outline:none;
                                        height: 35px;
                                        color:#fff;
                                        font-size:15px;
                                    }
                                    .contact-form input[type=submit]{
                                        height: 30px;
                                        color:#fff;
                                        font-size:15px;
                                        background:red;
                                        cursor:pointer;
                                        border-radius:25px;
                                        border:none;
                                        outline:none;
                                        margin-top:15px:
                                    }
                                    input [type=checkbox]{
                                        width: 20px;
                                    }
                                    a{
                                        margin-left: 20px;
                                    }
    </style>
            <div class="contact-form">
               <img src="images/photologo1.jpg" alt="" class="avatar">
               <h2>Authentification</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        
                        <p>Email</p>
                                <input placeholder="Entrer votre email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                         <p>Password</p>
                                <input placeholder="Entrer le mot de passe" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                   
                                    <input type="submit" value="Se connecter">
                                    <p><input class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox">Se souvenir de moi</p>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                                <a class="btn btn-link" href="/register">
                                        {{ __("S'inscrire") }}
                                </a>

           </div>