<?php
	$file = fopen("TESTE_stress.HTM","r");
	$concurso = 0;
	$fp = fopen("Resultado TESTE_STRESS.txt","w+");
	while(($x = fgetss($file)) !== false){
		$n = explode('/',$x);
      
                if(count($n) == 3){
                	$cont = 0;
                       	while(($x = fgetss($file)) !== false){
				$cont++;   
				fwrite($fp,"Bola".$cont.": ");                    		
				fwrite($fp,$x);                                
                                if($cont >  14){
					$concurso++;
                                	fwrite($fp,"Concurso".$concurso."\n\n\n");
                                	break;
                                }
                        }   
        	}
			
	}
	fclose($file);
	fclose($fp);
?>
