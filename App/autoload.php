<?php

// toda vez que eu chamar uma classe, o php vai buscar um arquivo que tenha o mesmo no nome da classe

spl_autoload_register(function ($nome_da_classe)
{
    $arquivo =  BASE_DIR . "/" . $nome_da_classe . ".php";
    echo $arquivo;

    if(file_exists($arquivo)){
        include $arquivo;
    } else{
        throw new Exception("Arquivo não encontrado");
    }
});
