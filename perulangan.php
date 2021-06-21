<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1</title>
</head>

<body>
  <form action="" method="POST">
    Masukkan angka : <input type="text" name="angka"><button type="submit" name="submit">Submit</button>
  </form>
  <br>
  <?php
  if (isset($_POST['submit'])) {
    $bin = $_POST['angka'];
    $panjangAngka = strlen($bin);
    $index = 0;

    for ($a = 1; $a <= $panjangAngka; $a++) {
      $hasilPotong = substr($bin, $index, 1);
      echo $hasilPotong;
      for ($c = $panjangAngka; $c > $a; $c -= 1) {
        $hasilReplace = str_replace($hasilPotong, "0", $hasilPotong);
        echo $hasilReplace;
      }
      $index++;
      echo "<br>";
    }
  }
  ?>
</body>

</html>
