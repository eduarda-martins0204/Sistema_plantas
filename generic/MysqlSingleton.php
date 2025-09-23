<?php
namespace generic;

use PDO;
use Exception;

class MysqlSingleton {
    private static $instance; 
    private $conexao;
    
    private function __construct() {
        try {
            $dsn = "mysql:host=localhost;dbname=sistema_plantas";
            $usuario = "root";
            $senha = "";

            $this->conexao = new PDO($dsn, $usuario, $senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexao->exec("set names utf8");
        } catch(PDOException $e) {
            throw new Exception("Erro de Conexão com o Banco de Dados: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function executar($query, $param = null) {
        $sth = $this->conexao->prepare($query);
        
        if ($param) {
            foreach ($param as $chave => $valor) {
                $sth->bindValue($chave, $valor);
            }
        }
        
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}
