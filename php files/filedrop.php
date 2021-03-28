<?php
if(isset($_POST['selectBtn'])){
    $conn = mysqli_connect('localhost', 'root', '', 'temp2db');
$newid = $_POST['selectBtn'];
$query = "SELECT *
          FROM categorie
          INNER JOIN moviescategorie ON categorie.ID = moviescategorie.categorieID
          INNER JOIN movies ON moviescategorie.moviesID = movies.ID
          WHERE name LIKE '%$newid%'";
$results = mysqli_query($conn, $query);
$catdata = mysqli_fetch_all($results, MYSQLI_ASSOC);


foreach ($catdata as $newdata) {
    echo '<option value=' . $newdata['ID'] . '>' . $newdata['title'] . '</option>';;
}
}
else{
    echo 'Unable to display';
}
