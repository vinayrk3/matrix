<?php

if(isset($_POST['submitCat'])){
    $conn = mysqli_connect('localhost', 'root', '', 'temp2db');
    $id = $_POST['catId'];
    $movieid = $_POST['category'];

    $query = "INSERT INTO moviescategorie(moviesID, categorieID) 
               VALUES ($id, $movieid) ";
}