<html>
<head>
<?php include 'header.php';?>
<title>ClamAV: The Only Non-Shit Anti-Virus - rethy.xyz</title>
</head>

<body>
<div class="main">
<h1>ClamAV: The Only Non-Shit Anti-Virus</h1>
<p><b><small>Created: 2021-04-28 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p> <hr>

<p><center><a href="https://www.clamav.net/downloads"><b>Download it here.</b></a></center></p>

<p>If you're resource conscious like myself, you've seen just how bad anti-viral software really is. The issue for me stems from real time protection, something you just don't need if you have any common sense. This is why I choose not to use them at all. All I've ever wanted was an anti-virus that didn't have any sort of real time protection. I knew I could've turned off the real-time monitoring option, but I couldn't trust it if it had it.</p>

<p>I usually didn't need an AV because I ran Linux, but since I started using Windows 7 on the regular, I wanted to make sure I didn't install anything infected. I have a constant fear that I'll lose my files. ClamAV is my theoretical savior. <i>ClamAV</i>: <i>It's a signature-based AV that simply scans the paths you give it</i>. Easy. That's what I want. No real time heuristics, no sandboxing, no VPN installs, no service based garbage.</p>

<p>The documenation is a little old school, as they don't have any quick startup guides. They force you to read the documenation which I'm sure filters the novices from the experienced. I read the documenation and figured it would be nice to have a quick start guide for the future. Here's how you use it:</p>

<h2>Setup</h2>
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

<h2>Scanning</h2>
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

<p>Now you understand the basics. It's as easy as that. From here you can automate scans using a good scripting language of your choice (I recommend using Bash from git-windows/mingw).</p>

</div> <hr>


<?php include 'footer.php';?>
</body>
</html>
