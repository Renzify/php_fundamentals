<?php

// var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);

    if (empty($firstname)){
        exit();
        header("Location: ../index.php");
    }

     if (empty($lastname)){
        exit();
        header("Location: ../index.php");
    }

    echo "Datas from the user:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favoritepet;
    
    header("Location: ../index.php");
}

else {
    header("Location: ../index.php");
}