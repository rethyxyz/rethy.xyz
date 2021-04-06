<!DOCTYPE html>
<html>
    <head>
        <?php include 'header.php';?>
        <title>AutoHotkey Key Index - rethy.xyz</title>
    </head>

    <body>
        <div class="main">
            <h1>AutoHotkey Key and Basic Command Index</h1>
            <p><b><small>Created: 2019-??-?? | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p> <hr>

            <p> <font color="red"><center>AutoHotkey is only supported on Windows operating systems.</center></font> </p>

            <p>This page is a simplified version of the offical <a href="https://www.autohotkey.com/docs/KeyList.htm#general">AutoHotkey KeyList Documentation page</a> to better serve my needs.</p>

            <p><b>Side note</b>: If you use Linux (especially tiling window managers) but have to use Windows for whatever reason, spend time learning AutoHotkey. It'll basically allow you to bind keys that are (nearly) 1:1 the same as a tiling window manager (such as WindowsKey+b will exec firefox, WindowsKey+v will exec vim, etc.).</p>

            <h2>Running</h2>
            <p>To get up and running, go to the <a href="https://autohotkey.com">AutoHotkey website</a> and click Download <a href="https://www.autohotkey.com/download/ahk-install.exe">(or here)</a> to get the latest version. Next, install the program. After all is complete, your system should be able to execute AutoHotkey scripts. Simple.</p>

            <h2>Writing</h2>
            <h3>Useful Keyboard Keys</h3>
            <table style="width:35%">
            <tr>
            <th>Left WinKey</th>
            <th>Left Alt</th>
            <th>Left Shift</th>
            <th>Left Ctrl</th>

            </tr>
            <tr>
            <td><center><big><font_red>&lt;#</font_red></big></center></td>
            <td><center><big><font_red>&lt;!</font_red></big></center></td>
            <td><center><big><font_red>&lt;+</font_red></big></center></td>
            <td><center><big><font_red>&lt;^</font_red></big></center></td>
            </tr>
            <tr>
            <th>Right WinKey</th>
            <th>Right Alt</th>
            <th>Right Shift</th>
            <th>Right Ctrl</th>
            </tr>
            <tr>
            <td><center><big><font_red>&gt;#</font_red></big></center></td>
            <td><center><big><font_red>&gt;!</font_red></big></center></td>
            <td><center><big><font_red>&gt;+</font_red></big></center></td>
            <td><center><big><font_red>&gt;^</font_red></big></center></td>
            </tr>
            <tr>
            <th>F1-12 Keys</th>
            </tr>
            <tr>
            <td><center><big><font_red>$F1</font_red></big></center></td>
            <td><center><big><font_red>$F2</font_red></big></center></td>
            <td><center><big><font_red>$F3</font_red></big></center></td>
            <td><center><big><font_red>...</font_red></big></center></td>
            </tr>
            </table> 

            <p><b>Note</b>: The less than/greater than symbol is actually an arrow which points in the direction of the key you want to bind. Example: &gt; points to the right, &lt; points to the left.</p>

            <h3>Typical Syntax</h3>
            <p>
            <code_block><font_green>&lt;#b::</font_green><font_brown>Run</font_brown> "C:\Program Files\Firefox Nightly\firefox.exe"</code_block>
            <br>
            <small>Explanation: Execute program found at path\to\the.exe upon LeftWin+b chord press</small>
            </p> 
            <p>
            <code_block><font_green>$F1::</font_green><font_brown>Send</font_brown> !{F4}</code_block>
            <br>
            <small>Explanation: Send the keyboard command Alt+F4 upon F1 key press</small>
            </p>
            <p>
            <code_block><font_green>CapsLock::</font_green>Escape</code_block>
            <br>
            <small>Explanation: If CapsLock is pressed, issue an Escape key press instead</small>
            </p>

        </div>

        <hr>

        <?php include 'footer.php';?>
    </body>
</html>
