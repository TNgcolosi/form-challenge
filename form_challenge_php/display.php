<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zama Zama Game Show</title>
</head>
<body>
    
<?php

if (isset($_POST['name'])) {



$name = $_POST['name'];
$lastName = $_POST['lastName'];

echo "<p> $name $lastName you are today's winner </p><br>";

echo "\n\n  <p> Would you like to claim your prize now?<?p>";
echo "\n\n";

  ?>





<form action="display.php" method="post">

<input type="radio" name="response" value="yes">Yes<br>

<input type="radio" name="response" value="no">No<br>
<input type="submit" value="tshwara">
</form>

<?php 

?>

<?php

} else {
   

if ($_POST["response"]=="yes") {
echo "<br> Congratulations";
} else {
echo "<p> come back soon</p>";
}}
?> 

</body>
</html>