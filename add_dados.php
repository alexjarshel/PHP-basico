<?php

$contas = [
    "12.334.545-55" => [
        "titular"=> "Alex",
        "saldo" => 1000
    ],
    "345.675.346-88" =>[
        "titular"=> "Maria",
        "saldo" => 4000,
    ],
    "333.567.397-77" =>[
        "titular"=> "Sergio",
        "saldo" => 40]
 ];

// foreach faz a mesma coisa  que o for do arrays2.php mas melhor

// add conta:

$contas["121.345.121-98"] = [
    "titular" => "joao",
    "saldo" => 234
];

foreach ($contas as $cpf => $conta) {
    echo $cpf;
    echo ("---");
    echo $conta["titular"];
    echo ("---");
    echo$conta["saldo"] . PHP_EOL;
}

// se não souber a quantidade ou a associação do array  pode se usar o exemplo:
// $variavel[count($variavel) = #valor;

//  ou simplesmente adicionar $variavel[] = 20;