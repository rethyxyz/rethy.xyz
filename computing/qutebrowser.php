<html>
<head>
<?php include 'header.php';?>
<title>Best Qutebrowser Configuration - rethy.xyz</title>
</head>

<body>
<?php include 'menu.php';?>

<div class="main">
<h1>Best Qutebrowser Configuration</h1>
<p><b><small>Created: 2021-04-07 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p>

<hr>

<p>Not a guide. Just collection of the best options in the configuration file of the browser <code>qutebrowser</code>.</p>

<h2>Generate Configuration File</h2>
<p>Run <code>:config-write-py</code>. This'll create the global configuration file in the location <code>~/.config/qutebrowser/config.py</code>. Make all changes to <code>qutebrowser</code> here.</p>

<h2>Setting Up (Good) Adblocking</h2>
<p>
Qutebrowser doesn't have good adblocking by default. You should install Brave's Adbocker to use along with the default adblocker. Install:
<ul>
<li><code>sudo pacman -S python-adblock</code></li>
<li><code>sudo apt install python-adblock</code></li>
</ul>
Open <code>~/.config/qutebrowser/config.py</code>, uncomment, and modify this line until it looks like this:
<ul>
<li><code>c.content.blocking.method = 'both'</code></li>
</ul>
</p>

<h2>Disable Smooth Scrolling</h2>
<p>
Smooth scrolling is laggy and inconsistent. Disable it:
<ul>
<li><code>c.scrolling.smooth = False</code></li>
</ul>
</p>

<h2>Disable Scroll Bar</h2>
<p>
It's redundant to display a scroll bar on a vim-based browser.
<ul>
<li><code>c.scrolling.bar = 'never'</code></li>
</ul>
</p>

<h2>Disable Geolocation Requests</h2>
<p>
No need to ask for location. If you know where you are, put it in manually.
<ul>
<li><code>c.content.geolocation = False</code></li>
</ul>
</p>

<h2>Search Engines</h2>
<p>
<ul>
<li><b>DuckDuckGo</b>: <code>https://duckduckgo.com/?q={}</code></li>
<li><b>Wikipedia</b>: <code>https://en.wikipedia.org/wiki/{}</code></li>
<li><b>YouTube</b>: <code>https://www.youtube.com/results?search_query={}</code></li>
<li><b>Twitch.tv</b>: <code>https://twitch.tv/{}</code></li>
<li><b>Github</b>: <code>https://github.com/rethyxyz/{}</code></li>
<ul>
<li>Replace <code>rethyxyz</code> with your username</li>
</ul>
<li><b>nibl</b>: <code>https://nibl.co.uk/search?query={}</code></li>
<li><b>Arch Wiki</b>: <code>https://wiki.archlinux.org/?search={}</code></li>
</ul>
</p>

<h2>Additional Normal Mode Keybindings</h2>
<p>
Paste these into the section titled: <code>## Bindings for normal mode</code>
<ul>
<li><code>config.bind('\\rl', 'config-source')</code></li>
<ul>
<li>Reload config.py</li>
</ul>
<li><code>config.bind('\\m', 'hint links spawn mpv {hint-url}')</code></li>
<ul>
<li>Open hinted link in <code>mpv</code></li>
</ul>
</ul>
</p>

<hr>

<p>
See also:
<ul>
<li><a href="an_efficient_vim.php">An Effective vim</a></li>
<li><a href="making_vim_feel_like_emacs.php">Making vim Feel Like Emacs</a></li>
<p></p>
</ul>
</p>
</div>

<hr>

<?php include 'footer.php';?>
</body>
</html>
