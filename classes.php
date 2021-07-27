<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes And Objects</title>
</head>
<body>

<?php

class Book {

    var $title;
    var $author;
    var $pages;
    var $year;
}
$book1 = new Book;
$book1->title = "Harry potter";
$book1->author = "JK Rowling";
$book1->pages = "450";
$book1->year = "1991";
echo $book1->title," <br>";
echo $book1->author," <br>";
echo $book1->pages," <br>";
echo $book1->year," <br>";



?>
</body>
</html>