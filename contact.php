<!DOCTYPE html>
<html lang="en">

<head>
  <?php include dirname(__FILE__) . '/layouts/meta.php' ?>
</head>

<body>

  <div id="preloader">
    <div class="loader absolute-center">
      <div class="loader__box"><b class="top"></b></div>
      <div class="loader__box"><b class="top"></b></div>
      <div class="loader__box"><b class="top"></b></div>
    </div>
  </div>

  <!--================ Frist hader Area =================-->
  <?php include dirname(__FILE__) . '/layouts/header.php' ?>
  <!--================End Footer Area =================-->

  <!--================End Footer Area =================-->
  <?php include dirname(__FILE__) . '/layouts/menu.php' ?>
  <!--================End Footer Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h4>ติดต่อเอะบิสึซูชิ</h4>
                    <a href="#">หน้าแรก</a>
                    <a class="active" href="gallery.php">ติดต่อเอะบิสึซูชิ</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact_details">
                            <h3 class="contact_title">Contact Info</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majori have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a pas of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <h4>ที่อยู่</h4>
                                    <h5>Ebisu Sushi & Izakaya เอะบิสึซูชิ, <br />213/92 ซอย ลพบุรีราเมศวร์, <br />คลองแห หาดใหญ่ 90110</h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <h4>โทรศัพท์</h4>
                                    <h5>093-690-0670</h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="media-body">
                                    <h4>อีเมล</h4>
                                    <h5>praelada.panich@gmail.com</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row contact_form_area">
                            <h3 class="contact_title">Send Message</h3>
                            <form action="contact_process.php" method="post" id="contactForm">
                                <div class="form-group col-md-12">
                                  <input type="text" class="form-control" id="name" name="name" placeholder="First Name*">
                                </div>
                                <div class="form-group col-md-12">
                                  <input type="text" class="form-control" id="last" name="last" placeholder="Last Name*">
                                </div>
                               
                                <div class="form-group col-md-12">
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email*">
                                </div>
                                 <div class="form-group col-md-12">
                                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                </div>
                                <div class="form-group col-md-12">
                                  <textarea class="form-control" id="message" name="message" placeholder="Write Message"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button class="btn btn-default submit_btn" type="submit">Send Message</button>
                                 </div>
                            </form>
                            <div id="success">
                                <p>Your text message sent successfully!</p>
                            </div>
                            <div id="error">
                                <p>Sorry! Message not sent. Something went wrong!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact Area =================-->
        
        <!--================Map Area =================-->
        <div id="mapBox" class="mapBox row m0" 
        data-lat="7.0311052" 
        data-lon="100.4660972" 
        data-zoom="10"></div>
        <!--================End Map Area =================-->

  <!--================End Recent Blog Area =================-->
  <?php include dirname(__FILE__) . '/layouts/footer.php' ?>
  <?php include dirname(__FILE__) . '/layouts/script.php' ?>
  <!--================End Recent Blog Area =================-->

</body>
</html>