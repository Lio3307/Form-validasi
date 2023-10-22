<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM VALIDASI</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php

        $nama = $email = $jnskelamin = $alamat = $nomorhp = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST" ){
            $nama = coba_input($_POST['nama']);
            $email = coba_input($_POST['email']);
            $jnskelamin = coba_input($_POST['jnskelamin']);
            $alamat = coba_input($_POST['alamat']);
            $nomorhp = coba_input($_POST['cita']);
        }

        function coba_input($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <div class="container">

<div class="form">

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="myForm">
       <center> <i class="fa-regular fa-circle-user"></i> Nama </center> <input type="text" name="nama"><br>
       <center><i class="fa-regular fa-envelope"></i> Email </center>  <input type="text" name="email"><br>
        <center><i class="fa-solid fa-location-dot"></i> Alamat </center>  <input type="text" name="alamat"><br>
        <center> <i class="fa-solid fa-phone"></i> Nomor Handphone </center>  <input type="text" name="cita"><br>
        Jenis Kelamin : <input type="radio" name="jnskelamin" value="Perempuan">Perempuan
                        <input type="radio" name="jnskelamin" value="Pria">Pria
                        <input type="radio" name="jnskelamin" value="Random">Random
                      
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
    <div class="hasil">
    <h1 style="text-align: center;">Hasil Inputan :</h1>

    <?php
        echo "<p>Nama : $nama</p>";
        echo "<br>";
        echo "<p>Email : $email</p>";
        echo "<br>";
        echo "<p>Jenis Kelamin : $jnskelamin</p>";
        echo "<br>";
        echo "<p>Alamat : $alamat</p>";
        echo "<br>";
        echo "<p>Nomor Handphone : $nomorhp</p>";
        echo "<br>";
    ?>
    </div>
    </div>

</body>
</html>