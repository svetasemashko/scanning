<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<h1>Welcome to the Scan World!</h1>
<a href="scan.php">Click here to start</a>

</body>
</html>

<?php

echo "<br>Filter: ".$_POST['filter'];
echo "<br>First color: ".$_POST['color1'];
echo "<br>Second color: ".$_POST['color2'];
echo "<br>Third color: ".$_POST['color3'];


?>

