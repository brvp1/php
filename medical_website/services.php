<?php
    define('TITLE', 'Dolphin Physican Care | Services');
    include(dirname(__DIR__).'/medical_website/templates/boilerplate.php');
?>

<body class="sub_page">
    <div class="hero_area">

<?php
    include(dirname(__DIR__). '/medical_website/templates/header.php');
?>
</div>


 
<section class="treatment_section layout_padding">
    <div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          OUR <span>SERVICES</span>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="images/barbell.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Rehabilitation
              </h4>
              <p>
              We provide personalized treatments using advanced methods and equipment, aiding recovery from injuries, surgeries, and conditions for improved well-being and independence.
              </p>
              
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="images/t2.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Opthalmology
              </h4>
              <p>
              Our ophthalmology department offers expert eye care, diagnosing and treating various conditions with advanced techniques, promoting clear vision and eye health for all patients.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="images/t3.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Pediatrician Clinic
              </h4>
              <p>
              Our pediatric department specializes in compassionate and comprehensive medical care for children, ensuring their health, growth, and development through expert diagnostics and treatments.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="images/t4.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Parental Care
              </h4>
              <p>
                Our parental care department provides guidance and medical support for expecting parents, offering prenatal classes, consultations, and services to ensure a healthy pregnancy journey and positive birthing experience.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




<!-- info section and footer -->
<?php
    include(dirname(__DIR__).'/medical_website/templates/info.php');
    include(dirname(__DIR__).'/medical_website/templates/footer.php');
?>