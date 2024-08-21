<?php

class Manager extends Conexao
{
    public function inserir($data) {
        $conn = parent::retornaConexao();
        $sql = "INSERT INTO paciente VALUES(NULL, :nome, :sexo, :historico)";
        $stmt = $conn->prepare($sql);
        foreach($data as $key => $value){
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
    }

    public function listar(){
        $conn = parent::retornaConexao();
        $sql = "SELECT * FROM paciente ORDER BY id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function update($data){
        $conn = parent::retornaConexao();
        $sql = "UPDATE paciente SET nome = :nome, sexo = :sexo, historico_medico = :historico WHERE id = :id";
        $stmt = $conn->prepare($sql);
        foreach($data as $key => $val){
            $stmt->bindValue(":$key", $val);
        }
        $stmt->execute();
    }

    public function delete($id){
        $conn = parent::retornaConexao();
        $sql = "DELETE FROM paciente WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);

    }



}
