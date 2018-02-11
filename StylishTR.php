<?php
if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
	if ($lang != "fr" && $lang != "en" && $lang != "es") {
		unset($lang);
	}
}
if (!isset($lang)) {
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	if ($lang != "fr" && $lang != "en" && $lang != "es") {
		header("Location: ?lang=en");
	} else {
		if (isset($_GET['lang'])) {
			header("Location: ?");
		}
	}
}
function tr($c) {
	global $tr, $lang;
	return preg_replace_callback("/{([a-z0-9\/]{1,})}/", function($b) use ($tr, $lang) {
		return $tr[$b[1]][$lang];
	}, $c);
}
function tr_read() {
	global $tr;
	if (file_exists('translations.db')) {
		$tr = unserialize(file_get_contents('translations.db'));
	}
	ob_start("tr");
}
?>