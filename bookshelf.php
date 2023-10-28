<?php

declare(strict_types=1);
require __DIR__ . '/booksarray.php';
require __DIR__ . '/functions.php';


if (isset($_GET['genre'])) {
    $genre = $_GET['genre'];

    $books = array_filter($books, function ($book) {
        return ($book['genre'] == $_GET['genre']);
    });
    sortBooks($books);
} elseif (isset($_GET['order'])) {

    $order = array_column($books, $_GET['order']);
    array_multisort($order, SORT_ASC, $books);
    sortBooks($books);
} elseif (isset($_POST['search'])) {

    $searchQuery = $_POST['search'];
    searchBooks($books);
} else {

    sortBooks($books); //Show all books if no search or sorting is made
}
