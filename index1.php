<!DOCTYPE html>
<html lang="en">
<head>
<title>Handyman</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.6.3.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/NewsGoth_BT_400.font.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/easyTooltip.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<?php
include 'dbconnect.php';
 
$conn = OpenCon();
 
CloseCon($conn);
 
?>

<body id="page1">
<div class="extra">
  <div class="main">
    <!--==============================header=================================-->
    <header>
      <div class="indent">
        <div class="row-top">
          <div class="wrapper">
            <h1><a href="index.html">Handyman</a></h1>
            <div class="support">         
              <h2><a href="handy_reister.html">Become a Professional</a></h3>
              <h2><a href="auth.html">Login/Sign Up</a></h2>            
            </div>
          </div>
        </div>
        <nav>
          <ul class="menu">
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="prices.html">Prices</a></li>
            <li><a href="staff.html">Our Staff</a></li>
            <li class="last"><a href="contacts.html">Contacts</a></li>
          </ul>
        </nav>
      </div>
      <div class="wrapper">
        <div class="slider">
          <ul class="items">
            <li><img src="images/slider-img1.jpg" alt=""></li>
            <li><img src="images/slider-img2.jpg" alt=""></li>
            <li><img src="images/slider-img3.jpg" alt=""></li>
          </ul>
        </div>
        <a class="prev">prev</a> <a class="next">next</a>
        <div class="banner1-bg"></div>
        <div class="banner-1"></div>
      </div>
    </header>
    <!--==============================booking================================-->
    <aside>
      <form action="" method="post" id="">
        <div class="options">
          <div class="order">
            <h2 class="steps">Step1: Select City</h2>
            <select>  
              <option value="">Select City</option>
              <option value="">Mumbai</option>
              <option value="">Pune</option>
              <option value="">Thane</option>
            </select>
            <div class="step2">
               <h2 class="steps">Step2: Select Your Service</h2>
              <div class="options">
                <div class="cols-1">
                  <div class="headerbox" >
                    <div class="aligncenter">
                      <h4>Plumber</h4>
                    </div>
                    <div class="footerbox" id="Plumber">
                      <div class="pad">
                        <h6 class="color-4">Taps, Tanks, Shower, Sanitaryware and more</h6>
         <!--               <p>Linior voluptatm accusantium doloremque laudantium totarem aperiam.</p> -->
                      </div>
                      <div class="sel_btn">
                      <input  type="radio" name="service" class="selection" value="Plumber" id="radio1" ><label for="radio1">Select</label></span>
          <!--            <div class="aligncenter"> <a class="button" href="#">Select</a> </div>
            -->        </div>
                      </div>
                  </div>
                </div>
                <div class="cols-2">
                  <div class="headerbox" >
                    <div class="aligncenter">
                      <h4>Electrician</h4>
                    </div>
                    <div class="footerbox" id="Electrician">
                      <div class="pad">
                        <h6 class="color-4">Fans, Lights, Refrigerator and more</h6>
                      </div>
                      <div class="sel_btn">
                        <input  type="radio" name="service" class="selection" value="Electrician" id="radio2" ><label for="radio2">Select</label></span>
          <!--            <div class="aligncenter"> <a class="button" href="#">Select</a> </div>
            -->       </div>   
                    </div>
                  </div>
                </div>
                <div class="cols-3">
                  <div class="headerbox" >
                    <div class="aligncenter">
                      <h4>Carpenter</h4>
                    </div>
                    <div class="footerbox" id="Carpenter">
                      <div class="pad">
                        <h6 class="color-4">Doors, Windows, Furniture and more</h6>
                      </div>
                      <div class="sel_btn">
                      <input  type="radio" name="service" class="selection" value="Carpenter" id="radio3" ><label for="radio3">Select</label></span>
          <!--            <div class="aligncenter"> <a class="button" href="#">Select</a> </div>
            -->      </div>
                      </div>
                  </div><div class="cols-4">
                  <div class="headerbox" >
                    <div class="aligncenter">
                      <h4>AC & Refrigerator</h4>
                    </div>
                    <div class="footerbox" id="ac">
                      <div class="pad">
                        <h6 class="color-4">AC Installation, Servicing, Gas Filling and more</h6>
                      </div>
                      <div class="sel_btn">
                      <input  type="radio" name="service" class="selection" value="Ac" id="radio4" ><label for="radio4">Select</label></span>
          <!--            <div class="aligncenter"> <a class="button" href="#">Select</a> </div>
            -->      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <h2 class="steps">Step3: Book Your Service</h2>
              <input class="" placeholder="Enter Mobile" style="width:20%; margin-left:10px; display:inline-block;" type="text" name="mobile" required="" id="login_mobile" value="" maxlength="10" pattern="[789][0-9]{9}">
              <button type="submit">Book</button>
            </div>
          </div>
        </div>
      </form>
    </aside>
