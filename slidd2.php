 
          


<?php


{
 $sql = "SELECT * FROM contentslider ORDER BY id DESC";
 $q = mysqli_query($conn, $sql);
 return $q;
}

function make_slide_indicators($conn)
{
 $output = ''; 
 $count = 0;
 $q = make_query($conn);
 while($r = mysqli_fetch_array($q))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($conn)
{
 $output = '';
 $count = 0;
 $q = make_query($conn);
 while($r = mysqli_fetch_array($q))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }
  $output .= '
   <img src="banner/'.$r["img"].'" alt="'.$r["caption"].'" />
   <div class="carousel-caption">
    <h3>'.$r["caption"].'</h3>
   </div>
  </div>
  ';

  $output = '<img src="../cms/content-slider/photo/'.$r["img"]'">
    <div class="container">
    <div class="row slider-text align-items-center">
      <div class="col-md-7 col-sm-12 element-animate">
        <h1 style="webkit-text-stroke: 0.5px black; > '.$r["caption"]' </h1>
        <p><a href='.$r["url"].'> '.$r["descript"].'</a></p>
      </div>
    </div>
</div>
</div>';
  $count = $count + 1;
 }
 return $output;
}
?>


<div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<?php echo make_slide_indicators($conn); ?>
</ol>

<div class="carousel-inner">
 <?php echo make_slides($conn); ?>
</div>
<a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
 <span class="glyphicon glyphicon-chevron-left"></span>
 <span class="sr-only">Previous</span>
</a>

<a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
 <span class="glyphicon glyphicon-chevron-right"></span>
 <span class="sr-only">Next</span>
</a>

</div>
</div>