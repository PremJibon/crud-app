<?php

$con = mysqli_connect("localhost", "root");

if ($con) {
    echo " Connections sucessful";
} else {
    echo " no connection";
}

mysqli_select_db($con, 'youtubeuserdata');

$user = $_POST["user"];
$email = $_POST["email"];
$mobile = $_["mobile"];
$comments = $_["comments"];

$query = "INSERT INTO `userinfodata`(`user`, `email`, `mobile`, `coment`) VALUES ('$user','$email','$mobile','$comments') ";

mysqli_query($con, $query);
