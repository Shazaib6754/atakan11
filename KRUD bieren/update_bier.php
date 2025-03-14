<?php

    echo "<h1>Update Bier</h1>";
    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){
        UpdateBier($_POST);

        //header("location: crud_bieren.php");
    }

    if(isset($_GET['biercode'])){  
        // Haal alle info van de betreffende biercode $_GET['biercode']
        $biercode = $_GET['biercode'];
        $row = GetBier($biercode);
    
?>

<html>
    <body>
        <form method="post">
        <br>
        <input type="hidden" name="biercode" value="<?php echo $row['biercode'];?>"><br>
        Naam:<input type="" name="naam" value="<?php echo $row['naam'];?>"><br> 
        Soort: <input type="text" name="soort" value="<?= $row['soort']?>"><br>
        Stijl: <input type="text" name="stijl" value="<?= $row['stijl']?>"><br>
        Alcohol: <input type="text" name="alcohol" value="<?= $row['alcohol']?>"><br>
        <?php
            dropDownBrouwer('brouwcode', $row['brouwcode'] );
        ?>

        <!---Brouwcode: <input type="text" name="brouwcode" value="<?= $row['brouwcode']?>">-->
        <br><br>
         <input type="submit" name="btn_wzg" value="Wijzigen"><br>
        </form>
        <br><br>
        <a href='crud_bieren.php'>Home</a>
    </body>
</html>

<?php
    } else {
        "Geen biercode opgegeven<br>";
    }
?>