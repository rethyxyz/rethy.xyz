<!DOCTYPE html>
<html>
<head>
<?php include 'header.php';?>
<title>Randomizing Current Wallpaper in Linux - rethy.xyz</title>
</head>

<body>
<div class="main">
<h1>Randomizing Current Wallpaper in Linux</h1>
<p><small><b>Created: 2020-12-27 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></b></small></p>

<hr>

<p>You can find the code for the script <a href="https://raw.githubusercontent.com/rethyxyz/Scripts/master/randomize_wallpaper.py">here</a>. Feel free to change, modify, or copy.</p>

<p>
I decided to write a program to select an image at random from my wallpapers directory and set it as my wallpaper.
Here's how it works:
<ul>
<li><code>username</code> variable is defined through a function return</li>
<li>All sub-dirs found inside of the main wallpaper dir defined inside of a list called <code>paths</code>.</li>
<li>One of the sub-dirs is chosen at random to be the main dirs and is assigned to a variable called <code>sub-dirs</code></li>
<li>All file names inside of the dir are appended to a list defined as <code>all_files</code></li>
<li>The wallpaper is then chosen by selecting a random index from the <code>all_files</code> list</li>
<li>The wallpaper is set using <code>os.system</code> plus the path and the wallpaper file</li>
</ul>
I run this script from my <code>.xinitrc</code> once upon startup, and have it bound to <code>modifier+Shift+R</code> in my <code>config.h</code> (in dwm) in case I want to auto-set another at some point.
</p>
</div>

<hr>

<?php include 'footer.php';?>
</body>
</html>
