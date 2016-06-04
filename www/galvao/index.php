<?php
require '../../class/sgbd.php';
require '../../class/baseDeDados.php';

$servidor = new sgbd('mysql');
$servidor->setEndereco('localhost');
$servidor->setPorta(3306);
$servidor->usuario = 'root';
$servidor->senha = 'mysql';

$base = new baseDeDados('mysql', $servidor);

try {
	$base->conectar();
	var_dump($base->conexao);
} catch (Exception $e) {
	echo $e->getMessage();
}

$base->desconectar();


var_dump($base);


