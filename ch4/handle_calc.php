<?php
// set title
$title = "Product Cost Calculator";

include dirname(__DIR__) . "/templates/header.php";

// echo "<pre>";
// echo print_r($_POST);
// echo "</pre>";

// get values from $_POST array
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];

// Calculate the total
$total = (($price * $quantity) + $shipping) - $discount;

// Determine the tax rates
$taxrate = ($tax / 100);
$taxrate++;

// faxtor the tax rate
$total = $total * $taxrate;

// Calculate the monthly payments
$monthly = $total / $payments;

// Apply formatting
$total = number_format($total, 2);
$monthly = number_format($monthly, 2);
?>

<style type="text/css">.number { font-weight: bold; color: black;} </style>

<!-- Print out the results: -->
<p>You have selected to purchase:<br>
<span class="number"><?php echo $quantity ?></span> widget(s) at <br>
$<span class="number"><?php echo $price ?></span> price each plus a <br>
$<span class="number"><?php echo $shipping ?></span> shipping cost and a <br>
<span class="number"><?php echo $tax ?></span>
percent tax rate.<br>
After your $<span class="number"><?php echo $discount ?></span>
discount, the total cost is
$<span class="number"><?php echo $total ?></span>.<br>
Divided over <span
class="number"><?php echo $payments ?></span> monthly payments, that would be $<span class="number"><?php echo $monthly ?></ span> each.</p>


<?php include dirname(__DIR__) . "/templates/footer.php"; ?>
