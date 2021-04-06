<html>
	<head>
		<?php include 'header.php';?>
		<title><++> - rethy.xyz</title>
	</head>

	<body>
		<div class="main">
			<h1><++></h1>
			<p><b><small>Created: <++> | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p>

			<hr>
		</div>

		<?php include 'footer.php';?>
	</body>
</html>
