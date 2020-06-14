<?php
include "config.php";
if(isset($_POST['url'])){
	$updated_url = uniqid();
	$sql = "INSERT INTO `url`(`original_url`, `updated_url`, `created_date`) VALUES ('".$_POST['url']."','".$updated_url."','".date('Y-m-d H:i:s')."')";
	$result = $conn->query($sql);
	?>
	<div class="shortened-links-list">
		<div>
			<div class="origin-link"><?php echo $_POST['url']; ?></div>
		</div>
	</div>
	<div class="shortened-links-list">
		<div>
			<div class="short-link">
				<a href="<?php echo $baseurl.'?r='.$updated_url; ?>" title="<?php echo $baseurl.'?r='.$updated_url; ?>" target="_blank"><?php echo $baseurl.'?r='.$updated_url; ?></a>
			</div>
		</div>
	</div>
	<?php
}
?>