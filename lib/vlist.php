<?php
ini_set('display_errors','on');

	include 'config.php';
	class vlist{

	
	
		function __construct(){
			echo 'Lista';
	
		

}
	
	  $sql = 'SELECT * FROM users';
    // Create the query and asign the result to a variable call $result
    $result =mysql_query($sql);
    // Extract the values from $result
    $rows = $result->fetchAll();
    // Since the values are an associative array we use foreach to extract the values from $rows
    foreach ($rows as $row) {
        echo 'idusers: '.$row['idusers'].'<br/>';
        echo 'name: '.$row['name'].'<br/>';
        echo 'email: '.$row['email'].'<br/>';
        echo 'pass: '.$row['pass'].'<br/>';
        echo 'rol: '.$row['rol'].'<br/>';
        echo "<hr/>";
    }
	
}