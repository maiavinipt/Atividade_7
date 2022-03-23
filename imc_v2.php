<?php

$peso = 83;
$altura = 1.75;
$nome Vinicius;

$imc = $peso / ($altura * $altura);

if ($imc <= 18.5) {
    echo "O paciente $nome com " $peso" kg e  com " $altura" de altura está com Magreza";
}if ($imc > 18.5 && $imc<= 24.9) {
   echo "O paciente $nome com " $peso" kg e  com " $altura" de altura está com Normal";
}if ($imc > 24.9 && $imc<= 30) {
    echo "O paciente $nome com " $peso" kg e  com " $altura" de altura está com Sobrepeso" ;   
}else {
    echo "O paciente $nome com " $peso" kg e  com " $altura" de altura está com Obesidade";
};



?>