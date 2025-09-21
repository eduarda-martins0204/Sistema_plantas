<?php
namespace dao\mysql;

use dai\IUsuarioDAO;
use generic\MysqlFactory;

Class UsuarioDAO extends MysqlFactory implements IUsuarioDAO {
    // Implementação dos métodos da interface IUsuarioDAO

    public function listar(){
        $sql = "select id,nome,email from usuarios";
        $retorno = $this->banco->executar($sql);
        return $retorno;
    }

    public function listarID($id){
        $sql = "select id,nome,email from usuarios where id =: id";
        $param=[
            ":id"=>$id
        ];
        $retorno = $this->banco->executar($sql);
        return $retorno;
    }

    public function inserir($nome,$email){
        $sql = "insert into usuarios (nome,email,senha) values (:nome,:email)";
        $param=[
            ":nome"=>$nome,
            ":email"=>$email,
        ];
        $retorno = $this->banco->executar($sql,$param);
        return $retorno;
    }

    public function alterar($id,$nome,$email){
        $sql = "update usuarios set nome=:nome,email=:email where id=:id";
        $param=[
            ":id"=>$id,
            ":nome"=>$nome,
            ":email"=>$email,
        ];
        $retorno = $this->banco->executar($sql,$param);
        return $retorno;
    }
}
?>