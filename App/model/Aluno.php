<?php
namespace App\Model;

use App\DAO\AlunoDAO;

class Aluno
{
    public $id, $nome, $ra, $curso;

     
    function save() : Aluno // : tipo_variavel
    {
        // !!!!! o metodo save espera receber um model do tipo aluno, por passo a propria instacia do model
        return (new AlunoDAO()) -> save($this);
    }

    function getById(int $id) : ?Aluno
    {
        return new Aluno();
    }

    function getAllRows() :array
    {
        return [];
    }

    function delete(int $id) : bool
    {
        return false;
    }

}