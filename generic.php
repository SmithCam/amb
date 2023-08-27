<!DOCTYPE HTML>
<html>
	<head>
		<title>Banned Book</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/ambmain.css" />
		
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" type="image/x-icon" href="images/bookmark.svg">
	</head>
	<body class="is-preload">
		<?php
		include 'db.php';
		$wheres = [];

		if(isset($_GET['style']))
		{
			$style = $_GET['style'];
		}

		if(isset($_GET['title']))
		{
			$title = $_GET['title'];
			//echo($title);
		}
		else
		{
			$title = 'Gender Queer: A Memoir';
		}

		if(isset($_GET['state']))
		{
			$state = $_GET['state'];
			//echo($state);
		}
		else
		{
			$state = 'Texas';
		}
		$wheres[] = " WHERE title = '$title' AND state = '$state'";
		$wheres = implode($wheres);
		$result = $conn -> query("SELECT *, RIGHT(bandate, 4) year FROM amb $wheres ORDER BY (SELECT RIGHT(bandate, 4)) desc");
		?>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
							<div class="logo">
								<a href="index.php" class="logo <?php echo($style) ?>">
									<h3>AMB
								</a>
								 &emsp;|&emsp; 
								<a href="about.php" class="logo <?php echo($style) ?>">
									About
								</a>
								 &emsp;|&emsp; 
								 <a href="stopthebans.php" class="logo <?php echo($style) ?>">
									Stop the Bans
								</a>
							</div>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a class="<?php echo($style) ?>" href="#menu">AMB</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>AMB</h2>
						<ul>
							<li><a class="<?php echo($style) ?>" href="index.php">Home</a></li>
							<li><a class="<?php echo($style) ?>" href="about.php">About</a></li>
							<li><a class="<?php echo($style) ?>" href="stopthebans.php">Stop the Bans</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<hr class="<?php echo($style) ?>">
							<?php $row = $result -> fetch_array(MYSQLI_ASSOC)?>
							<h1><?php echo $row['title'] ?></h1>
							<h3><?php echo $row['author'] ?></h3>
							<div class="middlepic">
								<img class = 'leftsidepic' src="images/cover/<?php echo $row['cover'] ?>" alt="" />
							</div>

							<div class ="top">

								<div class="postwords">
									<p><?php echo $row['description'] ?></p>
								</div>

								<div class="postwords buttons">
									<a href="https://www.thriftbooks.com/browse/?b.search=<?php echo($title) ?>" target="_blank"><button class="<?php echo($style) ?>">Thriftbooks</button>
									<a href="https://bookshop.org/search?keywords=<?php echo($title) ?>" target="_blank"><button class="<?php echo($style) ?>">Bookshop</button>
									<a href="https://www.betterworldbooks.com/search/results?q=<?php echo($title) ?>" target="_blank"><button class="<?php echo($style) ?>">BetterWorld</button>
									<a href="https://www.amazon.com/s?k=<?php echo($title) ?>" target="_blank"><button class="<?php echo($style) ?>">Amazon</button></a>
								</div>  
							</div> 

							<hr class="<?php echo($style) ?>">

							<div class = "bottom">
								<div class="postwordsdates">
									<h4 class = 'dateheader'><?php echo $row['state'] ?> Bans</h4>
									<p>
									<?php do{ ?>
									<?php echo $row['year'] ?>: <?php echo $row['type'] ?> by <a class="<?php echo($style) ?> dottedbottomborder" href="https://www.google.com/search?q=<?php echo($row['district']) ?>&aqs=chrome..69i57j69i59l2j0i271l2j69i60l3.5743j0j7&sourceid=chrome&ie=UTF-8" target="_blank"><?php echo $row['district'] ?></a>
									<br>
									<?php } while($row = $result -> fetch_array(MYSQLI_ASSOC)); ?>
								</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Footer -->
				<footer id="footer" class="<?php echo($style) ?>">
					<div class="inner">
						<section>
							<h2>Follow</h2>
								<ul class="icons">
									<li><a href="https://twitter.com/CoverBookBlog" target ="_blank" class="icon brands socials <?php echo($style) ?> fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/profile.php?id=100091131233358" target ="_blank" class="icon brands socials <?php echo($style) ?> fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/thecoverbookblog/" target ="_blank" class="icon brands socials <?php echo($style) ?> fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://www.goodreads.com/user/show/164303409-the-cover-blog" target ="_blank" class="icon brands socials <?php echo($style) ?> fa-goodreads-g"><span class="label">LinkedIn</span></a></li>
								</ul>
						</section>
						<ul class="copyright">
							<li>AMB</li><li>Cameron Smith</li><li>2023</li>
						</ul>
					</div>
				</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>