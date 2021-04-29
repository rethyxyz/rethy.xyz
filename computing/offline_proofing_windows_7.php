<html>
<head>
<?php include 'header.php';?>
<title>Comfifying/Offline Proofing Windows (7) - rethy.xyz</title>
</head>

<body>
<div class="main">
<h1>Comfifying/Offline Proofing Windows (7)</h1>
<p><b><small>Created: 2021-04-28 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p> <hr>

<p><b>Why would I want to do this?</b> Do you enjoy the soulless feel of modern day Windows? Do you enjoy not owning your music, movies, videos, and games? Do you enjoy DRM? Do you want to continue to lose your long history of YouTube and Spotify playlists because Google, Spotify, or Netflix removes them seemingly for no reason? I, myself, enjoy "possessing" the individual files for each of the things I enjoy, such as albums, movies, TV shows, etc. This allows me to share as I wish, move as I wish, watch as I wish (no more Spotify premium license), and most importantly: Do as I wish. No one will be able to spy on you, or see your listening habits. You can truly be alone.</p>

<p><b>Windows 7 support is over. Isn't it unsafe?</b> Public support is over, Enterprise support isn't. No new features are being released, but security patches are still being made on a near daily basis. <a href="..\computing\making_windows_7_usable_in_2021.php">I show how to spoof Enterprise updates here</a>. I will say, I have skimmed through the BypassESU script, and I almost guaranteed it doesn't invoke anything exterior that's sketchy (or at all), but I cannot truly verify its integrity, so use at your own risk.</p>

<p>To me, true comfy is being able to go offline and still keep total functionality. Therefore, everything in this list is made to work 1:1 the same offline. As we know, freedom of choice is the biggest part of freedom, and sometime you need disappear.</p>

<h2>Updates (Imporant first step)</h2>
<p>Updates. Malware is not comfy, and neither are security vulnerabilities. <a href="..\computing\making_windows_7_usable_in_2021.php">Follow this article to install Windows first and beforehand</a>. After that, come back here when you're fully updated.</p>

<h2>Speed tweaks</h2>
<h3>Disable services</h3>
<p>I wouldn't call Windows 7 bloated, but that doesn't mean you shouldn't strive for a thinner, more snappier system. You don't need excess, and it's always good to trim the fat where you can.<p>

<p>
<ul>
<li><code>sc config WSearch start= disabled</code></li>
<li><code>sc config Spooler start= disabled</code></li>
</ul>
</p>

<p>You may not want to disable WSearch as it correlates with Windows Search. Personally, I don't use it.</p>

<h3>Removing <i>Windows features</i></h3>
<p>There are a lot of excess programs you won't be needing later on, such as Windows Media Player, Tablet Mode, Internet Explorer, and XPS viewer. I choose to remove these features outright. There will be no reason to have them when you have Firefox, foobar2000, and VLC media player installed.</p>

<ul>
<li><code>DISM /online /disable-feature /NoRestart /featurename:FaxServicesClientPackage</code></li>
<li><code>DISM /online /disable-feature /NoRestart /featurename:Internet-Explorer-Optional-amd64</code></li>
<li><code>DISM /online /disable-feature /NoRestart /featurename:MSRDC-Infrastructure</code></li>
<li><code>DISM /online /disable-feature /NoRestart /featurename:MediaCenter</code></li>
<li><code>DISM /online /disable-feature /NoRestart /featurename:MediaPlayback</code></li>
<li><code>DISM /online /disable-feature /NoRestart /featurename:OpticalMediaDisc</code></li>
<li><code>DISM /online /disable-feature /NoRestart /featurename:Printing-Foundation-Features</code></li>
<li><code>DISM /online /disable-feature /NoRestart /featurename:Printing-Foundation-InternetPrinting-Client</code></li>
<li><code>DISM /online /disable-feature /NoRestart /featurename:Printing-XPSServices-Features</code></li>
<li><code>DISM /online /disable-feature /NoRestart /featurename:SearchEngine-Client-Package</code></li>
<li><code>DISM /online /disable-feature /NoRestart /featurename:TabletPCOC</code></li>
<li><code>DISM /online /disable-feature /NoRestart /featurename:WindowsGadgetPlatform</code></li>
<li><code>DISM /online /disable-feature /NoRestart /featurename:WindowsMediaPlayer</code></li>
<li><code>DISM /online /disable-feature /NoRestart /featurename:Xps-Foundation-Xps-Viewer</code></li>
</ul>
</p>

<p><center><img src="..\computing\files\features_tab.PNG"></center></p>

