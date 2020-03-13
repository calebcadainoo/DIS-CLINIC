<!doctype html>
<html lang="en">
  <head>
    <title>Colorlib Medi+</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
        <?php include 'header.php'; ?>
    <!-- END header -->
    
    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Contact Us</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


    <section class="section">
    <div class="container">
			<div class="row">
				<div class="col-md-6"><h2 style='margin:50px 0px'>
					
				<?php

					if(isset($_GET['id']))
					{
	
						$id = mysqli_real_escape_string($conn,$_GET['id']);
		
						$sql = "SELECT page_title FROM page WHERE page_id = '$id' LIMIT 1";
						$q = mysqli_query($conn,$sql);
						while ($r = mysqli_fetch_array($q))
						{
							$title = $r['page_title'];

							echo "$title";
		
						}
		
					}

					if(isset($_GET['news']))
					{
						echo "News";
					}


				?>

				</h2></div> 
			</div>
		</div> 

    
	<section style='background-color:#E8F3FF; min-height:350px; height:auto;'>
		<div class="container">
			<div class="row">

				<div class="col-md-8" style="margin:35px 0px; padding:2.5%; 
				min-height:850px; height:auto; border:0px solid #ccc; height:auto; 
				font-family:'Open Sans',sans-serif; font-size:14px; font-weight:300; line-height:23px; background-color:#fff;">

				<?php

					// displaying page content

					if(isset($_GET['id']) && !isset($_GET['news']))
					{
	
					$id = mysqli_real_escape_string($conn,$_GET['id']);
		
					$sql = "SELECT page_title,content,img FROM page WHERE page_id = '$id' LIMIT 1";
					$q = mysqli_query($conn,$sql);
					while ($r = mysqli_fetch_array($q))
					{
						$id = $r['id'];
						$title = strip_tags($r['page_title']);
						$content = $r['content'];
						$img = $r['img'];
			
						if($img)
						{
							echo "<img src='../cms/pages/img/$img' width='100%' class='img-rounded' />";
						}

						echo "<p><br/>$content</p>";
		
					}
		
					}

					//displaying post headline

					if(isset($_GET['news']) && !isset($_GET['id']))
					{
						$sql = "SELECT id,page,title,date,content,img FROM news WHERE page = '5062' ORDER by id DESC LIMIT 0,20";
						$q = mysqli_query($conn,$sql);
	
						if(mysqli_num_rows($q) >0)
						{
	
	
							while($r = mysqli_fetch_array($q))
							{
								$id = $r['id'];
								$t = strip_tags($r['title']);
								$date = $r['date'];
								$page = $r['page'];
								$img = $r['img'];

								$d = date("d", strtotime($date));
								$m = date("M", strtotime($date));

								$content = strip_tags(stripslashes($r['content']));
			
								preg_match('/^([^.!?\s]*[\.!?\s]+){0,40}/', strip_tags($content), $abstract);
								$summary = $abstract[0];


								echo "<div class='row' style=' margin-bottom:25px;'>";
								echo "<div class='col-md-1' style='font-size:14px; background-color:#E8F3FF; text-align:center; 
								border-top:1px solid #ccc; padding:1%;'>$m<br/><b>$d</b></div>";
								echo "<div class='col-md-10' style='border-bottom:0px solid #ccc; min-height:70px; height:auto; padding-bottom:10px;'>";

								if($img)
								echo "<img src='../cms/news/img/$img' class='img-rounded' width='100%' height='' style='margin-bottom:20px;'>";
							
								echo "<h2 style='font-size:18px; margin:0px 0px 20px 0px; text-transform:capitalize; font-weight:400;'>
								<a href='?news&id=$id'>$t</a></h2>$summary";

								echo "<p><a href='?news&id=$id' class='btn btn-info' style='margin-top:15px; font-size:12px;'>Read More</a></p>";

								echo "</div>";
								echo "</div>";
						
							}
							
							
						}
					}


					// displaying post content

					if(isset($_GET['id']) && isset($_GET['news']))
					{
	
						$id = mysqli_real_escape_string($conn,$_GET['id']);
		
						$sql = "SELECT id,title,content,doc,img FROM news WHERE id = '$id' LIMIT 1";
						$q = mysqli_query($conn,$sql);
						while ($r = mysqli_fetch_array($q))
						{
							$id = $r['id'];
							$title = strip_tags($r['title']);
							$content = $r['content'];
							$doc = $r['doc'];
							$img = $r['img'];
			
							$content = stripslashes($r['content']);
							
							echo "<h3 style='margin:0px 0px 40px 0px;'>$title</h3>"; 
							
							echo "<div style='margin:20px 0px; text-align:left;' class='addthis_inline_share_toolbox'></div>";

							if($img)
							{
								echo "<img src='../cms/news/img/$img' width='100%' class='img-rounded'/>";
								echo "<div id='page-br'></div>";
							}
		
							
							echo "<p style='margin:40px 0px;'>$content</p>";
							
							echo "<div  style='text-align:left;' class='addthis_inline_share_toolbox'></div>";

		
							if($doc)
							{
								echo "<img src='../cms/img/pdf.png' align='left' /><a href='../cms/news/doc/$doc'>Download attached document</b></a>";
							}
		
						}
		
					}


				?>



				</div> 



    </section>

    

    <a href="#" class="cta-link element-animate" data-aniamte-effect="fadeIn" data-toggle="modal" data-target="#modalAppointment">
      <span class="sub-heading">Ready to Visit?</span>
      <span class="heading">Make an Appointment</span>
    </a>
    <!-- END cta-link -->

    <?php include 'footer.php'; ?>
    <!-- END footer -->


    <!-- Modal -->
   <?php include 'modal.php'; ?>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>