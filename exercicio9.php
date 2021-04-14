<?php
function testarPrimo($numero){
    for ($i = 2; $i < sqrt($numero); $i++){
        if ($numero % $i == 0){
            echo "Esse valor não é um valor primo!";
            return false;
        }else {
            echo "Esse valor é um valor primo!";
            return true;
        
        }
    }
}

testarPrimo(9);