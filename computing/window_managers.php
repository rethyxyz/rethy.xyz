<html>
    <head>
        <?php include "header.php"; ?>
        <title>Window Managers - rethy.xyz</title>
    </head>

<body>
<div class="main">
<h1>Window Managers Explained</h1>
<hr>
<p><font_red>NOTE:</font_red> Tiling window manager equals TWM, floating window manager equals FWM</p>

<h2>What is a Window Manager?</h2>
<p>First, a definition of a window manager: A window manager is simply a piece of software which controls the placement of each window.</p>

<h2>What is a Floating Window Manager?</h2>
<p>In a floating window manager, each window floats (of course). <i>Typically</i>, a FWM is the default type you would see on Mac OS X, Windows, and Linux (GNOME, XFCE, Openbox, etc.).</p>

<h2>What is a Tiling Window Manager?</h2>
<p>A tiling window manager is similar to the last definition but that it functions in a sort of grid-like style instead of a floating one, where everything is displayed on the screen at once (no minimization available here, kids). More so, each window is either considered a master, or a slave. Only one master window is allowed at a time. First, you open a window which is automatically the master. When another window is opened, the master is divided in half, where the new window becomes the master and the last becomes a slave. Then, if another is opened, the newest is the master, and the last two are slaves, and so on, so forth... TWMs almost always also have a workspace system bound to the Modifier key (Windows key, usually) + 1 - 9. Pressing WinKey+1 will bring you to workspace 1, WinKey+2 will bring you to workspace 2, and so on... This is a big part of the TWM workflow.</p>

<h3>i3wm</h3>
<p>
i3wm: a <i>manual</i> TWM (you choose how new windows are split, be it vertical or horizontally, and windows can be re-sized).
<br>
<small>Image taken from a screenshot of my own setup while editing my CV</small>
<br>
<img src="files/i3wm_example.png" width="500">
<br>
</p>

<h3>dwm</h3>
<p>
dwm: a <i>dynamic</i> TWM (windows are split automatically according to a predetermined layout; Master window on the left, slave windows on the right in the "default" layout).
<br>
<small>Image taken from <a href="https://dwm.suckless.org/screenshots/">https://dwm.suckless.org/screenshots/</a></small>
<br>
<img src="files/dwm_example.png" width="500">
<br>
<small>Here's an image of my setup while writing this webpage.</small>
<br>
<img src="files/dwm_screen.png" width="500">
<br>
</p>
</div>

<hr>

        <?php include "footer.php"; ?>
    </body>
</html>
