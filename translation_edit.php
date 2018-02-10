<!DOCTYPE html>
<html>
<head>
	<title>Edit a translation</title>
</head>
<body>
	<h2>Form</h2>
	<form action="?<?php if (isset($_POST['name'])) {echo 'save';} ?>" method="post">
		Name <input type="text" name="name" placeholder="greeting" value="<?php if (isset($_POST['name'])) {echo $_POST['name'];} ?>" autocomplete="off"><br>
		<?php
		if (isset($_GET['save']) && isset($_POST['name'])) {
			if (file_exists('translations.db')) {$table = unserialize(file_get_contents('translations.db'));}
			$name = $_POST['name'];
			unset($_POST['name']);
			foreach ($_POST as $lang => $content) {
				$table[$name][$lang] = $content;
			}
			file_put_contents('translations.db', serialize($table));
			echo '<p>Edited successfully!</p><a href="?">Refresh</a>';
			exit;
		}
		if (isset($_POST['name'])) {
			if (file_exists('translations.db')) {
				$table = unserialize(file_get_contents('translations.db'));
				if (!isset($table[$_POST['name']])) {
					echo '<p>Name does not exist</p><a href="?">Refresh</a>';
				} else {
					foreach ($table[$_POST['name']] as $lang => $content) {
						echo strtoupper($lang).' <input type="text" name="'.$lang.'" value="'.$content.'" autocomplete="off"><br>';
					}
					echo '<input type="submit" value="Send">';
				}
			} else {
				echo '<p>File does not exist</p><a href="?">Refresh</a>';
			}
		} else {
			echo '<input type="submit" value="Continue">';
		}
		?>
	</form>
</body>
</html>