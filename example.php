<?php
require('StylishTR.php');
tr_read();
?>
<!DOCTYPE html>
<html>
<head>
	<title>{example/name}</title>
	<meta name="description" content="{example/description}"/>
	<style>
		h1, h2, h3 {
			margin:0;
		}
	</style>
</head>
<body>
	<h1>{example/name}</h1>
	<h2>{example/by} Ozachi</h2>
	<br>
	<!-- {example/info} -->
	<a href="https://github.com/OzachiDev">>>> {example/github} <<<</a>
	<br>
	<?php echo "<p>You also can use PHP! And you can use the translations as variables: Here, it is <b>".$tr['example/name'][$lang]."</b> :D</p>"; ?>
	<br>
	<input type="button" onclick="location.replace('?lang=fr');" value="FR">
	<input type="button" onclick="location.replace('?lang=en');" value="EN">
	<input type="button" onclick="location.replace('?lang=es');" value="ES">
	<br>
	<div style="display:block;background-color:#555555;color:white;">- {footer/name} -</div>
</body>
</html>
