<?php

require_once 'Database.php';
date_default_timezone_set('America/Recife');

class User {

    private $mail;
    private $pass;

    function getMail() {
        return $this->mail;
    }

    function getPass() {
        return $this->pass;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setPass($pass) {
        $this->pass = base64_encode($pass);
    }

    public function __construct($e, $s) {
        $this->setMail($e);
        $this->setPass($s);
    }

    public function logar() {
        //Cria conexão com banco de dados
        $conexao = Database::conexao();

        //Cria o comando SQL
        $sql = "SELECT * FROM T_USER WHERE USER_MAIL = '{$this->getMail()}'";

        //Executa o comando SQL
        $stmt = $conexao->query($sql);
        //Prepara o resultado em um Array[]
        $consulta = $stmt->fetch(PDO::FETCH_ASSOC);

        //Verifica se a seleção retorna dados
        if (empty($consulta)) {

            //Desfaz conexão com banco de dados
            $conexao = null;
            return 1;

            //Valida se a senha está correta    
        } elseif ($this->getPass() == $consulta['USER_PASS']) {

            //Deleta o campo senha do array e retorna para o sistema
            unset($consulta['USER_PASS']);

            //Cria sessão do usuario
            session_start();
            $_SESSION['user'] = $consulta;

            //Desfaz conexão com banco de dados
            $conexao = null;

            return 0;
        } else {
            //Desfaz conexão com banco de dados
            $conexao = null;
            return 2;
        }
    }
}
