<?php

$altura = 1.8;
$peso = 165;

$imc= $peso/($altura*$altura);

if($imc<18.8){
    echo "voce esta abaixo do peso seu imc é ", $imc;
}
else
    if($imc<24.9){
        echo "voce esta normal seu imc é ", $imc;
    }else
        if($imc<29.9){
            echo "voce esta acima do peso seu imc é ", $imc;
        }
        else 
            if($imc<39.9){
                echo "voce esta com obesidade seu imc é ", $imc;
         }
         else
            echo"voce esta com obesidade morbida seu imc é ", $imc;
