<?php
    //Laço de repetição "for"
    for($contador = 12;$contador > 0;$contador--){
        echo $contador.' Teste';
        echo '<br/>';
    }
    
    //Laço de repetição "while"
	$contador = 0;
	while($contador < 10){
		echo 'alo mundo';
		echo '<hr>';
		$contador+=1;
	}

	//Laço de repetição "do"
	$contador = 0;
	do{
		echo 'ola mundo';
		echo '<br />';
		$contador++;
	}while($contador < 10);
?>