<?php include "config.php"; ?>
<html lang="en-us">
<head>
<title>URL Shortener</title>
<link rel="stylesheet" href="custom.css" type="text/css" />
</head>
<body>
	<header>
		<div id="logo"><a href="#" class="logo">URL Shortener</a></div>
	</header>
	<main>
		<section id="urlbox">
			<h1>Paste the URL to be shortened</h1>
				<div id="formurl">
					<input type="text" name="url" id="url" placeholder="Enter the link here">
					<div id="formbutton">
						<input type="button" value="Shorten URL" onclick="save()">
					</div>
				</div>
				<div class="showurl">
					
				</div>
		</section>
	</main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function save(){
	$.ajax({
		type: "POST",
		url: 'save.php',
		data:{url: $('#url').val()},
		success: function(response){
			$('.showurl').html(response);
		}
	});
}
</script>
</html>