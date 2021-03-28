<?php
if (isset($_POST['catid'])) {


    $conn = mysqli_connect('localhost', 'root', '', 'temp2db');
    $newid = $_POST['catid'];
    $query = "SELECT title, movies.ID
          FROM categorie
          INNER JOIN moviescategorie ON categorie.ID = moviescategorie.categorieID
          INNER JOIN movies ON moviescategorie.moviesID = movies.ID
          WHERE name LIKE '%$newid%'";

          
    $results = mysqli_query($conn, $query);
    $catdata = mysqli_fetch_all($results, MYSQLI_ASSOC);
    /*echo '<pre>';
    var_dump($catdata);
    echo '<pre>';
    */
    foreach ($catdata as $newdata) {
        echo '<option value=' . $newdata['ID'] . '>' . $newdata['title'] . '</option>';
    }
} else {
    echo 'Unable to display';
}
//'%$newid%'