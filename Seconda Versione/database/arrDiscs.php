<?php
$arrDiscs = [
    [
        'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/2/2c/Bon_Jovi_New_Jersey.jpg/220px-Bon_Jovi_New_Jersey.jpg',
        'id' => 1,
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'genre' => 'Rock',
        'year' => '1988',
    ],
    [
        'image' => 'https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg',
        'id' => 2,
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'genre' => 'Pop',
        'year' => '1992',
    ],
    [
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg',
        'id' => 3,
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'genre' => 'Pop',
        'year' => '1993',
    ],
    [
        'image' => 'https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg',
        'id' => 4,
        'title' => 'Steve Gadd Band',
        'author' => 'Steve Gadd Band',
        'genre' => 'Jazz',
        'year' => '2018',
    ],
    [
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg',
        'id' => 5,
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'genre' => 'Metal',
        'year' => '2000',
    ],
    [
        'image' => 'https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg',
        'id' => 6,
        'title' => 'One more car, one more raider',
        'author' => 'Eric Clapton',
        'genre' => 'Rock',
        'year' => '2002',
    ],
    [
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg',
        'id' => 7,
        'title' => 'Made in Japan',
        'author' => 'Deep Purple',
        'genre' => 'Rock',
        'year' => '1972',
    ],
    [
        'image' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
        'id' => 8,
        'title' => 'And Justice for All',
        'author' => 'Metallica',
        'genre' => 'Metal',
        'year' => '1988',
    ],
    [
        'image' => 'https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg',
        'id' => 9,
        'title' => 'Hard Wired',
        'author' => 'Dave Weckl',
        'genre' => 'Jazz',
        'year' => '1994',
    ],
    [
        'image' => 'https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg',
        'id' => 10,
        'title' => 'Bad',
        'author' => 'Michael Jacjson',
        'genre' => 'Pop',
        'year' => '1987',
    ],
];

header("Content-Type: application/json");

echo json_encode($arrDiscs);

?>