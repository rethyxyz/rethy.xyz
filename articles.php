<!DOCTYPE html>
<html>
	<head>
		<?php include "head.php"; ?>
		<title>Articles - Brody Rethy</title>
	</head>

	<body>
		<div class="menu">
			<?php include "menu.php"; ?>
		</div>

        <br>

		<div class="main">
			<h1>Articles</h1>
            <hr>
				<p>
					Each link below are articles I wrote ordered from newest to oldest.
					All of them are related to computing.
				</p>
                <hr>
				<p>
					More shall be added in the future.
				</p>
				<ol>
                    <li>
                        <?php
                            $directory = "https://rethy.xyz/articles/programming";
                            $filecount = 0;
                            $files = glob($directory . "*");
                            if ($files){
                             $filecount = count($files);
                            }
                            echo "<a href='https://rethy.xyz//article_pages/programming/index.php'>Programming</a> - $filecount articles";
                        ?>
                    </li>
				</ol>

        <br>

		</div>

        <br>
        
        <div class="footer">
			<?php include "footer.php"; ?>
        </div>
	</body>
</html>
