<html>
	<head>
		<?php include 'header.php';?>
		<title>Qutebrowser - rethy.xyz</title>
	</head>

	<body>
		<div class="main">
			<h1>Best Qutebrowser Configuration</h1>
			<p><b><small>Created: 2021-04-07 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p>

			<hr>

			<p>All about the vim-binding based browser: <code>qutebrowser</code>.</p>

			<h2>Generate Configuration File</h2>
			<p>Run <code>:config-write-py</code>. This'll create the global configuration file in the location <code>~/.config/qutebrowser/config.py</code>. Make all changes to <code>qutebrowser</code> here.</p>

			<h2>Setting Up (Good) Adblocking</h2>
			<p>Qutebrowser has host-based ad-blocking by default. It's bad. It doesn't filter YouTube, or any website with rigorous advertisement obfuscation.</p>

			<p>I had previously heard about the implementation of a heaver adblocking software, but didn't know how to implement it. I finally figured out how a couple of days ago.</p>

			<p>
				The adblock software I implemented is the Brave browser adblocker. Use the appropriate package manager to install:
				<ul>
					<li><code>sudo pacman -S python-adblock</code></li>
					<li><code>sudo apt install python-adblock</code></li>
				</ul>
				Now open <code>~/.config/qutebrowser/config.py</code> and uncomment and modify this line as:
				<ul>
					<li><code>c.content.blocking.method = 'both'</code></li>
				</ul>
			</p>
		</div>

		<hr>

		<?php include 'footer.php';?>
	</body>
</html>
