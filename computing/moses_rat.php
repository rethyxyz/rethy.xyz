<!DOCTYPE html>
<html>
    <head>
        <?php include 'header.php';?>
        <title>moses.rat - rethy.xyz</title>
    </head>

    <body>
        <div class="main">
            <h1>moses.rat</h1>
            <p><small>Created: 2021-01-26 | Modified: <?php $filename = basename($_SERVER['PHP_SELF']); echo date ("Y-m-d", filemtime($filename)); ?></small></p>

            <hr>

            <p>A modified version of moses, originally a botnet utility. Now, a somewhat tiny RAT targeting Windows systems.</p>

            <p>I decided to keep it small by limiting it to four command modules. After it's executed on a victim's machine, you can interact with it by appending commands to a public web server using the remote control file which uses SSH. The website you host is accessed by the virus instance, downloading three webpages containing commands or any other info it may need. After the pages are accessed, its information is quickly purged by the remote. The command is then carried out on the instance, which then becomes dormant again, waiting for the pages to change.</p>

            <p>As of now the commands are send in plaintext, but in the future I may implement some sort of symmetric encryption.</p>

            <p>
            <b>System modules</b>:
            <ul>
            <li>Self destruct</li>
            <li>Check platform</li>
            <li>Get web content</li>
            <li>Get current time</li>
            <li>Upload file to mega</li>
            <li>Get windows username</li>
            <li>Download file from mega</li>
            <li>Check if file exists in path</li>
            </ul>
            </p>

            <p>
            <b>Command modules</b>:
            <ul>
            <li>Take screenshot</li>
            <li>Execute command</li>
            <li>Get public IP address</li>
            <li>DDoS target web server</li>
            </ul>
            </p>

            <p>You can check out the source code <a href="https://github.com/rethyxyz/moses.rat">here</a>.</p>

            <h2>Legal Disclaimer</h2>
            <p>All tools provided by this project are for research and study purposes only. You must obey the laws and regulations of your country during use. I will not be held responsible for any misuse that may arise during the usage of this project.</p>

        </div>

        <hr>

        <?php include 'footer.php';?>
    </body>
</html>
