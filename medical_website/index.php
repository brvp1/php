<?php
    define('TITLE', 'Dolphin Physican Care | Home');
    include(dirname(__DIR__).'/medical_website/templates/boilerplate.php');
?>

<body>
    <div class="hero_area">
<?php
    include(dirname(__DIR__).'/medical_website/templates/header.php');
    if (is_registered()) {
        print "<p style=\"text-align: center;\">Welcome, <b>{$_SESSION['first_name']}</b>!</p>";
    }
?>
    
    <!-- slider section -->
    <section class="slider_section ">
      <div class="dot_design">
        <img src="images/dots.png" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                    <span>
                        Dolphin
                      </span><br>
                      Physician Care 
                    </h1>
                    <p>
                        We are committed to providing exceptional medical care that prioritizes your health and wellness. Our team of experienced physicians and healthcare professionals is dedicated to delivering personalized, compassionate, and evidence-based care to every patient we serve.
                    </p>
                    <a href="services.php">
                      Our Services
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                    <span>
                        Dolphin
                      </span><br>
                      Physician Care 
                    </h1>
                    <p>
                        With a strong focus on preventive medicine, accurate diagnosis, and advanced treatment options, we strive to empower you with the knowledge and tools you need to make informed decisions about your health. Our state-of-the-art facilities, cutting-edge technology, and collaborative approach ensure that you receive the highest quality care possible.
                    </p>
                    <a href="about.php">
                      About Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      Dolphin <br>
                      <span>
                        Physician Care
                      </span>
                    </h1>
                    <p>
                        Discover healthcare that goes beyond expectations. Experience the Dolphin Physician Care difference firsthand by scheduling your appointment today. Your journey to optimal health starts here."
                    </p>
                    <a href="team.php">
                       Our Team
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <img src="images/prev.png" alt="">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <img src="images/next.png" alt="">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- about section -->

  <section class="about_section">
    <div class="container  ">
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
            At Dolphin Physician Care, our vision is to create a healthier community by providing patient-centered, comprehensive healthcare services that inspire and empower individuals to lead vibrant lives. We believe that every person deserves access to top-tier medical care that not only treats ailments but also nurtures holistic wellness.
            </p>
            <a href="about.php">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- treatment section -->

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

  <!-- end treatment section -->

  <!-- team section -->

  <section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Doctors</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/team1.jpg" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Helen
                </h5>
                <h6>
                  Opthalmology
                </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/team2.jpg" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Dr. Laurn Strauss
                </h5>
                <h6>
                  Pediatric Care
                </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/team3.jpg" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Marco
                </h5>
                <h6>
                  Rehabilitation
                </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end team section -->


  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>Testimonials</span>
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Eric Martin
                  </h5>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              Security and Registration welcome me with BIG Smiles, Professionals at its BEST. Your staff was attentive and caring. The nurses the anesthesiologist and Dr. Lauren Strauss treated me like family. Dr. Strauss did exactly what he said he would do.😊 Dolphin Physician Care is definitely rated #1. I received the BEST care and my pain level was very low. I'm telling everyone about the love your hospital staff pours into your patients. This is not my first experience receiving the BEST care from your hospital staff. Dolphin Physician Care, you do care about people, Health and I thank you. Lets not forget the levels of this hospital, it's clean, it smells good and looks good inside and out😍 On Wednesday your nurse checked in on me by phone and i truly appreciated receiving that call. Thanks for hiring the BEST OF THE BEST. Thank you all for taking good care of me and may God Bless You ALL, Love you guys   💛❤️ 
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Ronnie Rothson
                  </h5>
            
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              This was the best experience I have ever had in a clinic! From the minute I entered the door until I left the building! I was treated with white glove service. The facilities are so pristine and clean, I felt I was in a four star hotel and not a hospital. The staff was fabulous - I have never seen such well trained employees in customer service in a medical environment as in this clinic! From the concierge service at the front desk to the technician caring out my test - My hat off to you and the management and trainers involved in making this experience happen! I will spread the word and if needed I will definitely choose this hospital over any other!! Congratulations!!
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Brad Jones
                  </h5>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              The doctors, nurses, food staff, managers and maintenance were all amazing. Words can't express how pleasant my stay was or how much good I have to say on their behalf but other than I'm glad I gave birth here. 10/10 would definitely recommend!
              </p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  

<?php
    include(dirname(__DIR__).'/medical_website/templates/info.php');
    include(dirname(__DIR__).'/medical_website/templates/footer.php');
?>