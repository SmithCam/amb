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
		$wheres = [];
		$region = 'region';
		if(isset($_GET['region']))
		{
			$region = $_GET['region'];
			$wheres[] = " WHERE region = '$region'";
		}
		$wheres = implode($wheres);

		$result = $conn -> query("SELECT id, title, cover, statecover, bandate, state, count(title) c FROM amb $wheres GROUP BY state order by c desc limit 50");
		?>


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
							<div class="logo">
								<a href="index.php" class="logo">
									<h3>AMB
								</a>
								 &emsp;|&emsp; 
								<a href="about.php" class="logo">
									About
								</a>
								 &emsp;|&emsp; 
								 <a href="stopthebans.php" class="logo">
									Stop the Bans
								</a>
							</div>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">AMB</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>AMB</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="stopthebans.php">Stop the Bans</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="maintiles">
						<div class="inner">
							<hr>
							<header>
								<h1>America's Most Banned Books</h1>
								<h3>(2021-2022)</h3>
								<h3>Time to Overturn</h3>
							</header>
							<div class="logo region">
								<a href="index.php?region=Northeast" class="logo">
									<h3>Northeast
								</a>
								 &emsp;|&emsp; 
								<a href="index.php?region=Southeast" class="logo">
									Southeast
								</a>
								 &emsp;|&emsp; 
								<a href="index.php?region=Midwest" class="logo">
									Midwest
								</a>
								&emsp;|&emsp; 
								<a href="index.php?region=Southwest" class="logo">
									Southwest
								</a>
								&emsp;|&emsp; 
								<a href="index.php?region=West" class="logo">
									West</h3>
								</a>
							</div>
							<section class="tiles">
								<?php while($row = $result -> fetch_array(MYSQLI_ASSOC)):?>
								<?php if(!is_null($row)): ?>
								<article class="style1">
									<span class="image">
										<img src="images/cover/<?php echo $row['statecover'] ?>" alt="" />
									</span>
									<a href="stateview.php?style=style1&state=<?php echo $row['state'] ?>">
										<div class="texttext">
											<?php echo $row['state'] ?><br>
											<?php if($row['c'] != '1'): ?>
												<?php echo $row['c'] ?> Bans
											<?php else: ?>
												<?php echo $row['c'] ?> Ban
											<?php endif;?>
										</div>
										<div class="content">
											<p>Learn More</p>
										</div>
									</a>
								</article>
								<?php endif;?>

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC) ?>
								<?php if(!is_null($row)): ?>
								<article class="style2">
									<span class="image">
										<img src="images/cover/<?php echo $row['statecover'] ?>" alt="" />
									</span>
									<a href="stateview.php?style=style2&state=<?php echo $row['state'] ?>">
										<div class="texttext">
											<?php echo $row['state'] ?><br>
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

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC) ?>
								<?php if(!is_null($row)): ?>
								<article class="style3">
									<span class="image">
										<img src="images/cover/<?php echo $row['statecover'] ?>" alt="" />
									</span>
									<a href="stateview.php?style=style3&state=<?php echo $row['state'] ?>">
										<div class="texttext">
											<?php echo $row['state'] ?><br>
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

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC) ?>
								<?php if(!is_null($row)): ?>
								<article class="style4">
									<span class="image">
										<img src="images/cover/<?php echo $row['statecover'] ?>" alt="" />
									</span>
									<a href="stateview.php?style=style4&state=<?php echo $row['state'] ?>">
										<div class="texttext">
											<?php echo $row['state'] ?><br>
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

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC) ?>
								<?php if(!is_null($row)): ?>
								<article class="style5">
									<span class="image">
										<img src="images/cover/<?php echo $row['statecover'] ?>" alt="" />
									</span>
									<a href="stateview.php?style=style5&state=<?php echo $row['state'] ?>">
										<div class="texttext">
											<?php echo $row['state'] ?><br>
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

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC) ?>
								<?php if(!is_null($row)): ?>
								<article class="style6">
									<span class="image">
										<img src="images/cover/<?php echo $row['statecover'] ?>" alt="" />
									</span>
									<a href="stateview.php?style=style6&state=<?php echo $row['state'] ?>">
										<div class="texttext">
											<?php echo $row['state'] ?><br>
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

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC) ?>
								<?php if(!is_null($row)): ?>
								<article class="style7">
									<span class="image">
										<img src="images/cover/<?php echo $row['statecover'] ?>" alt="" />
									</span>
									<a href="stateview.php?style=style7&state=<?php echo $row['state'] ?>">
										<div class="texttext">
											<?php echo $row['state'] ?><br>
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

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC) ?>
								<?php if(!is_null($row)): ?>
								<article class="style8">
									<span class="image">
										<img src="images/cover/<?php echo $row['statecover'] ?>" alt="" />
									</span>
									<a href="stateview.php?style=style8&state=<?php echo $row['state'] ?>">
										<div class="texttext">
											<?php echo $row['state'] ?><br>
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

								<?php $row = $result -> fetch_array(MYSQLI_ASSOC) ?>
								<?php if(!is_null($row)): ?>
								<article class="style9">
									<span class="image">
										<img src="images/cover/<?php echo $row['statecover'] ?>" alt="" />
									</span>
									<a href="stateview.php?style=style9&state=<?php echo $row['state'] ?>">
										<div class="texttext">
											<?php echo $row['state'] ?><br>
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
								<?php endif; ?>
							<?php endwhile; ?>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="https://twitter.com/CoverBookBlog" target ="_blank" class="icon brands socials style8 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/profile.php?id=100091131233358" target ="_blank" class="icon brands socials style8 fa-facebook-f"><span class="label">Instagram</span></a></li>
									<li><a href="https://www.instagram.com/thecoverbookblog/" target ="_blank" class="icon brands socials style8 fa-instagram"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.goodreads.com/user/show/164303409-the-cover-blog" target ="_blank" class="icon brands socials style8 fab fa-goodreads-g"><span class="label">Goodreads</span></a></li>
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