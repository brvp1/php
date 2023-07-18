<?php
//set title
$title = "Books";

include dirname(__DIR__) . "/templates/header.php";

echo "<h1>Some of Larry Ullman's Books</h1>";

$phpvqs = [
    1 => 'Getting Started with PHP', 'Variables', 
    'HTML Forms and PHP', 'Using Numbers'
];

$phpadv = [
    1 => 'Advanced PHP Techniques', 'Develop Web Applications',
    'Advanced Database Concepts', 'Basic Object-Oriented Programming'
];

$phpmysql = [
    1 => 'Introduction to PHP', 'Programming with PHP', 
    'Creating Dynamic Web Sites', 'Introduction to MySQL'
];

$books = [
    'PHP VQS' => $phpvqs,
    'PHP Advanced VQP' => $phpadv,
    'PHP and MySQL VQP' => $phpmysql
];

print "<p>The third chapter of my 
first book is <i>{$books['PHP VQS'] [3]}</i>.</p>";

print "<p>The first chapter of my second book is <i>
{$books['PHP Advanced VQP'][1]}</i>.</p>";

print "<p>The fourth chapter of my fourth book is <i>
{$books['PHP and MySQL VQP'][4]}</i>.</p>";


// See what happens with foreach:
foreach ($books as $title => $chapters) {
    print "<h2>$title</h2>\n";
    foreach ($chapters as $num => $chapter) {
      print "<p>Chapter $num is $chapter</p>";
    } 
}

// See what happens with foreach:
foreach ($books as $key => $value) {
  print "<p>$key: $value</p>\n";
}

echo "<pre>";
print_r($books);
echo "</pre>";

include dirname(__DIR__) . "/templates/footer.php"; 
?>