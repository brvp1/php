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

<br>
<div class="heading_container heading_center">
        <h2>
          PATIENT <span>REVIEWS</span>
        </h2>
      </div>

  <!-- add review -->
  <br>
  <div style="display: flex; justify-content: center;">
    <a href="add_review.php" style="text-align: center;">
        <button style="background-color: #00c6a9;
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;">
            Add Review
        </button>
    </a>
</div>
<br>
  <!-- end add review -->

  <section class=\"about_section layout_padding\">

  <!-- view all reviews -->
  <?php
  include(dirname(__DIR__) . '/medical_website/mysqli_connect.php');

// Define the query:
$query = 'SELECT id, title, patient_full_name, doctors_name, department, review, date_entered FROM review ORDER BY id DESC';

try {
    // Run the query:
    if ($result = mysqli_query($dbc, $query)) {

        // Retrieve the returned records:
        while ($row = mysqli_fetch_array($result)) {

            $title = $row['title'];
            $patient_full_name = $row['patient_full_name'];
            $doctors_name = $row['doctors_name'];
            $department = $row['department'];
            $review = $row['review'];
            $date_entered = $row['date_entered'];

            print "
            <div class=\"container\">
            <div class=\"row\">
                <div class=\"detail-box\">
                    <div class=\"heading_container\">
                        <h4 style=\"color: #00c6a9;\">
                            $title
                        </h4>
                        </div>
                        <div>
                        <b>Patient Name:</b> $patient_full_name
                        <b>Doctor's Name:</b> $doctors_name
                        <b>Department:</b> $department
                        <b>Date:</b> $date_entered
                        </p>
                        <p>
                        <b>Review: </b>
                        $review
                        </p>
                        <p><a href=\"edit_review.php?id={$row['id']}\">Edit</a> | <a href=\"delete_review.php?id={$row['id']}\">Delete</a></p></div>\n
                        </div>
                    </div>
                </div>
                </div>
                <hr>";
                        
        } // End of while loop.

        print '</section>';

    }
} catch (mysqli_sql_exception $e) {
    
    print '<p class="error">Could not retrieve the data because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';

    error_log($e->__toString(), 3, "/var/www/html/project3/my-errors.log");

} finally {

    mysqli_close($dbc);

}

    // info section and footer
    include(dirname(__DIR__).'/medical_website/templates/info.php');
    include(dirname(__DIR__).'/medical_website/templates/footer.php');
?>