<html>
	<head>
		<?php include 'header.php';?>
		<title>Using the Vim Leader Key - rethy.xyz</title>
	</head>

	<body>
        <?php include 'menu.php';?>

		<div class="main">
			<h1>Using the Vim Leader Key</h1>
			<small><b>Created: 2020-12-18 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></b></small>
			<p>I have noticed that a lot of vimmers do not make use of the leader key either at all or to it's fullest potential. In case you don't know, leader is the \ (backslash) key (which can be changed in your <code>.vimrc</code> using <code>let mapleader = ","</code> (change comma to your desired key)) on your keyboard.</p>

			<p>Here are a few useful actions to execute using the leader key (add these to your <code>.vimrc</code>):</p>

			<p>
			<ul>
			<li>Execute current file in browser | <code>:map &#60;leader&#62;off :exe ':silent !firefox % &amp;'&#60;CR&#62;</code></li>
			<li>Open <code>.vimrc</code> or any file as current buffer: <code>:map &#60;leader&#62;vrc :e ~/.vimrc&#60;CR&#62;</code></li>
			<li>Open a directory | <code>:map &#60;leader&#62;gS :e ~/Scripts&#60;CR&#62;</code></li>
			<li>Split vertically/horizontally | <code>:map &#60;leader&#62;c :vsplit&#60;CR&#62;</code></li>
			<li>Split vertically/horizontally | <code>:map &#60;leader&#62;v :split&#60;CR&#62;</code></li>
			<li>Open current directory | <code>:map &#60;leader&#62;&#60;leader&#62; :Ex&#60;CR&#62;</code></li>
			</ul>
			</p>

			<p>If you want just the code:</p>

			<p>
			<code>:map &#60;leader&#62;off :exe ':silent !firefox % &amp;'&#60;CR&#62;</code>
			<br>
			<code>:map &#60;leader&#62;vrc :e ~/.vimrc&#60;CR&#62;</code>
			<br>
			<code>:map &#60;leader&#62;gS :e ~/Scripts&#60;CR&#62;</code>
			<br>
			<code>:map &#60;leader&#62;c :vsplit&#60;CR&#62;</code>
			<br>
			<code>:map &#60;leader&#62;v :split&#60;CR&#62;</code>
			<br>
			<code>:map &#60;leader&#62;&#60;leader&#62; :Ex&#60;CR&#62;</code>
			</p>

		</div>

		<hr>

		<?php include 'footer.php';?>
	</body>
</html>
