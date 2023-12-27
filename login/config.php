<?php

$conn = mysqli_connect("localhost", "root", "", "prepros");

if (!$conn) {
    echo "Connection Failed";
}