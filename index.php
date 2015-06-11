<?php
require_once "php/csrfver.php";
if(session_status() !== PHP_SESSION_ACTIVE) {
	session_start();
}


?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
		xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="utf-8">
		<!-- Bootstrap Latest compiled and minified CSS -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Bootstrap theme -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/superhero/bootstrap.min.css" rel="stylesheet"/>

		<!--	my own stylings-->
		<link type="text/css" href="css/codewizard.css" rel="stylesheet"/>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<!--			Our own javascript/ajax calls-->
		<script type="text/javascript" src="js/js.js"></script>

		<title>wizards winsome weblies</title>
	</head>
	<body>
		<header>
				<h1 id="top" class="text-center">thecodewizard</h1>
				<h4 class="text-center"><span class="label label-success">(∩ ͡° ͜ʖ ͡°)⊃━☆ﾟ. * ･ ｡ﾟ, </span></h4>
		</header>
		<div class="row">
			<div class="container paragraph-breaker col-lg-4 col-lg-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
				<img src="img/photography/photo%20-%202.jpg" alt="Code Wizard Face" class="img-responsive img-circle img-center" />
			</div>
		</div>
		<div class="row">
			<div class="container col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 text-center">
				<h4 class="text-center">I’m a <span class="text-info">web</span> developer.</h4>

				<h5>
					Officially, my job is to use <span class="text-warning">PHP</span>,
					<span class="text-danger">MySQL</span>, <span class="text-info">Javascript</span>,
					and a host of other interlocking dependencies and put your content up on the internet
					for all to see in a manner that is easy to digest and manipulate.
				</h5>
				<h5>
					But really? I <span class="text-danger">love</span> to make peoples dreams into a reality.
				</h5>
				<h6>
				If they're dreaming about a <span class="text-info">website</span>.
				</h6>
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contactmodal">
					Communicate
				</button>
			</div>
		</div>
		<div class="section-breaker">
			<h1 class="text-center">
				<span class="label label-danger">Code</span>
			</h1>
		</div>
		<section id="cheqout" class="container">
			<div class="pull-right section-breaker">
				<div class="col-lg-8 col-lg-offset-4">
					<h2 class="text-right">
						Web Development Projects
					</h2>
						<p class="text-right">
							I attended the Deep Dive Coding Bootcamp and came out familiar with PHP, mySQL, HTML5, CSS, and Javascript.
							This project shows the culmination of those nine weeks of learning and building in my team of three. We utilized Asana,
							PHPStorm, and Github for the project.
						</p>
					<a title="Cheqout" href="//bootcamp-coders.cnm.edu/~twiegand/cheqout/home/">
						<img class="thumbnail img-responsive" src="img/cheqout.jpg">
					</a>
				</div>
			</div>
		</section>
		<div class="section-breaker">
			<h1 class="text-center">
				<span class="label label-danger">About Me</span>
			</h1>
		</div>
		<section id="photography" class="container">
			<div class="pull-left paragraph-breaker col-md-8">
				<h2 class="text-left">
					Photography
				</h2>
				<p class="text-left">
					I spent around four years in the Seattle, WA area. Here are some of my favorite photos I took during the time. Sony mirrorless cameras! Woo!
				</p>
				<div class="row">
					<div class="col-lg-4 col-sm-12 col-xs-12"><a title="HDR lookin forest" href="https://goo.gl/photos/My3U1WJ9WM5aUtvo9"><img class="thumbnail img-responsive" src="img/photography/photo%20-%203.jpg"></a></div>
					<div class="col-lg-4 col-sm-12 col-xs-12"><a title="Seattle at night" href="https://goo.gl/photos/My3U1WJ9WM5aUtvo9"><img class="thumbnail img-responsive" src="img/photography/photo%20-%209.jpg"></a></div>
					<div class="col-lg-4 col-sm-12 col-xs-12"><a title="Leavenworth way after christmas" href="https://goo.gl/photos/My3U1WJ9WM5aUtvo9"><img class="thumbnail img-responsive" src="img/photography/photo%20-%2022.jpg"></a></div>
				</div>
			</div>
		</section>
		<section id="gaming" class="container">
			<div class="pull-right col-lg-8 col-md-8 col-sm-10 col-xs-12 section-breaker">
				<h2 class="text-right">
					Gaming
				</h2>
				<p class="text-right">This is Heroes of the Storm, the Blizzard MOBA. My first pentakill as Gazlowe!</p>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe src="https://www.youtube.com/embed/PoFQFHzPREQ" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</section>
		<section id="videography" class="container">
			<div class="pull-left col-lg-8 col-md-8 col-sm-10 col-xs-12 section-breaker">
				<h2 class="text-left">
					Videography
				</h2>
				<p class="text-left">This is a video I created from a photo shoot with Sony Vegas.</p>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe src="//player.vimeo.com/video/103035213" frameborder="0" allowfullscreen></iframe>
					</div>
			</div>
		</section>
		<section id="music" class="container">
			<div class="pull-right col-lg-10 col-md-10 col-sm-10 col-xs-12 section-breaker">
				<h2 class="text-right">
					Music
				</h2>
				<p class="text-right">
					I've been in a few bands over the years. It's been great!
				</p>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"><img alt="Country Band Pic 1" class="thumbnail img-responsive img-center" src="img/band/country1.jpg" /></div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"><img alt="Country Band Pic 2" class="thumbnail img-responsive img-center" src="img/band/country3.jpg" /></div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"><img alt="Teenage Rock Band 1" class="img-responsive img-center" src="img/band/dr1.jpg" /></div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"><img alt="Teenage Rock Band 2" class="img-responsive img-center" src="img/band/dr2.jpg" /></div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"><img alt="Teenage Rock Band 3" class="img-responsive img-center" src="img/band/dr3.jpg" /></div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"><img alt="Oldies Band" class="thumbnail img-responsive img-center" src="img/band/rrb2.jpg" /></div>
			</div>
		</section>
		<section>
			<!-- Modal -- hidden-->
			<div class="modal fade" id="contactmodal" tabindex="-1" role="dialog" aria-labelledby="contactmodal" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="contactmodal">Contact the Wizard</h4>
						</div>
						<div class="modal-body">
							<form id="contact" class="form-horizontal" role="form" method="POST" action="php/mailme.php">
								<?php generateToken(); ?>
								<p id="contactoutput" class="text-center"></p>

								<div class="form-group">
									<label for="email" class="col-lg-2 control-label">From</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
									</div>
								</div>
								<div class="form-group">
									<label for="reply" class="col-lg-2 control-label">Reply</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="reply" name="reply" placeholder="your@email.here (Opt)">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
										<textarea class="form-control" rows="4" id="message" name="message" placeholder="Code Wizard, I want..."></textarea>
									</div>
								</div>
								<hr>
								<div class="form-group">
									<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
									<button type="reset" class="btn btn-info">Reset</button>
									<button type="submit" class="btn btn-primary col-md-2 pull-right"><strong>Send</strong></button>
							</form>
						</div>
						<p id="contacterroroutput" class="text-center"></p>
					</div>
				</div>
			</div>
		</section>
		<footer class="site-footer site-footer-links text-center">
			<p>
				<a href="#top">Top</a>
				<a href="#cheqout">Cheqout</a>
				<a href="#photography">Photography</a>
				<a href="#videography">Videography</a>
				<a href="#gaming">Gaming</a>
				<a href="#music">Music</a>
				<a data-toggle="modal" data-target="#contactmodal">Contact Me</a>
			</p>
		</footer>
	</body>
</html>