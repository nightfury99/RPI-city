#!/usr/bin/php

<?php
$command = escapeshellcmd('./send.py -d on');
$command2 = escapeshellcmd('./send.py -d off');

$a = false;

if($a) {
	shell_exec($command);
	$a = false;
}else {
	shell_exec($command2);
	$a = true;
}

//$output = shell_exec($command);

?>
