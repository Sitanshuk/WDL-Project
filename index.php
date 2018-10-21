<?php
include("header.php")
?>
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
        <form method="POST" action="test.php">

            <h3 class="prev-indent-bot">
                <center>Place Your Order
            </h3>
            </center>
            <hr width=30%>

            <div class="options">
                <div class="order">
                    <h2 class="steps" style="text-align: center">Step1: Select City</h2>
                    <div style="margin: 5px auto 0px auto;width: 200px;">
                        <select name="city" style="width: 100%;padding: 5px;" required>
                            <option value="">Select City</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Pune">Pune</option>
                            <option value="Thane">Thane</option>
                        </select>
                    </div>
                    <div class="step2">
                        <h2 class="steps" style="padding-top:20px;padding-bottom: 5px;text-align: center">Step2: Select Your Service</h2>
                        <div class="options">
                            <div class="cols-1">
                                <div class="headerbox">
                                    <div class="aligncenter">
                                        <h4>Plumber</h4>
                                    </div>
                                    <div class="footerbox" id="Plumber">
                                        <div class="pad" style="z-index: 99;position: relative;">
                                            <h6 class="color-4 services-txt">Taps, Tanks, Shower, Sanitaryware and more</h6>
                                            <!--               <p>Linior voluptatm accusantium doloremque laudantium totarem aperiam.</p> -->
                                        </div>
                                        <div class="sel_btn">
                                            <input type="radio" name="service" class="selection" value="Plumber"
                                                   id="radio1"><label for="radio1">Select</label></span>
                                            <!--            <div class="aligncenter"> <a class="button" href="#">Select</a> </div>
                                              -->        </div>
                                        <div class="tran-bg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cols-2">
                                <div class="headerbox">
                                    <div class="aligncenter">
                                        <h4>Electrician</h4>
                                    </div>
                                    <div class="footerbox" id="Electrician">
                                        <div class="pad" style="z-index: 99;position: relative;">
                                            <h6 class="color-4 services-txt">Fans, Lights, Refrigerator <br>and more</h6>
                                        </div>
                                        <div class="sel_btn">
                                            <input type="radio" name="service" class="selection" value="Electrician"
                                                   id="radio2"><label for="radio2">Select</label></span>
                                            <!--            <div class="aligncenter"> <a class="button" href="#">Select</a> </div>
                                              -->       </div>
                                        <div class="tran-bg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cols-3">
                                <div class="headerbox">
                                    <div class="aligncenter">
                                        <h4>Carpenter</h4>
                                    </div>
                                    <div class="footerbox" id="Carpenter">
                                        <div class="pad" style="z-index: 99;position: relative;">
                                            <h6 class="color-4 services-txt">Doors, Windows, Furniture and more</h6>
                                        </div>
                                        <div class="sel_btn">
                                            <input type="radio" name="service" class="selection" value="Carpenter"
                                                   id="radio3"><label for="radio3">Select</label></span>
                                            <!--            <div class="aligncenter"> <a class="button" href="#">Select</a> </div>
                                              -->      </div>
                                        <div class="tran-bg"></div>
                                    </div>
                                </div>
                                <div class="cols-4">
                                    <div class="headerbox">
                                        <div class="aligncenter">
                                            <h4>AC & Refrigerator</h4>
                                        </div>
                                        <div class="footerbox" id="ac">
                                            <div class="pad" style="z-index: 99;position: relative;">
                                                <h6 class="color-4 services-txt">AC Installation, Servicing, Gas Filling and
                                                    more</h6>
                                            </div>
                                            <div class="sel_btn">
                                                <input type="radio" name="service" class="selection" value="Ac"
                                                       id="radio4"><label for="radio4">Select</label></span>
                                                <!--            <div class="aligncenter"> <a class="button" href="#">Select</a> </div>
                                                  -->      </div>
                                            <div class="tran-bg"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding-top: 20px;text-align: center;padding-bottom: 30px;">
                            <h2 class="steps" style="padding-bottom: 5px;">Step3: Enter Your Contact Number</h2>
                            <input class="" placeholder="Enter Contact Number"
                                   style="padding:5px;width:20%; margin-left:10px; display:inline-block;" type="text" name="mobile"
                                   required id="login_mobile" value="" maxlength="10" pattern="[789][0-9]{9}">
                            <button type="submit" value="Send" style="padding:5px;">Book</button>

                        </div>
        </form>
        </div>
        </div>

    </aside>

    <!----------------------------------------------------------------------->
    <article>
        <div class="indent-left">

            <div class="wrapper prev-indent-bot">
                <div class="extra-wrap">
                    <h3 class="prev-indent-bot">
                        <center>Our Services
                    </h3>
                    </center>
                    <hr width=30%>
                    <h6 class="prev-indent-bot">
                        <center>We love living in a home which well maintained left, right and center. <br>Use our
                            services to keep your home in shape, 24 x7.
                        </center>
                    </h6>
                </div>
            </div>

        </div>
    </article>

    <div class="options">

        <div class="headerbox float-left">
            <div class="aligncenter">
                <h4>Plumber</h4>
            </div>
            <div class="footerbox" id="Plumber">
                <div class="pad" style="z-index: 99;position: relative;">
                    <h6 class="color-4 services-txt">Taps, Tanks, Shower, Sanitaryware and more</h6>
                    <a class="button" href="services.php?service=plumbing">More Details</a>
                </div>
                <div class="tran-bg"></div>
            </div>
        </div>

        <div class="headerbox float-left">
            <div class="aligncenter">
                <h4>Electrician</h4>

                <div class="footerbox" id="Electrician">
                    <div class="pad" style="z-index: 99;position: relative;">
                        <h6 class="color-4 services-txt">Fans, Lights, Refrigerator <br>and more</h6>
                        <a class="button" href="services.php?service=electrician">More Details</a>
                    </div>
                    <div class="tran-bg"></div>
                </div>
            </div>
        </div>

        <div class="headerbox float-left">
            <div class="aligncenter">
                <h4>Carpenter</h4>
                <div class="footerbox" id="Carpenter">
                    <div class="pad" style="z-index: 99;position: relative;">
                        <h6 class="color-4 services-txt">Doors, Windows, Furniture and more</h6>
                        <a class="button" href="services.php?service=carpentry">More Details</a>
                    </div>
                    <div class="tran-bg"></div>
                </div>
            </div>
        </div>

        <div class="headerbox float-left">
            <div class="aligncenter">
                <h4>AC & Refrigerator</h4>
                <div class="footerbox" id="ac">
                    <div class="pad" style="z-index: 99;position: relative;">
                        <h6 class="color-4 services-txt">AC Installation, Servicing, Gas Filling and more</h6>
                        <a class="button" href="services.php?service=acrefg">More Details</a>
                    </div>
                    <div class="tran-bg"></div>
                </div>
            </div>
        </div>

    </div>
    <!--    </div>-->
    <!----------------------------------------------------------------------------------->


    <!--==============================content================================-->
    <section id="content">
        <div class="wrapper">
            <article class="col-1">
                <div class="indent-left">

                    <icon scr="">
                        <h2><i class="icon-award"></i> High Quality & Trusted Professionals</h2>
                        <p>We provide only verified, background checked and high quality professionals</p>

                        <h2><i class="icon-ok-circled"></i> Matched to Your Needs</h2>
                        <p>We match you with the right professionals with the right budget</p>

                        <h2><i class="icon-thumbs-up-alt"></i> Hassle Free Service Delivery</h2>
                        <p>Super convenient, guaranteed service from booking to delivery</p>

                </div>
            </article>
            <article class="col-2">
                <h3>Testimonials</h3>
                <div class="wrapper indent-bot">
                    <figure class="img-indent"><img src="images/page1-img1.jpg" alt=""></figure>
                    <div class="extra-wrap text-1">
                        <div class="margin-top">
                            <h6><a class="link color-2" href="#">James Williams</a></h6>
                            Lorem ipsum dolor sitmet consectetur adipisicing elit sed do eiusmod.
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <figure class="img-indent"><img src="images/page1-img2.jpg" alt=""></figure>
                    <div class="extra-wrap text-1">
                        <div class="margin-top">
                            <h6><a class="link color-2" href="#">Thomas Seether</a></h6>
                            Tempor incididunt utlabore et dolore magna aliqua ut enim ad minim veniam.
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="block"></div>
    </section>
    </div>
    </div>
    <!--==============================footer=================================-->
<?php
include('footer.php');
?>