<?php

$contas = [
    "121.334.545-55" => [
        "titular"=> "Alex",
        "saldo" => 1000
    ],
    "345.675.346-88" =>[
        "titular"=> "Maria",
        "saldo" => 4000,
    ],
    "333.567.397-77" =>[
        "titular"=> "Sergio",
        "saldo" => 40
    ],
    "121.345.121-98" => [
    "titular" => "joao",
    "saldo" => 234
    ],
];
$saque = 500;
if ($saque>$contas["121.345.121-98"]["saldo"]){
   echo ("operação invalida") . PHP_EOL;
}else
    $contas["121.345.121-98"]["saldo"] -=500;


foreach ($contas as $cpf => $conta) {
    echo $cpf;
    echo ("   ");
    echo $conta["titular"];
    echo ("    ");
    echo$conta["saldo"] . PHP_EOL;
}