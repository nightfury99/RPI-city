<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED CONTROL</title>
    <script src="https://kit.fontawesome.com/88fcd875f3.js"></script>
    <link rel="stylesheet" href="main.css">
</head>
<body class="light">
    <button class="mode">Dark</button>
    <ul>
        <li>
            <button class="" name="button1" onclick="load()">
                <i class="far fa-lightbulb"></i>
            </button>
        </li>
        <li>
            <button class="">
                <i class="fas fa-subway"></i>
            </button>
        </li>
    </ul>
    <?php 
	$commandOff = escapeshellcmd('./send.py -d off');
	$commandOn = escapeshellcmd('./send.py -d on');

	/*
	if($ledState == "off") {
		$ledState = "on";
	}else {
		$ledState = "off";
	}
	echo($ledState);
	function button1() {
		//$ledState = !$ledState;
		
		shell_exec($commandOn);
		echo "dddd";
	}

	function on(){
		$ledState = "on";
	}

	function off() {
		$ledState = "off";
	}*/
    ?>

	<script>
	var led = false;
	var commandOn = " shell_exec($commandOn); ";
	var commandOff = " shell_exec($commandOff); ";
	//console.log(commandOn);
	var xmlhttp = new XMLHttpRequest();
	const mode = document.querySelector('.mode');
        let body = {
            'el': document.querySelector('body'),
            'dark': false
	}

        mode.addEventListener('click', ()=> {
	if(body.dark === false) {
                body.dark = true;
                body.el.className = 'dark';
                mode.textContent = 'light';
            }
	else {
                body.dark = false;
                body.el.className = 'light';
                mode.textContent = 'dark';
            }
        });
	const btns = document.querySelectorAll('li > button');

	var value = false;

	function load(){
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {

    		}
  	};

        if(value == false){
                value = true;
                xhttp.open("POST", "on.php", true);
                xhttp.send();
        }else{
                value = false;
                xhttp.open("POST", "off.php", true);
                xhttp.send();
        }
        	console.log(value);
	}
        btns.forEach(btn =>{
	btn.addEventListener('click', ()=>{
	/*console.log("dadada");
	
	if(led === false) {
		led = true;
		console.log(true);
		xmlhttp.onerror =  function(e) {
			alert("Error fetch");
		}
		xmlhttp.open("GET", "on.php",true);
		//xmlhttp.send();
		<?php shell_exec($commandOn); ?>
		
	}else {
		led = false;
		console.log(false);
		xmlhttp.onerror = function(e) {
			alert("Error fetch");
		}
		xmlhttp.open("POST", "off.php", true);
		<?php shell_exec($commandOff); ?>
		//xmlhttp.send();
	}*/
        btn.classList.toggle('active');
            });
	});
    </script>
</body>
</html>
