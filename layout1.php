<!doctype html>
<html>
	<head>
		<title><?php
			echo $title;
		?></title>
		<link rel="stylesheet" href="uon.css" />
	</head>

	<body>
		<header>
			<img src="logo.jpg" alt="logo" />
			<ul>
				<li>Year 1
					<ul>
						<li><a href="csy1014.php">CSY1014 Computer Systems</a></li>
						<li><a href="csy1017.php">CSY1017 Computer Communications</a></li>
						<li><a href="csy1018.php">CSY1018 Internet Technology</a></li>
						<li><a href="csy1019.php">CSY1019 Software Engineering 1</a></li>
						<li><a href="csy1026.php">CSY1026 Databases 1</a></li>
					</ul>
				</li>
				<li>Year 2
					<ul>
						<li><a href="csy2001.html">CSY2001 Computer Networks</a></li>
						<li><a href="csy2002.html">CSY2002 Operating Systems</a></li>
						<li><a href="csy2006.html">CSY2006 Software Engineering 2</a></li>
						<li><a href="csy2027.html">CSY2027 Group Project</a></li>
						<li><a href="csy2028.html">CSY2028 Web Programming</a></li>
						<li><a href="csy1026.php">CSY1026 Databases 1</a></li>
					</ul>
				</li>

				</li>
				<li>Year 3

					<ul>
						<li><a href="csy3010.html">CSY3010 Media Technology</a></li>
						<li><a href="csy3013.html">CSY3013 Software Engineering 3</a></li>
						<li><a href="csy3015.html">CSY3015 Real Time and and Embedded Systems</a></li>
						<li><a href="csy4010.html">CSY4010 Computing dissertation</a></li>
						<li><a href="csy2028.html">CSY2028 Web Programming</a></li>
						<li><a href="csy1026.php">CSY1026 Databases 1</a></li>
					</ul>
				</li>
			</ul>
		</header>
		<section></section>
		<main>
            <?php
                echo $content;
            ?>
<?php
    require 'foot1.php';
?>
