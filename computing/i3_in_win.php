<html>
    <head>
        <?php include 'header.php';?>
        <title>My i3wm-Like Setup in Windows - rethy.xyz</title>
    </head>

    <body>
        <div class="main">
            <h1>My Windows 10 Setup</h1>
            <p><small>Created: 2020-12-10 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></p><hr>

            <p><b>A compendium of my Windows 10 setup, or, how I make Windows 10 usable.</b></p>

            <p>Usually I choose to run Debian Linux. Sometimes I can't, like when I'm studying cybersecurity (specifically during malware analysis). During those times, I choose to run Windows 10 in combination with my AutoHotkey master script, <code>vim</code>/<code>vim</code>-like programs, and my programmable mouse.</p>

            <p>My setup creates a vim like environment inside of Windows, sort of imitating i3wm key bindings. There are three key portions to the setup, being Firefox for web browser needs, AutoHotkey for mapping OS wide key bindings, and gVim (graphical vim) for anything to do with writing or terminal work. Rarely do I need to leave vim, as I've create an <a href="making_vim_feel_like_emacs.php">Emacs like environment</a> inside of it. I can mostly do everything I need to inside of it. I already have an article explaining what I mean, so click the link at the bottom of this page if you want to see.</p>

            <p>Using AutoHotkey, I add F1-12 keys to minimize/maximize active window, switch to previous window, and to execute or switch to programs. I also have i3wm like key bindings by using the Super key + a/b/c/d... to execute whatever program I assigned to it. Way faster than clicking the taskbar or searching for the program.</p>

            <p>My AHK master script in depth:
            <ul>
            <li>Programs/commands are bound to Modifier+ the keyboard key, e.g. LeftWin+b executes firefox</li>
            <li>Volume shortcuts are bound to Modifier+F2-F4 (LWin+F2 executes volume down, LWin+F3 executes volume up, etc.)</li>
            <li>Media shortcuts are bound to F6-F8, I use these for previous/pause/next song in foobar2000</li>
            <li>Alt+h/j/k/l executes ArrowKey+Left/Down/Up/Right (this ensures that I don't have to take my hands off of the keyboard for small actions like UAC prompt or dialog boxes)</li>
            <li>F1 toggles maximize active window</li>
            <li>F2 minimizes active program</li>
            <li>F4 switches to previous window</li>
            <li>F6 kills active window (easier Alt+F4 or hitting Close button)</li>
            <li>F11 switches goes to the browser tab to the left of the current</li>
            <li>F12 switches goes to the browser tab to the right of the current</li>
            <li>PauseBreak closes current browser tab</li>
            </ul>
            </p>

            <p><a href="https://github.com/rethyxyz/Scripts">You can download the script here.</a></p>

            <h2>Firefox</h2>
            <p>I make sure to download <a href="https://addons.mozilla.org/en-US/firefox/addon/vimium-ff/">Vimium</a> and disable smooth scrolling in both Vimium and the browser.</p>

            <hr>

            <p>See also:
            <ul>
            <li><a href="../programming/autohotkey_key_and_basic_command_index.php">AutoHotkey Key and Basic Command Index</a></li>
            <li><a href="window_managers.php">Windows Managers Explained</a></li>
            <li><a href="making_vim_feel_like_emacs.php">Making <code>vim</code> Feel like <code>Emacs</code></a></li>
            </ul>
            </p>

        </div>

        <hr>

        <?php include 'footer.php';?>
    </body>
</html>
