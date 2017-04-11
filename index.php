<?php
	$file = fopen("D_LOTFAC.HTM","r");
	$concurso = 1;
	$fp = fopen("Numeros_LOTFAC.txt","w+");
	
	while(($num = fgetss($file)) !== false){
		$date = explode('/',$num);
		
		if(count($date) == 3){
			$cont = 0;
			fwrite($fp,"Concurso ".$concurso."\r\nData: ");
			fwrite($fp,$date[0]."/".$date[1]."/".$date[2]."\r\n");
			
					
			while(($num = fgetss($file)) !== false){
				$cont++;  
				fwrite($fp,"Bola ".$cont.": ");                    		
				fwrite($fp,$num);                                
				    
				if($cont >  14){
					$concurso++;
					fwrite($fp,"\r\n");
					break;
                }
            }   
        }
			
	}
	fclose($file);
	fclose($fp);
?>
