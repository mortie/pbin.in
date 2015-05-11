<?php

header("Content-Type: text/plain");

if (empty($_GET["p"]))
	$name = "";
else
	$name = $_GET["p"];

if (preg_match('/[^a-zA-Z0-9\-_]/', $name))
	die("'$name' contains illegal characters.");

if ($name !== "" && file_exists("../pastes/$name"))
	$content = file_get_contents("../pastes/$name");
else
	$content = "404: Paste '$name' doesn't exist.";

echo $content;

?>
