<!DOCTYPE html>
<html>
<head>
	<title>Add a translation</title>
</head>
<body>
	<h2>Form</h2>
	<form action="?" method="post">
		Name <input type="text" name="name" placeholder="example/greeting" autocomplete="off"><br>
		EN <input type="text" name="en" placeholder="Hello" autocomplete="off"><br>
		FR <input type="text" name="fr" placeholder="Bonjour" autocomplete="off"><br>
		ES <input type="text" name="es" placeholder="Buenos dias" autocomplete="off"><br>
		<input type="submit" value="Send">
		<!-- You can add other languages, if you want to.. -->
	</form>
</body>
</html>
<?php
if (isset($_POST['name'])) {
	if (file_exists('translations.db')) {$table = unserialize(file_get_contents('translations.db'));}
	$name = $_POST['name'];
	unset($_POST['name']);
	foreach ($_POST as $lang => $content) {
		$table[$name][$lang] = $content;
	}
	file_put_contents('translations.db', serialize($table));
	echo '<p>Added successfully</p><a href="?">Refresh</a>';
}
?>