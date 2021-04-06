<html>
	<head>
		<?php include 'header.php';?>
		<title>The Unix Hater's Handbook Overview - rethy.xyz</title>
	</head>

	<body>
		<div class="main">
			<h1>The Unix Hater's Handbook Overview</h1>
			<p><small><b>Created: 2021-01-26 | Modified : <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></b></small></p>

			<hr>

			<p>
			<center>
				<img src="https://upload.wikimedia.org/wikipedia/en/7/77/UNIX-HATERS_Handbook_cover_ISBN_1-56884-203-1.png" /> <br> <br>
				<small><b>Sorry, I couldn't find a higher-res image. Taken from <a href="https://en.wikipedia.org/wiki/The_UNIX-HATERS_Handbook">here</a>.</b></small>
			</center>
			</p> <br>

			<p>I recently read <i>The Unix Hater's Handbook</i>, which is a lighthearted take on the bad parts of Unix, or at least, the bad parts in their view. Overall, they have some good points, but they didn't convince me that Unix was bad.</p>

			<p>Their main dislikes:
				<ul>
					<li>Inconsistencies in program naming</li>
						<ul>
							<li>head and tail</li>
							<li>rm = bad because vague</li>
						</ul>

					<li>No command safety nets</li>
						<ul>
							<li>No real warnings before removing entire files/dirs</li>
							<li>"<code>rm -r</code> is very easy to hit accidentally... Could delete everything recursively"</li>
							<ul>
								<li><code>rm *.o - rm *&gt;o</code></li>
							</ul>
						</ul>
					<li>No recycle bin</li>
					<li><code>man</code></li>
					<li>Too much user scripting</li>
					<li>Baby duck syndrome</li>
					<li><i>"For Programmers, Not Users"</i></li>
					<li>C++</li>
				</ul>
			Instead of going chapter to chapter and summarizing, I'll talk about some of their larger main points.<br><br>
			<font_red>NOTE</font_red>: When I use the word Unix, I'm refering to Unix based operating systems as well, such as Linux.</p>

			<h2>Inconsistencies in Similar Programs</h2>
			<p><code>head</code>, and <code>tail</code>. Two programs which do similar things. <code>head</code> shows the top of a document, <code>tail</code> shows the bottom. The issue, is that the two programs, while being similar, take totally different options. They should be taking similar ones to remain consistent. This is a fair criticism.</p>

			<h2>No Command Safety Nets</h2>
			<p>
			<center>
				<img src="files/rm_hell.png" /><br><br>
				<small><b>This is an example from the book</b></small>
			</center>
			</p> <br>

			<p>
			I can't say I've ever done this, but I can definitely see how easy it could. Quite scary, really.<br><br>
			</p><br>

			<p>
			<center>
				<img src="files/rm_all.png" /> <br><br>
				<small><b>This too</b></small>
			</center>
			</p> <br>

			<p>
			This can be fixed by amending rm to prompt y/n if you want to delete the file/dir. Either put it into a script, or write an alias.
			</p>

			<h2>No Recycle Bin</h2>
			<p>This is an issue. It's one of the things I wish would be implemented natively into Unix instead of having DE/WM specific variants. That being said, it isn't too hard to implement yourself. All you need to do is either create a script or an alias that amends rm to move the file to your trash directory instead of deleting it. This would be similar to the purge/remove trash system.</p>

			<section>
			<small><b>2020-03-03</b></small>

			<p>I made my own take on the recycle bin for Linux called rethyxyz-recycle-bin. You can go to <a href="https://github.com/rethyxyz/recycle-bin/">https://github.com/rethyxyz/rethyxyz-recycle-bin/</a>. The base scripting only took approximately 1 hour.</p>
			</section>


			<h2>man Sucks</h2>
			<p>The authors say that man files suck because 1) they're hard to use, 2) are found in too many different dirs, and 3) are too minimal to be considered a manual. The last one is especially true. The issue really comes down to a naming problem: man is short for manual, when it was/is not manual. man is just an index of the flags/options you can use in a program. These flags include small explanations for each. Their problem is that they think it's a manual, when it isn't.</p>

			<h2>User Scripting</h2>
			<p>They say that user scripting is something that is forced upon the user without choice. I agree. They say that this is something that should be unnecessary to the user. I disagree. Personally, I enjoy scripting, and find that by scripting stuff myself, I am able to understand and manipulate my computer to do what I want. I do understand that some people enjoy being out of control of their computers by using systems that dumb down the UX. In my mind, I should always be using the best tools for job. That's why I create my own scripts. Sometimes, the best way to get the job done is to use multiple tools. There's no point in doing everything by hand by using trash GUIs and having to switch programs each time I want to do a new action. That's just not optimal. I'd rather use the command line and automate the use of multiple programs (tools). After I'm done doing whatever job/task, I'll save the script so I won't every have to think about doing it again. All I'll need to do is run the script and get the job done; No thought. This is why I think user scripting is not an issue, as it enhances the user experience.</p>

			<h2>Baby Duck Syndrome</h2>
			<p><i>"Unix is only "good" because we don't have any alternatives; It's all we know"</i>. That's baby duck syndrome. This is how they counter people saying Unix is the best. I can't say if this is right or wrong because the alternatives to Unix do suck (Windows, Mac OS X, Amiga...).</p>

			<h2><i>"For Programmers, Not Users"</i></h2>
			<p>This is true. At its core, Unix is for professional computer users, being sysadmins, programmers, IT people, etc. But, more recently with Linux, it is being molded into a pruned version for the sake of user friendlyness. By turning Linux into something that it isn't, you make it easier to do "basic tasks" (point and click file management, static theming, point and click programs, defaults programs...) but make it harder to do anything administratively and/or developmentally. Dumbing things down because people don't want to learn how to do something in the most efficient way is a bad practice. People say that they don't want to learn because it takes too much time. If only they'd put in the time to learn the thing properly. They'd actually spend less time doing the task in the long run, hence, saving time.</p>

			<h2>C++ Sucks</h2>
			<p>This is true. I don't program in C++ because I think it's bad, so I wholeheartedly agree.</p>

		</div>

		<hr>

		<?php include 'footer.php';?>
	</body>
</html>
