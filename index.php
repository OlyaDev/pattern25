<?php
include_once ('config.php');


if ($_SERVER['REQUEST_URI'] == '/'){
	$Page = 'index';
	$Module = 'index';
	} else {
		$URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$URL_Parts = explode('/', trim($URL_Path, '/'));
		$Page = array_shift($URL_Parts);
		$Module = array_shift($URL_Parts);
	
	if(!empty($Module)){
		$Param = array();
		for($i = 0; $i < count($URL_Parts); $i++){
			$Param[$URL_Parts[$i]] = $URL_Parts[++$i];
		}
	}
	}



	
	if ($Page == 'index') include ('page/index.php');
	else if ($Page == 'download') include('download.php');
	else if ($Page == 'anki') include('anki.php');
	else if ($Page == 'contacts') include('contacts.php');
	else if ($Page == 'contacts') include('page/test.php');



	function Head($a1){

		echo '<html>

	<head>
		<meta http-equiv="Context-Type" content = "text/html"; 
			charset = "windows-1251"/>
		<title>'.$a1.'</title>
		<link rel = "icon" href="images/al.ICO" type="image/x-icon">
		<meta name = "description" content = "">
		<meta name = "keywords" content = "">
		<link href = "style.css" rel = "stylesheet" type = "text/css"/> 	
		

	</head>';
	}

	function Menu(){
echo '
		<div class = "wrapper" >
			<div class = "menu_anki" > <a href= "/" >Home </a> </div>
			<div class = "menu_anki" > <a href= "/download" > Download </a> </div>
			<div class = "menu_anki" > <a href = "/anki" > Anki </a> </div>
			<div class = "menu_anki" > <a href = "/contacts"> Contacts </a> </div>
	</div>';

	}


	function Footer(){
		echo '<div class = "content" >
			<div class = "text" > Welcome to AnkiLearn </div>		
			<div class = "text" ><p> Anki Learn is optimal method for study of English and Coding and etc.<p> </div>';
	}

	function Logpass(){
		echo '
			<div class = "login_password" >
				<form  method="post">
				<input type = "text" name = "login" placeholder="Login"></input></br>
				<input type = "password" name = "pass" placeholder="Password"></input></br>
				<input type = "submit" name = "ok" value="Enter"></input></br>
	</div> ';
	}

?>