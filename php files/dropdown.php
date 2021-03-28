<?php

$conn = mysqli_connect('localhost', 'root', '', 'temp2db');
//$namecategory = $_POST['catid'];
/*$query = "SELECT *
          FROM categorie
          INNER JOIN moviescategorie ON categorie.ID = moviescategorie.categorieID
          INNER JOIN movies ON moviescategorie.moviesID = movies.ID
          WHERE name = '$namecategory'";*/
//echo "$namecategory";
/*$query = 'SELECT name,title 
          FROM (categorie 
                INNER JOIN moviescategorie ON categorie.ID = moviescategorie.categorieID) 
                INNER JOIN movies ON moviescategorie.moviesID = movies.ID 
                WHERE name = $namecategory';*/



$query = 'SELECT name
          FROM categorie';


$results = mysqli_query($conn, $query);
$catdata = mysqli_fetch_all($results, MYSQLI_ASSOC);

foreach ($catdata as $dropdata) {

    echo "<option value='" . $dropdata['ID'] . "'>" . $dropdata['name'] . '</option>';
}