<!----------------------------------------------------------------------->
  <div class="options">
    <div class="cols-1">
      <div class="headerbox" >
        <div class="aligncenter">
          <h4>Plumber</h4>
          <div class="footerbox" id="Plumber">
            <div class="pad">
              <h6 class="color-4">Taps, Tanks, Shower, Sanitaryware and more</h6>
                <a class="button" href="#">More Details</a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cols-2">
    <div class="headerbox" >
      <div class="aligncenter">
        <h4>Electrician</h4>
      </div>
    <div class="footerbox" id="Electrician">
      <div class="pad">
        <h6 class="color-4">Fans, Lights, Refrigerator and more</h6>
        <a class="button" href="#">More Details</a> 
      </div>
    </div>
  </div>
  
  <div class="cols-3">
    <div class="headerbox" >
      <div class="aligncenter">
        <h4>Carpenter</h4>
        <div class="footerbox" id="Carpenter">
          <div class="pad">
            <h6 class="color-4">Doors, Windows, Furniture and more</h6>
            <a class="button" href="#">More Details</a> 
          </div>
        </div>
      </div>
      <div class="cols-4">
        <div class="headerbox" >
          <div class="aligncenter">
            <h4>AC & Refrigerator</h4>        
            <div class="footerbox" id="ac">
              <div class="pad">
                <h6 class="color-4">AC Installation, Servicing, Gas Filling and more</h6>    
                <a class="button" href="#">More Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    





    <!--==============================aside================================-->
    <aside>
      <div class="wrapper">
        <div class="column-1">
          <div class="box">
            <div class="aligncenter">
              <h4>Electrical Services</h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <h6 class="color-1">Sed ut perspiciatis unde omnis</h6>
                <p>Linior voluptatm accusantium doloremque laudantium totarem aperiam.</p>
              </div>
              <div class="aligncenter"> <a class="button" href="#">More Details</a> </div>
            </div>
          </div>
        </div>
        <div class="column-1">
          <div class="box">
            <div class="aligncenter">
              <h4>Plumbing Services</h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <h6 class="color-1">Quasi architecto beatae vitae</h6>
                <p>Nemenim ipsam voluptatem quia voluptas aspernatur odit aut fugit.</p>
              </div>
              <div class="aligncenter"> <a class="button" href="#">More Details</a> </div>
            </div>
          </div>
        </div>
        
        <div class="column-2">
          <div class="box">
            <div class="aligncenter">
              <h4>Carpenter Services</h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <h6 class="color-1">Sed quia consequuntur magni</h6>
                <p>Doloresqui ratione voluptatem sequi neunt Neque porro quisquam dolorem.</p>
              </div>
              <div class="aligncenter"> <a class="button" href="#">More Details</a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column-2">
          <div class="box">
            <div class="aligncenter">
              <h4>AC & Refrigerator Services</h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <h6 class="color-1">Sed quia consequuntur magni</h6>
                <p>Doloresqui ratione voluptatem sequi neunt Neque porro quisquam dolorem.</p>
              </div>
              <div class="aligncenter"> <a class="button" href="#">More Details</a> </div>
            </div>
          </div>
        </div>
      </div>
    </aside>
<!----------------------------------------------------------------------------------->







    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h2>Welcome!</h2>
            <h6 class="prev-indent-bot">Handyman is one of free website templates created by TemplateMonster.com</h6>
            <p class="prev-indent-bot">This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid. Handyman Template goes with two packages – with PSD source files and without them. PSD<br>
              source files are available for free for the registered members of Templates.com. The basic pack<br>
              age (without PSD source) is available for anyone without registration.</p>
            This website template has several pages: <a class="color-2" href="index.html">Home Page</a>, <a class="color-2" href="services.html">Services</a>, <a class="color-2" href="faq.html">FAQ</a>, <a class="color-2" href="prices.html">Prices</a>, <a class="color-2" href="staff.html">Our Staff</a>, <a class="color-2" href="contacts.html">Contacts</a> (note that contact us form – doesn’t work). </div>
        </article>
        <article class="col-2">
          <h3>Testimonials</h3>
          <div class="wrapper indent-bot">
            <figure class="img-indent"><img src="images/page1-img1.jpg" alt=""></figure>
            <div class="extra-wrap text-1">
              <div class="margin-top">
                <h6><a class="link color-2" href="#">James Williams</a></h6>
                Lorem ipsum dolor sitmet consectetur adipisicing elit sed do eiusmod. </div>
            </div>
          </div>
          <div class="wrapper">
            <figure class="img-indent"><img src="images/page1-img2.jpg" alt=""></figure>
            <div class="extra-wrap text-1">
              <div class="margin-top">
                <h6><a class="link color-2" href="#">Thomas Seether</a></h6>
                Tempor incididunt utlabore et dolore magna aliqua ut enim ad minim veniam. </div>
            </div>
          </div>
        </article>
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="footer-bg">
      <p class="prev-indent-bot">Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved | Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></p>
      <ul class="list-services">
        <li><a class="tooltips" href="#"></a></li>
        <li class="item-1"><a class="tooltips" href="#"></a></li>
        <li class="item-2"><a class="tooltips" href="#"></a></li>
      </ul>
    </div>
  </div>
</footer>
<script>Cufon.now();</script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        duration: 800,
        easing: 'easeOutQuart',
        preset: 'simpleFade',
        slideshow: 7000,
        banners: false,
        pauseOnHover: true,
        waitBannerAnimation: false,
        prevBu: '.prev',
        nextBu: '.next'
    });
});
</script>
</body>
</html>
