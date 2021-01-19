<?php

//variáveis tipos primitivos simples
$nome = "Luana";
$site = 'www.hcode.com.br';
$ano = 1990;
$salrio = 5500.99;
$bloqueado = false;
//////////////////////////////////////////////////////

//tipos primitivos compostos
$frutas = array("abacaxi", "laranja", "mamão", "manga");


//para trazer apenas a manga do array
echo $frutas[3];


//tipo primitivo composto objeto
$nascimento = new DateTime();

var_dump($nascimento);

///////////////////////////////////////////////////

//tipos especiais
$arquivo = fopen("exemplo-03.php", "r");

//para ver o tipo de dados da variável $arquivo
var_dump($arquivo);

//nulo é ausência de valor. não exist. Se destruímos uma variável ela é nula.
$nulo = null;

//vazio ele foi iniciado só não tem informação. e já está reservado na memória
$vazio = "";

?>