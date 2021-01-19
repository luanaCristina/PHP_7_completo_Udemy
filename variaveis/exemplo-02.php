<?php

//variáveis
$anoNascimento = 1990;

$_nome = "";
$nome1 = "Luana";
$sobrenome = "Cristina";

//para concatenar as variáveis nome1 e sobrenome usamos o ponto "."
$nomeCompleto = $nome1 . " " . $sobrenome;
echo $nome1;
echo "<br/>";
echo $nomeCompleto;

//vai parar a execução do código aqui
exit;

//limpar variável
unset($nome1);

if(isset($nome1)){
    echo $nome1;
}


?>