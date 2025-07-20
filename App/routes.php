<?php

// observação: App\Controller é o nome do meu namespace
//instanciando classe
use App\Controller\{
    AlunoController,
    IncialController,
    InicialController
};

/* Para saber mais sobre a função 
 * parse_url: https://www.php.net/manual/pt_BR/function.parse-url.php
 */

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove a base path do projeto para facilitar o roteamento
$url = str_replace('/curso-mvc-mysql/App/', '', $url);

// Remove barras extras no início e fim
$url = trim($url, '/');


switch ($url) {
    case '':
    case 'home':
        InicialController::index();
        break;
    case 'aluno':
        AlunoController::listar();
        break;
    case 'aluno/cadastrar':
        AlunoController::cadastrar();
        break;
    case 'aluno/excluir':
        AlunoController::delete();
        break;
    default:
        echo "Página não encontrada - 404";
        break;
}