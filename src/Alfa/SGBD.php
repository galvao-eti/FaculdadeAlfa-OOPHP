<?php
namespace Alfa;

class SGBD implements Interfaces\SGBD
{
	protected $endereco;
	protected $porta;
	public $senha;
	public $usuario;
	public $tipo;

	public function __get($nome)
	{
		return $this->$nome;
	}

	public function __set($nome, $valor)
	{
		$this->$nome = $valor;
	}

	public function __construct($tipo)
	{
		$this->tipo = $tipo;
	}

	public function getPorta()
	{
		return $this->porta;
	}

	public function setPorta($porta)
	{
		if(is_numeric($porta)) {
			$this->porta = $porta;
		}
	}

	public function getEndereco()
	{
		return $this->endereco;
	}

	public function setEndereco($endereco)
	{
		$this->endereco = $endereco;
	}
}