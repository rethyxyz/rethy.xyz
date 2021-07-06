<html>
<head>
<?php include 'header.php';?>
<title>The Best Windows Software - rethy.xyz</title>
</head>

<body>
<div class="back_button"> <a href="index.php">Go to 💻 Computing 💻 index</a> </div>

<div class="main">
<h1>The Best Windows Software</h1>
<p><small><b>Created: 2020-01-29 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></b></small></p> <hr>

<p>This page lists the best software for Windows, more specifically Windows 10. No frills, just a simple list. If you don't use Windows, or don't know what to install, follow this list.</p>

<h1>Image Viewer</h1>
<p>
<ul>
<li><b>Windows Photos (Default)</b> or <b>Edge browser</b></li>
    <ul>
    <li>Simply displays images. Usually you need nothing else, unless you work with obscure formats.</li>
    </ul>
</ul>
</p>

<h1>Screenshot</h1>
<p>
<ul>
<li><b>Snipping Tool</b></li>
    <ul>
    <li>It ships by default with Windows 10, and is the simplest.</li>
    </ul>
</ul>
</p>

<h1>Image Editor</h1>
<p>
<ul>
<li><b>Gimp</b></li>
    <ul>
    <li>It's a copy of Photoshop, and it's free. I haven't used anything better that's free as well.</li>
    </ul>
</ul>
</p>

<h1>Media Player</h1>
<ul>
<li><b>mpv</b></li>
    <ul>
    <li>Just a media player. No excess. Also has robust Lua scripting support</li>
    </ul>
<li><b>VLC</b></li>
    <ul>
    <li>More features than mpv, through considered "bloated". Can convert between audio and video formats, watch streams, and more much more than mpv, through.</li>
    </ul>
</ul>

<h1>Music Player</h1>
<ul>
<li><b>foobar2000</b></li>
    <ul>
    <li>Customizable, and plays any audio type. The best on Windows. You find anything simpler, and so widely used/supported. Also, it has a whole <a href="https://www.foobar2000.org/components">market place of components</a>.</li>
    </ul>
</ul>

<h1>eBook Reader</h1>
<ul>
<li><b>Calibre</b></li>
<ul>
<li>A graphical library layout of all your books. Has a good viewer, too. Supports almost every file format under the sun (including cbr and cbz for comic books).</li>
</ul>
</ul>

<h1>File Sharing</h1>
<ul>
<li><b>qBittorrent</b></li>
    <ul>
    <li>This will fill your torrenting needs. It seems like a better version of uTorrent 2.2.1 from the early days.</li>
    </ul>
<li><b>Soulseek</b></li>
    <ul>
    <li>No comment, but it's the <a href="https://en.wikipedia.org/wiki/Soulseek">best at what it does</a></li>
    </ul>
</ul>

<h1>Text Editor</h1>
<ul>
<li><b>gVim</b></li>
    <ul>
    <li>It would be console vim, but all Windows terminals (not including THE <a href="https://github.com/Microsoft/Terminal">Windows Terminal</a>) are laggy garbage, so gVim it is. You don't really need anything else for text editing/note taking.</li>
    </ul>
<li><b>WSL + Windows Terminal + (console) Vim</b></li>
    <ul>
    <li>This if the best choice for power users. If you are a Linux user but are forced to use Windows, use this. It's a life saver, and its where I now spend must of my time (while on Windows). This allows me to use my configs, programs, and workflows I've been using for years prior to using Windows 10 as a main machine. Thanks to the Windows Terminal and WSL, I'm able to do this effectively, and without (too) much latency. Prior to, it was impossible to do any text editing or anything that requires a semblance of responsivity in any of the Windows command line products. Praise be to WSL + Windows Terminal (Linux is still better though).</li>
    </ul>
</ul>

<h1>Keybinding System</h1>
<ul>
<li><b>AutoHotkey</b></li>
    <ul>
    <li>It's a feature full scripting language for binding keys to actions. A nessessity if you don't want to get RSI by using the Windows defaults, but it isn't manditory if you aren't a power user.</li>
    </ul>
</ul>

<h1>Unix System</h1>
<ul>
<b>WSL</b>
    <ul>
    <li>Refer to my explanation in the "Text Editor" section. It explains it enough.</li>
    </ul>
</ul>

<h1>Browser</h1>
<ul>
<li><b>Microsoft Edge</b></li>
    <ul>
    <li>Chrome based. Microsoft's integrated browser to Windows 10. Super fast (alledgedly the fastest, MS claims), graphically smooth (incomparable to Firefox or stock Chromium, as this has no tearing or stuttering). By default, this browser has all the dev features that Chrome has, but with added MS ones (vertical tabs, and third party, MS, and Google Chrome addon support).</li>
    </ul>
<li><b>Firefox</b></li>
    <ul>
    <li>Alternative to Edge. It's really good. I used it for upwards of 10 years, up until a couple of months ago.</li>
    </ul>
</ul>

<h1>Mathematics</h1>
<ul>
<li><b>Python</b></li>
    <ul>
    <li>Allows me to write quick functions (just personal preference).</li>
    </ul>
<li><b>Mathematica</b></li>
    <ul>
    <li>This is apparently the best. I don't do in-depth Mathematics, so I haven't used it extensively.</li>
    </ul>
</ul>

</div> <hr>

<?php include 'footer.php';?>
</body>
</html>
