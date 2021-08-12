<?php  
	$contrasena = '';
	$usuario = 'root';
	$nombrebd= 'crud';

	try {
		$bd = new PDO(
			'mysql:host=localhost;port=3307;
			dbname='.$nombrebd,
			$usuario,
			$contrasena,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>