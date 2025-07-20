<?php
// aqui vou definir o meu name space, ou seja, o escopo das minhas classes e objetos

namespace App\Controller;

// Incluindo classe de outra subnamespace
use App\Model\Aluno;


class AlunoController
{
    public static function cadastrar()
    {

        $model = new Aluno;
        // $model->id=8;
        $model->nome= 'erick';
        $model->ra= 123;
        $model->curso= 'Desenvolvimento de Sistemas';
        $model->save();

        echo "ALUNO INSERIDO NO SISTEMA";
    }

    public static function listar()
    {
        echo "Listagem de alunos";
        $aluno = new Aluno();
        $lista = $aluno -> getAllRows();
        var_dump($lista);
    }
}