<html lang="en">
<head>
	<title>Who I AM</title>
</head>
<body><a>
<h2>Shod</h2>

<?php //echo $username . " " . $password;?>
<br>

<br>
<?php 



$response = strstr($response, '\n'); //gets all text from needle on
//$response = strstr($response, '\n', true); //gets all text before needle
$response = substr($response, 2);

echo  $response;
?>
<br>
<a href="welcome">Go Again</a>
</a></body>
</html>


