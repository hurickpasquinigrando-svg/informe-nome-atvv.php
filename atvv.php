<?php

$nome = readline("informe seu nome: ");

$nomeSemEspaço = str_replace(" ", "", $nome);

print("O nome possui " . mb_strlen($nomeSemEspaço)  . " caracteres \n\n");

print("Maiúsculo: " . strtoupper($nome) . "\n\n"); 

print("Minúsculo: " . mb_strtolower($nome) . "\n\n"); 

$nomeSemEspaço = explode(" ", $nome);

print_r($nomeSemEspaço);  

print(str_replace("a", "@", mb_strtolower($nome))); 