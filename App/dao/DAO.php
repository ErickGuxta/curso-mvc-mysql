<?php
// Aqui dentro vai ficar a classe que vai conctar com o banco
// VAi ser a classe mae da classe AlunoDAO

namespace App\DAO;

// PDO encapsula o acesso para diversos tipos de banco de dados
use PDO;

abstract class DAO extends PDO
{
    protected static $conexao = null;

    public function __construct()
    {
        // data sorce name
        $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['database'];

        if (self::$conexao == null) 
        {
            /**
             * Criando a conexão e armazenado na propriedade definida para tal.
             * O que é PDO: https://www.php.net/manual/pt_BR/intro.pdo.php
             */ 
            self::$conexao = new PDO(
                $dsn,
                $_ENV['db']['user'],
                $_ENV['db']['pass'],

                [
                    PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
                ]
            );
        }
    }
}
