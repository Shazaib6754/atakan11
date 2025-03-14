<?php

include 'functions.php';
 
// Haal bier uit de database
if(isset($_GET['biercode'])){
    if (DeleteBier($_GET['biercode']))
 
    echo '<script>alert("Biercode: ' . $_GET['biercode'] . ' is verwijderd")</script>';
    echo "<script> location.replace('crud_bieren.php'); </script>";
}
