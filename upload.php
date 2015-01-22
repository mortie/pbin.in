<?php

function randomString($len)
{
	$chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$charCount = strlen($chars);
	$string = "";

	for ($i=0; $i<$len; ++$i)
	{
		$string .= $chars[mt_rand(0, $charCount-1)];
	}

	return $string;
}

$content = $_POST['content'];
$name = $_POST['name'];

if ($name === "")
{
	$c = 1;
	$name = randomString($c);
	while (file_exists("pastes/$name"))
	{
		++$c;
		$name = randomString($c);
	}
}

if (preg_match('/[^a-zA-Z0-9_\-]/', $name))
	die("'$name' contains illegal characters.");
if ($content === "")
	die("You can't submit an empty paste.");

$c = 1;
$nwName = $name;
while (file_exists("pastes/$nwName"))
{
	$nwName = "$name$c";
	++$c;
}

file_put_contents("pastes/$nwName", $content);

header("location: /$nwName");

echo $nwName;
