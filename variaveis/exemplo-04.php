<?php
//array super global. vai ter todas as variáveis que receberemos por meio da URL por meio do método GET
$nome = (int)$_GET["a"];
//var_dump($nome);
$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;

?>