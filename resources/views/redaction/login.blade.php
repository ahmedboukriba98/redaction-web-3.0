@extends('redaction.template')
@section('contine')
<div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
    <h3>Connexion</h3>
    <form action="{{ url('template')}}" method="POST">
        <div class="inputBox"> <input id="uname" type="text"  placeholder="Login"> 
            <input id="pass" type="password" name="Password" placeholder="Password"> </div> 
            <input type="submit" name="" value="Login">
    </form> <a href="#">Mot de passe oublié ?<br> </a>
    <div class="text-center">
        <a  href="inscription_redacteur" style="color: #050000;" >Créer un compte</a>
    </div>
</div>
<style>


@media screen and (max-width: 600px;

) {
    body {
        background-size: cover;
        : fixed
    }
}
#particles-js {
    height: 100%
}

.loginBox {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 350px;
    min-height: 200px;
    background: #FFD9C0;
    border-radius: 10px;
    padding: 40px;
    box-sizing: border-box
}
.user {
    margin: 0 auto;
    display: block;
    margin-bottom: 20px

}

h3 {
    margin: 0;
    padding: 0 0 20px;
    color: #216db1;
    text-align: center
}

.loginBox input {
    width: 100%;
    margin-bottom: 20px
}
.loginBox input[type="text"],
.loginBox input[type="password"] {
    border: none;
    border-bottom: 2px solid #f6a4a4;
    outline: none;
    height: 40px;
    color: #fff;
    background: transparent;
    font-size: 16px;
    padding-left: 20px;
    box-sizing: border-box
}
.loginBox input[type="text"]:focus,
.loginBox input[type="password"]:focus {
    border-bottom: 2px solid #42F3FA
}

.inputBox {
    position: relative
}

.inputBox span {
    position: absolute;
    top: 10px;
    color: #000b08;
}
.loginBox input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    font-size: 16px;
    background: #216db1;
    color: #fff;
    border-radius: 20px;
    cursor: pointer
}

.loginBox a {
    color: #0c0101;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    text-align: center;
    display: block
}


    </style>

 @stop