<?php
// aqui vou definir o meu name space, ou seja, o escopo das minhas classes e objetos

namespace App\Controller;

// Incluindo classe de outra subnamespace
use App\Model\Aluno;


class AlunoController
{
    public static function cadastrar()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $model = new Aluno;
            $model->Id = !empty($_POST['id']) ? $_POST['id'] : null; //se for nulo ele vai fazer um update
            $model->Nome = $_POST['nome'];
            $model->Ra = $_POST['ra'];
            $model->Curso = $_POST['curso'];
            $model->save();

            header("Location: /curso-mvc-mysql/App/aluno");
        } else {
            $model = new Aluno();

            if(isset($_GET['id']))
            {
                $model = $model->getById((int) $_GET['id']);
            }
            include VIEWS . '/Aluno/form_aluno.php';
        }
    }

    public static function listar()
    {
        $aluno = new Aluno();
        $lista = $aluno->getAllRows();

        include VIEWS . '/Aluno/lista_aluno.php';
    }
    public static function delete()
    {
        $aluno = new Aluno();

        $aluno ->delete((int) $_GET['id']);
        
        header("Location: /curso-mvc-mysql/App/aluno");
    }
}
