<html>
  <head>
    <?php include 'header.php';?>
    <title>rethy.xyz Website Theme - rethy.xyz</title>
  </head>

  <body>
    <div class="main">
      <h1>rethy.xyz Website Theme</h1>
<p> <b> <small>Created: 2021-02-24 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small> </b> </p> <hr>

<p>This design is purposeful. I care little about modern day Internet aesthetics. I enforce pure functional in all, especially concerning computing. I will enforce optimality, even if no one else will. That includes this website.</p>

<p>This website has good design, mainly focused around these principle design choices:
<ul>
<li><b>Contrasting colors</b>: <font color=red>R</font> <font color=green>G</font> <font color=blue>B</font> for headers (I only use <font color=red>h1</font>, <font color=green>h2</font>, and <font color=blue>h3</font>). It's a mnemonic that shows you to see the h1 - h3 hierarchy, in-case it wasn't apparent already.</li>
<li><b>Easy to read font:</b> Default font. No enforcement. Comprehensible. Not anti-aliased to oblivion and back. Compatible with all devices. Easy to render.</li>
<li><b>Back buttons on each page (aside from article pages)</b>: Makes navigation to and fro simple, even if you're computer illiterate.</li>
<li><b>Just HTML and CSS (and a small amount of PHP)</b>: No Javascript, or Perl.</li>
<li><b>No ads</b>: No ads will every be deployed on this site, nor or at any of my other (personal) websites.</li>
<li><b>Cross compatible</b>: This site should still look good on a Blackberry Curve 9360, a PC running Internet Explorer, a PS3, etc...</li>
</ul>
</p>

<section>
<p><b>2021-06-12</b></p>
<p>As of now, PHP is used <b>only</b> for its include statements. As PHP is a server side language, no performance hit should come of this to any end users.</p>
</section>

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
