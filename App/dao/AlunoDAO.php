<?php
// declarando um namespace
namespace App\DAO;

// Incluindo classe de outra subnamespace
use App\Model\Aluno;
 

/**
 * As classes DAO (Data Access Object) são responsáveis por executar os
 * SQL junto ao banco de dados.
 */
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
        return ($model->Id == null) ? $this->insert($model) : $this->update($model);
    }
    public function insert(Aluno $model) : Aluno
    {
        $sql = "INSERT INTO aluno (nome, ra, curso) VALUES (?, ?, ?) ";

        $stmt = parent::$conexao->prepare($sql);
        // o bindValue substitui as interrogações pelos valores
        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->Ra);
        $stmt->bindValue(3, $model->Curso);
        // salva no banco de dados
        $stmt->execute();
        // pego a id gerada do aluno na coneão e coloco na prodiedade $model e retorno o $model no final
        $model->Id = parent::$conexao->lastInsertId();

        return $model;
    }
    public function update(Aluno $model) : Aluno
    {
        $sql = "UPDATE aluno SET nome=?, ra=?, curso=? WHERE id=? ";

        $stmt = parent::$conexao->prepare($sql);
        // o bindValue substitui as interrogações pelos valores
        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->Ra);
        $stmt->bindValue(3, $model->Curso);
        $stmt->bindValue(4, $model->Id);
        // salva no banco de dados
        $stmt->execute();

        return $model;
    }
    public function selectById(int $Id) : ?Aluno
    {
        $sql = "SELECT * FROM aluno WHERE id=? ";

        $stmt = parent::$conexao->prepare($sql);  
        $stmt->bindValue(1, $Id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\Aluno");
    }
    public function select() :array
    {
        $sql = "SELECT * FROM aluno ";

        $stmt = parent::$conexao->prepare($sql);  
        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\Aluno");
    }

    public function delete(int $Id) :bool
    {
        $sql = "DELETE FROM aluno WHERE id=?";

        $stmt = parent::$conexao->prepare($sql);  
        $stmt->bindValue(1, $Id);
        return $stmt->execute();
    }
    
}