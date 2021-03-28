<?php

if(isset($_POST['submitMovie'])){
    $conn = mysqli_connect('localhost', 'root', '', 'temp2db');
    $id = $_POST['ID'];
    $title = $_POST['title'];
    $year = $_POST['year'];
    $poster = $_POST['poster'];
    $synopsis = $_POST['synopsis'];

    $query = " INSERT INTO movies(ID, title, releaseYear, poster, synopsis)
               VALUES ($id,'$title',$year,'$poster','$synopsis')";
    
               $result= mysqli_query($conn, $query);
    
               if($result)
               echo 'Movie data inserted in database';
                else
                echo 'Unable to insert data';
}
