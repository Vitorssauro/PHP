<?php


	function calculadora ($n1,$n2) {

		$mais = ($n1+$n2);
		$menos = ($n1-$n2);
		$multi = ($n1*$n2);
		$divi = ($n1/$n2);

		return 
			"Números: $n1 e $n2<br><br>
		 	$n1 + $n2	= $mais <br>
		 	$n1 - $n2	= $menos <br>
		 	$n1 * $n2	= $multi <br>
			$n1 / $n2	= $divi <br>";
			
	}

	echo calculadora(5,6);

?>