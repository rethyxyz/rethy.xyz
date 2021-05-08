<html>
<head>
	<?php include 'header.php';?>
<title>My Recycle Bin for Linux - rethy.xyz</title>
</head>

<body>
<?php include 'menu.php';?>

<div class="main">
<h1>rethyxyz-recycle-bin for Linux</h1>
<p> <b> <small>Created: 2021-03-02 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small> </b> </p> <hr>

<p>I recently decided to make a recycle bin setup for Linux. I made it into a Bash script that's simply meant to used instead of <code>rm</code>. On my system, I use an alias for <code>rm</code> that points to my script. Technically the script moves the file into the <code>.Trash</code> directory. I'm glad I created it, because it's safer than <code>rm</code>, and easier too. It also doesn't descriminate between file or directory. This is the typical program operation:</p>



<p>
<ul>
<li>Check if any arguments given, if not, exit</li>
<li>Check if ~/.Trash/files doesn't exist, if so, create the directory</li>
<li>Start for loop that goes through each argument as variable <code>FILE</code></li>
	<ul>
	<li>Check if <code>FILE</code> link, if so, remove permanently</li>
	<li>Check if <code>FILE</code> given exists, if not, exit</li>
	<li>Check size of <code>FILE</code> in megabytes, if over 20 GBs, delete permanently</li>
	<li>Check if <code>FILE</code> given already exists in ~/.Trash/files, will append a number if so</li>
	<li>Finally, move <code>FILE</code> to "recycle bin" directory (~/.Trash/files/)</li>
	</ul>
<li>Exit successfully if program gets here</li>
</ul>
</p>



<p>
I still have some stuff to do. Things I need to implement:
<ul>
<li><b>TODO</b> Compress every file it removes</li>
<li><b>TODO</b> If user partition is more than 75% full, purge 50% of the biggest files in the recycle bin (I would delete all files matching older than 30 days, but Unix doesn't store this metadata)</li>
</ul>
<a href="https://github.com/rethyxyz/rethyxyz-recycle-bin">You can get the source code here.</a>
</p>

<hr>

<p>
See also:
<ul>
	<li><a href="../computing/my_dwm_configuration.php">My dwm Configuration</a></li>
</ul>
</p>

</div> <hr>

		<?php include 'footer.php';?>
	</body>
</html>
