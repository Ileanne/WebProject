<!DOCTYPE html>
<html><body>
<?php
$name = $_POST['nombre'];
$email = $_POST['email'];
$topic = $_POST['asunto'];
$message = $_POST['mensaje'];


echo  $name . ".<br />";
echo  $email . ".<br />";
echo  $topic . ".<br />";
echo  $message . ".<br />";

echo "Si se manda";

?>
</body></html>