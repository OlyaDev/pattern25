<?php

require_once 'config.php';
require_once 'functions.php';

$result = get_bd();
$row = mysqli_fetch_assoc($result);
	
	$contacts_out = $row['contacts'];

?>
<?php Head('comtacts');?>



<body>
<div class = "container" >
	<?php menu(); ?>	

	<div class =  "content" >
		<h1> Our Contacts are:</h1>
		<p><b>Skype:</b><p>
		<p> shevchenko_oleg_viktorovich<p>
		<p> live:olya12 <p>
		<p><b> E-Mail:</b> <p>
		<p> shevchenko.oleg5@gmail.com<p>
		<?php echo $contacts_out;?>
	</div>
</div>
</body>
</html>
