<html>
<head>
<?php include 'header.php';?>
<title>The Best Way to Consume Media - rethy.xyz</title>
</head>

<body>
<div class="back_button"> <a href="index.php">Go to 💻 Computing 💻 index</a> </div>

<div class="main">
<h1>The Best Way to Consume Media: Newsboat</h1>
<small><b>Created: 2020-12-16 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></b></small>

<p>
I consume all media (news, YouTube posts, Twitch.tv live notifications, blogs posts, etc.) through a centralized program using the power of Newsboat. There are a few strong reasons why I use newsboat over other RSS readers/why I use RSS readers at all:
<ul>
<li>Vim keybindings (not by default (<a href="https://forums.freebsd.org/threads/newsboat-rss-reader-enable-vim-key-bindings.69448/">here's a link to add them</a>))</li>
<li>Centralized media consumption: Less distractions, only what I want to see</li>
<li>Terminal based: No GUI, only TUI, therefore less "bloat"</li>
<li>Extensibility</li>
<li>No need to manage 100s of accounts across 100s of platforms</li>
<ul>
<li>No need to create any trash google accounts either</li>
</ul>
<li>Content of RSS new posts are saved and viewable offline</li>
<li><a href="https://forums.freebsd.org/threads/newsboat-rss-reader-enable-vim-key-bindings.69448/">Macros</a>: Allows for opening RSS links/new posts with other programs (such as with <code>mpv</code> to watch YouTube videos, or to youtube-dl to download the video for later)</li>
</ul>
</p>

<p><br>
If that sounds apealing to you, here's how you can get in on it:
<ul>
<li><b>Arch based distro</b>: <code>sudo pacman -S newsboat</code></li>
<li><b>Debian based distro</b>: <code>sudo apt install newsboat</code></li><br>
</ul>
To add an RSS feed, simply paste a link into the file in <code>~/.newsboat/urls</code>. Here are a few RSS feeds to get you started:
<br>
<code>
https://lukesmith.xyz/rss.xml
<br>
https://stallman.org/rss/rss.xml
</code>

</p>

<p><br>As a hardcore computer user (at least 14 hours a day, everyday), and someone who consumes a plethora of content across a multitude of different platforms, this program is a life saver.</p><br>

<p><b>TODO: Create an article on newsboat macros</b></p>

<p><b>TODO: Add a list of all RSS feeds I use</b></p>

<!--
<p><b><a href="newsboat_macros.php">Click here to view my article on newsboat macros</a></b></p>
-->

</div>

<?php include 'footer.php';?>
</body>
</html>
