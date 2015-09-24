<?php


//mysql_connect('localhost','learn','goodday');
//mysql_select_db('ankilearn_kl_com_ua') 
//or die("Не могу подключиться к базе.");

require_once 'config.php';
require_once 'functions.php';

$result = get_bd();
$row = mysqli_fetch_assoc($result);	
$download_out = $row['download'];

$file_test = "/download/2v02.apkg";
$test = "/download/test_deck.apkg";
$google = "https://drive.google.com/file/d/0B6nzH3sQrbGPOXFGN3EwWkJNNlU/view?usp=sharing";

$DIR = $_SERVER['DOCUMENT_ROOT']."/download/";
$file = $DIR.htmlspecialchars($_GET['q'])
/*
if(file_exists($file)){
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: filename="'.htmlspecialchars($_GET['q']).'"');
	header('Content-length: '.filesize($file));
	header('Cache-Control: no-cache');
	header("Content-Transfer-Encoding: chunked");

	readfile($file);
}else{
	header("HTTP/1.0 404 Not Found");
}
*/

//$="/download/2v02.apkg";
/*$filetest = "2v02.apkg";
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($filetest));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filetest));
    readfile($filetest);
exit;*/
?>

<?php Head('download');?>

<body>
<div class = "container" >
	<?php menu(); ?>
	<div class="content">
		
		<div class="text"><p> <?php echo $download_out; ?></p></div> 
		
		<div class="list">
				<nav>
					<ul> 
						<li> <a href="#">English </a> 
							<ul>
								<li><a href="#">Words</a>
									<ul>
										<li><a href="#">W01 1-40</a></li>
										<li><a href="#">W02 41-80</a></li>
										<li><a href="#">W03 81-120</a></li>
									</ul></li>
								<li><a href="#">Irregular Verbs</a>
									<ul>
										<li><a href="#">2v01 1-40</a></li>
										<li><a href="#">2v02 41-80</a></li>
									</ul></li>
								<li><a href="#">Verbs</a>
									<ul>
										<li><a href="#">V01 1-40</a></li>
										<li><a href="#">V02 41-80</a></li>
									</ul></li>
							</ul></li>
						<li> <a href="#"> Code </a> 
							<ul> 
								<li><a href="#"> CSS </a></li>
								<li><a href="#"> HTML </a></li>
								<li><a href="#"> SQL </a></li>
								<li><a href="#"> Java </a></li>
								<li><a href="#">Android</a></li>
							</ul></li>
						<li> <a href="#"> Spanish </a> </li>
						<li><a href="#">Books</a></li> 
					</ul>
				</nav>
		</div>
	</div>

	<?php Logpass()?>

		<div class = "footer" >
			<!--<div class = "text" ><?php echo $download_out; ?> </div> -->
			<div class = "text" ><a href = "<?php echo $google; ?>">Качать (переход на "гугл диск")</a> </div>
			<div class = "text" ><a href = "downloads.php">go_test (working)</a> </div>
			<div class = "text" ><a href = "w01 1-40.php">01 1-40</a></div>
			<div class = "text" ><a href = "w02 41-80.php">w02 41-80</a></div>
			<div class = "text" ><a href = "w03 81-120.php">w03 81-120</a></div>
			<div class = "text" ><a href = "w04 121-160.php">w04 121-160</a></div>
			<div class = "text" ><a href = "w05  161-200.php">w05  161-200</a></div>
			<div class = "text" ><a href = "w06   201-240.php">w06   201-240 </a></div>
			<div class = "text" ><a href = "w07    241-280.php">w07    241-280</a></div>
			<div class = "text" ><a href = "w08     281-320.php">w08     281-320</a></div>
			<div class = "text" ><a href = "w09      321-360.php">w09      321-360 </a></div>
			<div class = "text" ><a href = "w10       361-400.php">w10       361-400 </a></div>
			<div class = "text" ><a href = "w11        401-462.php">w11        401-462</a></div>

		</div>
	</div>
</div>
</body>
</html>
