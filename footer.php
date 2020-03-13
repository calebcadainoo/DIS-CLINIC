
   
      <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5 element-animate">
          <div class="col-md-3 mb-5">
            <h3><i class="fa fa-heartbeat" aria-hidden="true"></i> Services</h3>
            <ul class="footer-link list-unstyled">
              <li><a href="page/?id=1719">24/7 General OPD</a></li>
              <li><a href="page/?id=1632">24/7 Pharmacy $ Laboratory</a></li>
              <li><a href="page/?id=9484">Eye Clinic & Xray Services</a></li>
              <li><a href="page/?id=8480">Minor Surgeries & Maternity</a></li>
              <li><a href="page/?id=4480">Wellness</a></li>
              <li><a href="page/?id=4182">Home Care</a></li>
              <li><a href="page/?id=5833">Kwik Health</a></li>
              <li><a href="page/?id=5869">SHep</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3><i class="fa fa-newspaper-o" aria-hidden="true"></i> News & Events</h3>

					<?php

						$sql = "SELECT id,page,title FROM news WHERE page = '5062' ORDER by id DESC LIMIT 0,4";
						$q = mysqli_query($conn,$sql);
	
						if(mysqli_num_rows($q) >0)
						{
	
	
							while($r = mysqli_fetch_array($q))
							{
								$id = $r['id'];
								$t = strip_tags($r['title']);
								$page = $r['page'];

								echo "<a href='page/?news&id=$id'>$t</a><hr/>";
						
							}
							
							
						}

						?>

          </div>
          <div class="col-md-3 mb-5">
            <h3>About</h3>
            <ul class="footer-link list-unstyled">
              <li><a href="page/?id=1801">Profile</a></li>
              <li><a href="page/?id=9976">History</a></li>
              <li><a href="page/?id=3613">Vision</a></li>
              <li><a href="page/?id=6697">Core Values</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Location &amp; <i class="fa fa-phone-square" aria-hidden="true"></i> Contact</h3>
            <p class="mb-5">Abura, Cape Coast, Ghana</p>
            <h4 class="text-uppercase mb-3 h6 text-white">Email</h5>
            <p class="mb-5"><a href="mailto:info@doctorsinservice.com">info@doctorsinservice.com</a></p>
            <h4 class="text-uppercase mb-3 h6 text-white">Phone</h5>
            <p><a href="tel:233542683576">Call us at +233XX XXXX XXX</a></p>
          </div>
        </div>

        <div class="row pt-md-3 element-animate">
          <div class="col-md-12">
            <hr class="border-t">
          </div>
          <div class="col-md-6 col-sm-12 copyright">
            <p> <?php echo " &copy " . date('Y'); ?> Doctors In Service Limited || Developed by <a> MAWULIFE</a></p>
          </div>
          <div class="col-md-6 col-sm-12 text-md-right text-sm-left">
            <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
            <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
            <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
          </div>
        </div>
      </div>
    </footer>