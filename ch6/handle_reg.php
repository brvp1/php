<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
//set title
$title = "Registration";

include dirname(__DIR__) . "/templates/header.php"; 

echo "<h1>Registration Results</h1>";
echo "<style type='text/css' media='screen'>
              .error { color: red; }'
      </style>";

$okay = true;

if (empty($_POST['email'])) {
  print '<p class="error">Please enter your email address.</p>';
  $okay = false;
}

if (empty($_POST['password'])) {
  print '<p class="error">Please enter your password.</p>';
  $okay = false;
}

if ($_POST['password'] != $_POST['confirm']) {
  print '<p class="error">Your confirmed password does not match the original password.</p>';
  $okay = false;
}

if ( is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ) {
      // Check that they were born before 2023
      if ($_POST['year'] < 2023) {
          $age = 2023 - $_POST['year']; // calculate age this year
      } else {
          print '<p class="error">Either you entered your birthday wrong or you come from the future.</p>';
          $okay = false;     
        } // End of 2nd if conditional
      } else {
              print '<p class="error">Please enter the year you were born as four digits.</p>';
              $okay = false;
      } // end of 1st conditional

if ( !isset($_POST['terms']) ) {
  print '<p class="error">You must accept the terms.</p>';
  $okay = false;
}

// Validate the color
// if ($_POST['color'] == 'red') {
//   $color_type = 'primary';
// } elseif ($_POST['color'] == 'yellow') {
//   $color_type = 'primary';
// } elseif ($_POST['color'] == 'green') {
//   $color_type = 'secondary';
// } elseif ($_POST['color'] == 'blue') {
//   $color_type = 'primary';
// } else {
//   print '<p class="error">Please select your favorite color.</p>';
//   $okay = false;
// }

switch ($_POST['color']) {
  case 'red': 
    $color_type = 'primary';
    break;
  case 'yellow':
    $color_type = 'primary';
    break;
  case 'green':
    $color_type = 'secondary';
    break;
  case 'blue':
    $color_type = 'primary';
    break;
  default:
    print '<p class="error">Please select your favorite color.</p>';
    $okay = false;
} // end switch


if ($okay) {
  print '<p >You have been successfully registered.</p>';
  print "<p>You will turn $age this year.</p>";
  print "<p>Your favorite color is a $color_type.</p>";
}


include dirname(__DIR__) . "/templates/footer.php";