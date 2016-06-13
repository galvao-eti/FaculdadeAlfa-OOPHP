<?php
require '../../autoload.php';

use Alfa\SGBD;
use Alfa\Produto;

$servidor = new SGBD('mysql');
$servidor->setEndereco('localhost');
$servidor->setPorta(3306);
$servidor->usuario = 'root';
$servidor->senha = 'mysql';

$base = new Alfa\BaseDeDados('alfa_oo', $servidor);

try {
	$base->conectar();
} catch (Exception $e) {
	echo $e->getMessage();
}

$produto = new Produto($base);
$produto->setId(12);
$produto->nome = 'Geladeira Electrolux';
$produto->preco = 907.00;

die($produto->getId());

try {
	$produto->create();
} catch (Exception $e) {
	echo $e->getMessage();
}

$base->desconectar();




