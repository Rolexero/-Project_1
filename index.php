<?php




if (isset($_POST["Myproject"])){
	$var = $_POST["Myproject"];
}

else{
	$var = array("Tola", "Femi", 56, "Mayorkun");
	
}






$var2 = 5;

$var3 ="<html>
		<head></head>
		<body><h1>Rolex first php</h1>
		<form action = 'http://localhost:8080/Myproject/index.php' method = 'POST'>
		<input type = 'text' name = 'name'></input> <br />
		<b>What lessons do you want to learn?</b> </br>
		<select name = 'Myproject[]' size = '5' multiple>
			<option value = 'Website_Development'>Website Development</option>
			<option value = 'Photography'>Photography</option>
			<option value = 'Javascript'>Javascript</option>
		 	<option value = 'Python'>Python</option>
			<option value = 'Java'>Java</option>
		 </select>
		<input type = 'submit' value = 'Submit'>
		</form> </body>
		</html>";



//array_push($var, "Olaoluwa");
//array_pop($var);
//$var[2] = "Kunle";

foreach ($var as $index) 
{
	
		echo $index . " ";
	
	echo "<br>";
}

//print_r($var);
echo $var3;

;







?>



















