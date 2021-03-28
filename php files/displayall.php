<?php
$conn = mysqli_connect('localhost', 'root', '', 'temp2db');
if ($conn)

    //1. to check if the database is connected
=======
    //to check if the database is connected

    echo 'Db connected<br>';
else
    //2. Display unable to connect if unable to connect to a database
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
