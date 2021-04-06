<!DOCTYPE html>
<html>
    <head>
        <?php include 'header.php';?>
        <title>Config Converter for Linux - rethy.xyz</title>
    </head>

    <body>
        <div class="main">
            <h1>Config Converter for Linux</h1>
            <p><b><small>Created: 2020-12-20 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p> <hr>

            <p>I recently wrote a Python script to convert my dotfiles between desktop and laptop format:</p>

            <p>The folder structure is the same between both devices, with the only variance being that my laptop has a secondary drive mounted at ~/1TBDrive and my desktop has four secondary drives mounted under 500GigDrive0, 500GigDrive1, and so on. This meant that I only needed to replace each instance matching 1TBDrive or 500GigDrive0, 1... and set it to whatever. All I wrote was a simple find and replace function and gave it a find and replace variable. I could have done it in Bash, but I didn't, because not, if I need to, I can take the find and replace function from my script and create a better version of <code>sed</code>.</p>

            <p><a href="https://github.com/rethyxyz/Scripts/blob/master/convert_configs_for_device.py">You can find the script here</a> if it's something that could benefit you.</p>

            <p>I wrote it in 10 minutes, so it probably isn't perfect.</p> <hr>

            <p>See also:
            <ul>
            <li><a href="randomizing_current_wallpaper.php">Randomizing Current Wallpaper in Linux</a> using Python</li>
            </ul>
            </p>

        </div>

        <hr>

        <?php include 'footer.php';?>
    </body>
</html>
