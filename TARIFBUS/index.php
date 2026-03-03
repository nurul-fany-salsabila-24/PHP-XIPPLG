<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif Bus</title>
</head>
<body>
    <center>
        <h1>PROGRAM TARIF BUS</h1>
        <p>
    <form action="" method="POST">
    Nama Bus <input type="text" name="nama"> <br>
    Jurusan <select name="jurusan" id="">
            <option value="JAKARTA">JAKARTA</option>
            <option value="MEDAN">MEDAN</option>
    </select>
    <input type="submit" value="PROSES" name="proses" >
    </form>
    <?php
    if(@$_POST['proses']){
        $namabus = @$_POST['nama'];
        $jurusan = @$_POST['jurusan'];
        if($jurusan == "JAKARTA") {
                  $tarif = 750000;
              } else if($jurusan == "MEDAN") {
                  $tarif = 250000;
              } else {
                  $tarif = 0;
              }
        
        echo "Nama Bus = " . $namabus;
        echo "<br>";
        echo "Jurusan = " . $jurusan;
        echo "<br>";
        echo "Tarif = " . $tarif;
        echo "<br>";
    }
    ?>
        </p>
    </center>
</body>
</html>