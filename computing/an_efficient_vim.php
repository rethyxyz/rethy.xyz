<html>
<head>
<?php include "header.php"; ?>
<title>An Efficient vim - rethy.xyz</title>
</head>

<body>
<div class="back_button"> <a href="index.php">Go to 💻 Computing 💻 index</a> </div>

<div class="main">
<h1>An Efficient vim</h1>
<p><small><b>Created: 2020-12-23 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></b></small></p> <hr>

<p>This page serves as a chronicle of the best options/features for creating a truly efficient vim. You can find my entire <code>.vimrc</code> <a href="https://raw.githubusercontent.com/rethyxyz/dotfiles/master/.vimrc">here</a>. Add these to your <code>.vimrc</code>.</p>

<h2>vim Built in Auto-complete</h2>
<p>vim auto-complete is something that I never see or hear about anyone using. Instead, most opt to use plugins that redundantly incorporate the same features as the built in one (<a href="https://github.com/ervandew/supertab">supertab</a> is the most popular, as far as I know). Little do they know, it already exists by default...</p>

<p>While in Insert Mode do <b>Ctrl+n/p</b> or <b>Ctrl+x Ctrl+n/p</b> to sift through an auto-complete list of different words/vars found in your current buffer. Both keybindings mentioned achieve the same thing. <b>Ctrl+n/p</b> selects the next/previous item in a list of recommendations.</p>

<p>You can also auto-complete file paths by pressing <b>Ctrl+x Ctrl+f</b> (<b>Ctrl+n/p</b> for next/previous is optional) which will bring up a similar menu, but for paths instead of keywords.</p>

<h2>vim Built in (Fuzzy) File Finder</h2>
<p> <code>set path+=**</code> </p>

<h2>Bind colon (Command Mode) to semi-colon</h2>
<p> <code>:nmap ; :</code> </p>

<h2>Defining FileType specific macros</h2>
<p>
I use a lot of macros, most being filetype specific. It would be useless to define each globally. Filetype definitions go like this: <br> <br>
<code>:autocmd FileType html let @s='macro_contents_goes_here'</code> <br> <br>
HTML is the filetype, and everything after that is the macro command. You can also replace HTML with any other filetype, such as .py, .c, .txt, .php, etc.
</p>

<h2>Defining macros in <code>.vimrc</code></h2>
<p>I'm assuming that you already know how to record/write macros. If you don't, check out <a href="https://vim.fandom.com/wiki/Macros">this</a> tutorial first. If you don't already have a macro, record one now, then open your <code>.vimrc</code>, and write<br><br>
<code>let @l=""</code><br><br>
where <code>l</code> is the letter you want to bind the macro to. Then, while in command mode, hit<br><br>
<code>" (double quote) + l + p</code><br><br>
to paste the contents. Move the pasted contents between the two double quotes ("") of the command previously written out into your <code>.vimrc</code>. This will allow you to create a persistent macro.
</p>

<h2>Infinite file modification history</h2>
<p>
<code>set undofile</code><br>
<code>set undodir=~/.vim/undodir</code>
</p>

<h2>Moving by relative line number</h2>
<p>This default keybinding will allow you to move by the line number relative to your cursor in both directions (positively and negatively).<br><br>
<code>line number + Return</code><br><br>
or<br><br>
<code> - (minus button) line number + Return</code>.<br><br>
An example would be <code>20 + Return</code> to go to the positive 20th line relative to you. This is the best way to get around.
</p>

<h2>No need For nerdtree; Use Netrw plus leader key</h2>
<p>
Instead of using a nerdtree to move through directories/files, use netrw and the leader key. I typically take the most commonly used directories, and bind their paths to leader like this example:<br><br>
<code>:map &lt;leader&gt;ghh :e ~/repos<CR></code><br><br>
As shown by the code, I change to the github directory by hitting<br><br>
<code>\ g h h</code><br><br>
in quick succession. This enables me to quickly move around to and through various working directories. I also take the <code>:Explore</code> command, which opens your current working directory using netrw in your current buffer, and bind it to: <code>\ \</code>.
Add this to your <code>.vimrc</code>:<br><br>
<code>:map &lt;leader&gt;&lt;leader&gt; :Explore<CR></code>
</p>

<h2>Don't type :split/vsplit; Use leader + c/v</h2>
<p>
<code>:map &lt;leader&gt;v :split<CR></code><br>
<code>:map &lt;leader&gt;c :vsplit<CR></code>
</p>

<h2>Resize vim buffers using leader + -/=</h2>
<p>
<code>:map &lt;leader&gt;]- :resize -5&lt;CR&gt;</code><br>
<code>:map &lt;leader&gt;]= :resize +5&lt;CR&gt;</code><br>
<code>:map &lt;leader&gt;- :vertical resize -5&lt;CR&gt;</code><br>
<code>:map &lt;leader&gt;= :vertical resize +5&lt;CR&gt;</code>
</p>

<h2>Backspace in Insert mode</h2>
<p> <code>set backspace=indent,eol,start</code> </p>

<h2>Open in firefox (browser)</h2>
<p>
For Windows:<br><br>
<code>:map &lt;leader&gt;off :exe ':silent !"C:\Program Files\Mozilla Firefox\firefox.exe" "%"'&lt;CR&gt;</code><br><br>
For Linux:<br><br>
<code>map &lt;leader&gt;off :exe ':silent !firefox % &amp;'&lt;CR&gt;</code>
</p>

<h2>Insert date/time by hitting leader + date/time</h2>
<p>
<code>map &lt;leader&gt;date "=strftime("%F")&lt;CR&gt;P</code><br>
<code>map &lt;leader&gt;time "=strftime("%T")&lt;CR&gt;P</code>
</p>

<h2>Abbreviations for repeditive words/terms</h2>
<p>
Here's an example of making one for a website link, like my own: <br> <br>
<code>:iabbrev !! https://rethy.xyz</code>
</p>

<h2>Toggle 80 character column</h2>
<p> <code>map &lt;leader&gt;cc :execute "set colorcolumn=" . (&#38;colorcolumn == "" ? "80" : "")&lt;CR&gt;</code> </p> <hr>

<p>
See also:
<ul>
<li><a href="making_vim_feel_like_emacs.php">Making vim Feel like Emacs (Without the Bloat)</a></li>
<li><a href="the_fallacy_of_program_ease.php">The Fallacy of Program Ease</a></li>
</ul>
</p>

</div> <hr>

<?php include "footer.php"; ?>

</body>
</html>
