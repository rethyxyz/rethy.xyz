<html>
<head>
<?php include 'header.php';?>
<title>The Unix Hater's Handbook Overview - rethy.xyz</title>
</head>

<body>
<div class="back_button"> <a href="index.php">Go to 💻 Computing 💻 index</a> </div>

<div class="main">
<h1>The Unix Hater's Handbook Overview</h1>
<p><small><b>Created: 2021-01-26 | Modified : <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></b></small></p>

<hr>

<p>
    <center>
        <img src="https://upload.wikimedia.org/wikipedia/en/7/77/UNIX-HATERS_Handbook_cover_ISBN_1-56884-203-1.png" /> <br> <br>
        <small><b>Sorry, I couldn't find a higher-res image. Taken from <a href="https://en.wikipedia.org/wiki/The_UNIX-HATERS_Handbook">here</a>.</b></small>
    </center>
</p>

<p>I recently read <i>The Unix Hater's Handbook</i>, which is a (not so) lighthearted take on the bad parts of Unix, or at least, from their narrow-minded (and biased) viewpoint. Overall, they've brought some good points, but none convince me that Unix is bad. Most points are either outdated, been patched/added, or simply dumb.</p>

<p>Their main dislikes:
<ul>
<li>Inconsistencies in program naming</li>
<ul>
<li>head and tail</li>
<li>rm, cat, sed = bad because vague</li>
</ul>

<li>No command safety nets</li>
<ul>
<li>No real warnings before removing entire files/directories</li>
<li>"<code>rm -r</code> is very easy to hit accidentally... Could delete everything recursively"</li>
<ul>
<li><code>rm *.o - rm *&gt;o</code></li>
</ul>
</ul>
<li>No recycle bin (<a href="https://github.com/rethyxyz/rb">I solved this problem</a>)</li>
<li><code>man</code> is a ban manual</li>
<li>Too much reliance on user scripting</li>
<li>Unix is just Baby duck syndrome</li>
<li><i>"For Programmers, Not Users"</i></li>
<li>C++</li>
</ul>

Instead of summarizing chapter to chapter, I'll talk about the larger points.</p>

<h2>Inconsistencies in Similar Programs</h2>
<p><code>head</code>, and <code>tail</code>. Two programs which do similar things. <code>head</code> shows the top (head) of the document, while <code>tail</code> shows the bottom (tail). The issue, is that the two programs, while being similar, take a completely different set of options. Each should take similar ones to remain consistent. This is a fair criticism. I'll say, this is a fair criticism.</p>

<h2>No Command Safety Nets</h2>
<p>
    <center>
        <img src="files/rm_hell.png" /><br><br>
        <small><b>Book example 1</b></small>
    </center>
</p>

<p>I can't say I've ever done this, but I can definitely see how easy it could be. Quite scary, really (my <a href="https://github.com/rethyxyz/rb">rb script</a> defends against this).</p>

<p>
    <center>
        <img src="files/rm_all.png" /> <br><br>
        <small><b>Book example 2</b></small>
    </center>
</p>

<p>This can be fixed by amending rm to prompt y/n if you want to delete the file/dir. Either put it into a script, or write an alias.</p>

<h2>No Recycle Bin</h2>
<p>This is an issue. It's one of the things I wish would be implemented natively into Unix instead of having DE/WM specific variants. That being said, it isn't hard to implement yourself. Well, not natively, but a hacky but stable script is possible. You need to either create a script or an alias that amends <code>rm</code> to move the file to your trash directory instead of destroying it. This would be similar to the purge/remove trash system on Windows.</p>

<section>
<small><b>2021-03-03</b></small>

<p>I took the challenge and made my own take on the recycle bin for Linux called rb. You can go to <a href="https://github.com/rethyxyz/rb/">https://github.com/rethyxyz/rb/</a>. The base scripting took 1 hour.</p>
</section>

<section>
<b><small>2021-06-27</small></b>
<p>At this point, I use my script to interact with many programs, totally flawlessly. It's safe to say it was a good time investement.</p>
</section>


<h2>man Sucks</h2>
<p>The authors say <code>man</code> files suck because 1) they're hard to use, 2) are found in too many different dirs, and 3) are too minimal to be considered a manual. The last one is especially true. The issue really comes down to a naming problem: <code>man</code> is short for manual, when it was/is not meant to be one. <code>man</code> is an index of all flags/options you can use in a program. These flags include small explanations with each. So, their problem is that they think it's a manual, when it isn't. I'm sure they know the difference, they were just trying to be clever. If they weren't trying to write meet a word count, they would have included it in the <b>Inconsistencies in Similar Programs</b> section, where it belongs.</p>

<h2>User Scripting</h2>
<p>They say that user scripting is forced upon the user, without choice. Agreed. They say this should be unnecessary. Disagreed.</p>

<p>Personally, I enjoy the scripting. I find that by scripting, I'm able to understand and manipulate the computer to do what I want. I understand that some dislike the control. This is why we have systems that dumb down the UX. Those are for you, not Linux, and that's alright.</p>

<p>In my mind, I should always be using the best tools for job. That's why I create my own scripts. Sometimes, the best way to get the job done is to use multiple tools. There's no point in doing everything by hand by using trash GUIs, having to switch programs each time I want to do a new action. It isn't optimal. I'd rather subvert to the command line and automate the use. Upon completion, when I'm done doing whatever job/task, I'll save the script so I won't every have to think about doing it again. All I'll need to do is run the script and get the job done; No thought. Good luck trying to that on a GUI. This is why user scripting isn't an issue. It enhances the user experience.</p>

<h2>Baby Duck Syndrome</h2>
<p><i>"Unix is only "good" because we don't have any alternatives; It's all we know"</i>. That's baby duck syndrome. This is how I've seen old school Unix haters counter people that love Unix. Unfortunately, I can't say if this is right or wrong because they're right: The alternatives to Unix do suck (Windows), and there isn't a lot out there.</p>

<h2><i>"For Programmers, Not Users"</i></h2>
<p>True. At its core, Unix's for pro computer users, like sysadmins, programmers, IT people, or whatever. More recently with Linux, Unix is being molded into a pruned version for the sake of "user friendlyness". By turning Linux into something that it isn't, you make it easier to do "basic tasks" (point and click file management, static theming, point and click programs...) but make it harder to administrate and manage. Dumbing things down because people don't want to learn something efficient is a bad practice. People say that they don't want to learn because it takes too much time, or it's a waste. If only they'd put in the time to learn the thing properly. They'd actually spend less time doing the task in the long run, hence, saving time, something they claim to want to do so badly...</p>

<h2>C++ Sucks</h2>
<p>This is true. I don't program in C++ because I think it's bad, so I wholeheartedly agree. Object oriented programming is bad and gets convoluted quickly. Use straight C.</p>
</div>

<hr>

<?php include 'footer.php';?>
</body>
</html>
