<?php
	
	$fp = fopen("Teste_Op.txt","w+");
	
	for ($i = 1; $i <= 500000; $i++) {
		
		require "index.php";
		fwrite($fp,"\n");
		fwrite($fp,$i);		
		
	}
	fclose($fp);
?>
