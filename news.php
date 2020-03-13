
<?php 
  include "cms/connection/connect.php"; 
?>

<?php include 'header.php' ?>
    <!-- END header -->

    
    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-2.jpg'); overflow-x: hidden;">
        
        <div class="container" >
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>News &amp; Events</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


    <section class="section bg-light">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-4 element-animate"> -->
            <div class="media d-block media-custom text-left">
              <div class='card-columns' style="background: #F8F9FA;">
        <?php

            $sql = "SELECT id,title,date,content,img FROM news WHERE page = '5062' ORDER by id DESC LIMIT 0,20";
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
                  
                  <h3 class='mt-0 text-black text-uppercase heading border-bottom mb-4'><a class='text-black'>$title</a></h3>
                  <p><a style='color:#fff;'></a>$summary</p>
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

      <?php
                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 10;
                $offset = ($pageno-1) * $no_of_records_per_page;
                $total_pages_sql = "SELECT COUNT(*) FROM news";
                $result = mysqli_query($conn,$total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);
                $sql = "SELECT * FROM news LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
            //here goes the data
        }
                ?>        
        <div class="row element-animate">
          <div class="col-md-5">
            <nav aria-label="Page navigation example">
              <ul class="pagination">

                <li class="page-item"><a class="page-link" href="?pageno=1">First</a></li>
                <li class="page-item active <?php if($pageno <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a></li>
    
                <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a></li>
                <li class="page-item"><a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <a href="#" class="cta-link element-animate" data-toggle="modal" data-target="#modalAppointment">
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