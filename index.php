<?php

declare(strict_types=1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display&family=Quicksand:wght@400;500;600;700&family=Tilt+Neon&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Bookshelf &#129668;</h1>
    <p>Welcome to the fantasy section. Please use the search or sorting functions below to find what you're looking for.
    <div class="search">
        <form action="index.php" method="post">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Search</button>
        </form>
    </div>
    <div class="genre">
        <form action="index.php">
            <input class="" type="radio" id="high fantasy" name="genre" value="High Fantasy">
            <label for="high fantasy">High Fantasy</label>
            <input type="radio" id="urban fantasy" name="genre" value="Urban Fantasy">
            <label for="urban fantasy">Urban Fantasy</label>
            <input type="radio" id="epic fantasy" name="genre" value="Epic Fantasy">
            <label for="epic fantasy">Epic Fantasy</label>
            <input type="radio" id="sword and sorcery" name="genre" value="Sword and Sorcery">
            <label for="sword and sorcery">Sword and Sorcery</label>
            <input type="radio" id="portal Fantasy" name="genre" value="Portal Fantasy">
            <label for="portal fantasy">Portal Fantasy</label>
            <input type="submit" value="Sort genre">
        </form>

    </div>
    <div class="bookshelf">
        <div class="top-of-bookshelf">
            <div class="order">
                <p>↑↓</p>
                <form action="index.php" method="get">

                    <input class="order-button" type="submit" name="order" value="color">
                    <input class="order-button" type="submit" name="order" value="title">
                    <input class="order-button" type="submit" name="order" value="author">
                </form>
            </div>
            <?php
            if (isset($_GET['genre']) || isset($_POST['search'])) { ?>
                <form action="index.php">
                    <input type="submit" value="Show all books" />
                </form><?php } ?>
        </div>
        <div class="books">
            <?php
            require __DIR__ . '/bookshelf.php'; ?> <!-- Bookshelf -->
        </div>
    </div>
</body>

</html>