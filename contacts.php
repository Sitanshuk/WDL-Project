<?php 
include("header.php")
?>
</header>
    <!--==============================content================================-->
    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h3 class="p1">Contact Form</h3>
            <form id="contact-form" action="mail.php" method="post" >
              <fieldset>
                <label><span class="text-form">Full Name:</span>
                  <input type="text" name="name" required>
                </label>
                <label><span class="text-form">E-mail:</span>
                  <input type="text" name="email" required>
                </label>
                <label><span class="text-form">Telephone:</span>
                  <input type="text" name="telephone" required>
                </label>
                <div class="wrapper">
                  <div class="text-form">Message:</div>
                  <div class="extra-wrap">
                    <textarea name="message" required></textarea>
                  </div>
                </div>
                <div style="padding: 5vh 0 0 6vw">
                <input type="submit" name="submit" value="SEND">
                </div>
              <!--  <div class="buttons"> <a class="button-2" href="#">Clear</a> <a class="button-2" href="#">Send</a> </div>-->
              </fieldset>
            </form>
          </div>
        </article>
        <article class="col-2">
          <h3 class="p1">Our Contacts</h3>
          <h6>Thane</h6>
          <dl class="img-indent-bot">
            <dt>1001 Blah Estate, Bhyander</dt>
            <dd><span>Telephone:</span><strong>+91 989 200 0111</strong></dd>
            <dd><span>Fax:</span><strong>+91 989 200 0111</strong></dd>
            <dd><span>Email:</span><strong><a href="#">mail@snvservices.com</a></strong></dd>
          </dl>
          <h6>Mumbai</h6>
          <dl class="img-indent-bot">
            <dt>2001 Blah Industries, Malad</dt>
            <dd><span>Telephone:</span><strong>+91 959 603 6035</strong></dd>
            <dd><span>Fax:</span><strong>+91 504 889 9898</strong></dd>
            <dd><span>Email:</span><strong><a href="#">mail@snvservices.com</a></strong></dd>
          </dl>
          <h6>Pune</h6>
          <dl>
            <dt>3001 Manchiwada, Pune</dt>
            <dd><span>Telephone:</span><strong>+91 959 603 6035</strong></dd>
            <dd><span>Fax:</span><strong>+91 504 889 9898</strong></dd>
            <dd><span>Email:</span><strong><a href="#">mail@snvservices.com</a></strong></dd>
          </dl>
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
