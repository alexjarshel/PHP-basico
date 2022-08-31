<?php

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$saldo = 10000;
$saque = 400;

if ($saldo < $saque){
    exibeMensagem("voce n pode sacar");
    echo "saldo insuficeinte";
}else{
    $saldo = $saldo - $saque;
    exibeMensagem("saque realizado");
    echo ("seu saldo é de ".$saldo);

}