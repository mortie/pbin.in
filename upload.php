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

//create "pastes" directory if it doesn't exist
if (!is_dir("pastes"))
	mkdir("pastes");

$content = $_POST['content'];
$name = $_POST['name'];

//make name a random string if no name provided
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

//die if input is invalid
if (preg_match('/[^a-zA-Z0-9_\-]/', $name))
	die("'$name' contains illegal characters.");
if ($content === "")
	die("You can't submit an empty paste.");

//add a number to the end of the name if a paste
//with that name already exists
$c = 1;
$nwName = $name;
while (file_exists("pastes/$nwName"))
{
	$nwName = "$name$c";
	++$c;
}

//write paste file, then redirect
file_put_contents("pastes/$nwName", $content);
header("location: /$nwName");

//echo the name of the paste to make life easier
//for tools which make use of pbin.in
echo $nwName;
