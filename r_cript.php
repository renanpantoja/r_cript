<html>
<head>
	<title>r_cript</title>
	<meta charset="UTF-8">
</head>
<body>

<?php

@$abc = strtr(
		 
	strtolower($_POST['abc']),
						 
		array (
						 
			'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A',
			'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E',
			'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ð' => 'D', 'Ñ' => 'N',
			'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O',
			'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Ŕ' => 'R',
			'Þ' => 's', 'ß' => 'B', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a',
			'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c', 'è' => 'e', 'é' => 'e',
			'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
			'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
			'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y',
			'þ' => 'b', 'ÿ' => 'y', 'ŕ' => 'r', ',' => '', '.' => '', '-' => '',
			'_' => ''
		)
	);


if(!is_numeric($abc)){

	$r_cript = strtr($abc,

		array (

			'a' => '10', 'b' => '20', 'c' => '30', 'd' => '40', 'e' => '50', 'f' => '60',
			'g' => '70', 'h' => '80', 'i' => '90', 'j' => '100', 'k' => '110', 'l' => '120',
			'm' => '130', 'n' => '140', 'o' => '150', 'p' => '160', 'q' => '170', 'r' => '180', 's' => '190',
			't' => '200', 'u' => '210', 'v' => '220', 'w' => '230', 'x' => '240', 'y' => '250', 'z' => '260',
			' ' => '0'
		)
	);

} else if(is_numeric($abc)){

	$r_cript = strtr($abc,

		array (

			'10' => 'a', '20' => 'b', '30' => 'c', '40' => 'd', '50' => 'e', '60' => 'f',
			'70' => 'g', '80' => 'h', '90' => 'i', '100' => 'j', '110' => 'k', '120' => 'l',
			'130' => 'm', '140' => 'n', '150' => 'o', '160' => 'p', '170' => 'q', '180' => 'r', '190' => 's',
			'200' => 't', '210' => 'u', '220' => 'v', '230' => 'w', '240' => 'x', '250' => 'y', '260' => 'z',
			'0' => ' '
		)
	);

}else {}


?>

<form method="POST" action="">
	<textarea rows="10" cols="50" name="abc"><?php echo $r_cript;  ?></textarea><br>
	<input type="submit" />
</form>

<img src="r_cript.jpg" />

</body>
</html>
