<html>
<head>
<?php include 'header.php';?>
<title>Making vim Feel Like Emacs - rethy.xyz</title>
</head>

<body>
<div class="main">
<h1>Making vim Feel like Emacs (Without the Bloat)</h1>
<p><b><small>Created: 2021-02-03 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p> <hr>

<p>Emacs: A text editor, IDE, email client, file manager - and so much more - all in one. A great - yet very bloated - piece of software. Featureful, yet much in excess. Fast, but is bogged down by the 1000 pound ball and chain it carries... You get the point.</p>

<p>I should mention, when I say that I want to make vim like Emacs, I don't mean that I want to make vim redundant, or weight 1000 pounds. I mean that I want to live in vim, and will show you how you can too.</p>

<p>Even though Emacs is great, it's far from perfect. One might even say it's the Swiss army knife of text editors/IDEs/file managers/email clients/gaming centers/operating systems... Jack of all trades, master of none... What I mean to say, is that Emacs is good (really, one of the best), but much too bloated for some. Some prefer something that's immediately fast - like vim - and uses sensible key bindings. The default Emacs key bindings are odd for a hole bunch of reasons I won't get into. I will say this: Even pro-church of Emacs types agree with me (for the most part), that its defaults are RSI-inducing, and end up being inconsistent because of the sheer amount of them.</p>

<p>You want to know how RSI inducing they are? <a href="http://ergoemacs.org/emacs/emacs_hand_pain_celebrity.html">Check this out</a>. They're so bad, Richard Stallman (one of the programmers of Emacs) lost his ability to type for years, and has permanently damaged his hand.</p>

<p>Something I do like about Emacs, is that you can do mostly everything computer related inside of it. This should be possible in vim, seeing as it has its own scripting language: vimscript.</p>

<h2>shell Command Equivalent</h2>
<p>As you may already know, Emacs users like to stay in Emacs. Why? This joke explains it all:</p>

<blockquote><i>"Emacs is an operating system with a text editor included"</i></blockquote>

<p>Fair enough. I get the sentiment. I'd like to stay in Vim, too. Getting back to the topic, Vim already has a built in terminal command, it's the <code>:terminal</code> command. I'm sure some of you didn't know about it. Emacs users prefer the Emacs <code>shell</code> command, and even say that it's preferred over a traditional terminal because of its easy interaction with Emacs.</p>

<p>
Here's how you can open Bash/WSL, PowerShell, and cmd in your operating system:
<ul>
<li>:terminal cmd</li>
<li>:terminal bash</li>
<li>:terminal powershell</li>
</ul>
This should be cross platform.
</p>

<p>Basically, you should be using this command inside of vim instead of leaving it to do shell related activities. Even though I use mostly use tiling window managers, I tend to open a Bash session while inside of vim. It's simpler and easier to resize if I'm already using Vim. This is because I use specialized keybindings for this (<a href="an_efficient_vim.php">check out this article, specifically my superior leader keybindings</a>).</p>

<h2>dired Command Equivalent</h2>
<p>Emacs people use dired. vim has something built in that's similar to dired called netrw. It's just as good.</p>

<p>This lets you have a TUI (terminal user interface) file explorer for file and directory management. Some people don't like it, but I do. Just make sure to google the keybindings on the Internet prior to using so you can use it to its fullest potential.</p>

<h2>magit</h2>
<p>I don't use this. No matter, someone ported it to vim. <a href="https://github.com/jreybert/vimagit">Download it here</a>. I use the :terminal command + Bash and git instead. It gets the job done for me.</p>

<h2>Use :split/:vsplit</h2>
<p>Emacs people use splits instead of multiple floating Emacs windows. So do I. Now use them! If you want the keybindings, <a href="an_efficient_vim.php">go here and find the "Resize vim buffers using leader + -/" and "Don't type :split/vsplit; Use leader + c/v" sections</a>.</p>

<h2>Emailing in vim</h2>
<p>Well, this is sort of a hack, as it isn't really built <i>inside</i> vim. Either way, it can be opened in vim using the :terminal command. Plus, it uses vim key bindings. It's nice to use if you want a centralized console for programs. vim will be come that.</p>

<p>Opening mutt inside of vim is probably still more lightweight than the Emacs equivalents, but I haven't tested this theory.</p>

<h2>org-mode</h2>
<p>There's a plugin to emulate it <a href="https://github.com/jceb/vim-orgmode">here</a>. I don't use it, but it's there if you need it.</p>

<p>
  A better way to using complex and convoluted note taking/organization systems such as org-mode, is to just use HTML or TXT files in combination with basic Unix utilites. An example: Do you want to find a specific topic? Use grep to find the file containing specific keywords.
</p>

<p>
  <code>grep -l -r "vim" *</code>
</p>

<p>
  This command will allow you to print all file names containing the word "vim", and it works recursivelly.
</p>
</div> <hr>

<?php include 'footer.php';?>
</body>
</html>
