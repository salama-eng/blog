<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
require "DbClass.php";
// pass web-site url
$site_url  = urlencode('http://localhost/blog/index.php');
// post title
$site_title  = "posts";

if(isset($_GET['action']))
{
	if($_GET['action']=='logout')
	{
			unset($_SESSION['email']);
				unset($_SESSION['email']);
	}


}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Weblog a Blogging Category Bootstrap responsive WebTemplate | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Weblog a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<!--Header-->

	<header>
		<div class="top-bar_sub_w3layouts container-fluid">
			<div class="row">
				<div class="col-md-4 logo text-left">
					<a class="navbar-brand" href="index.php">
						<i class="fab fa-linode"></i> Weblog</a>
				</div>
				<div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
					<span>Welcome Back!</span>
					<span class="mx-lg-4 mx-md-2  mx-1">
					
<?php
			if (isset($_SESSION['email'])){
        ?>
						<a href="login.php?action=logout">
						<i class="fas fa-lock"></i> logout</a>
    <?php
			}
			else
			{
				?>
				<a href="login.php"><i class="fas fa-lock"></i> Sign In</a>
	<?php
			}

?>
			
						
					</span>
					<span>
						<a href="register.html">
							<i class="far fa-user"></i> Register</a>
					</span>
				</div>
				<div class="col-md-4 log-icons text-right">

					<ul class="social_list1 mt-3">

						<li>
							<a href="#" class="facebook1 mx-2" >
								<i class="fab fa-facebook-f"></i>

							</a>
						</li>
						<li>
							<a href="#" class="twitter2">
								<i class="fab fa-twitter"></i>

							</a>
						</li>
						<li>
							<a href="#" class="dribble3 mx-2">
								<i class="fab fa-dribbble"></i>
							</a>
						</li>
						<li>
							<a href="#" class="pin">
								<i class="fab fa-pinterest-p"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

			<div class="header_top" id="home">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				   </button>


					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.html">About</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								    aria-expanded="false">
								category
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#"></a>
									<a class="dropdown-item" href="index.php">All categories</a>

									<?php
$result =$db_obj->select("departments")->runQuery();

foreach($result as $row)
{			?>
 

<a class="dropdown-item" href="blog2.php?id=<?=$row->id?>"><?=$row->title?></a>
<?php
}
				?>		
								
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.html">Contact</a>
							</li>

						</ul>
							<form action="#" method="post" class="form-inline my-2 my-lg-0 header-search">
								<input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
								<button class="btn btn1 my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
							</form>
		
						

					</div>
				</nav>

			</div>
	</header>
	<!--//header-->

	<!--/banner-->
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption">
						<h3>Create the lifestyle
							<span>you desire</span>
						</h3>
						<div class="read">
							<a href="single.html" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>Engaging Purposeful
							<span>and Creative</span>
						</h3>
						<div class="read">
							<a href="single.html" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
						<h3>Create the lifestyle
							<span>you desire</span>
						</h3>
						<div class="read">
							<a href="single.html" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
				<div class="carousel-item item4">
					<div class="carousel-caption">
						<h3>Engaging Purposeful
							<span>and Creative</span>
						</h3>
						<div class="read">
							<a href="single.html" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	<!--/model-->
	<!--//banner-->
	<section class="bottom-slider">
		<div class="course_demo1">
			<ul id="flexiselDemo1">
				
					
			<?php

$result =$db_obj->select("posts")->where("dep_id",'2')->runQuery();
foreach($result as $row)
{



	?>
			



<li >
					<div class="blog-item  m-2">
						<img src="images/<?= $row->imag ?>" alt=" " class="img-fluid" />
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
							<i class="fas fa-play"></i>
						</button>

						<div class="floods-text">
							<h3> <?= $row->title?>
								<span>Blogger
									<label>|</label>
									<i><?= $row->date?></i>
								</span>
							</h3>

						</div>
					</div>
				</li>


				<?php
	}
?>
			
			
			</ul>
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://player.vimeo.com/video/145787219"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
	
			<div class="row">
				<!--left-->

				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
																		<!---------------  show ---------------->
						<?php

