<!DOCTYPE HTML>
<html>
	<head>
		<title>America's Most Banned Books</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/ambmain.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" type="image/x-icon" href="images/bookmark.svg">
	</head>
	<body class="is-preload">
		<?php
		include 'db.php';

		if(isset($_GET['style']))
		{
			$style = $_GET['style'];
		}

		$wheres = [];
		if(isset($_GET['state']))
		{
			$state = $_GET['state'];
		}
		else
		{
			$state = 'texas';
		}
		$final[] = " AND cover != 'americanstreet.jpg'";
		$wheres[] = " WHERE state = '$state' AND cover != 'americanstreet.jpg'";
		$wheres = implode($wheres);

		$result = $conn -> query("SELECT *, count(title) c  FROM amb $wheres group by title order by c desc, bandate");
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
					<div id="maintiles">
						<div class="inner">
							<hr class="<?php echo($style) ?>">
							<header>
								<h1>Most Banned Books in <?php echo $state ?></h1>
								<h3>Time to Overturn</h3>
							</header>
							<section class="tiles">
								<?php while($row = $result -> fetch_array(MYSQLI_ASSOC)):?>
								<?php if(!is_null($row)): ?>
								<article class="style1">
									<span class="image">
										<img src="images/cover/<?php echo $row['cover'] ?>" alt="" />
									</span>
									<a href="generic.php?title=<?php echo $row['title'] ?>&state=<?php echo $row['state'] ?>&style=style1" class="<?php echo($style) ?>">
										<div class="texttexttext">
											<?php if($row['c'] != '1'): ?>
												<?php echo $row['c'] ?> Bans
											<?php else: ?>
												<?php echo $row['c'] ?> Ban
											<?php endif;?>
										</div>
										<div class="content">
										</div>
									</a>
								</article>
								<?php endif;?>

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC)?>
								<?php if(!is_null($row)): ?>
								<article class="style2">
									<span class="image">
										<img src="images/cover/<?php echo $row['cover'] ?>" alt="" />
									</span>
									<a href="generic.php?title=<?php echo $row['title'] ?>&state=<?php echo $row['state'] ?>&style=style2" class="<?php echo($style) ?>">
										<div class="texttexttext">
											<?php if($row['c'] != '1'): ?>
												<?php echo $row['c'] ?> Bans
											<?php else: ?>
												<?php echo $row['c'] ?> Ban
											<?php endif;?>
										</div>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<?php endif;?>

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC)?>
								<?php if(!is_null($row)): ?>
								<article class="style3">
									<span class="image">
										<img src="images/cover/<?php echo $row['cover'] ?>" alt="" />
									</span>
									<a href="generic.php?title=<?php echo $row['title'] ?>&state=<?php echo $row['state'] ?>&style=style3" class="<?php echo($style) ?>">
										<div class="texttexttext">
											<?php if($row['c'] != '1'): ?>
												<?php echo $row['c'] ?> Bans
											<?php else: ?>
												<?php echo $row['c'] ?> Ban
											<?php endif;?>
										</div>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<?php endif;?>

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC)?>
								<?php if(!is_null($row)): ?>
								<article class="style4">
									<span class="image">
										<img src="images/cover/<?php echo $row['cover'] ?>" alt="" />
									</span>
									<a href="generic.php?title=<?php echo $row['title'] ?>&state=<?php echo $row['state'] ?>&style=style4" class="<?php echo($style) ?>">
										<div class="texttexttext">
											<?php if($row['c'] != '1'): ?>
												<?php echo $row['c'] ?> Bans
											<?php else: ?>
												<?php echo $row['c'] ?> Ban
											<?php endif;?>
										</div>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<?php endif;?>

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC)?>
								<?php if(!is_null($row)): ?>
								<article class="style5">
									<span class="image">
										<img src="images/cover/<?php echo $row['cover'] ?>" alt="" />
									</span>
									<a href="generic.php?title=<?php echo $row['title'] ?>&state=<?php echo $row['state'] ?>&style=style5" class="<?php echo($style) ?>">
										<div class="texttexttext">
											<?php if($row['c'] != '1'): ?>
												<?php echo $row['c'] ?> Bans
											<?php else: ?>
												<?php echo $row['c'] ?> Ban
											<?php endif;?>
										</div>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<?php endif;?>

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC)?>
								<?php if(!is_null($row)): ?>
								<article class="style6">
									<span class="image">
										<img src="images/cover/<?php echo $row['cover'] ?>" alt="" />
									</span>
									<a href="generic.php?title=<?php echo $row['title'] ?>&state=<?php echo $row['state'] ?>&style=style6" class="<?php echo($style) ?>">
										<div class="texttexttext">
											<?php if($row['c'] != '1'): ?>
												<?php echo $row['c'] ?> Bans
											<?php else: ?>
												<?php echo $row['c'] ?> Ban
											<?php endif;?>
										</div>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<?php endif;?>

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC)?>
								<?php if(!is_null($row)): ?>
								<article class="style7">
									<span class="image">
										<img src="images/cover/<?php echo $row['cover'] ?>" alt="" />
									</span>
									<a href="generic.php?title=<?php echo $row['title'] ?>&state=<?php echo $row['state'] ?>&style=style7" class="<?php echo($style) ?>">
										<div class="texttexttext">
											<?php if($row['c'] != '1'): ?>
												<?php echo $row['c'] ?> Bans
											<?php else: ?>
												<?php echo $row['c'] ?> Ban
											<?php endif;?>
										</div>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<?php endif;?>

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC)?>
								<?php if(!is_null($row)): ?>
								<article class="style8">
									<span class="image">
										<img src="images/cover/<?php echo $row['cover'] ?>" alt="" />
									</span>
									<a href="generic.php?title=<?php echo $row['title'] ?>&state=<?php echo $row['state'] ?>&style=style8" class="<?php echo($style) ?>">
										<div class="texttexttext">
											<?php if($row['c'] != '1'): ?>
												<?php echo $row['c'] ?> Bans
											<?php else: ?>
												<?php echo $row['c'] ?> Ban
											<?php endif;?>
										</div>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<?php endif;?>

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC)?>
								<?php if(!is_null($row)): ?>
								<article class="style9">
									<span class="image">
										<img src="images/cover/<?php echo $row['cover'] ?>" alt="" />
									</span>
									<a href="generic.php?title=<?php echo $row['title'] ?>&state=<?php echo $row['state'] ?>&style=style9" class="<?php echo($style) ?>">
										<div class="texttexttext">
											<?php if($row['c'] != '1'): ?>
												<?php echo $row['c'] ?> Bans
											<?php else: ?>
												<?php echo $row['c'] ?> Ban
											<?php endif;?>
										</div>
										<div class="content">
											<p></p>
										</div>
									</a>
								</article>
								<?php endif;?>
								<?php endwhile;?>
							</section>
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