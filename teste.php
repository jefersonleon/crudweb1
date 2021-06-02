<?php
$password = "jo123";
echo "Senha 0 digitada: ".$password."<br>";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo "Senha Criptografada: ".$hash."<br><br><br>";


$password1 = "123";
echo "Senha 1 digitada: ".$password1."<br>";
$hash1 = md5($password1);
echo "Senha Criptografada: ".$hash1."<br><br><br>";


$password2 = "123";
echo "Senha 3 digitada: ".$password2."<br>";
$hash2 = sha1($password1);
echo "Senha Criptografada: ".$hash2."<br>";


if(password_verify('jo123',$hash)){
    echo"<br><br>Senha igual!!";
    }else{
         echo"<br><br>Erro na senha";
    }

if(md5('leon123') == $hash1){
    echo"<br><br>Senha 1 igual!!";
    }else{
        echo"<br><br>Erro na senha 1";
    }

    if(sha1('123') == $hash2){
        echo"<br><br>Senha 2 igual!!";
        }else{
            echo"<br><br>Erro na senha 2";
        }