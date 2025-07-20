<?php
namespace App\Model;

use App\DAO\AlunoDAO;

class Aluno
{
    public $Id, $Nome, $Ra, $Curso;

     
    function save() : Aluno // : tipo_variavel
    {
        // !!!!! o metodo save espera receber um model do tipo aluno, por passo a propria instacia do model
        return (new AlunoDAO()) -> save($this);
    }

    function getById(int $Id) : ?Aluno
    {
        return (new AlunoDAO()) -> selectById($Id);
    }

    function getAllRows() :array
    {
        return (new AlunoDAO()) -> select();
    }

    function delete(int $Id) : bool
    {
        return (new AlunoDAO()) -> delete($Id);
    }

}