<?php

$saldo = 1000;
do{

    echo "Títular: Vinicius Dias\n ";
    echo "Saldo Atual: R$" . $saldo . "\n";
    echo "***********************************\n";
    echo "1. Consultar Saldo Atual\n"; 
    echo "2. Sacar Valor\n";
    echo "3. Depositar Valor\n";
    echo "4. Sair\n";
    
    
    $numero = (float) fgets(STDIN);
    
    switch($numero){
        case 1:
            echo " *************************\n";
            echo "Títular: Vinicius Dias\n ";
            echo "Saldo atual: R$ " . $saldo;
            echo " *************************\n";
        break;
        
        case 2:
            echo " *************************\n";
            echo "Qual valor deseja sacar?\n ";
            $saque = (float) fgets(STDIN);
            if($saque > $saldo){
                echo " Saldo insuficiente";
            } else {
                $saldo -= $saque;
            };
            echo " *************************\n";
        break;
        
        case 3:
            echo " *************************\n";
            echo "Qual valor deseja depositar?\n";
            $deposito = (float) fgets(STDIN);
            $saldo += $deposito;
            echo " *************************\n";
        break;
                
        case 4:
            echo " *************************\n";
            echo "Até mais!\n";
            echo " *************************\n";
        break;
    default:
    break;
    }
} while ($numero != 4);