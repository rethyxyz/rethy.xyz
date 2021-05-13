<html>
<head>
	<?php include 'header.php';?>
<title>rethy.xyz Website Theme - rethy.xyz</title>
</head>

<body>
<div class="main">
<h1>rethy.xyz Website Theme</h1>
<p> <b> <small>Created: 2021-02-24 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small> </b> </p> <hr>

<p>My website design is very purposeful. I care very little about aesthetics. I try to be purely functional in everything, especially concerning computing. I must enforce optimality, even if no one else does. That includes my website.</p>

<p>I believe this website has good design, mainly because it's focused around these design choices:
<ul>
<li><b>Contrasting colors</b>: <del><font color=red>R</font> <font color=green>G</font> <font color=blue>B</font> for headers (I only use <font color=red>h1</font>, <font color=green>h2</font>, and <font color=blue>h3</font>). It's a sort of mnemonic that allows you to see the hierarchy in case it isn't apparent to you already. Bold is colored in <font color=orange>orange</font>, as you can see.</del> Now just green. I found that the colors felt too aggressive on the eyes when reading for a long time.</li> 
<li><b>Easy to read font:</b> Comprehensible. Not anti-aliased to oblivion and back. Compatible with all devices. Easy to render.</li>
<li><b>Back buttons on each page (aside from article pages)</b>: This makes navigation to and fro easy and simple, even if you're computer illiterate.</li>
<li><b>Just HTML and CSS</b>: No PHP, Javascript, or Perl. Everything is completely static.</li>
<li><b>No ads, no cookies, no trackers</b>: No spying will every be done on this website, or any of my websites.</li>
<li><b>Cross compatible</b>: This site should still look good on a Blackberry Curve 9360, a PC running Internet Explorer, a PS3, etc...</li>
</ul>
</p>

<hr>

<p>
See also:
<ul>
	<li><a href="taking_notes_in_html.php">Taking Notes in HTML</a></li>
</ul>
</p>

</div> <hr>

		<?php include 'footer.php';?>
	</body>
</html>
