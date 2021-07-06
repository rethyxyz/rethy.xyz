<html>
<head>
<?php include 'header.php';?>
<title>Making Windows 7 Safe in 2021 - rethy.xyz</title>
</head>

<body>
<div class="back_button"> <a href="index.php">Go to 💻 Computing 💻 index</a> </div>

<div class="main">
<h1>Making Windows 7 Safe in 2021</h1>
<p> <b> <small>Created: 2021-03-22 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small> </b> </p> <hr>

<p><font color=red>Note</font>: I do not know if some of the things in this tutorial are illegal, as I'm totally ignorant to this topic. So, please be aware, that by taking these steps, you are taking full responsibility for your actions, not me, because again, I'm blissfully ignorant to the topic at hand, and <b>TOTALLY</b> don't know what I'm doing. Let it be known, that this tutorial is without deep explanation. I'm assuming you're already familiar with Windows systems.</p> <br>

<p>I recently felt like playing some <a href="https://www.urbandictionary.com/define.php?term=vidya">vidya</a>, but didn't want to install Windows 10 because of its latency, bloat, and telemetry issues, and did not have my LTSC Flash Drive in my room. I didn't want to use Linux either, as I'd have to pollute my system with a billion dependencies and other shit created by PlayOnLinux and WINE. Windows 7 it was. I'm not saying that Linux is bad for gaming, it's just it isn't as supported as Linux, and that getting WINE and other trash to work is a big time hackjob. A mess to manage too.</p>

<p>How I get around the so-called "lack of updates", is that I spoof my Win 7 edition to look as if I'm an Enterprise user, being the only version still updated on the regular/at all. I'm able to do this because of some great tools I'll show off below.</p>


<h2>Steps</h2>
<p>
<font color=red>Note</font>: When I say restart, it's mandatory. You will not be able to move onto the next step until you restart where I say so.
<ol>
<li><b>Install Windows 7 and Network Drivers</b>: Install Windows 7, and your network drivers. If you can't do this by yourself, just install Windows 10 and call it a day.</li>
<li><b>Install pre-updates 1 (order specific)</b>:</li>
<ul>
<li><a href="http://download.windowsupdate.com/d/msdownload/update/software/updt/2016/02/windows6.1-kb3138612-x64_f7b1de8ea7cf8faf57b0138c4068d2e899e2b266.msu">http://download.windowsupdate.com/d/msdownload/update/software/updt/2016/02/windows6.1-kb3138612-x64_f7b1de8ea7cf8faf57b0138c4068d2e899e2b266.msu</a></li>
<li><a href="http://download.windowsupdate.com/c/msdownload/update/software/secu/2019/09/windows6.1-kb4474419-v3-x64_b5614c6cea5cb4e198717789633dca16308ef79c.msu">http://download.windowsupdate.com/c/msdownload/update/software/secu/2019/09/windows6.1-kb4474419-v3-x64_b5614c6cea5cb4e198717789633dca16308ef79c.msu</a></li>
<li><a href="http://download.windowsupdate.com/c/msdownload/update/software/secu/2019/03/windows6.1-kb4490628-x64_d3de52d6987f7c8bdc2c015dca69eac96047c76e.msu">http://download.windowsupdate.com/c/msdownload/update/software/secu/2019/03/windows6.1-kb4490628-x64_d3de52d6987f7c8bdc2c015dca69eac96047c76e.msu</a></li>
</ul>
<li><b>Restart your computer</b></li>
<li><b>Install pre-updates 2 (order specific)</b>:</li>
<ul>
<li><a href="http://download.windowsupdate.com/c/msdownload/update/software/secu/2020/04/windows6.1-kb4555449-x64_92202202c3dee2f713f67adf6622851b998c6780.msu">http://download.windowsupdate.com/c/msdownload/update/software/secu/2020/04/windows6.1-kb4555449-x64_92202202c3dee2f713f67adf6622851b998c6780.msu</a></li>
<li><a href="http://download.windowsupdate.com/d/msdownload/update/software/secu/2020/07/windows6.1-kb4575903-x64_b4d5cf045a03034201ff108c2802fa6ac79459a1.msu">http://download.windowsupdate.com/d/msdownload/update/software/secu/2020/07/windows6.1-kb4575903-x64_b4d5cf045a03034201ff108c2802fa6ac79459a1.msu</a></li>
</ul>
<li><b>Restart your computer</b></li>
<li><b>Activate Windows 7</b>: Use a license key. This is the legal thing, and right thing to do. I don't know of any other ways, but if I were to think that there would be a good github account from an experienced Windows based programmer, I'd think it could be this one. ;) <a href="https://github.com/abbodi1406/KMS_VL_ALL_AIO/releases">https://github.com/abbodi1406/KMS_VL_ALL_AIO/releases</a>.</li>
<li><b>Restart your computer</b></li>
<li><b>Install BypassESU</b>: This is the tool used to enable Windows updates</li>
<ul>
<li><b>Download</b>: <a href="https://gitlab.com/stdout12/adns/uploads/b5ad06702413b6bf6b1d5a1db8b086d4/BypassESU-v11.7z">https://gitlab.com/stdout12/adns/uploads/b5ad06702413b6bf6b1d5a1db8b086d4/BypassESU-v11.7z</a></li>
<li><b>Extract</b>: BypassESU-v11.7z</li>
<li><b>Run</b>: Run the file found in BypassESU-v11.7z called LiveOS-Setup.cmd (needs admin priv.). Press 1 to install.</li>
</ul>
<li><b>Install Post-Updates</b>: Open Control Panel, open Windows Updates, and choose Check for updates. You are now able to install Windows Updates. This will take quite a while.</li>
</ol>
</p>

<p>After this, you're free to install graphics drivers, programs, whatever. Your system is now "safe". You may also want to disable telemetry, which I'll link to whenever I find the link again... Make sure not to disable any of the Windows Update services if you're messing with that.</p>

</div> <hr>

<?php include 'footer.php';?>
</body>
</html>
