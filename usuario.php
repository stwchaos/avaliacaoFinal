<!--usuario.php-->


<?php 
class Usuario{
    private $id;
    private $nome;
    private $senha;
    private $email;

    function __construct($id, $nome, $senha, $email){
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
    }

    function setId($id){
        $this->id = $id;
    }

    function getId(){
        return $this->id;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getNome(){
        return $this->nome;
    }

    function setSenha($senha){
        $this->senha = $senha;
    }

    function getSenha(){
        return $this->senha;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function getEmail(){
        return $this->email;
    }
}
?>