<?php
$baseurl='http://us.openwavecomp.net/';

$servername = "localhost";
$username = "urlshortener";
$password = "urlshortener43";
$dbname = "urlshortener";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_REQUEST['r'])){
	$sql = "SELECT original_url FROM `url` WHERE `updated_url`='".$_REQUEST['r']."'";
	$result = $conn->query($sql)->fetch_assoc();
	if(isset($result['original_url'])){
	?>
		<script>
			var re_url= "<?php echo $result['original_url']; ?>";
			function isValid(text) {
				return /\b(http|https)/.test(text);
			}
			if (isValid(re_url)) {
				window.location.href = "<?php echo $result['original_url']; ?>";
			} else {
				window.location.href = "http://<?php echo $result['original_url']; ?>";
			}

			
		</script>
	<?php
	}
}
?>