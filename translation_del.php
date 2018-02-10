<!DOCTYPE html>
<html>
<head>
	<title>Delete a translation</title>
</head>
<body>
	<h2>Form</h2>
	<form action="?" method="post">
		Name <input type="text" name="name" placeholder="greeting" autocomplete="off"><br>
		<input type="submit" value="Send">
	</form>
</body>
</html>
<?php
if (isset($_POST['name'])) {
	if (file_exists('translations.db')) {
		$table = unserialize(file_get_contents('translations.db'));
		unset($table[$_POST['name']]);
		file_put_contents('translations.db', serialize($table));
		echo '<p>Deleted successfully</p><a href="?">Refresh</a>';
	} else {
		echo '<p>Nothing was deleted</p><a href="?">Refresh</a>';
	}
}
?>