
<section class="home-slider owl-carousel">
 <?php

$sql = "SELECT id,caption,descript,img,url FROM contentslider ORDER BY id DESC; ";
$q = mysqli_query($conn,$sql); 

if(mysqli_num_rows($q) > 0)
{


  while($r = mysqli_fetch_array($q))
  {
    $id = $r['id'];
    $caption = strip_tags($r['caption']);
    $descript = $r['descript'];
    $img = $r['img'];
    $url = $r['url'];

echo " <div class='slider-item'>
<div class='slider-item' style='background-image: url(cms/content-slider/photo/$img');'>


    <div class='container'>
      <div class='row slider-text align-items-center'>
        <div class='col-md-7 col-sm-12 element-animate'>
          <h1>$caption</h1>
          <p><a href='$url'>$descript</a></p>
        </div>
      </div>

  </div>

</div> " ;
  }
}

?>
</section>