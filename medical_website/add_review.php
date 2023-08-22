<?php
    define('TITLE', 'Dolphin Physican Care | Add Review');
    include(dirname(__DIR__).'/medical_website/templates/boilerplate.php');
?>

<body class="sub_page">
    <div class="hero_area">

<?php
    include(dirname(__DIR__). '/medical_website/templates/header.php');
?>
</div>


<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!is_registered()) {
    print '<h2>Access Denied!</h2><p class="text-danger">Please log in or register to add your review</p>';

    include(dirname(__DIR__).'/medical_website/templates/info.php');
    include(dirname(__DIR__).'/medical_website/templates/footer.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $problem = false;

    if (!empty($_POST['title']) && !empty($_POST['patient_full_name']) && !empty($_POST['doctors_name'])  && !empty($_POST['department']) && !empty($_POST['review'])) {

        $title = $_POST['title'];
        $patient_full_name = $_POST['patient_full_name'];
        $doctors_name = $_POST['doctors_name'];
        $department = $_POST['department'];
        $review = $_POST['review'];

    } else {

        print '<p class="text-danger">Please complete all the fields.</p>';

        $problem = true;

    }

    if (!$problem) {

        include(dirname(__DIR__).'/medical_website/mysqli_connect.php');

        try {

            $title = mysqli_real_escape_string($dbc, trim(strip_tags($title)));

            $patient_full_name = mysqli_real_escape_string($dbc, trim(strip_tags($patient_full_name)));

            $doctors_name = mysqli_real_escape_string($dbc, trim(strip_tags($doctors_name)));

            $department = mysqli_real_escape_string($dbc, trim(strip_tags($department)));

            $review = mysqli_real_escape_string($dbc, trim(strip_tags($review)));

            $query = "INSERT INTO review (title, patient_full_name, doctors_name, department, review, date_entered) VALUES ('$title', '$patient_full_name', '$doctors_name', '$department',' $review', NOW())";

            mysqli_query($dbc, $query);

            if (mysqli_affected_rows($dbc) == 1) {

                print '<p class="text-success">Your blog entry has been added!</p>';
            }

        } catch (mysqli_sql_exception $e) {

            print $e->getMessage();

            error_log($e->__toString(), 3, "/var/www/html/medical_website/my-errors.log");

        } finally {

            mysqli_close($dbc);

        }

    } // No problem

} // end IF

?>

<section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <br>
        <h2>
          Add Your Review
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">

            <form action="add_review.php" method="post">

                <div>
                    <label for="title" hidden></label>
                    <input type="text" name="title" size="50" maxsize="100" placeholder="Review Title">
                </div>

                <div>
                    <label for="patient_full_name" hidden></label>
                    <input type="text" name="patient_full_name" size="50" maxsize="100" placeholder="Patient's Full Name">
                </div>

                <div>
                    <label for="doctors_name" hidden></label>
                    <input type="text" name="doctors_name" size="50" maxsize="100" placeholder="Doctor's Name">
                </div>

                <div>
                    <label for="department" hidden></label>
                    <input type="text" name="department" size="50" placeholder="Department">
                </div>

                <label for="review" style="color: #00c6a9;">Write your review: </label>
                    <textarea class="message-box" type="text" cols="60" rows="10" class="message_box" name="review"></textarea>
             
              <div class="btn_box">
                <button type="submit" name="submit">
                  Submit
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

  <div></div>

 <!-- info section and footer -->
 <?php
    include(dirname(__DIR__).'/medical_website/templates/info.php');
    include(dirname(__DIR__).'/medical_website/templates/footer.php');
?>