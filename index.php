<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms here </title>
</head>
<body>
 


<form action="display.php" method="post">
<label for="username">username</label>
<input type="text" name="username" id="username">
<label for="password">password</label>
<input type="password" name="password" id="username">

<input type="submit">


</form>

<?php

//} else {

//$username = $_POST['username'];
//$password = $_POST['password'];

//echo "<p>". $username . "</p>";
//echo "<p>". $password . "</p>";

//}

//$_POST = '';

?>
</body>
</html>