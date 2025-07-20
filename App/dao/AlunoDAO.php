<?php
// declarando um namespace
namespace App\DAO;

// Incluindo classe de outra subnamespace
use App\Model\Aluno;
 
class AlunoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    // Este método aceita APENAS objetos da classe Aluno
    // $model é um objeto Aluno, então mostra todos os métodos e propriedades disponíveis.
    public function save(Aluno $model) : Aluno
    {
        return ($model->id == null) ? $this->insert($model) : $this->update($model);
    }
    public function insert(Aluno $model) : ALuno
    {
        $sql = "INSERT INTO aluno (nome, ra, curso) VALUES (? ? ?) ";

        $stmt = parent::$conexao->prepare($sql);
        // o bindValue substitui as interrogações pelos valores
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->ra);
        $stmt->bindValue(3, $model->curso);
        // salva no banco de dados
        $stmt->execute();
        // pego a id gerada do aluno na coneão e coloco na prodiedade $model e retorno o $model no final
        $model->id = parent::$conexao->lastInsertId();

        return $model;
    }
    public function update(Aluno $model) : Aluno
    {
        var_dump($model);
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