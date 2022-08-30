<?php

$contas = [
    12334545 => [
        "titular"=> "Alex",
        "saldo" => 1000
    ],
    34567534 =>[
        "titular"=> "Maria",
        "saldo" => 4000,
    ],
    33356739 =>[
        "titular"=> "Sergio",
        "saldo" => 40]
 ];

// foreach faz a mesma coisa  que o for do arrays2.php mas melhor

foreach ($contas as $cpf => $conta) {
    echo $cpf;
    echo $conta["titular"];
    
    echo ("---");
    echo$conta["saldo"] . PHP_EOL;
}