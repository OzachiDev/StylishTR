<?php
function tr($c) {
	global $tr;
	if (isset($_GET['l'])) {
		$l = $_GET['l'];
	} else {
		$l = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	}
	return preg_replace_callback("/{([a-z0-9]{1,})}/", function($b) use ($tr,$l) {return $tr[$b[1]][$l];}, $c);
}
function read() {
	global $tr;
	if (file_exists('translations.db')) {
		$tr = unserialize(file_get_contents('translations.db'));
	}
	ob_start("tr");
}
?>