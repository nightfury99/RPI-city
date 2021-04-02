<?php

$command = escapeshellcmd("./send.py -d on");
$output = shell_exec($command);

?>
