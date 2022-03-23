<?php

$peso = 83;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

if ($imc <= 18.5) {
    echo "Magreza";
}if ($imc > 18.5 && $imc<= 24.9) {
   echo "Normal";
}if ($imc > 24.9 && $imc<= 30) {
    echo "Sobrepeso" ;   
}else {
    echo "Obesidade";
};



?>