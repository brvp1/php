<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <?php
    $file = '../users/users.txt';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $loggedin = FALSE;

        ini_set('auto_detect_line_endings', 1);

        $fp = fopen($file, 'rb');

        while ($line = fgetcsv($fp, 200, "\t")) { // $line[0] = username, $line[1] = password, $line[2] = directory name
            if (($line[0] == $_POST['username'])
                and ($line[1] == sha1(trim($_POST['password'])))
            ) {
                $loggedin = TRUE;
                break;
            }
        }

        fclose($fp);

        // Print a message:
        if ($loggedin) {
            print '<p>You are now logged in.
    </p>';
        } else {
            print '<p style="color: red;">The username and password you entered do not match those on file.</p>';
        }
    } else { // Display the form. 50
        // Leave PHP and display the form:
    ?>

        <form action="login.php" method="post">
            <p>Username: <input type="text" name="username" size="20"></p>
            <p>Password: <input type="password" name="password" size="20"></p>
            <input type="submit" name="submit" value="Login">
        </form>

    <?php
    } // End of submission IF. 
    ?>
</body>

</html>