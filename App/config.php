<?php

// 1º Diretorio Base
// 2º Onde estão as views
// 3º Acesso ao bando de dados

// vou criar contantes para definir um caminho
define('BASE_DIR', dirname(__FILE__, 2));
define('VIEWS', BASE_DIR . '/App/view/'); // Corrigido: removido o ponto extra
define('INCLUDES', VIEWS . 'Includes/'); // Corrigido: removido o ponto extra

// conectando com BD 
// OBSERVAÇÂO $_ENV não é muito bom, pois fica disponivel na aplicação toda
$_ENV['db']['host'] = "localhost:3307";
$_ENV['db']['user'] = "root";
$_ENV['db']['pass'] = "Erick*2025";
$_ENV['db']['database'] = "biblioteca";