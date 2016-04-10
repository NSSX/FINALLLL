<?php
	function print_home()
	{
		if(file_exists("database/element"))
		{
			$mytab= unserialize(file_get_contents("database/element"));
		$i = 0;
			foreach($mytab as $elem)
			{
			if($i == 4)
			{
				exit;
			}
			$link = $elem['link'];
			echo"<img id ='homeimg' SRC = $link>";
			$i++;
			}
		}
	}
?>