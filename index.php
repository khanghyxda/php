<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo file_get_contents("https://qhotel.azurewebsites.net/Home/Ping");
echo file_get_contents("https://qhotelapi.azurewebsites.net");
echo file_get_contents("http://joccore.azurewebsites.net/t/1/14");
?>

</body>
</html>
