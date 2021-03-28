<?php
$conn = mysqli_connect('localhost', 'root', '', 'temp2db');

if ($conn)
    echo "Database Connected <br>";
else
    echo "Unable to connect db";


$query = 'SELECT title
              FROM movies
              WHERE title = ';

$result = mysqli_query($conn, $query);
$movies = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($movies as $movie) {
    echo 'Title:' . $movie['title'] . '<br>';
}
