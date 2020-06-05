<?php


$email=filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$senha=filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);
$nome =filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$sovrenome=filter_input(INPUT_POST,'sobrenome', FILTER_SANITIZE_STRING);
$dataNas= filter_input(INPUT_POST,'dataNas', FILTER_SANITIZE_NUMBER_FLOAT);
$cep = filter_input(INPUT_POST,'dataNas', FILTER_SANITIZE_NUMBER_INT);
        

