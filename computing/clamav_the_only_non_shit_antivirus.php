<html>
<head>
<?php include 'header.php';?>
<title>ClamAV: The Only Non-Shit Anti-Virus - rethy.xyz</title>
</head>

<body>
<?php include 'menu.php';?>

<div class="main">
<h1>ClamAV: The Only Non-Shit Anti-Virus</h1>
<p><b><small>Created: 2021-04-28 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p> <hr>

<p><center><a href="https://www.clamav.net/downloads"><b>Download it here.</b></a></center></p>

<p>If you're resource conscious like myself, you have seen just how bad anti-viruses can be. The issue for me stems from real time protection, something you just don't need if you have common sense. This is why I choose not to use them. All I've ever wanted was an anti-virus that doesn't have any sort of real time protection. I knew that I could have turned off the setting in an anti-virus, but I don't trust it if it has the option. I usually didn't need an AV because I ran Linux, but since I started using Windows 7, I wanted to make sure I didn't install anything infected. I'm always afraid of losing my files. ClamAV is my theoretical savior. <i>ClamAV</i>: It's a signature-based AV that simply scans the paths you give it. Easy. That's what I want. No real time heuristics, no sandboxing, no VPN installs, no service based garbage. Here's how you use it:</p>

<p><b>Setup</b>:</p>
<p>
<ol>
<li>Install the program from the website</li>
<li>Run in cmd:
	<ul>
	<li><code>cd "c:\program files\clamav"</code></li></li>
	<li><code>copy .\conf_examples\freshclam.conf.sample .\freshclam.conf</code></li>
	<li><code>copy .\conf_examples\clamd.conf.sample .\clamd.conf</code></li>
	<li><code>write.exe .\freshclam.conf</code></li>
		<ul>
		<li>WordPad will pop up. Delete the line that says example. You may also wish to set additional options to enable features or alter default behavior, such as the receive-timeout. Save the file and close WordPad.</li>
		</ul>
	<li><code>write.exe .\clamd.conf</code></li>
		<ul>
		<li>WordPad will pop up. Delete the line that says example. You may also wish to set additional options to enable features or alter default behavior, such as the receive-timeout. Save the file and close WordPad.</li>
		</ul>
	<li><code>.\freshclam.exe</code></li>
		<ul>
		<li>freshclam will download some files and drop them in the database directory. This can take a minute or two depending on how fast your internet connection is. The files are a pretty large.</li>
		<li>You are now ready to perform scans with ClamAV.</li>
		</ul>
	</ul>
</ol>
</p>

<p><b>Scanning</b>:</p>
<p>
Scan files in current directory (not recursive):
<ul>
<li><code>.\clamscan.exe .</code></li>
</ul>
</p>

<p>
Scan files in current directory (recursive):
<ul>
<li><code>.\clamscan.exe --recursive .</code></li>
</ul>
</p>

<p>
Scan all files in C:\ (recursive):
<ul>
<li><code>.\clamscan --recursive C:\</code></li>
</ul>
</p>

<p>
Display help:
<ul>
<li><code>.\clamscan.exe --help</code></li>
</ul>
</p>

<p>Now you understand the basics. Enjoy.</p>

</div> <hr>


<?php include 'footer.php';?>
</body>
</html>
