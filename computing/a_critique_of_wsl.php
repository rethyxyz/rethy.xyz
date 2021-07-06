<html>
<head>
<?php include 'header.php';?>
<title>A Critique of WSL - rethy.xyz</title>
</head>

<body>
<div class="back_button"> <a href="index.php">Go to 💻 Computing 💻 index</a> </div>

<div class="main">
<h1>A Critique of WSL</h1>
<p><b><small>Created: 2021-06-14 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></b></p> <hr>

<p>I started messing around with WSL v2 on the newest Windows 10 version. The move, was to recreate my Arch Linux terminal environment inside. I easily converted my scripts to work with Windows using a single $WIN_HOME variable holding my Windows home directory. This was placed in my ~/.bash_profile. That worked fine. I installed vim and vim-plug alongside my <code>.vimrc</code>. I used Windows Terminal in unison with vim. That worked fine. The latency was bearable, unlike PowerShell. I started running the scripts. That worked fine, but I quickly noticed the heavy WSL performance hit occurring while running these simple Bash and Python scripts...</p>

<p>The script first up was my recipe scraper for a website I'm working on. It's called <a href="https://ezrecipe.xyz">ezrecipe.xyz</a>, and is meant to be the biggest recipe repository in the world. Ambitious, I know, seeing as it isn't even complete yet. But, it's not as difficult as you may think, thanks to the script. I was going to write it in POSIX Shell, but thanks to the recipe-scrapers module created by hhursev, I didn't have to write any XML or JS parsers. I could import the modules and go. That's what I did. All that was needed, was to automate the scraping by having it go through a list of websites fed to the script through an internal list. Thankfully, the creator put a list of website that the module supports by default, so they were easy to find. This made my job really easy. I copied the websites that held recipe IDs in their URLs, and made the script increment it until, say, 500000 or so. After it hits that number, the while loop breaks, and the next URL is taken in as the new incremented website. The number is set to 0, and the scraper goes on... 1, 2, 3, 4, and so on until 500000 is achieved again.</p>

<p>The issue came about on Windows. On Linux: No issues. The script did what it was supposed to, and ran at a normal speed, mostly being dependent on my web connection, as the script does nothing hardware intensive. On Windows, though, it was a whole different story. It was around 10 times slower than on Linux, and pruned by apparent hardware performance. Very odd. I searched this issue, and concluded that WSL is simply slow. The reason being, is it being emulated by VMware, Virtualbox, or Hyper-V. Either way, these are slow emulation platforms, and mostly explains why my software performanced the way it did.</p>

<p>This, unfortunately, is a deal breaker. It makes WSL mostly useless to me, as it's so slow there's no point in using it, and will make this process 10 times slower than on native Linux. I guess I'll have to put up with it until I go back to Arch, which will definitely be soon.</p>

</div> <hr>

<?php include 'footer.php';?>
</body>
</html>
