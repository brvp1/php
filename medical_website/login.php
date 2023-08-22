<?php
define('TITLE', "Dolphin Physican Care | Login");
include dirname(__DIR__) . "/medical_website/templates/boilerplate.php";
?>

<body class="sub_page">
    <div class="hero_area">

<?php
    include(dirname(__DIR__). '/medical_website/templates/header.php');
?>
</div>

<?php

$error = false;
$db_email = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include(dirname(__DIR__).'/medical_website/mysqli_connect.php');

    $query = "SELECT first_name, email, password FROM patient WHERE email = '" . $_POST['email'] . "'";

    try {

        $result = mysqli_query($dbc, $query);

        if ($row = mysqli_fetch_array($result)) {

            $db_first_name = $row['first_name'];
            $db_email = $row['email'];
            $db_password = $row['password'];

        } else {

            $error = true;

        }

    } catch (mysqli_sql_exception $e) {

        error_log($e->__toString(), 3, "/var/www/html/medical_website/my-errors.log");

    } finally {

        mysqli_close($dbc);
    }

    // handle the form
    if ((!empty($_POST['email']) && (!empty($_POST['password'])))) {

        if (($_POST['email'] == $db_email)
            && (sha1(trim($_POST['password'])) == $db_password) && !$error) {

            $_SESSION['first_name'] = $db_first_name;
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['loggedin'] = true;

            //redirect to home page
            ob_end_clean(); 
            header('Location: index.php');
            exit();

        } else {

            print '<p class="text-danger">The submitted email and password do not match those on file!<br>Try again.</p>';

        }
    } else { // Forgot a field

        print '<p class="text-danger">Please make sure you enter both an email and a password.</p>';

    }
} //else { // Display the form
?>
  <!-- login section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <br>
        <h2>
          Log In
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">

            <form action="login.php" method="post">
              <div>
                <label for="email" hidden></label>
                <input type="email" name="email" size="20" placeholder="Email">
              </div>
              <div>
                <label for="password" hidden></label>
                <input type="password" name="password" placeholder="Password" size="20">
              </div>
             
              <div class="btn_box">
                <button type="submit" name="submit">
                  Log In
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
  <!-- end loggin section -->

<?php
//}
    include(dirname(__DIR__).'/medical_website/templates/info.php');
    include(dirname(__DIR__).'/medical_website/templates/footer.php');
?>