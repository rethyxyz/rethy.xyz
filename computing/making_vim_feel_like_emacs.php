<html>
<head>
<?php include 'header.php';?>
<title>Making vim Feel Like Emacs - rethy.xyz</title>
</head>

<body>
<div class="main">
<h1>Making vim Feel like Emacs (Without the Bloat)</h1>
<p><b><small>Created: 2021-02-03 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p> <hr>

<p>Emacs: A text editor, IDE, email client, file manager - and so much more - all in one. A great - yet completely bloated - piece of software. Featureful, yet much in excess. Fast, yet carries around a 1000 pound ball and chain... You get the point.</p>

<p>I should mention, when I say that I want to make vim like Emacs, I don't mean that I want to make vim weigh a thousand pounds. I mean that I want to live in vim, and will show you how you can too.</p>

<p>Even though Emacs is great, it's far from perfect. One might even say it's the Swiss army knife of text editors/IDEs/file managers/email clients/gaming centers/operating systems... Jack of all trades, master of none... What I mean to say, is that Emacs is good, but much too bloated for my liking. I prefer something that's immediately fast - like vim - and uses sensible key bindings. I hate the Emacs key bindings for a hole bunch of reasons I won't get into. I will say this: Even pro-church of Emacs types agree with me (for the most part), that its defaults are RSI-inducing none sense, and terribly inconsistent.</p>

<p>Something I do like about Emacs, is that you can do mostly everything computer related inside of it. This should be possible in vim, seeing as it has its own scripting language: vimscript.</p>

<h2>shell Command Equivalent</h2>
<p>As you may already know, Emacs users like to stay in Emacs. Why? This joke explains it all:</p>

<blockquote><i>"Emacs is an operating system with a text editor included"</i></blockquote>

<p>Fair enough. I understand the sentiment. I'd like to stay in vim too. Getting back to the topic, vim already has a built in terminal, it's the <code>:terminal</code> command. Emacs users prefer the Emacs <code>shell</code> command, and even say that it's preferred over a traditional terminal because of its easy interaction with Emacs.</p>

<p>
Here's how you can open WSL, PowerShell, and cmd in your operating system:
<ul>
<li>:terminal cmd</li>
<li>:terminal bash</li>
<li>:terminal powershell</li>
</ul>
This should be cross platform.
</p>

<p>Basically, you should be using this command inside of vim instead of leaving it to do shell related activities. Even though I use mostly use tiling window managers, I prefer to open a Bash session while inside of vim. It's simpler and easier to resize if I'm already using vim. This is because I use specialized keybindings for this (<a href="an_efficient_vim.php">check out this article to check out my superior leader keybindings</a>).</p>

<h2>dired Command Equivalent</h2>
<p>Emacs people use dired. vim has something built in that's similar to dired called netrw. It's just as good.</p>

<p>This lets you have a TUI (terminal user interface) file explorer for file and directory management.</p>

<h2>magit</h2>
<p>I don't use this. No matter, someone ported it to vim. <a href="https://github.com/jreybert/vimagit">Download it here</a>. I use the :terminal command + Bash and git instead.</p>

<h2>Use :split/:vsplit</h2>
<p>Emacs people use splits instead of multiple floating Emacs windows. So do I. Now use them!</p>

<h2>Emailing in vim</h2>
<p>Well, this is sort of a hack, as it isn't really built <i>inside</i> vim. Either way, it can be opened in vim using the :terminal command. Plus, it uses vim key bindings. It's nice to use if you want a centralized console for programs. vim will be come that.</p>

<p>Opening mutt inside of vim is probably still more lightweight than the Emacs equivalents, but I haven't tested this theory.</p>

<h2>org-mode</h2>
<p>There's a plugin to emulate it <a href="https://github.com/jceb/vim-orgmode">here</a>. I don't use it, but it's there if you need it.</p>

<p>A better way to using complex and convoluted note taking/organization systems such as org-mode, is to just use HTML or TXT files in combination with basic Unix utilites. An example, do you want to find a specific topic? Use grep to find the file containing specific keywords.</p>
</div> <hr>

<?php include 'footer.php';?>
</body>
</html>
