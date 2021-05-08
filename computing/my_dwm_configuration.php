<html>
<head>
<?php include 'header.php';?>
<title>My dwm Configuration - rethy.xyz</title>
</head>

<body>
<?php include 'menu.php';?>

<div class="main">
<h1>My dwm Configuration</h1>
<p><small><b>Created: 2020-12-25</b> | <b>Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></b></small></p>

<p>You can find my entire configuration <a href="https://github.com/rethyxyz/dotfiles/blob/master/.config/config.h_e550">here</a>.</p>

<h2>General Appearance/Theme</h2>

<center>
<img src="files/dwm_setup.png">
<br><br>
<small>My setup. Image captured 2020-12-25</small>
</center><br>

<h3>Font</h3>
<p>I use the classic IBM 8x14 VGA lookalike font called <code>BigBlue TerminalPlus</code>. It's my favorite because of its sharpness. I dislike any font smoothing or anti-aliasing, as I feel it causes strain. My only issue with the font is it's lack of size options. Each size bigger and smaller than 12 is blurry and asymmetrical. This isn't usually a problem, as I rarely resize my font, but I still wish the option was there.</p>

<h3>Status Bar</h3>
<p>
Like most <code>dwm</code> users, I use <code>xsetroot</code> to aggregate information into a sort of status bar. I pack all of the commands I use into a simple Bash script which I run upon start up.</p>

<p>
Here's how it looks:<br><br>
<center>
<img src="files/status_bar.png"><br><br>
<code><small>mpd song length |mpd Artist - Track |current volume |RAM remaining |CPU temp |battery percentage |date-month |24-hour time</small></code><br><br>
</center>
It's simple, but it fully functions as a status bar.
Plus, it's dead easy to modify and modular.
<a href="https://raw.githubusercontent.com/rethyxyz/Scripts/master/dwmbar_e550">You can download it here</a>.
</p>

<h2>Keybindings</h2>
<h3>Alphabet Keys</h3>
<ul>
<li>modifier + b execute firefox</li>
<li>modifier + n execute ncmpcpp</li>
<li>modifier + p execute dmenu</li>
<li>modifier + r execute ranger</li>
<li>modifier + s execute scratchpad</li>
<li>modifier + Shift + m  execute mutt</li>
<li>modifier + Shift + r  execute randomize_wallpaper</li>
<li>modifier + Shift + n  execute newsboat</li>
<li>modifier + Shift + s  execute soulseek</li>
<li>modifier + Shift + t  execute todo</li>
<li>modifier + Shift + d  execute dmenumount</li>
</ul>

<h3>Secondary Keyboard Keys</h3>
<ul>
<li>modifier + comma execute mpcseekback</li>
<li>modifier + period execute mpcseekfor</li>
<li>modifier + Return execute st</li>
</ul>

<h3>F1-12 Keys</h3>
<ul>
<li>modifier + F1 execute volmute</li>
<li>modifier + F2 execute voldown</li>
<li>modifier + F3 execute volup</li>
<li>modifier + F5 execute brightdown</li>
<li>modifier + F6 execute brightup</li>
<li>modifier + F9 execute ncmpcpp</li>
<li>modifier + F10 execute mpcprev</li>
<li>modifier + F11 execute mpctoggle</li>
<li>modifier + F12 execute mpcnext</li>
</ul>

<h2>Typical Operation</h2>
<p>I only use the tiling and monocle layouts. I try to keep a maximum of three windows max on a single workspace (tag).</p>

<h2>Patches</h2>
<p>I use none (I think). I use default dwm, plus the additons to my config.h file.</p>

<h2>Workspaces/Tags</h2>
<p>
<b>a-b-c</b> - Dev<br><br>
This is the main development workspace. Most of my time spent inside of <code>dwm</code> is here. Typically, it's <code>vim</code>, <code>ranger</code>, and an idle <code>st</code> instance.
</p>

<p>
<b>d</b> - Media<br><br>
<code>Mpd</code>, <code>youtube-dl</code> viewer (if any), and <code>newsboat</code> goes here.
</p>

<p>
<b>e</b> - Comunication<br><br>
<code>Telegram-cli</code>, <code>discord</code>, <code>neomutt</code>, and <code>irc</code> (sadly, not <code>irc</code> as much anymore).
</p>

<p>
<b>f-g-h</b> - Status terminals<br><br>
Any excess terminals from opened programs go here (e.g., <code>mpv</code> status text, active backups, scripts running...).
</p>

<p>
<b>i</b> - Web browsing<br><br>
Firefox instances go here. Used for anything web browser based. That's pretty much it.
</p>
</div>

<?php include 'footer.php';?>
</body>
</html>
