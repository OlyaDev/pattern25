<?php



require_once 'config.php';
require_once 'functions.php';

$result = get_bd();
$row = mysqli_fetch_assoc($result);

$home_out =  $row['home'];
$admin_login= $row['login'];
$admin_pass = $row['password'];
	
if(!empty($_POST))
		if($admin_login == $_POST['login'] && $admin_pass == $_POST['pass'])
	{
			header('location: admin.php?key=' . md5($_POST['pass']) );
			exit();
	}

?>

<?php Head('a');?>

<body>
<div class = "container" >
	
<? Menu()?>
<?php Logpass()?>
			<div class="text"><?php echo $home_out; ?> </div>
	</div>
</div>


</body>
</html>