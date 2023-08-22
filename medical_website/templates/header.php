    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +1 239-555-5555
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : info@dolphinphysiciancare.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Ft. Myers, FL
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <img src="images/dolphin.png" alt="">
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="team.php">Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="reviews.php">Reviews</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="book_appointment.php">Book Appointment</a>
                  </li>
                </ul>
              </div>
              <div class="quote_btn-container">
                <?php 
                    if (is_registered()) {
                       print '<a href="logout.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>
                            Logout
                        </span>
                        </a>';
                    }  else {
                        print '<a href="login.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>
                          Login
                        </span>
                      </a>';
                    }

                    if (is_registered()) {
                        print '<a href="signup.php" hidden>
                        <i class="fa fa-user" aria-hidden="true" hidden></i>
                        <span>
                          Sign Up
                        </span>
                      </a>';
                    } else {
                        print '<a href="signup.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>
                          Sign Up
                        </span>
                      </a>';
                    }
                ?>
                
                <a href="signup.php" hidden>
                  <i class="fa fa-user" aria-hidden="true" hidden></i>
                  <span>
                    Sign Up
                  </span>
                </a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
?>