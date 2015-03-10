<?php
	class vlogin{
		function __construct(){
		echo '<form name="login" action="insert" method="POST">    
    <input type="text" name="name"/><br />    
    <input type="password" name="pass"/><br />¡
    <input type="text" name="rol" placeholder="{1-3}"/><br /> 
    <button type="submit">Login</button>
	</form>';


		}

	}



?>