$result =$db_obj->select('posts')->runQuery();
foreach($result as $row)
{


?>
						<div class="b-grid-top">



							<div class="blog_info_left_grid  m-5 border-1">	
								
	
								<a href="single.html">
									<img src="images/<?= $row->imag?>" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> <?= $row ->date ?></a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-thumbs-up"></i> 201 Likes</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-comment"></i> 15 Comments</a>
									</li>
									
								</ul>
							</div>
						</div>

						<h3>
							<a href="single.html"> <?= $row ->title ?></a>
						</h3>
						<p> <?= $row ->paragraph ?></p>
						<a href="single.html" class="btn btn-primary read-m">Read More</a>

						<a class="btn btn-primary read-m" href="http://www.facebook.com/sharer.php?u=<?=$site_url?>" target="_blank">
        share on facebook
    </a>
    
<?php
}
?>
					</div>



					<!--//silder-->
			
					<!--//silder-->
				
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
						<div class="tech-btm">
							<img src="images/banner1.jpg" class="img-fluid" alt="">
						</div>
						<div class="tech-btm">
							<h4>Sign up to our newsletter</h4>
							<p>Pellentesque dui, non felis. Maecenas male </p>
							<form action="#" method="post">
								<input type="email" placeholder="Email" required="">
								<input type="submit" value="Subscribe">
							</form>

						</div>
						<div class="tech-btm widget_social">
							<h4>Stay Connect</h4>
							<ul>

								<li>
									<a class="twitter" href="#">
										<i class="fab fa-twitter"></i>
										<span class="count">317K</span> Twitter Followers</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-facebook-f"></i>
										<span class="count">218k</span> Twitter Followers</a>
								</li>
								<li>
									<a class="dribble" href="#">
										<i class="fab fa-dribbble"></i>

										<span class="count">215k</span> Dribble Followers</a>
								</li>
								<li>
									<a class="pin" href="#">
										<i class="fab fa-pinterest"></i>
										<span class="count">190k</span> Pinterest Followers</a>
								</li>

							</ul>
						</div>
						<div class="tech-btm">
							<h4>Recent Posts</h4>
							
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/1.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>
								
							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/5.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/3.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">
									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>
								
							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/2.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>
								
							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/4.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>
								
							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/6.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">
									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>
								
							</div>
						</div>
					</div>

				</aside>
				<!--//right-->
			</div>
		</div>
	</section>
	<!--//main-->
	<!--/middle-->

	<!--//middle-->
	<!---->

	
		</section>
		<!--//main-->
	<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">
					<h3>About US</h3>
					<p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus..</p>
					<div class="read">
						<a href="single.html" class="btn btn-primary read-m">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">

					<div class="tech-btm">
						<h3>Latest Posts</h3>
						<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="single.html">
									<img src="images/4.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>
							
						</div>
						<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="single.html">
									<img src="images/5.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>
							
						</div>
						<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="single.html">
									<img src="images/6.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- subscribe -->
				<div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
					<h2>Signup to our newsletter</h2>
					<div class="subscribe-main text-left">
							<div class="subscribe-form">
									<form action="#" method="post" class="subscribe_form">
										<input class="form-control" type="email" placeholder="Enter your email..." required="">
										<button type="submit" class="btn btn-primary submit">Submit</button>
									</form>
									<div class="clearfix"> </div>
						   </div>
						<p>We respect your privacy.No spam ever!</p>
					</div>
					<!-- //subscribe -->
				</div>
			</div>
			<!-- footer -->
			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
						<ul>
							<li class="mx-3">
								<a class="facebook" href="#">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="#">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
							</li>
							<li class="mx-3">
								<a class="facebook" href="#">
									<i class="fab fa-google-plus-g"></i>
									<span>Google+</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="#">
									<i class="fab fa-pinterest-p"></i>
									<span>Pinterest</span>
								</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="w3layouts-agile-copyrightbottom">
					<p>© 2018 Weblog. All Rights Reserved | Design by
						<a href="http://w3layouts.com/">W3layouts</a>
					</p>

				</div>
			</div>

			<!-- //footer -->
		</div>
	</footer>
	<!---->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- desoslide-JavaScript -->
	<script src="js/jquery.desoslide.js"></script>
	<script>
		$('#demo1_thumbs').desoSlide({
			main: {
				container: '#demo1_main_image',
				cssClass: 'img-responsive'
			},
			effect: 'sideFade',
			caption: true
		});
	</script>

	<!-- requried-jsfiles-for owl -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo2").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<script src="js/jquery.flexisel.js"></script>
	<!-- //password-script -->
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- //Custom-JavaScript-File-Links -->
	<script src="js/bootstrap.js"></script>


</body>

</html>