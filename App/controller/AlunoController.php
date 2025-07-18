<?php
// aqui vou definir o meu name space, ou seja, o escopo das minhas classes e objetos

namespace App\Controller;

// Incluindo classe de outra subnamespace
use App\Model\Aluno;


class AlunoController
{
    public static function cadastrar()
    {
        echo "vou mostrar o formulario a depender...";
    }

    public static function listar()
    {
        echo "Listagem de alunos";
        $aluno = new Aluno();
        $aluno -> getAllRows();
    }
}