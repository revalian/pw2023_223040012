<?php
require('functions.php');

$name = 'Home';


// cari siswa berdasarkan keyword, ketika tombol di klik
if (isset($_GET['search'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM 
            mahasiswa
          WHERE
            nama LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'";


    $students = query($query);
} else {

    $students = query("SELECT * FROM mahasiswa");
}







// $students = [
//   [
//     "nama" => "Sandhika Galih",
//     "npm" => "043040023",
//     "email" => "sandhikagalih@unpas.ac.id"
//   ],
//   [
//     "nama" => "Doddy Ferdiansyah",
//     "npm" => "133040003",
//     "email" => "doddy@gmail.com"
//   ]
// ];

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
