<?php

declare(strict_types=1);

$titles = [
    "The Lord of the Rings",
    "A Song of Ice and Fire",
    "Harry Potter and the Philosopher's Stone",
    "The Name of the Wind",
    "The Wheel of Time",
    "The Chronicles of Narnia",
    "Eragon",
    "The Lies of Locke Lamora",
    "The Way of Kings",
    "The Sword of Shannara",
    "The Last Unicorn",
    "The Magicians",
    "The Dark Tower",
    "Blood of Elves",
    "The Name of the Dragon",
    "Wizard's Quest",
    "The Chronicles of Eldoria",
    "The Lost Kingdom of Zephyria",
    "The Enchanted Grimoire",
    "The Shadow Realm Chronicles",
];

$authors = [
    "J.R.R. Tolkien",
    "George R.R. Martin",
    "J.K. Rowling",
    "Patrick Rothfuss",
    "Robert Jordan",
    "C.S. Lewis",
    "Christopher Paolini",
    "Scott Lynch",
    "Brandon Sanderson",
    "Terry Brooks",
    "Peter S. Beagle",
    "Lev Grossman",
    "Stephen King",
    "Andrzej Sapkowski",
    "Elena Silverwind",
    "Gareth Blackthorn",
    "Luna Nightshade",
    "Sorin Fireheart",
    "Isabella Moonshadow",
    "Thorne Shadowcaster",
];

$genres = [
    "High Fantasy",
    "Urban Fantasy",
    "Epic Fantasy",
    "Sword and Sorcery",
    "Portal Fantasy",
];

$colors = [
    "red", "yellow", "orange", "green", "blue", "purple", "black", "pink",
];


$books = [];

for ($i = 0; $i < 20; $i++) {
    $books[] = [
        'title' => $titles[$i],
        'author' => $authors[$i],
        'genre' => $genres[rand(0, count($genres) - 1)],
        'color' => $colors[rand(0, count($colors) - 1)]
    ];
}
echo '<pre>';
print_r($books);
echo '</pre>';
