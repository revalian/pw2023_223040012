<?php

$conn = mysqli_connect('localhost', 'root', '', 'kixie') or die('connection failed');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
