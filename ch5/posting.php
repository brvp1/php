<?php
//set title
$title = "Forum Posting";

include dirname(__DIR__) . "/templates/header.php"; 
?>

<!-- Script 5.1 - posting.html -->
<div>
  <p>Please complete this form to submit your posting:</p>

  <form action="handle_post.php" method="post">
      <p>First Name: <input type="text" name="first_name" size="20" required></p>
      <p>Last Name: <input type="text" name="last_name" size="20" required></p>
      <p>Email Address: <input type="email" name="email" size="30" required></p>
      <p>Posting: <textarea name="posting" rows="9" cols="30" required></textarea></p>
      <input type="submit" name="submit" value="Send My Posting">
  </form>
</div>

<?php
include dirname(__DIR__) . "/templates/footer.php"; 
?>