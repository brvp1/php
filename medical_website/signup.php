<?php
define('TITLE', "Dolphin Physican Care | Sign Up");
include dirname(__DIR__) . "/medical_website/templates/boilerplate.php";
?>

<body class="sub_page">
    <div class="hero_area">

<?php
    include(dirname(__DIR__). '/medical_website/templates/header.php');
?>
</div>

<div class="container">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $problem = false; 

    if (empty(trim($_POST['first_name']))) {
        $problem = true;
        print '<p class="text-danger">Please enter your first name!</p>';
    }

    if (empty(trim($_POST['last_name']))) {
        $problem = true;
        print '<p class="text-danger">Please enter your last name!</p>';
    }

    if ( empty(trim($_POST['email'])) || (substr_count($_POST['email'], '@') != 1)) {
        $problem = true;
        print '<p class="text-danger">Please enter your email address!</p>';
    }

    if (empty($_POST['password'])) {
        $problem = true;
        print '<p class="text-danger">Please enter a password!
        </p>';
    }

    if ($_POST['password'] != $_POST['cpassword']) {
        $problem = true;
        print '<p class="text-danger">Your password did not match your confirmed password!</p>';
    }

    if (!$problem) {

        include(dirname(__DIR__).'/medical_website/mysqli_connect.php');

        try {
            $first_name = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['first_name'])));
            $last_name = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['last_name'])));
            $email = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['email'])));
            $password = mysqli_real_escape_string($dbc, trim(strip_tags(sha1($_POST['password']))));

            $query = "INSERT INTO patient (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";

            mysqli_query($dbc, $query);

            print '<p class="text-success">You are now registered to Dolphin Physician Care!</p>';

        } catch (mysqli_sql_exception $e) {

            print '<p class="text--danger">Could not register because:<br>' .  mysqli_error($dbc);

            error_log($e->__toString(), 3, "/var/www/html/medical_website/my-errors.log");

        } finally {

            mysqli_close($dbc);
        }

        // Clear the posted values:
        $_POST = [];

    } else { // Forgot a field

        print '<p class="text-danger">Please try again!</p>';
        
    }
} // end of handle form IF.
?>
</div>

  <!-- sign up section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <br>
        <h2>
          Sign Up
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="signup.php" method="post">
              <div>
                <label for="first_name" hidden></label>
                <input type="text" name="first_name" 
                       placeholder="First Name" size="20" 
                       value="<?php
                                if (isset($_POST['first_name'])) {
                                    print htmlspecialchars($_POST['first_name']);
                                } ?>" />
              </div>
              <div>
                <label for="last_name" hidden></label>
                <input type="text" name="last_name" 
                       placeholder="Last Name" size="20" 
                       value="<?php
                                if (isset($_POST['last_name'])) {
                                    print htmlspecialchars($_POST['last_name']);
                                } ?>" />
              </div>
              <div>
                <label for="email" hidden></label>
                <input type="email" name="email" 
                        placeholder="Email" size="20" 
                        value="<?php
                                 if (isset($_POST['email'])) {
                                        print htmlspecialchars($_POST['email']);
                                     } ?>" />
              </div>
              <div>
                <label for="password" hidden></label>
                <input type="password" name="password" 
                        placeholder="Password" size="20" 
                        value="<?php
                                 if (isset($_POST['password'])) {
                                        print htmlspecialchars($_POST['password']);
                                     } ?>" />
              </div>
              <div>
              <label for="cpassword" hidden></label>
                <input type="password" name="cpassword" 
                        placeholder="Confirm Password" size="20" 
                        value="<?php
                                 if (isset($_POST['password'])) {
                                        print htmlspecialchars($_POST['cpassword']);
                                     } ?>" />
              </div>
              <div class="btn_box">
                <button type="submit" name="submit" value="Sign Up">
                    Sign Up
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
  <!-- end sign up section -->

  <!-- info and footer section -->
<?php
    include(dirname(__DIR__).'/medical_website/templates/info.php');
    include(dirname(__DIR__).'/medical_website/templates/footer.php');
?>
<!-- end info and footer section -->