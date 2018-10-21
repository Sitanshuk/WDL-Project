<?php
include("array.php"); 
include ('header.php');
?>

</header>


    <!--==============================content================================-->
    <?php 
    if(isset($_GET['service'])) {
  $serviceobj = $_GET['service'];
  $content = $services[$serviceobj];

echo "
    <section id=\"content\">
      <div class=\"wrapper\">

        <h3>"; echo $content['title']; echo "</h3> 
        <p>"; echo $content['blurb']; echo "</p>   
        <h4>"; echo $content['price']; echo "</h4>
        <h6>"; foreach ($content['qna'] as $key => $value) {
            echo $value;
            echo "&nbsp&nbsp&nbsp&nbsp";  
        }
        echo "</h6>";
    
    echo"  </div>
    </section>";
}
?>
    <!--==============================aside================================-->
    <?php 
      if(!isset($_GET['service'])){
        echo " 
      <aside>
      <div class=\"wrapper\">
        <div class=\"column-1\">
          <div class=\"box\">
            <div class=\"aligncenter\">
              <h4>Electrical Services</h4>
            </div>
            <div class=\"box-bg maxheight\">
              <div class=\"padding\">
                <figure class=\"p2\"><img src=\"images/page2-img2.jpg\" alt=\"\"></figure>
                <h6 class=\"color-1\"></h6>
                <p style='min-height: 75px;'></p>
              </div>
              <div class=\"aligncenter\"> <a class=\"button\" href=\"services.php?service=electrician\">More Details</a> </div>
            </div>
          </div>
        </div>
        <div class=\"column-1\">
          <div class=\"box\">
            <div class=\"aligncenter\">
              <h4>Plumbing Services</h4>
            </div>
            <div class=\"box-bg maxheight\">
              <div class=\"padding\">
                <figure class=\"p2\"><img src=\"images/page2-img3.jpg\" alt=\"\"></figure>
                <h6 class=\"color-1\"></h6>
                <p style='min-height: 75px;'></p>
              </div>
              <div class=\"aligncenter\"> <a class=\"button\" href=\"services.php?service=plumbing\">More Details</a> </div>
            </div>
          </div>
        </div>
        <div class=\"column-1\">
          <div class=\"box\">
            <div class=\"aligncenter\">
              <h4>Carpentry Services</h4>
            </div>
            <div class=\"box-bg maxheight\">
              <div class=\"padding\">
                <figure class=\"p2\"><img src=\"images/page2-img4.jpg\" alt=\"\"></figure>
                <h6 class=\"color-1\"></h6>
                <p style='min-height: 75px;'></p>
              </div>
              <div class=\"aligncenter\"> <a class=\"button\" href=\"services.php?service=carpentry\">More Details</a> </div>
            </div>
          </div>
        </div>
        <div class=\"column-1\">
          <div class=\"box\">
            <div class=\"aligncenter\">
              <h4>AC & Fridge Services</h4>
            </div>
            <div class=\"box-bg maxheight\">
              <div class=\"padding\">
                <figure class=\"p2\"><img src=\"images/page2-img5.jpg\" alt=\"\"></figure>
                <h6 class=\"color-1\"></h6>
                <p style='min-height: 75px;'></p>
              </div>
              <div class=\"aligncenter\"> <a class=\"button\" href=\"services.php?service=acrefg\">More Details</a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"block\"></div>
    </aside>
  </div>
</div>";
}
?>
<!--==============================footer=================================-->
<?php 
include('footer.php');
?>
