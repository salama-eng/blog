
<?php
session_start();

require "DbClass.php";


if(isset($_GET['action']))
{
	$id=$_GET['id'];
	

	if(!$db_obj->deleteById("posts",$id)->runQuery())
	{
		$_SESSION['message'] = "You have clicked on button successfully";
		echo "<script>alert('You have successfully delete the data');</script>";
		echo "<script type='text/javascript'> document.location ='dash.php'; </script>";
	}
	else{
	echo"	<script> alert ('something went wronge')</script>";
	echo "<script type='text/javascript'> document.location ='dash.php'; </script>";
	}


}


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Weblog a Blogging Category Bootstrap responsive WebTemplate | Single :: w3layouts</title>
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
	<link rel="stylesheet" href="css/single.css">
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
					<a class="navbar-brand" href="index.html">
						<i class="fab fa-linode"></i> Salama</a>
				</div>
				<div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
					<span>Welcome Back!</span>
					<span class="mx-lg-4 mx-md-2  mx-1">
										
<?php
			if (isset($_SESSION['email'])){
        ?>
							<a href="login.php?action=logout"><i class="fas fa-lock"></i> logout</a>
    <?php
			}
			else
			{
				?>
		<a href="login.php">	<i class="fas fa-lock"></i> Sign In</a>
	<?php
			}

?>
					</span>
				</div>
				<div class="col-md-4 log-icons text-right">

					<ul class="social_list1 mt-3">
					
						
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
						
					
					
						
					</ul>
					<form action="#" method="post" class="form-inline my-2 my-lg-0 header-search">
						<input class="form-control mr-sm-2" type="search" placeholder="Search here..." name="Search" required="">
						<button class="btn btn1 my-2 my-sm-0" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</form>



				</div>
			</nav>

		</div>
	</header>
	<!--//header-->

	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">dashboard</li>
	</ol>

	<!--//banner-->
	<section class="banner-bottom">
		<!--/blog-->
		<div class="container">
    <a href="add_post.php" class="btn btn-primary read-m">Add post</a>
			<div class="row">

				<!--left-->

<?php



$result=$db_obj->select("posts")->orderby('date',"ASC")->runQuery();
foreach ($result as $row){

  ?>



				<div class="col-lg-6 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
         
								<a href="single.html">
									<img src="images/<?= $row->imag?>" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i><?= $row->date?></a>
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
							<a href="single.html"><?= $row->title?></a>
						</h3>
						<p><?= $row->paragraph?></p>
				

              <a href="dash.php?action=delet&id=<?= $row->id?>" onclick="return confirm('Do you really want to Delete this post?');" class="btn btn-primary read-m">Delete post</a>
              <a href="single.html" class="btn btn-primary read-m">de active</a>
              <a href="edite_post.php?action=edite&id=<?= $row->id?>" class="btn btn-primary read-m">edite posts</a>
					</div>

			
				</div>

				<!--//left-->
				<!--right-->
			
				<!--//right-->
		 <?php }?>	</div>	 
		
		</div>
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
				<!-- subscribe -->s
				<div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
					<h2>Signup to our newsletter</h2>
					<div class="subscribe-main text-left">
						<div class="subscribe-form">
							<form action="#" method="post" class="subscribe_form">
								<input class="form-control" type="email" placeholder="Enter your email..." required="">
								<button type="submit" class="btn btn-primary submit">Submit</button>
							</form>
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
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

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