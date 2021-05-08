<html>
<head>
<?php include 'header.php';?>
<title>YouTube Quality Picker for MPV - rethy.xyz</title>
</head>

<body>
<?php include 'menu.php';?>

<div class="main">
<h1>YouTube Quality Picker for MPV</h1>

<hr>

<p>
How to install:
</p>
<p>
<code>git clone https://github.com/jgreco/mpv-youtube-quality</code><br>
<code>mkdir -p ~/.config/mpv/scripts</code><br>
<code>mkdir -p ~/.config/mpv/script-opts</code><br>
<code>cp mpv-youtube-quality/youtube-quality.lua ~/.config/mpv/scripts/</code><br>
<code>cp mpv-youtube-quality/youtube-quality.conf ~/.config/mpv/script-opts/</code>
</p>

<p>
After installing, press Ctrl+f to bring up the quaility picker menu. Then, use the arrow keys to move to desired quality, and press Return to select.<br><br>
<center><img src="files/mpv_quality_picker.gif" width=51% /><br><br>
<b>TODO</b>: compress this GIF</center>
</p>
</div>

<hr>

<?php include 'footer.php';?>
</body>
</html>
