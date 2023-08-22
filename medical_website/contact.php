<?php
    define('TITLE', 'Dolphin Physican Care | About');
    include(dirname(__DIR__).'/medical_website/templates/boilerplate.php');
?>

<body class="sub_page">
    <div class="hero_area">

<?php
    include(dirname(__DIR__). '/medical_website/templates/header.php');
?>
</div>

  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <br>
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Full Name" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

    <!-- info section and footer -->
<?php
    include(dirname(__DIR__).'/medical_website/templates/info.php');
    include(dirname(__DIR__).'/medical_website/templates/footer.php');
?>