<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require "DbClass.php";

if (isset($_POST['submit']))
{

if($_FILES['image']['name']){
  move_uploaded_file($_FILES['image']['tmp_name'], "images/".$_FILES['image']['name']);
  $img=$_FILES['image']['name'];
  } 
  $title=$_POST['title'];
  $paragraph=$_POST['paragraph'];
  $dep=$_POST['dep'];
  $date= date(" jS \of F Y ") ;
  $insert_data = array(  
          
    'title'          => $_POST['title'] ,
    'paragraph'           =>  $_POST['paragraph'] ,
    'imag'         => $img,
    'dep_id'         => $dep,
    'date'         =>   $date
   
);
if(!$db_obj->insert("posts",$insert_data)->runQuery())
{
  echo "<script>alert('You have successfully inserted the data');</script>";
  echo "<script type='text/javascript'> document.location ='dash.php'; </script>";
}
else
  {
    echo "<script>alert('Something Went Wrong. Please try again');</script>";
  }


}


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Weblog a Blogging Category Bootstrap responsive WebTemplate | Register :: w3layouts</title>
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
	<link href="css/single.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<!--Header-->

	<header>
	
	</header>
	<!--//header-->

	<!--/banner-->


	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">Add post info </h3>
				<div class="inner-sec">
			<div class="login p-5 bg-light mx-auto mw-100">
				<form  method="POST" enctype="multipart/form-data">
						<div class="form-row">
								<div class="col-md-6 mb-3">
										<label for="validationCustom01">Title</label>

									<input type="text" name="title" class="form-control" id="validationDefault01" placeholder="" required="">
								</div>
								<div class="col-md-6 mb-3">
										<label for="validationCustom02">imag</label>
									<input type="file" name="image" class="form-control" id="validationDefault02" placeholder="" required="">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-10">
										<label for="exampleInputPassword1 mb-2">paragraph</label>
									<textarea type="text" name="paragraph" class="form-control" id="password1" placeholder="" required=""></textarea>
								</div>
								<div class="form-group">	<select class="form-group col-md-12" name = 'dep' style="height:50px; border:none ;margin-top:2rem" >
<?php
                $result=$db_obj->select("departments")->runQuery();
                foreach($result as $row){

               

?>
              <option value = '<?=$row->id?>'><?=$row->title?></option>
               
       <?php
                }
       ?>
	</select>	</div>
							</div>	
              
							<button type="submit" class="btn btn-primary read-m" name="submit">Add the post</button>
							
						</form>
		
					</div>
			</div>
		</div>
	</section>
	<!--//main-->
	<!--footer-->

	<!---->	
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
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