<?php
	$a = fopen("D_LOTFAC.HTM","r");
	$x = fopen("sillas.txt","w+");
	copy("D_LOTFAC.HTM","sillas.txt");
	fclose($a);
	$d = file_get_contents("sillas.txt");
	while(!feof($x)){
		$n = explode(("td rowspan"),$d);
		foreach($n as &$valor){
			echo $valor;			
			echo "</br>";	
		}
	}
	fclose($x);
?>
