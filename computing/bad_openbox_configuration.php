<html>
	<head>
		<?php include "header.php"; ?>
		<title>Bad Openbox Configuration - rethy.xyz</title>

	</head>
<body>
<div class="back_button"> <a href="index.php">Go to 💻 Computing 💻 index</a> </div>

<div class="main">
<h1>Bad Openbox Configuration</h1>
<p><b><small>Created: 2021-03-13 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p><hr>

<p>I haven't touched Openbox in eight years or so. Back when I started using Linux, it was the first WM (Window Manger) I really got deep into, starting from my first use of Crunchbang, a now defunct Debian-based distribution. I mained this back in the day. It was pretty good at the time, and still is. It was a WM that (en)forced a sleek minimal design while keeping the full functionality of a DE (Desktop Environment).</p>

<p>I like the bare simplicity of Openbox, being only a way to manager windows. If you want a status bar, implement it (or write it) yourself! Very true to the Unix philosophy.</p>

<p>Something I didn't remember, was the rc.xml configuration file. This is because I never had to configure it back in the day. Now, of course, I need to configure things to my linking. I bend the program's functionality, not the other way around. An XML file for configuration is bad. Really bad. It's hard to figure-things-out without reading the documentation beforehand. I don't know why they didn't make their own configuration file layout, like i3wm. The i3wm configuration scheme is way better, as you can discern the proper syntax immediately.</p>

<p>Openbox has only one good configuration tool that I know of called <a href="https://github.com/bajaco/hotbox">hotbox</a>. It's actually really good. Here's how you use it:</p> <br>

<p>
	<center>
	<img src="files/hotbox_usage.png" /> <br> <br>
	<small><b>Taken from <a href="https://github.com/bajaco/hotbox">https://github.com/bajaco/hotbox</a></b></small>
	</center>
</p> <br>

<p>
<center>
	<img src="files/openbox_rc_xml.png"> <br> <br>
	<b><small>XML is bad for configuration organization. This is an unintelligible mess, and too tedious to modify by hand.</small></b>
</center>
</p> <br>

<p>I think Openbox is dead, but I may be wrong. I do know that Openbox is unfortunately definitely dead by itself. I feel this is partly because of the bad configuration setup.</p>

</div> <hr>

<?php include "footer.php"; ?>

</body>
</html>
