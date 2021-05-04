<html>
<head>
<?php include 'header.php';?>
<title>My i3wm-Like Setup in Windows - rethy.xyz</title>
</head>

<body>
<div class="main">
<h1>My Windows 7/10 Setup</h1>
<p><small><b>Created: 2020-12-10 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></b></small></p><hr>

<p><b>A compendium of my Windows 10 setup, or, how I make Windows 10 usable. I'll try to update this page everytime a new innovation happens.</b></p>

<h2>Summary</h2>
<p>Usually I choose to run Debian Linux. Sometimes I can't, like when I'm studying cybersecurity (specifically malware analysis). During those times, I choose to run Windows 10 in combination with my AutoHotkey master script, <code>vim</code>/<code>vim</code>-like programs, and my programmable mouse.</p>

<p>My setup creates a vim like environment inside of Windows, sort of imitating i3wm key bindings. There are three key portions to the setup, being Firefox for web browsing needs, AutoHotkey for mapping OS wide key bindings, and gVim (graphical vim) for anything to do with writing or terminal work. Rarely do I need to leave vim, as I've created an <a href="making_vim_feel_like_emacs.php">Emacs like environment</a> inside of it. I can mostly do everything I need to inside. I already have an article explaining what I mean, so click the link at the bottom of this page if you want to see that.</p>

<h2>AutoHotkey</h2>
<p>I add F1-12 keys to minimize/maximize active window, switch to previous window, and to execute or switch to programs.</p>

<p>I add i3-like key bindings for using the Super key + a/b/c/d... to execute whatever program assigned to it. Way faster than clicking the taskbar or searching for the program.</p>

<p>
My AHK master script in depth (Super means <b>left Windows key</b>):
<ul>
	<li>Programs/commands bound to Super + Key, e.g. LWin+b executes firefox</li>
	<li>Volume shortcuts bound to Super + F2-F4 (LWin + F2 executes volume down, LWin + F3 executes volume up, etc.)</li>
	<li>Media shortcuts bound to Super + F6-F8, I use these for previous/pause/next song in Foobar2000</li>
	<li>Alt + h/j/k/l sends ArrowKey + Left/Down/Up/Right (this ensures that I don't have to take my hands off the keyboard for small actions like UAC prompt or dialog boxes)</li>
	<li>F1 toggles maximize active window</li>
	<li>F2 minimizes active program</li>
	<li>F4 switches to previous window</li>
	<li>F6 kills active window (easier than Alt+F4 or hitting Close button)</li>
	<li>F11 switches to browser tab left of current</li>
	<li>F12 switches to browser tab right of current</li>
	<li>PauseBreak sends Ctrl+w for close current tab</li>
</ul>
</p>

<p><a href="https://github.com/rethyxyz/Scripts">You can download the AHK script here.</a></p>

<h2>Firefox</h2>
<p>I make sure to download <a href="https://addons.mozilla.org/en-US/firefox/addon/vimium-ff/">Vimium</a> and disable smooth scrolling in both Vimium and the browser.</p>

<p>I bookmark frequently accessed websites and assign a letter sequence to it e.g. ghh for <a href="https://github.com/rethyxyz">https://github.com/rethyxyz</a> which is executed by typing it into the search bar.</p>

<p>For addons, I install uBlock Origin, Stylus, and greasemonkey.</p>

<p>Nowadays, this is all automated as I use the account sync feature built in.</p>

<h2>Piktek Programmable Mouse</h2>
<p><b>TODO</b>: Image of mouse goes here</p>

<p>It's a cheap Chinese nine-key mouse I got off of amazon four years ago, or something like that. I got it back when I played vanilla WoW, something I pick back up again every few years then quite promptly drop.</p>

<p>
<center>
	<img src="files\PICTEK_software.PNG" /><br><br>
	<small>Seriously sketchy</small>
</center>
</p><br>

<p>It comes with this semi-crappy software that lets you record macros and change what each key does. You can even change what the DPI buttons do, which is kind of cool. I'm surprised it hasn't broken on me yet.</p><br>

<p>
<center>
	<img src="files\PICTEK_side_panel.PNG" /><br><br>
	<small>1 to 9 buttons</small>
</center>
</p><br>

<p>The image shows what I've mapped each side button to, so study it if you want to recreate it. It's basically just a duplication of browser related shortcuts.</p>

<hr>

<p>See also:
<ul>
<li><a href="../programming/autohotkey_key_and_basic_command_index.php">AutoHotkey Key and Basic Command Index</a></li>
<li><a href="window_managers.php">Windows Managers Explained</a></li>
<li><a href="making_vim_feel_like_emacs.php">Making <code>vim</code> Feel like <code>Emacs</code></a></li>
</ul>
</p>

</div>

<hr>

<?php include 'footer.php';?>
</body>
</html>
