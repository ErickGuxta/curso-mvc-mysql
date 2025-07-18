<?php
// declarando um namespace
namespace App\DAO;

// Incluindo classe de outra subnamespace
use App\Model\Aluno;
 
class AlunoDAO
{
    // Este método aceita APENAS objetos da classe Aluno
    // $model é um objeto Aluno, então mostra todos os métodos e propriedades disponíveis.
    public function save(Aluno $model) : Aluno
    {
        return ($model->id == null) ? $this->insert($model) : $this->update($model);
    }
    public function insert(Aluno $model) : ALuno
    {
        return new Aluno();
    }
    public function update(Aluno $model) : Aluno
    {
        return new Aluno();
    }
    public function selectById()
    {

    }
    public function select()
    {

    }
    public function delete()
    {

    }
    
}