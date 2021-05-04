<html>
    <head>
        <?php include 'header.php';?>
        <title>Taking Notes in HTML - rethy.xyz</title>
    </head>

    <body>
        <div class="main">
            <h1>Taking Notes in HTML</h1>
            <p><b><small>Created: 2021-02-21 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p> <hr>

            <section>
                <p><b><small>2021-04-12</small></b></p>
                <p>Nowadays I take notes in plaintext files, as it's the simplest, but taking notes in HTML is better if you need something with images, styling, etc.</p>
            </section>

            <p>
                Something I've started doing, is taking notes in HTML.
                Previously, I had been using vim-wiki, and before that vim-notes, which are both semi-similar note taking plugins for <code>vim</code>.
                I enjoyed each of them, but always felt it was difficult to manage the files they produced.
                By taking notes using HTML, your notes are easy to manage, as they are standalone HTML files.
                I first had the idea while thinking about the need for something stronger and more independant than vim-wiki.
                Naturally, HTML came up.
                I already write so much of it, so why not just write notes using the oh-so-powerful HTML? No weird middle-man management systems, just simple files.
                There are plenty of benefits for doing it this way, which I'll sum up:
            </p>

            <p>
            <ul>
            <li><b>A familiar format</b>: You don't have to learn another markup language.</li>
            <li><b>Easy to manage</b>: Just plaintext HTML files.</li>
            <li><b>Highly customizable (CSS)</b>: Any font you want, any color, size, shape, etc. Anything that CSS can do, so can you. Custom themes using style sheets. Able to display images.</li>
            <li><b>Powerful</b>: More features than vim-wiki, vim-notes, or MS Word.</li>
            <li><b>Independent</b>: Because HTML is a markup language, you can edit it using any text editor or IDE imaginable.</li>
            <li><b>Extensible</b>: Easy to turn note page into something else, like a website or printer page. Simple, and universal.</li>
            </ul>
            </p>

            <h2>How I Make It Easy</h2>
            <p>My <b>vim</b> configuration makes editing HTML easy, as I use persistent macros to wrap tags around text quickly. This makes sure I don't need to insert every tag manually, cutting down on writing time.</p>

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
                <li>Wrap line in list item tags</li>
                </ul>
            <li>@u</li>
                <ul>
                <li>Create ul table at cursor</li>
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

            <p><a href="..\computing\an_efficient_vim.php">Check this to see how to implement them (section <i>Defining Filetype Specific Macros)</i></a>. If you just want my config file, <a href="https://raw.githubusercontent.com/rethyxyz/dotfiles_windows/master/.vimrc">click here for Windows</a>, or <a href="https://raw.githubusercontent.com/rethyxyz/dotfiles/master/.vim/macros.vim">here for *nix</a>.</p>

            <hr>

            <p>See also:
            <ul>
            <li><a href="..\computing\an_efficient_vim.php">An Efficient <code>vim</code></a></li>
            </ul>
            </p>

        </div> <hr>

        <?php include 'footer.php';?>
    </body>
</html>
