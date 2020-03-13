
<?php 
  include "cms/connection/connect.php"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <title>DIS CLINIC</title>
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
    <link href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

    <style>
@import url('https://fonts.googleapis.com/css?family=Crimson+Text&display=swap');
</style> 
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

  </head>
  <body style="font-family: 'Ibarra Real Nova', serif;">
    
  <header role="banner">
      <div class="top-bar">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-5">
              <ul class="social list-unstyled">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-7 text-right">
              <p class="mb-0">
                <a href="#" class="cta-btn" data-toggle="modal" data-target="#modalAppointment">Make an Appointment</a></p>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="DIS LOGO" class="img-responsve logo"> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">HOME</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT US</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="page/?id=1801">Profile</a>
                  <a class="dropdown-item" href="page/?id=9976">History</a>
                  <a class="dropdown-item" href="page/?id=3613">Vision</a>
                  <a class="dropdown-item" href="page/?id=6697">Core Values</a>
                </div>
                					       <!-- <li class="dropdown" >
					        	 <a class="dropdown-toggle" data-toggle="dropdown"  href="#">structure<span class="caret"></span> </a>
					        	 <ul class="dropdown-menu menuDropDwn">
          						 <li><a href="page/?id=3702">Board</a></li>
          						 <li><a href="page/?id=8038">Management</a></li>
          						 <li><a href="page/?id=313">Clinical Departments</a></li>
          						 <li><a href="page/?id=2408">Non Clinical Departments</a></li>
        						 </ul>
					        </li> -->

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICES</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <!-- <a class="dropdown-item" href="services.php">SERVICES</a> -->
                  <a class="dropdown-item" href="page/?id=1719">24/7 General OPD</a>
                  <a class="dropdown-item" href="page/?id=1632">24/7 Pharmacy $ Laboratory</a>
                  <a class="dropdown-item" href="page/?id=9484">Eye Clinic & Xray Services</a>
                  <a class="dropdown-item" href="page/?id=8480">Minor Surgeries & Maternity</a>
                  <a class="dropdown-item" href="page/?id=4480">Wellness</a>
                  <a class="dropdown-item" href="page/?id=4182">Home Care</a>
                  <a class="dropdown-item" href="page/?id=5833">Kwik Health</a>
                  <a class="dropdown-item" href="page/?id=5869">SHep</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PATIENT CARE</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <!-- <a class="dropdown-item" href="services.php">PATIENT CARE</a> -->
                  <a class="dropdown-item" href="page/?id=7978">INSURANCE</a>
                  <a class="dropdown-item" href="#" class="cta-link element-animate" data-animate-effect="fadeIn" data-toggle="modal" data-target="#modalAppointment">REQUEST AN APPOINTMENT</a>
                  <a class="dropdown-item" href="https://tawk.to/chat/5ba64894c666d426648b02ca/default">Live Chat</a>
                </div>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="doctors.php" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PORTALS</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="#">Kwik Health</a>
                  <a class="dropdown-item" href="#">SHep</a>
                  <a class="dropdown-item" href="#">Home Care</a>
                </div>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" href="about.php">DIS NEWSNETWORK</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="news.php">NEWS</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="contact.php">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    <?php include 'slider.php'; ?>
    <!-- END slider -->

    
    <section class="container home-feature mb-5">
      <div class="row">
        <div class="col-md-4 p-0 one-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-hospital-bed"></span>
            <h2>24/7 General OPD</h2>
            <p>We give general outpatient medical care unit with collegial, cooperative, teamwork and multi-specialty integration. 
              A network of specialist through technology to reach the best decision for each patient any day, anytime.</p>
          </div>
          <a href="page/?id=1719" class="btn-more">Read More</a>
        </div>
        <div class="col-md-4 p-0 two-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-first-aid-kit"></span>
            <h2>24/7 Pharmacy & Laboratory</h2>
            <p>We run a 24-hour Pharmacy unit stocked with Quality and affordable drugs to meet the needs of our clients</p>
          </div>
          <a href="page/?id=1632" class="btn-more">Read More</a>
        </div>
        <div class="col-md-4 p-0 three-col element-animate">
          <div class="col-inner p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4">
            <span class="icon flaticon-hospital"></span>
            <h2>WELLNESS CLINICS</h2>
            <p>Introducing WELLNESS CLINICS! In a fast-paced world where there is the growing tendency to ignore our health in our quest to achieve many things, it has become increasingly necessary for us to pause and take a snapshot of our health, know our "NUMBERS" and what they mean and take control of our health.</p>
          </div>
          <a href="page/?id=4480" class="btn-more">Read More</a>
        </div>
      </div>

    </section>
    <!-- END section -->

    <section class="section stretch-section">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">Why Choose Us</h2>
            <p class="mb-0 lead">WE ARE THE LEADERS IN QUALITY HEALTHCARE.</p>
          </div>
        </div>
        <div class="row align-items-center">
          
          <div class="col-md-6 stretch-left-1 element-animate" data-animate-effect="fadeInLeft">
            <a href="#" class="video"><img src="img/img_1.jpg" alt="" class="img-fluid"></a>
          </div>
          <div class="col-md-6 stretch-left-1-offset pl-md-5 pl-0 element-animate" data-animate-effect="fadeInLeft">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="media d-block media-feature text-center">
                  <span class="icon flaticon-hospital"></span>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">Amenities</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="media d-block media-feature text-center">
                  <span class="icon flaticon-first-aid-kit"></span>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">Medical Services</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="media d-block media-feature text-center">
                  <span class="icon flaticon-hospital-bed"></span>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">Patient Services</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="media d-block media-feature text-center">
                  <span class="icon flaticon-doctor"></span>
                  <div class="media-body">
                    <h3 class="mt-0 text-black">Expert Doctors</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section custom-tabs">
      <div class="container">
        <div class="row">

          <div class="col-md-4 border-right element-animate">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span>01</span> Amenities</a>
              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span>02</span> Medical Services</a>
              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span>03</span> Patient Services</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span>04</span> Expert Doctors</a>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-7 element-animate">
            
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <span class="icon flaticon-hospital"></span>
                <h2 class="text-primary">Amenities</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary">Learn More</a></p>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <span class="icon flaticon-first-aid-kit"></span>
                <h2 class="text-primary">Medical Services</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary">Learn More</a></p>
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <span class="icon flaticon-hospital-bed"></span>
                <h2 class="text-primary">Patient Services</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary">Learn More</a></p>
              </div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <span class="icon flaticon-doctor"></span>
                <h2 class="text-primary">Expert Doctors</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
                <p><a href="#" class="btn btn-primary">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <!-- <section class="section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center mb-5">
            <h2 class="text-uppercase heading border-bottom mb-4">Our Doctors</h2>
            <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
          </div>
        </div>
        <div class="row element-animate">
          <div class="major-caousel js-carousel-1 owl-carousel">
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Carl Smith</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Janice Doe</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_3.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Jean Doe</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_4.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Jessica Doe</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>

            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Carl Smith</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Janice Doe</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_3.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Jean Doe</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <div>
              <div class="media d-block media-custom text-center">
                <img src="img/doctor_4.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="media-body">
                  <h3 class="mt-0 text-black">Dr. Jessica Doe</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <p>
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-linkedin"></span></a>
                  </p>
                </div>
              </div>
            </div>

          </div>
           END slider
        </div>
      </div>
    </section> --> 
    <!-- END section -->

    <section class="cover_1" style="background-image: url(img/bg_1.jpg);">
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-md-10">
            <h2 class="heading element-animate">Experience Our Advance Facilities</h2>
            <p class="sub-heading element-animate mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            <p class="element-animate"><a href="contact.php" class="btn btn-primary btn-lg">Get In Touch</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

<div><?php include 'ncard.php'; ?></div>
    <!-- END section -->

    <a href="#" class="cta-link element-animate" data-animate-effect="fadeIn" data-toggle="modal" data-target="#modalAppointment">
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
    <!-- <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script> -->
  </body>
</html>