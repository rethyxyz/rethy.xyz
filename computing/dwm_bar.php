<html>
	<head>
		<meta charset='UTF-8' />
		<meta name='viewport' content='width=device-width' />
		<link rel='stylesheet' type='text/css' href='style.css' />
		<link rel='icon' href='files/shroom0.jpg' />
		<title>My dwm Status Bar - rethy.xyz</title>
	</head>

	<body>
        <div class="main">
			<h1>My dwm Status Bar</h1>
			<p>
				<a href="files/dwm_bar.png">
					<center>
						<img src="files/dwm_bar.png" /><br><br>
						<small>
							<a href="files/dwm_bar.png">Click to view in full</a>
						</small>
					</center> 
				</a>
			</p>

			<p>
				My dwm (dynamic window manager) status bar is a simple Bash script. I broke each piece of status text I needed into separate functions for easy management and modification. Here are the functions I used:
				<ul>
					<li>Get MPD current song time</li>
					<li>Get MPD current song name (Artist - Track Name)</li>
					<li>Get current volume percentage</li>
					<li>Get unallocated RAM in Megabytes</li>
					<li>Get current CPU temperature in Celsius</li>
					<li>Get remaining battery power percentage</li>
					<li>Get month and date (month-date) in numerical formats</li>
					<li>Get current time in 24-hour format</li>
				</ul>
			</p>

			<p>Dwm uses <code>xsetroot</code> to display optional status information (i.e., create a status bar).</p><br>

			<p><blockquote>xsetroot - "The xsetroot program allows you to tailor the appearance of the background ("root") window on a workstation display running X."<br><br> -Taken from <a href="https://linux.die.net/man/1/xsetroot">xsetroot man page</a></blockquote></p>

			<br>

			<p>To run my script with dwm, copy and paste my script into a file (or use/create your own), give the file the correct permissions in order to execute (755, 644, etc.), and place the path/to/your/script inside your <code>.xinitrc</code> file. Ensure that it's placed before the <code>exec dwm</code> command to ensure it executes properly.</p>

			<p>
				Your <code>.xinitrc</code> file should be setup something like this: <br />
				<br />
				<code>
					#!/bin/bash <br />
					<br />
					/home/user/path/to/script.sh <br />
					<br />
					exec dwm
				</code>
			</p>

			<p>
				<a href="https://raw.githubusercontent.com/rethyxyz/Scripts/master/dwmbar_e550">Click here</a> to download/view dwm status bar script source code
			</p>

            <div class="footer">
                <br>
				<center>2020 (C) Brody Rethy. All rights reserved.</cen	>
            </div>
        </div>
	</body>
<html>
