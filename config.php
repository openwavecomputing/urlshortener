<?php
$baseurl='http://localhost/urlshortener/';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "urlshortener";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_REQUEST['r'])){
	$sql = "SELECT original_url FROM `url` WHERE `updated_url`='".$_REQUEST['r']."'";
	$result = $conn->query($sql)->fetch_assoc();
	if(isset($result['original_url'])){
	?>
		<script>
			window.location.href = "<?php echo $result['original_url']; ?>";
		</script>
	<?php
	}
}
?>