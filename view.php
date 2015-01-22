<?php
$name = $_GET["p"];

if (preg_match('/[^a-zA-Z0-9\-_]/', $name))
	die("'$name' contains illegal characters.");

$content = file_get_contents("pastes/$name");
?>
<!DOCTYPE html>
<html>
<head>
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
