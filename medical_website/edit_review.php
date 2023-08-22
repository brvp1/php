<?php
    define('TITLE', 'Dolphin Physican Care | Edit Review');
    include(dirname(__DIR__).'/medical_website/templates/boilerplate.php');
?>

<body class="sub_page">
    <div class="hero_area">

<?php
    include(dirname(__DIR__). '/medical_website/templates/header.php');
?>
</div>

<?php

// Cannot access edit page without logging in
if (!is_registered()) {
	print '<br><h2>Access Denied!</h2><p class="text-danger">You do not have permission to access this page.</p>
    <p>Please <a href="login.php">login</a> to access this page.</p>
    <p>New patient? Click <a href="signup.php">here</a> to register.<br>';

    include(dirname(__DIR__).'/medical_website/templates/info.php');
	include(dirname(__DIR__).'/medical_website/templates/footer.php');
	exit();
}


include(dirname(__DIR__).'/medical_website/mysqli_connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0) ) { 
    
	$query = "SELECT title, patient_full_name, doctors_name, department, review FROM review WHERE id={$_GET['id']}";

	if ($result = mysqli_query($dbc, $query)) { 

		$row = mysqli_fetch_array($result); 

print '
<section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <br>
        <h2>
          Edit Your Review
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">

            <form action="edit_review.php" method="post">

                <div>
                    <label for="title">Review Title: </label>
                    <input type="text" name="title" value="' . htmlentities($row['title']) . '">
                </div>

                <div>
                    <label for="patient_full_name" >Patient\'s Full Name</label>
                    <input type="text" name="patient_full_name" value="' . htmlentities($row['patient_full_name']) . '">
                </div>

                <div>
                    <label for="doctors_name">Doctor\'s Name</label>
                    <input type="text" name="doctors_name" value="' . htmlentities($row['doctors_name']) . '">
                </div>

                <div>
                    <label for="department">Department</label>
                    <input type="text" name="department" value="' . htmlentities($row['department']) . '">
                </div>

                <div>
                    <label for="review" >Update your review: </label>
                    <textarea type="text" cols="75" rows="10" class="message_box" name="review">' 
                        . htmlentities($row['review']) .
                    '</textarea>
                </div>

            
			<input type="hidden" name="id" value="' . $_GET['id'] . '">
			<div class="btn_box"><button type="submit" name="submit">Update Review</button></p>
             
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
  </section>';

	} else { // Couldn't get the information.
		print '<p class="text-error">Could not retrieve the review because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
	}

} elseif (isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0)) { // Handle the form.

	// Validate and secure the form data:
	$problem = FALSE;
	if ( !empty($_POST['title']) && !empty($_POST['review']) ) {

		// Prepare the values for storing:
		$title = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['title'])));
		$review = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['review'])));

	} else {
		print '<p class="text-danger">Please submit both a title and a review.</p>';
		$problem = TRUE;
	}

	if (!$problem) {

		// Define the query.
		$query = "UPDATE review SET title='$title', review='$review' WHERE id={$_POST['id']}";

		if ($result = mysqli_query($dbc, $query)) {
			print '<p class="text-success">The review has been updated.</p>';

            ob_end_clean();
            header('Location: reviews.php');
            exit();

		} else {
			print '<p class="text-danger">Could not update the review because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
		}

	} // No problem!

} else { // No ID set.
	print '<p class="text-danger">This page has been accessed in error.</p>';
} // End of main IF.

mysqli_close($dbc);


// info section and footer

    include(dirname(__DIR__).'/medical_website/templates/info.php');
    include(dirname(__DIR__).'/medical_website/templates/footer.php');
?>