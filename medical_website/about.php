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

<!-- about section -->

<section class="about_section layout_padding">
    
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>

        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                ABOUT <span>US</span>
              </h2>
            </div>
            <p>
                Welcome to Dolphin Physician Care, where health meets compassion and innovation. As a premier healthcare provider, we take pride in delivering exceptional medical services that prioritize your well-being and elevate your quality of life.
            </p>
            <p>
                At Dolphin Physician Care, our vision is to create a healthier community by providing patient-centered, comprehensive healthcare services that inspire and empower individuals to lead vibrant lives. We believe that every person deserves access to top-tier medical care that not only treats ailments but also nurtures holistic wellness.
            </p>
    </div>
    </div>
</div>
</div>
</section>

  <!-- end about section -->

  <!-- info section and footer -->
<?php
    include(dirname(__DIR__).'/medical_website/templates/info.php');
    include(dirname(__DIR__).'/medical_website/templates/footer.php');
?>