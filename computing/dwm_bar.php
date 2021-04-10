<html>
	<head>
		<?php include "header.php"; ?>
		<title>My dwm Status Bar - rethy.xyz</title>
	</head>

	<body>
        <div class="main">
			<h1>My dwm Status Bar</h1>
			<p><small><b>Created: 2020-??-?? | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></b></small></p>

			<!--
				TODO: Update this page with my new taskbar system
			-->

			<hr>

			<section>
				<p><b><small>Old status bar (c. 2019)</small></b></p>

				<p>
					<a href="files/dwm_bar.png">
						<center> <img src="files/dwm_bar.png" /> </center>
					</a>
				</p>

				<p>It contained useful info, mostly the same as now, but was plagued with bad separators and a lack of aesthetics.</p>
			</section>

			<p>
				Dwmbar is a Bash script. It displays:
				<ul>
					<li>Time left of song</li>
					<li>Song name (Artist - Track Name)</li>
					<li>Volume percentage</li>
					<li>Unallocated RAM (MB)</li>
					<li>CPU temperature (Celsius)</li>
					<li>Battery percentage and state (charging, disconnected)</li>
					<li>Month and date (month-date, numerical)</li>
					<li>Time (24-hour)</li>
				</ul>
			</p>

			<p>
				Instructions as taken from --help option:
				<blockquote>
					<code>dwmbar.sh [DEVICE]</code><br><br>
					<code>Takes one of two args: laptop, or desktop.</code><br><br>
					<code>To start this upon dwm launch, put this inside your ~/.xinitrc with the [DEVICE] arg (as shown above).</code>
				</blockquote>
			</p>

			<p>
				<center><a href="https://github.com/rethyxyz/dwmbar">Click here to view dwmbar repository</a></center>
			</p>

			<hr>

			</div>

		<?php include "footer.php"; ?>
	</body>
<html>
