<?php

require __DIR__ . '/booksarray.php';

//Sort/order function
function sortBooks(array $books)
{
    foreach ($books as $book) : ?>
        <div class="book book-color-<?= $book['color']; ?>">
            <p class="book-title"><?= $book['title']; ?></p>
            <p class="book-author"><?= $book['author']; ?></p>
        </div>
        <?php endforeach;
}

//Search function
function searchBooks(array $books)
{
    if (isset($_POST['search'])) {
        $searchQuery = strtolower($_POST['search']);

        foreach ($books as $book) {
            $title = strtolower($book['title']);
            $author = strtolower($book['author']);

            if (str_contains($title, $searchQuery) || str_contains($author, $searchQuery)) { ?>
                <div class="book book-color-<?= $book['color']; ?>">
                    <p class="book-title"><?= $book['title']; ?></p>
                    <p class="book-author"><?= $book['author']; ?></p>
                </div>
<?php
            }
        }
    }
}
