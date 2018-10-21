<?php 
include("array.php");
include("header.php");
?>
</header>
    <!--==============================content================================-->
    <section id="content">
      <div class="indent-left">
        <center>
        <h3 class="p1">Meet Our Staff Members</h3>
        <hr width="40%">
        </center>
      </div>
    </section>
    <!--==============================aside================================-->
    <aside>
      <div class="wrapper">
      <?php 
      foreach ($staff as $arg => $val) {
        foreach ($val as $key => $value) {
      
        ?><div class= <?php echo $value['col']?> >
        <?php 
        echo "
          <div class=\"box\">
            <div class=\"aligncenter\">
              <h4>"; echo $value['name'];"</h4>
            </div>
            <div class=\"box-bg maxheight\">
              <div class=\"padding\">
                <figure class=\"p2\">";?><img src= <?php echo $value['photo'] ?> alt=" " width="100%" height = "250px"><?php echo "</figure>
                <h6 class=\"color-1\">"; echo $value['about']; echo"</h6>
                <p style='color: #ffffff !important;'>"; echo $value['name']; echo " is a qualified tradesman who has been supporting local families and business with repairs and improvements for more than a decade.</p>
              </div>
          </div>
        </div>";
      }
    }
      ?>

      <div class="block"></div>
    </div>
    </aside>
  </div>
</div>
<!--==============================footer=================================-->
<br><br><br><br><br><br>
      
<?php 
include('footer.php');
?>