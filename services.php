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
                <h6 class=\"color-1\">Sed ut perspiciatis unde omnis</h6>
                <p>Linior voluptatm accusantium doloremque laudantium totarem aperiam.</p>
              </div>
              <div class=\"aligncenter\"> <a class=\"button\" href=\"\">More Details</a> </div>
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
                <h6 class=\"color-1\">Quasi architecto beatae vitae</h6>
                <p>Nemenim ipsam voluptatem quia voluptas aspernatur odit aut fugit.</p>
              </div>
              <div class=\"aligncenter\"> <a class=\"button\" href=\"\">More Details</a> </div>
            </div>
          </div>
        </div>
        <div class=\"column-1\">
          <div class=\"box\">
            <div class=\"aligncenter\">
              <h4>Welding Services</h4>
            </div>
            <div class=\"box-bg maxheight\">
              <div class=\"padding\">
                <figure class=\"p2\"><img src=\"images/page2-img4.jpg\" alt=\"\"></figure>
                <h6 class=\"color-1\">Sed quia consequuntur magni</h6>
                <p>Doloresqui ratione voluptatem sequi neunt Neque porro quisquam dolorem.</p>
              </div>
              <div class=\"aligncenter\"> <a class=\"button\" href=\"\">More Details</a> </div>
            </div>
          </div>
        </div>
        <div class=\"column-2\">
          <div class=\"box\">
            <div class=\"aligncenter\">
              <h4>Welding Services</h4>
            </div>
            <div class=\"box-bg maxheight\">
              <div class=\"padding\">
                <figure class=\"p2\"><img src=\"images/page2-img4.jpg\" alt=\"\"></figure>
                <h6 class=\"color-1\">Sed quia consequuntur magni</h6>
                <p>Doloresqui ratione voluptatem sequi neunt Neque porro quisquam dolorem.</p>
              </div>
              <div class=\"aligncenter\"> <a class=\"button\" href=\"\">More Details</a> </div>
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
