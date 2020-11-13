<!DOCTYPE html>
<html>
	<head>
		<?php include "header.php";?>
		<title>Moses - rethy.xyz</title>
	</head>

	<body>
        <div class="main">
            <div class="menu">
				<?php include "menu.php";?>
                <br />
            </div>

			<h1><a href="https://github.com/rethyxyz/Moses">Moses</a></h1>


			<h2>What Is Moses?</h2>
			<p>A high-level DDoS (Distributed Denial-of-Service) botnet utility written for research purposes. </p>

			<p>
				<img src="files/moses_source_code.png" height="400" alt="Moses source code"/>
				<br />
				<small>Moses source code</small> 
				<br />
				<small>You can download Moses <a href="https://github.com/rethyxyz/Moses/archive/master.zip">here</a></small>
			</p>

			<h2>How Does Moses Work?</h2>
			<p>
				<ul>
					<li>The <b>Moses</b> program is initialized and placed into an infinite <a href="https://en.wikipedia.org/wiki/While_loop">While</a> loop</li>
					<ul>
						<li><b>Moses</b> ingests URL/tar{1,2,3}.html web pages as variables named web_content_{1,2,3}</li>
						<li><b>Moses</b> checks if the first variable (web_content_1) contains the command "DDoS"</li>
						<ul>
							<li>If it's found, the start_ddos_attack() function is called while taking the second variable (web_content_2) as the first argument for the destination IP address, and the second (web_content_3) for the DDoS attack end time in 24-hour time format</li>
						</ul>
						<li><b>Moses</b> sleeps for six seconds</li>
						<li>The loop starts again</li>
					</ul>
				</ul>
			</p>

			<h2>Operation</h2>
			<p>Each <b>Moses</b> instance is operated globally and is accomplished using a <b>remote_control</b> file (bash and Python versions). The file is used to append commands to your web server using SSH. </p>

			<h2>Features</h2>
			<p>
				<ul>
					<li>Each <b>Moses</b> zombie instance is operated indirectly through the use of a web server as an intermediary device</li>
					<ul>
						<li>This enforces a layer of anonymity through ensuring there's no direct connection with the CnC server</li>
					</ul>
				</ul>
			</p>
			
			<h2>Legal Disclaimer</h2>
			<p>All tools provided by this project are for research and study purposes only. You must obey the laws and regulations of your country during use. I will not be held responsible for any misuse that may arise during the usage of this project.</p>

            <div class="footer">
				<br />
				<?php include "footer.php";?>
            </div>
        </div>
	</body>
</html>
