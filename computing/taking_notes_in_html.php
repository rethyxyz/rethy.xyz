<html>
<head>
<?php include 'header.php';?>
<title>Taking Notes in HTML - rethy.xyz</title>
</head>

<body>
<div class="back_button"> <a href="index.php">Go to 💻 Computing 💻 index</a> </div>

<div class="main">
<h1>Taking Notes in HTML</h1>
<p><b><small>Created: 2021-02-21 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p> <hr>

<section>
<p><b><small>2021-04-12</small></b></p>
<p>Nowadays, I take notes in plaintext files, as it's the simplest. Though, taking notes in HTML is better if you need something with images, styling, etc.</p>
</section>

<p>I've started taking notes in HTML. Previously, I had been using vim-wiki, and before that, vim-notes, which are semi-similar <code>vim</code> note taking plugins. I enjoyed each of them, but felt the difficulty while managing the files it produced. By taking notes in HTML, your notes are easy to manage: They're simple, standalone HTML files. No connection to another program. I first had the idea while thinking on the need for something stronger, more independent than vim-wiki. Naturally, HTML came along. The rational: <i>"I already write so much of it, so why not write notes using the oh-so-powerful HTML?"</i>. No weird middle-man management systems, just simple files. There are plenty of benefits to doing this, which I'll sum up:</p>

<p>
<ul>
<li><b>Familiar format</b>: You don't have to learn another markup language. This is assuming you know HTML.</li>
<li><b>Easy Management</b>: Read above paragraph ^.</li>
<li><b>Highly customizable (and CSS)</b>: Any font you want, any color, size, shape, etc. Works on every computer. Anything that CSS can do, so can you. Custom themes using stylesheets, and able to display images.</li>
<li><b>Powerful</b>: More features than vim-wiki, vim-notes, or MS Word.</li>
<li><b>Independent</b>: Because HTML is a markup lang, you can edit using a text editor, IDE, or anything imaginable.</li>
<li><b>Extensible</b>: Easy to turn note page into something else, such as a website, or a printer page. Simply universal.</li>
</ul>
</p>

<h2>How I Make It Easy</h2>
<p>My <b>vim</b> configuration makes editing HTML easy because of persistent macros. I'm able wrap tags around text quickly thanks to them. This ensures I don't need to insert each tag manually, thereby cutting down on writing time.</p>

<h3>Macros</h3>
Examples:
<p>
<ul>
<li>@p</li>
    <ul>
    <li>Wrap selection in paragraph tags</li>
    </ul>
<li>@l</li>
    <ul>
    <li>Wrap line in list item tags, then hit j key</li>
    </ul>
<li>@u</li>
    <ul>
    <li>Create ul table structure at cursor</li>
    </ul>
<li>@e</li>
    <ul>
    <li>Wrap selection in center tags</li>
    </ul>
<li>@z, @x, @v</li>
    <ul>
    <li>Wrap selection in h1, h2, or h3 tags</li>
    </ul>
<li>@c</li>
    <ul>
    <li>Wrap selection in code tags</li>
    </ul>
</ul>
</p>

<p>
... And plenty more. I can access these macros <b>ONLY</b> when I'm in an HTML file, as they are filetype specific. This allows me to choose different macros for different filetypes, but that's something unrelated.
</p>

<p><a href="an_efficient_vim.php">Check this to see how to implement them (section <i>Defining Filetype Specific Macros)</i></a>. If you just want my config file, <a href="https://raw.githubusercontent.com/rethyxyz/dotfiles_windows/master/.vimrc">click here for Windows</a>, or <a href="https://raw.githubusercontent.com/rethyxyz/dotfiles/master/.vim/macros.vim">here for *nix</a>.</p>

<hr>

<p>See also:
<ul>
<li><a href="an_efficient_vim.php">An Efficient <code>vim</code></a></li>
<li><a href="making_vim_feel_like_emacs.php">An Efficient <code>vim</code></a></li>
</ul>
</p>

</div> <hr>

<?php include 'footer.php';?>
</body>
</html>
