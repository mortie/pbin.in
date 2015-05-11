<?php
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
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$name ?></title>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/solarized_dark.min.css">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="style.css">
</head>
<body id="view">
	<pre><code id="content">
<?=htmlspecialchars($content) ?>
	</code></pre>

	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js"></script>
	<script>
		hljs.initHighlightingOnLoad();
	</script>
</body>
</html>
<?php
