<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />

<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="icon" href="files/shroom0.jpg" />

<title>Obscure Linux Errors - rethy.xyz</title>
</head>

<body>
<div class="main">
<h1>Obscure Linux Errors</h1>
<p><small><b>Created: 2021-03-06 | Modified: 2021-03-06</b></small></p> <hr>

<p>Most of these fixes were taken from forums from over the years.</p>



<h1>MPD cannot initalize to io_uring</h1>
<p>If you are using the mpd.service io_uring is configured for what it needs</p>

<p><code>cat /usr/lib/systemd/user/mpd.service</code></p>

<p>for io_uring</p>
<p><code>LimitMEMLOCK=64M</code></p>

<p>Either way if io_uring is not detected by mpd it fallsback to normal file operation.</p>

<p>You can also try with <code>/etc/security/limits.conf</code></p>

<p>
	<code>*   soft memlock 67108864</code><br>
	<code>* * hard memlock 67108864</code>
</p>



<h1>Multimedia keys in dwm</h1>
<p>Put this:</p>

<p><code>#include &lt;X11/XF86keysym.h&gt;</code></p>

<p>into dwm.c.</p>

<p>This is the syntax for config.h additions:</p>

<p><code>#{ 0, XF86XK_AudioLowerVolume, spawn, {.v = voldowncmd } }</code></p>



<h1>Qutebrowser won't open</h1>
<p>Try:</p>
<p><code>sudo chmod 777 /dev/shm</code></p>

</div> <hr>

<div class="footer">
<center>
	<b>2020, 2021 (C) Brody Rethy. All rights reserved.</b> <br>
	<img src="files\shroom0.jpg" width=25px height=25px>
</center>
</div>

</body>
</html>
