<?php
class Conexao
{
    private $host = 'localhost';
    private $db_name = 'estudospdo';
    private $user = 'root';
    private $senha = '';

    public function conectar()
    {
        try {
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->db_name",
                "$this->user",
                "$this->senha"
            );
            return $conexao;
        } catch (PDOException $ex) {  // Tratando um erro
            echo "<p>{$ex->getMessage()}</p>";
        }
    }
}