<p>This is how your Features tab will look after. The only thing you may not want to turn on is Windows Search.</p>

<h3>Turn off mouse accel</h3>
<p><center><img src="../computing/files/mouse_accel.PNG"></center></p>

<p>Uncheck <i>Enhance point precision</i>, as it actually does the opposite. Your mouse movement will be consistent, allowing you to build up muscle memory accordingly.</p>

<h3>Change keyboard repeat rate</h3>
<p><center><img src="../computing/files/keyboard_repeat_rate.PNG"></center></p>

<p>Change <i>Repeat delay</i> to <i>Short</i>. This is mega imporant for me. Without this text editing is an impossibly slow task.</p>


<h2>Theming</h2>
<h3>Create a Windows Theme</h3>
<p>Windows 7 has a pretty good theming manager. You're not a Windows 10. You're actually able to customize your system here. A good theme plays a huge part in a comfy experience. You should spend time developing a theme that feels the best for you. This means font, color, size, etc. This is your computer.</p>

<p><center><img src="../computing/files/win_7_theme.PNG"></center></p>

<p><a href="../computing/files/rethyxyz_win7.themepack">Mine is a modified version of the classic theme.</a> This is how it looks. Ignore the redd*t aliens in the background. I've been using the wallpaper for a long time, and really like for the green mushroom. And no, I have never used redd*t.</p>

<h3>Change your profile picture</h3>
<p>Don't use the default image unless you really enjoy it. Even if you feel indifferent to the default, change it anyways. It feels too impersonal without it. You want to make this system really feel like your system. When you open your device, you will feel the connection to it; It's yours.</p>

<h3>Change your cursor</h3>
<p>Changing your cursor adds character to your setup. For years on Windows, I have used <a href="../computing/files/dino.cur">Reckful's (R.I.P.) dinosaur cursor</a>. It's my perfered cursor.</p>

<h2>Hoarding</h2>
<h3>Games</h3>
<p>If you're offline, you're going to want to have a huge library of games to choose from. Not only will you have a lot of games to play, you'll have the option to. The freedom of choice is comfy too. You may not play games often, but you never know when you'll have a fuck load of downtime and want to waste it. If you can, make sure you get DRM free versions. This'll allow you to do what you want with your games.</p>

<p>
<b>Games types to gather:</b>
<ul>
<li><b>Prioritize a bunch of small ones vs one big one</b>: Small ones = more variety, and less space taken. You can get more hours across multiple games vs a single one, which is likely to run out</li>
<li><b>SCUMMVM</b>: These games are integral to my setup. Not only are they small in size, but they are deep in story, and many youngins have not played them yet.</li>
<li><b>Arcade games</b>: Peggle, Chicken Invaders, etc</li>
<li><b>Visual novels</b>: Same idea as SCUMMVM games: Small in size, big in story. You're going to want a lot of variety to keep your brain stimulated. These are the most integral games to my setup. Visual novels are supremo comfy.</li>
</ul>
</p>

<p>
<b>Personal game recommendations:</b>
<ul>
<li><b>Angel Beats!: -1st Beat-</b></li>
<li><b>Chicken Invaders 3</b></li>
<li><b>Samorost 1 & 2</b></li>
<li><b>Peggle</b></li>
</ul>
</p>

<p>I get my games from a <b>pirate at a bay</b> (if you get what I mean). Just make sure to download only from verified or trusted uploaders.</p>

<h3>Books</h3>
<p>I get my <b>copyright free</b> books from <a href="http://libgen.rs/">http://libgen.rs/</a>.</p>

<h3>Music</h3>
<p>For years now, I have been hoarding music in either 320 KBPS MP3 or FLAC formats. I have 200GBs of straight music. If you have the space, it's nice to have the option to listen to a whole plethora of music. Hoard music instead of getting it from spotify.</p>

<p>I get my <b>royalty free</b> music from <b>Soulseek</b>.</p>

<h3>Comics</h3>
<p>I get my <b>copyright free</b> books from <a href="https://getcomics.info">https://getcomics.info</a>.</p>

<h3>Visual media</h3>
<p>Visual media is a blanket term for movies, series, anime, youtube videos, whatever.</p>

<p>I get my games from a <b>pirate at a bay</b> (if you get what I mean). Just make sure to download only from verified or trusted uploaders.</p>

<h2>Backups</h2>
<p>Data loss isn't comfy. Backup your files weekly (or at whatever other frequency) to ensure you don't lose your trash.</p>
</div> <hr>

<?php include 'footer.php';?>
</body>
</html>
