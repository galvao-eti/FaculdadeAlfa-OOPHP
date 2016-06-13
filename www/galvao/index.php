<?php
require '../../autoload.php';

use Alfa\SGBD;


$servidor = new SGBD('mysql');
$servidor->endereco = 'localhost';

echo $servidor->endereco;

die();

$servidor->setPorta(3306);
$servidor->usuario = 'root';
$servidor->senha = 'mysql';

$base = new Alfa\BaseDeDados('mysql', $servidor);

try {
	$base->conectar();
	var_dump($base->conexao);
} catch (Exception $e) {
	echo $e->getMessage();
}

$base->desconectar();


var_dump($base);


