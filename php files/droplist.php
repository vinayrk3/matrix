<?php

$conn = mysqli_connect('localhost', 'root', '', 'temp2db');
$query = 'SELECT name 
          FROM categorie';

$results = mysqli_query($conn, $query);
$catdata = mysqli_fetch_all($results, MYSQLI_ASSOC);

echo json_encode($catdata, JSON_PRETTY_PRINT);
