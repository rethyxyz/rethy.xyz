<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />

<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="icon" href="files/shroom0.jpg" />

<title>moses - rethy.xyz</title>
</head>

<body>
<div class="main">
<h1><a href="https://github.com/rethyxyz/Moses">moses</a></h1> <hr>
<p><center><font color=red>Defunct, but now maintained as separate RAT project. Found <a href="moses_rat.php">here</a></font>.</center></p>

<p>Tiny DoS (Denial-of-Service) botnet utility written for research purposes. </p>

<p>
<small>Download moses <a href="https://github.com/rethyxyz/Moses/archive/master.zip">here</a></small>
</p>

<h2>Steps</h2>
<p>
<ul>
<li>Get Windows username</li>
<li>Auto-replicate to {AppData,shell:startup}</li>
<li>Auto-replicate to all connected storage devices (letters A-Z) if permissions allow</li>
<li><b>Enter infinite loop</b>:</li>
	<ul>
	<li>Download $URL/tar{1,2,3}.php web pages, set content as variables named <code>web_content_{1,2,3}</code></li>
	<li>Check if <code>web_content_1</code> matches string "DoS"</li>
		<ul>
		<li>If so, execute <code>start_dos_attack()</code> function. <code>web_content_2</code> for destination IP address, <code>web_content_3</code> for attack end time in 24-hour time format</li>
		</ul>
	<li>Sleep for six seconds</li>
	</ul>
</ul>
</p>

<h2>Operation</h2>
<p><b>moses</b> instances are operated globally through <b>remote_control</b> files (there exists Bash and Python versions). Appends data to web server pages using SSH.</p>

<h2>Features</h2>
<p>
<ul>
<li><b>moses</b> zombie is operated indirectly through the use of a web server as an intermediary/proxy device</li>
	<ul>
	<li>This enforces a layer of anonymity by ensuring there's no direct connection with the target (victim) machine</li>
	</ul>
</ul>
</p>

<h2>Legal Disclaimer</h2>
<p>All tools provided by this project are for research and study purposes only. You must obey the laws and regulations of your country during use. I will not be held responsible for any misuse that may arise during the usage of this project.</p>

</div> <hr>

<div class="footer">
<center><b>2020 (C) Brody Rethy. All rights reserved.</b></center>
</div>

</body>
</html>
