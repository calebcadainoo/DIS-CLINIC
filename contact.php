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
          <div class="col-md-6 mb-5 element-animate">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control form-control-lg" id="fname">
                </div>
                <div class="col-md-6 form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control form-control-lg" id="lname">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control form-control-lg">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" id="message" class="form-control form-control-lg" cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-lg btn-block">
                </div>

              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5 element-animate">
            
            <h5 class="text-uppercase mb-3">Address</h5>
            <p class="mb-5">98 West 21th Street, <br> Suite 721 <br> New York NY 10016</p>
            
            <h5 class="text-uppercase mb-3">Email Us At</h5>
            <p class="mb-5"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a> <br> <a href="mailto:customer@yourdomain.com">customer@yourdomain.com</a></p>
            
            <h5 class="text-uppercase mb-3">Call Us</h5>
            <p class="mb-5">Phone: (+1) 435 3533 <br> Mobile: (+1) 435 3533 <br> Fax: (+1) 435 3534</p>
  

          </div>
        </div>
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