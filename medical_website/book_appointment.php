<?php
define('TITLE', "Book Appoinemtnet");
include dirname(__DIR__) . "/medical_website/templates/boilerplate.php";
?>

<body class="sub_page">
    <div class="hero_area">

        <?php
        include(dirname(__DIR__) . '/medical_website/templates/header.php');
        ?>
    </div>

    <div class="container">

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $problem = false;

            if (empty(trim($_POST['patient_full_name']))) {
                $problem = true;
                print '<p class="text-danger">Please enter your full name!</p>';
            }

            if (empty(trim($_POST['phone_number']))) {
                $problem = true;
                print '<p class="text-danger">Please enter your phone number!</p>';
            }

            if (empty(trim($_POST['symptoms']))) {
                $problem = true;
                print '<p class="text-danger">Please enter patient\'s symptoms!</p>';
            }


            if (!$problem) {

                include(dirname(__DIR__) . '/medical_website/mysqli_connect.php');

                try {
                    $patient_full_name = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['patient_full_name'])));
                    $doctors_name = $_POST['doctors_name'];
                    $department = $_POST['department'];
                    $phone = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['phone_number'])));
                    $symptoms = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['symptoms'])));
                    $appointment_date = $_POST['appointment_date'];

                    $query = "INSERT INTO appointment (patient_full_name, doctors_name, department, phone_number, symptoms, appointment_date) VALUES ('$patient_full_name', '$doctors_name', '$department', '$phone', '$symptoms', '$appointment_date')";

                    mysqli_query($dbc, $query);

                    echo '<script>alert("Your appointment has been set!")</script>';

                    $_POST = [];
                } catch (mysqli_sql_exception $e) {

                    print '<p class="text--danger">Could not register because:<br>' .  mysqli_error($dbc);

                    error_log($e->__toString(), 3, "/var/www/html/medical_website/my-errors.log");
                } finally {

                    mysqli_close($dbc);
                }
            } else { // Forgot a field

                print '<p class="text-danger">Please try again!</p>';
            }
        } // end of handle form IF.
        ?>
    </div>



    <!-- book section -->

    <section class="book_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="book_appointment.php" method="post">
                        <h4>
                            BOOK <span>APPOINTMENT</span>
                        </h4>
                        <div class="form-row ">
                            <div class="form-group col-lg-4">
                                <label for="patient_full_name">Patient Name </label>
                                <input type="text" name="patient_full_name" class="form-control" id="inputPatientName" placeholder="">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="doctors_name">Doctor's Name</label>
                                <select name="doctors_name" class="form-control wide" id="inputDoctorName">
                                    <option value="Normal distribution ">Dr. Roy Mendez </option>
                                    <option value="Normal distribution ">Dr. Vincent Carson </option>
                                    <option value="Normal distribution ">Dr. Lars Strauss </option>
                                    <option value="Normal distribution ">Dr. John Rogers </option>
                                    <option value="Normal distribution ">Dr. Lana Luczak </option>
                                </select>
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="department">Department</label>
                                <select name="department" class="form-control wide" id="inputDepartmentName">
                                    <option value="Normal distribution ">Rehabilitation </option>
                                    <option value="Normal distribution ">Pediatric Care </option>
                                    <option value="Normal distribution ">Opthalmology </option>
                                    <option value="Normal distribution ">Parental Care </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="form-group col-lg-4">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" id="inputPhone">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="symptoms">Symptoms</label>
                                <input type="text" name="symptoms" class="form-control" id="inputSymptoms" placeholder="">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="appointment_date">Choose Date </label>
                                <div class="input-group date" id="inputDate" data-date-format="yyyy-mm-dd">
                                    <input type="text" name="appointment_date" class="form-control" readonly>
                                    <span class="input-group-addon date_icon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="btn-box">
                            <button type="submit" class="btn ">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- end book section -->



    <!-- info and footer section -->
    <?php
    include(dirname(__DIR__) . '/medical_website/templates/info.php');
    include(dirname(__DIR__) . '/medical_website/templates/footer.php');
    ?>
    <!-- end info and footer section -->