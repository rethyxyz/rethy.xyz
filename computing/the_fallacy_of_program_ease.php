<html>
	<head>
		<?php include 'header.php';?>
		<title>The Fallacy of Program Ease - rethy.xyz</title>
	</head>

	<body>
		<div class="main">
			<h1>The Fallacy of Program Ease</h1>
			<p><b><small>Created: 2021-04-17 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p>

			<hr>

			<p>Computer people know the notion that some of us want something that "just werkz", and usually that means either an operating system like Windows or Mac OS, or another program like VSCode or App Stores. This is a false notion.</p>
			<p>Windows is great to jump into. You don't need preparation. It's easy, understandable, simplistic, plain in aesthetic, and thematically similar to real life objects. It isn't just weird text like those Unix systems. You can immediately understand what is happening on the screen if you spend time reading whatever it may be.</p>
			<p>This is great at the start. You can easily start working right away. No time spent on optimization. It's play and play, so to speak. Download your IDE of choice and get at 'er.</p>
			<p>This "just werkz" mentality is coated in diminishing returns. It's a trade off. You're trading initial setup time for future production speed/the time you need to work on something. You are at the will of the software manufacturers to make something that makes the most sense to your, though it never will, as they need to appeal to the lowest common denominator. Your Windows system is made for illiterate babies, and technologically illiterate Grandmas...</p>
			<p>If you install something from scratch, something that's truly simple (such as *nix + a window manager (WM)), and understand how to use it, something that's meant to be fast, not dumbed down for the masses: You will work faster, and more effectively, in the long run. You will not lose time, as you're trading your time now, for less time wasted later.</p>
			<p>Look at programmers nowadays: Mac OS. This seems to be the dominating OS among FANG types. Very many of them spend time writting code in bloated IDEs that have insane keybindings completely without mnemonic, making it hard to build up muscle memory or guess what it may be. They use such programs as it is easy to get into. You have a side bar with buttons like project, addons, search, etc. There's a nice menu bar with everything you would never need that you can click on or attempt to invoke using <b>Ctrl+k</b> + <b>v</b> or some other weird shit like that. Clicking stuff doesn't equal a good workflow, as you're never committing it in your memory as you would with physical keyboard based bindings. If you spend real time learning an effective tool (like vim), you will save an astonishing amount of time in the future.</p>
			<p>So, stop taking shortcuts in your computer life, and go right to the source! Understand what you're doing. Don't be at the will of these evil software manufacturers.</p>
			<p>Here's a real world example of how hard it is to learn computers when you put in the effort: My brother. Starting last month, he decided to start learning Linux with no prior experience. He decided on buying a used ThinkPad X220 (at around $180 CAD), and jump in right away. He said that he wanted to understand effective computing, as it obviously would be something important going into the future, and a good skill to have in general (all learning is good learning!). Him, being a recent college graduate from a Forestry type of program, had not long ago been introduced to the wonders of effective technological appliance through Excel formulas. He was able to process vast amounts of data from somewhat-simple mathematical formulas, and in such short time. He could see that doing this by hand instead would be ridiculous and redundant. As he knew from our conversations, I was a proponent of the wonders of plaintext data processing, not using proprietary file formats for backwards compatibility, and pro typesetting compilers (LaTeX and groff/troff). He was able to see the potential too.</p>
			<p>Getting back to the point... He got his computer after a few weeks of transit, and I aided him in installing Arch Linux. You may think this is a dumb idea, as Arch is notorious for being a "hard" distro, mainly because of its lack of installer, but I don't think that's right. You should learn the hard way immediately than have to undo even more computer usage sins, such as hackjobs, and software trickery conducted by WYSIWYG software. After the install, he was set. I installed my build of dwm, and taught him the basics of window movement, spawning, workspaces, pacman, etc. I demonstrated dmenu usage, terminal spawning, and command execution. Finally, I told him to learn vim tutor, and to watch Luke Smith's Bash tutorials (and anything else by Smith that he found interesting (no information is bad information when you're learning computing!)). Of course, he ran into a few snags that he said he spent hours on, but because he was able to come to me when really stuck in a hole, I was able to show him the fix. Things for him started to click after a few days of use, and he really was able to understand it all after a week. One week. That's it. The most important part of Linux is using your browser. If you have an error, search it up. Someone is bound to have ran into the same error as you at some point in time. It isn't the operating system that's difficult, it's unlearning the years of fake computer that's difficult.</p>
		</div>

		<hr>

		<?php include 'footer.php';?>
	</body>
</html>
