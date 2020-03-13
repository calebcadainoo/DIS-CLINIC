<section class="section bg-light">
      <div class="container">
		  
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">News &amp; Events</h2>
            <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
          </div>
        </div>
        <div class='row element-animate' >
         <!--  <div class='major-caousel js-carousel-2 owl-carousel'> -->
            <div>
             <div class='media d-block media-custom text-left'>
             <div class='card-deck' style="background: #F8F9FA;">
			  <?php

						$sql = "SELECT id,title,date,content,img FROM news WHERE page = '5062' ORDER by id DESC LIMIT 0,4";
						$q = mysqli_query($conn,$sql); 

						if(mysqli_num_rows($q) >0)
						{


							while($r = mysqli_fetch_array($q))
							{
								$id = $r['id'];
								$title = strip_tags($r['title']);
								$date = $r['date'];
								$img = $r['img'];

								$d = date("d", strtotime($date));
								$m = date("M", strtotime($date));
								$y = date("Y", strtotime($date));

								$content = strip_tags(stripslashes($r['content']));
			
								preg_match('/^([^.!?\s]*[\.!?\s]+){0,40}/', strip_tags($content), $abstract);
								$summary = $abstract[0];								


								$c = substr($title,0,1);
								echo  "<div class='card'>
								<div class='card-body text-center' >
				
							  
							  <div class='card-header  float-center'>$m $d $y</div>
							  <img src='cms/news/img/$img' alt='Image Placeholder' class='card-img-top' style='width=100%; max-width:100%; height:250px; border-radius:70%;'>
							  
								<div class='media-body' >
								  
								  <h3 class='mt-0 text-black text-uppercase heading border-bottom mb-4'><a class='text-black' style='font-size:15px;'>$title</a></h3>
										  <p class='clearfix'>
											<a href='page/?news&id=$id' class='float-center btn btn-primary stretched-link'>Read more</a>
										  </p>                  
								</div>
								</div>
								</div>" ;
								
							}
						}
				?> 
			</div>
       <!--  </div>
                      END slider
        </div>
      </div> -->
    </section>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>