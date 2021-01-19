<?php

//aqui é um escopo principal. escopo 1
$nome = "Luana";

//o escopo é definido entre as chaves. escopo 2
function teste() {
    global $nome;
    echo $nome;
}

//outro escopo. escopo 3
function teste2(){
    global $nome;
    echo $nome." agora no teste2";

}
//chanar a função
teste();
teste2();

?>