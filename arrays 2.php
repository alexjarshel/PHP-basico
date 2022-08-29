<?php

$conta1 = [
    "titular"=> "Alex",
    "saldo" => 1000
];

$conta1 = [
    "titular"=> "Alex",
    "saldo" => 1000
];

$conta2 = [
    "titular"=> "Maria",
    "saldo" => 4000
];

$conta3 = [
    "titular"=> "Sergio",
    "saldo" => 40
];

//echo $conta1["titular"];

$contas = [$conta1,$conta2,$conta3];

for ($i = 0; $i <count($contas); $i++){
    echo $contas[$i] ["titular"];
    echo("---");
    echo $contas[$i] ["saldo"] . PHP_EOL;
}