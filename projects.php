<!DOCTYPE html>
	<html>
		<head>
			<title>Niclas Ernst</title>

			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

			<link rel="icon" href="assets/images/favicon/favicon.png">
			
			<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		</head>

		<body>
			<div class="container-fluid">
				<div class="row projects" id="header">
					<div class="container">
						<div class="col-xs-6 col-sm-3">
							<a href="index.php">
								<img src="assets/images/niclasernst.svg">
							</a>
						</div>

						<div class="col-xs-6 col-sm-9">
							<nav>
								<a href="index.php">About</a>
								<a class="active" href="projects.php">Projects</a>
								<a href="https://www.instagram.com/niclasernst/" target="_blank">Photography</a>
								<a href="https://dribbble.com/niclasernst" target="_blank">Dribbble</a>
								<a href="https://twitter.com/niclasernst" target="_blank">Twitter</a>
							</nav>

							<img class="nav-icon" src="assets/images/nav-gray.svg" />

							<div class="responsive-nav">
								<img class="nav-icon-close" src="assets/images/close-white.svg">

								<nav>
									<a href="index.php">About</a>
									<a class="active" href="projects.php">Projects</a>
									<a href="https://www.instagram.com/niclasernst/">Photography</a>
									<a href="https://dribbble.com/niclasernst">Dribbble</a>
									<a href="https://twitter.com/niclasernst">Twitter</a>
								</nav>
							</div>
						</div>
					</div>
				</div>

				<div class="row" id="project-slider">
					<div class="container">
						<div class="project-slider">
							<div class="project">
								<div class="project-inner" onclick="location.href='projects-detail.php';">
									<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-1">
										<span><span>2016 -</span> Project title</span>
										<h2>Creating an incredible solution for people to connect</h2>
										<a class="button" href="#">View project</a>
									</div>
								</div>
							</div>

							<div class="project">
								<div class="project-inner" onclick="location.href='projects-detail.php';">
									<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-1">
										<span><span>2016 -</span> Project title</span>
										<h2>Creating an incredible solution for people to connect</h2>
										<a class="button" href="#">View project</a>
									</div>
								</div>
							</div>

							<div class="project">
								<div class="project-inner" onclick="location.href='projects-detail.php';">
									<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-1">
										<span><span>2016 -</span> Project title</span>
										<h2>Creating an incredible solution for people to connect</h2>
										<a class="button" href="#">View project</a>
									</div>
								</div>
							</div>
						</div>

						<span class="project-slider-pagination"></span>
					</div>
				</div>
			</div>

			<script type="text/javascript" src="assets/javascript/libraries/jquery.min.js"></script>
			<script type="text/javascript" src="assets/javascript/libraries/fakeloader.min.js"></script>
			<script type="text/javascript" src="assets/javascript/libraries/slick.min.js"></script>
			<script type="text/javascript" src="assets/javascript/init.js"></script>
		</body>
	</html>