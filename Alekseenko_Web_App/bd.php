<?php
    $servername = "db";
    $username = "root";
    $password = "123456";
    $dbName = "bd_name";

    $link = mysqli_connect($servername, $username, $password);



    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $dbName";

    if (!mysqli_query($link, $sql)) {
        echo "Error creating database: " . mysqli_error($link);
    }

    mysqli_close($link);


    $link = mysqli_connect($servername, $username, $password, $dbName);

    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

 
    $sql = "CREATE TABLE IF NOT EXISTS users(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(15) NOT NULL,
        email VARCHAR(50) NOT NULL,
        pass VARCHAR(20) NOT NULL
    )";

    if (!mysqli_query($link, $sql)) {
        echo "Error creating table Users: " . mysqli_error($link);
    }

    $sql = "CREATE TABLE IF NOT EXISTS posts(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(20) NOT NULL,
        main_text VARCHAR(400) NOT NULL
    )";

    if (!mysqli_query($link, $sql)) {
        echo "Error creating table posts: " . mysqli_error($link);
    }

    mysqli_close($link);
?>