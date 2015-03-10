<?php
require 'lib/mpdo.php';
require 'lib/vlogin.php'; 
	
		 $gbd=null;
	class vinsert{
		function __construct(){

			

		}


		function getInstance($config){
			self::$config=$conf;
			
			$db=mpdo::getInstance(self::$config);

		}

	

		$gbd=getInstance($config);
		$stmt = $gbd->prepare("INSERT INTO users (name,email,pass,rol) VALUES ($_POST['name'],$_POST['email'],$_POST['pass'],$_POST['rol'])");
	 	$stmt->bindParam(2, $name);
		 $stmt->bindParam(3, $email);
	 	$stmt->bindParam(4, $pass);
	 	 $stmt->bindParam(5, $rol);
		$stmt->execute();
  	
 	

	 	 echo "Datos Insertados";
	 	 $gdb=null;
}

