<?php
$mahasiswa = [
    [
        "nrp"       => 223040012,
        "nama"      => "Revalian Ananda Taufan",
        "email"     => "ghizafari@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "https://i.pinimg.com/564x/9d/61/78/9d61788824e25df8b8b88e05f09d5a71.jpg"
    ],
    [
        "nrp"       => 223040016,
        "nama"      => "Davina Putri Kusuma",
        "email"     => "davinaputri2408@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "https://i.pinimg.com/564x/2c/3c/36/2c3c36e1e4944b691d36afd90e7eb768.jpg"
    ],
    [
        "nrp"       => 223040030,
        "nama"      => "Nita Rahmawati",
        "email"     => "nitarahmawati1919@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "https://i.pinimg.com/564x/18/3b/db/183bdb578c7fabebbcdd1e4ab2b61382.jpg"
    ],
    [
        "nrp"       => 223040006,
        "nama"      => "Gina Meirina",
        "email"     => "meirinagina@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "https://i.pinimg.com/564x/36/77/1e/36771e294b9985ce59cbf794692be61e.jpg"
    ],
    [
        "nrp"       => 223040009,
        "nama"      => "Indri Tania Lestari",
        "email"     => "indritania3@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "https://i.pinimg.com/736x/84/7d/c9/847dc98e88f9bec79a41746705c30804.jpg"
    ],
    [
        "nrp"       => 223040155,
        "nama"      => "Narapati Keysa Anandi",
        "email"     => "narapatiiii@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "https://i.pinimg.com/564x/36/93/f4/3693f496987e7327c6f021468352b3c4.jpg"
    ],
    [
        "nrp"       => 223040003,
        "nama"      => "Ali Imran Rodja",
        "email"     => "rodjaali@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "https://i.pinimg.com/564x/6c/d4/9c/6cd49cc49e0c84522930a00900690708.jpg"
    ],
    [
        "nrp"       => 223040024,
        "nama"      => "Diaz Alfiari Rachmad",
        "email"     => "diazalfiari@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "https://i.pinimg.com/564x/41/6f/d9/416fd91c396e896dd8301b6d0f235f60.jpg"
    ],
    [
        "nrp"       => 223040025,
        "nama"      => "Daffaa Aprilino",
        "email"     => "daffaaa@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "https://i.pinimg.com/564x/28/a6/4a/28a64a295865378676b1bab5bbb27330.jpg"
    ],
    [
        "nrp"       => 223040011,
        "nama"      => "Daniel Satya Ramadhan",
        "email"     => "danielsat@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "gambar"    => "https://i.pinimg.com/564x/d6/e1/0a/d6e10a79f543530e51c36f3c421299df.jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center p-2">Daftar Mahasiswa</h1>
    <section>

        <div class="row p-3">
            <?php foreach ($mahasiswa as $mhs) : ?>
                <div class="col-lg-2">
                    <div class="card mb-2">
                        <div class="card-body align-self-center">
                            <img src="<?= $mhs['gambar']; ?>" alt="avatar <?= $mhs['nama']; ?>" class="rounded-circle img-fluid" style="width: 150px;">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">NRP</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $mhs['nrp']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nama</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $mhs['nama']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $mhs['email']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jurusan</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $mhs['jurusan']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </section>
</body>

</html>