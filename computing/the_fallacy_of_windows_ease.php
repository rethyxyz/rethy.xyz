<html>
	<head>
		<?php include 'header.php';?>
		<title>The Fallacy of Program Ease - rethy.xyz</title>
	</head>

	<body>
		<div class="main">
			<h1>The Fallacy of Program Ease</h1>
			<p><b><small>Created: <++> | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p>

			<p>Computer people know the notion that some people want something that "just werkz", and usually that means either an operating system like Windows or Mac OS, or another program like VSCode or App. Stores. This is a false notion.</p>

			<p>Windows is great to jump into. You don't need preparation. It's easy, understandable, simplistic, plain in aesthetic, and thematically similar to real life objects. It isn't just weird text like those Unix systems.</p>

			<p>This is great at the start. You can easy start working. No time spent on optimization. Play and play, so to speak. Download your IDE of choice and get at 'er.</p>

			<p>This "just werkz" mentality is coated in diminishing returns. It's a trade off. You're trading initial setup time for future production speed/the time you need to work on something.</p>

			<p>If you install something from scratch, something that's truly simple (such as *nix + a window manager (WM)), and understand how to use it, something that's meant to be fast, not dumbed down for the masses, you will work fast. You will not lose time, as you're trading your time now, for less time wasted later.</p>

			<p>Look at programmers nowadays: Mac OS. This seems to be the dominating OS among FANG types. Very many of them spend time writting code in bloated IDEs that have insane keybindings completely without mnemonic, making it hard to build up muscle memory or guess what it may be. They use such programs as it is easy to get into. You have a side bar with buttons like project, addons, search, etc. There's a nice menu bar with everything you would never need that you can click on or attempt to invoke using <b>Ctrl+k</b> + <b>v</b> or some other weird shit like that. Clicking stuff doesn't equal a good workflow, as you're never committing it in your memory as you would with physical keyboard based bindings. If you spend real time learning an effective tool (like vim), you will save an astonishing amount of time in the future.</p>
		</div>

		<hr>

		<?php include 'footer.php';?>
	</body>
</html>
