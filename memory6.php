<!DOCTYPE html>
<html>
<head>
	<title>Memory</title>
	<link rel="stylesheet" type="text/css" href="connect.css">
</head>

<body>
<div class="title">
<h1>Congrats! You made a match!</h1>
</div>
<div class="game">

<form method="post" action="memory6.php">

		
<input type="button" name="test" id="test" value="RUN" /><br/>
		
<?php

			$arr = array("memory1.html","memory2.html","memory3.html","memory4.html","memory5.html");
				
			header("Location: " . $arr[array_rand($arr)]);
						
?>	
					
<!--		


			
		shuffle($input);

		foreach ($input as $inputs){
	
			echo "$inputs";
	
}
-->
  
       


</form>
</div>
</body>
</html>