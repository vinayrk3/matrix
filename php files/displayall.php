<?php
$conn = mysqli_connect('localhost', 'root', '', 'temp2db');
if ($conn)
    //to check if the database is connected
    echo 'Db connected<br>';
else
    echo 'unable to connect';

$query = 'SELECT * 
             FROM movies';

$results = mysqli_query($conn, $query);
$moviedata = mysqli_fetch_all($results, MYSQLI_ASSOC);

foreach ($moviedata as $movies) {
    echo 'Title: ' . $movies['title'] . '<br>';
    echo 'Movie ID:' . $movies['ID'] . '<br>';
    echo 'Release Year:' . $movies['releaseYear'] . '<br>';
    echo '<img src="./posters/' . $movies['poster'] . '" width = 100px>' . '<br>';
}