<?php
include_once("php_includes/db_conx.php");


$tbl_groups = "CREATE TABLE IF NOT EXISTS groups(
        id INT(11) NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        creation DATETIME NOT NULL,
        logo VARCHAR(255),
        invrule ENUM('0','1') NOT NULL,
        creator VARCHAR(16) NOT NULL,
        PRIMARY KEY (id)
        )";
        
$query = mysqli_query($db_conx, $tbl_groups);
if ($query === TRUE) {
    echo "<h3> Groups table created OK </h3>";
    } else {
    echo "<h3> Groups table NOT created </h3>";
    }

    
$tbl_gmembers = "CREATE TABLE IF NOT EXISTS gmembers(
        id INT(11) NOT NULL AUTO_INCREMENT,
        gname VARCHAR(100) NOT NULL,
        mname VARCHAR(16) NOT NULL,
        approved ENUM('0','1') NOT NULL,
        admin ENUM('0','1') NOT NULL DEFAULT '0',
        PRIMARY KEY (id)
        )";    

$query = mysqli_query($db_conx, $tbl_gmembers);
if ($query === TRUE) {
    echo "<h3> Members table created OK </h3>";
    } else {
    echo "<h3> Members table NOT created </h3>";
    }
    
    
$tbl_grouppost = "CREATE TABLE IF NOT EXISTS grouppost(
        id INT(11) NOT NULL AUTO_INCREMENT,
        pid VARCHAR(16) NOT NULL,
        gname VARCHAR(100) NOT NULL,
        author VARCHAR(16) NOT NULL,
        type ENUM('0','1') NOT NULL,
        data TEXT NOT NULL,
        pdate DATETIME NOT NULL,
        PRIMARY KEY (id)
        )";  
        
$query = mysqli_query($db_conx, $tbl_grouppost);
if ($query === TRUE) {
    echo "<h3> Posts table created OK </h3>";
    } else {
    echo "<h3> Posts table NOT created </h3>";
    }
            
?>        