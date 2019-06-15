<?php 


class Usuario{
	public $nome;
	public $email;
	public $senha;

	function Usuario($nome, $email, $senha)
	{
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = $senha;
	}

	public function getNome(){
		return $this->nome;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getSenha(){
		return $this->senha;
	}



}







 ?>