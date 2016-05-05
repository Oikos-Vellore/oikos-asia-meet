<?php
    
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $countryResidence = $_POST['country'];
    $whoAreYou = $_POST['whoAreYou'];
    $memberType = $_POST['memberType'];
    $areaOfInterest = $_POST['areaOfInterest'];
    $learningCircle = $_POST['learningCircle'];
    ini_set('display_errors', 1);
    $con = mysqli_connect("localhost", "root", "root", "test");

    if(!$con)
    {
        die "Errorororo" . mysqli_error($con);
    }
    else
    {
        echo "Huyrrah";
    }
    
    $query = 'INSERT INTO regInfo ('name', 'phoneNumber', 'email', 'countryResidence', 'whoAreYou', 'memberType', 'areaOfInterest', 'learningCircle') VALUES ('.+.$name.+.', '.+.$phoneNumber.+.', '.+.$email.+.', '.+.$countryResidence.+.', '.+.$whoAreYou.+.', '.+.$memberType.+.', '.+.$areaOfInterest.+.', '.+.$leaningCircle.+.");";

    $insData = mysqli_query($con, $query);
    if(!$insData)
        echo "Error";
    else echo "Insertion successful";
    
    $con->close();
?>