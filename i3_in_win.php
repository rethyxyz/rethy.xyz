<!DOCTYPE html>
<html>
	<head>
		<?php include "header.php";?>
        <title>My i3wm-Like Setup in Windows - rethy.xyz</title>
	</head>

	<body>
        <div class="main">
            <div class="menu">
				<?php include "menu.php";?>
                <br />
            </div>

            <h1>My i3wm-Like Setup in Windows</h1>
            <p>I run Linux most of the time, except for when I can't, like when I'm studying cybersecurity (specifically during malware analysis). During those times, I choose to use Windows + My AutoHotkey Master Script + Vim/Vim-like keybindings/programs. My script tries (and succeeds) to create an i3-like environment inside of Windows without the tiling functionality of i3wm. There are a three key portions to the setup, being Firefox for web browser needs, AutoHotkey for defining OS wide keybindings, and gVim (graphical vim) for text editing/programming/writing. I also added a few other customizations, such as F1-12 keys do various actions such as minimize active window, maximize active window, and switch to preview window (better than alt+tab, keyboard chords cause RSI).</p>

            <h2>AutoHotkey</h2>
            <p>
                My master script recreates:
                <ul>
                    <li>Programs/commands are bound to ModifierKey+KeyboardKeys, e.g. LWin+b executes firefox</li>
                    <li>Volume/media are bound to Modifier+F2-4 (LWin+F2 executes volume down, LWin+F3 executes volume up, etc.)</li>
                    <li>Alt+h/j/k/l executes ArrowKey+Up/Down/Left/Right (this ensures that I don't have to take my hands off of the keyboard or the home row for small actions, such as UAC, or dialog boxes.)</li>
                    <li>F1 toggles maximize</li>
                    <li>F2 minimizes active program</li>
                    <li>F4 switches to previous window</li>
                    <li>F6 kills active window (better than Alt+F4)</li>
                    <li>F11 switches goes to the browser tab to the left of the current</li>
                    <li>F12 switches goes to the browser tab to the right of the current</li>
                    <li>PauseBreak closes current browser tab</li>
                </ul>
            </p>

            <h2>Firefox</h2>
            <p>I make sure to download <a href="https://addons.mozilla.org/en-US/firefox/addon/vimium-ff/">Vimium</a> and disable smooth scrolling in both Vimium and the browser. That's it.</p>

            <div class="footer">
                <br />
				<?php include "footer.php";?>
            </div>
        </div>
	</body>
</html>
