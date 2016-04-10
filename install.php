<?php
if(!file_exists("private"))
	{
			$passwd = hash('whirlpool',"admin");
			$tbl = array("login" => "admin", "passwd" => $passwd, "acces" => "5");
			mkdir("private",0777);
			$mytab = array($tbl);
			$mytab = serialize($mytab);
			file_put_contents("private/passwd",$mytab);
	}
?>