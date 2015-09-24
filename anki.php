<?php

require_once 'config.php';
require_once 'functions.php';

$result = get_bd();
$row = mysqli_fetch_assoc($result);
	$anki_out = $row['anki'];
	$anki_out_info = $row['home'];
?>
<script type="text/javascript">
function open_close(id_spol) {
var obj = "";
if (document.getElementById) obj = document.getElementById(id_spol).style;
else if (document.all) obj = document.all[id_spol];
else if (document.layers) obj = document.layers[id_spol];
else return 1;

if (obj.display == "") obj.display = "none";
else if (obj.display != "none") obj.display = "none";
else obj.display = "block";
}
</script>

<?php Head('anki');?>

<body>
<div class = "container" >
	<?php menu(); ?>

	<div class = "content" >

		<div class="echo">
			<?php echo $anki_out;?>
		</div>

		<div onClick="open_close('spoiler1')" style="background:#e7e7e7; border: 1px solid #4874a3; border-radius:5px;" >
				<b>Spoiler</b> </div>
			<div id="spoiler1" style="display:none; background:#F7F7F7;">
				this is text spoiler 
				<?php Logpass()?>				
			</div>
		
	</div>
</div>
</body>
</html>
