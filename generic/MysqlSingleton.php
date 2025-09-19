<?php
class MysqlSingleton{
    private $usuario = "root";
    private $senha = "";


    private function __construct(){
        if($this->conexao == null){
            $this->conexao = new PDO($this->dsn, $this->usuario, $this->senha);
        }
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new MysqlSingleton();
        }
        return self::$instance;
    }

    public function executar($query,$param = array()){
        if($this->conexao){
            $sth = $this->conexao->prepare($query);
            foreach($param as $chave => $valor){
                $sth->bindValue($chave, $valor);
            }

            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}