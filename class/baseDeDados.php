<?php
class baseDeDados
{
	public $conexao;
	public $nome;
	public $dependencia;

	function __construct($nome, sgbd $servidor)
	
{		$this->nome = $nome;
		$this->dependencia = $servidor;
	}

	public function conectar()
	{
		if ($this->dependencia->tipo == 'mysql') {
			$this->conexao = mysqli_connect($this->dependencia->getEndereco(), $this->dependencia->usuario, $this->dependencia->senha, $this->nome);

			if (!$this->conexao) {
				throw new Exception(mysqli_connect_error());
			}
		}
	}

	public function desconectar()
	{
		if ($this->conexao) {
			mysqli_close($this->conexao);
			$this->conexao = NULL;
		}
	}

	public function __destruct()
	{
		$this->desconectar();
	}
}