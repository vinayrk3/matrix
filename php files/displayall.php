<?php
$conn = mysqli_connect('localhost', 'root', '', 'temp2db');
if ($conn)

    //1. to check if the database is connected
    echo 'Db connected<br>';
    else
    //2. Display unable to connect if unable to connect to a database
    echo 'unable to connect';

    //4. Git flow branch
    //5. Every ticket creates a new change & this is not reflected in the develop branch
    //6. Merged ticket 5WBXT into develop to reflect all the changes. Also creating 6WBXT to check for direct push from local repo to remote repo and PR testing
    //7. Testing and noting the steps in 7WBXT
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
