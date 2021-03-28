<?php

$conn = mysqli_connect('localhost', 'root', '', 'temp2db');
//if (!empty($_POST) && isset($_POST['search'])) //used before
if (!empty($_POST) ) {
    //if (!empty($_POST) && isset($_POST['search'])) {
    $moviesearch = trim($_POST['search']);
    //$moviesearch = trim($_POST['search']);
    $query = "SELECT *
              FROM movies
              WHERE title LIKE '%$moviesearch%'";

    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 0) {
        echo 'No movies matching your criteria';
    } else {
        // Retrieve movies
        $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

        foreach ($movies as $movie) {
            echo '<p><strong>Title : </strong>' . $movie['title'] . '</p>';
            echo '<img src="./posters/' . $movie['poster'] . '" width = 100px>';
        }
    }
}
//$result = mysqli_query($conn, $query);
//$movies = mysqli_fetch_all($result, MYSQLI_ASSOC);

//echo 'Title:' . $movies;
