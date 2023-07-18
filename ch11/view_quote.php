<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>View A Quotation</title>
</head>

<body>
    <h1>Random Quotation</h1>

    <?php
    // read the file content into an array
    $data = file('../quotes.txt');

    $n = count($data);

    // pick a random line
    $rand = rand(0, ($n - 1));

    // print the quotation
    print '<p>' . trim($data[$rand]) . '</p>';
    ?>
</body>

</html>