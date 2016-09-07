<html>
<head>

<!-- this is URLminator -->

<style type="text/css">

body {
	font-family: sans-serif;
}

div#wrapper {
	width: 800px;
	margin: 0 auto;
}

textarea#something {
	width: 800px;
	min-height: 300px;
	text-indent: 0;
	text-align: left;
}

textarea#end {
	width: 800px;
	min-height: 300px;
	text-indent: 0;
	text-align: left;
}

input[type=submit] {
	padding: 10px;
	background-color: #00aedb;
	color: white;
	border: none;
	font-weight: 600;
	text-transform: uppercase;
}


</style>


</head>

<body>
<div id="wrapper">

<br/>

<h2>URLminator</h2>

<form method="post" action="">
	<textarea name="something" id="something" value="<?= isset($_POST['something']) ? htmlspecialchars($_POST['something']) : '' ?>"></textarea>
    <!-- <input type="text" name="something" value="<?= isset($_POST['something']) ? htmlspecialchars($_POST['something']) : '' ?>" /> -->
    <p style="font-size:12px;">This is where you paste the URL(s).</p>
    <input type="submit" name="submit" value="Change URL" />
</form>

<?php

$prefix = array("ftp://adserver.hmedia.ro@85.9.22.142/");
$url   = array("http://85.9.22.142/hmedia/");

$newphrase = str_replace($prefix, $url, $_POST['something']);
$lastphrase = str_replace("\n", "<br/>", $newphrase);

?>

<script type="text/javascript" src="http://hmedia.ro/tools/scripts/urlMod/ZeroClipboard.js"></script>


<textarea id="end"><?php if(isset($_POST['submit'])) {
 	echo str_replace("<br/>","",$lastphrase);;
 	}
 	?>
</textarea>
<p style="font-size:12px;">CTRL+A to select all. CTRL+C to copy the modified URL(s) to clipboard.</p>






</div>

</body>








</html>
