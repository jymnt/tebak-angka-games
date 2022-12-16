<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Games</title>
  </head>
  <body>
    <div class="container">
<!-- form untuk melakukan inputan dan submit -->
<form action="" method="POST">
    <h2 class="text-success ">Tebak Nomor Antara 1 sampai 10</h2> 
    <?php
    session_start();
    echo $_SESSION['message'] . '<br>';

    ?>
    <div class ="alert alert-dark">
    <input type="text" name="number_entered" class="form-control" placeholder="Masukan Angka... "/> <br><br>
    <input type="submit" name="submit" class="btn btn-dark" value="Tebak"/><br><br>
</div>
</form>
<a class="btn btn-primary" href="destroy.php" role="button">Kembali</a> <br><br>

<?php
if(isset($_POST['number_entered'])){
    
    // memanggil inputan dengan mehod "post"
    $number= $_POST['number_entered'];
    // memanggil tombol submit dengan mehod "post"
    $submitbutton= $_POST['submit'];
    // melakukan random angka dimulai dari 1 hingga 10
    // menentukan angka yang benar
    $benar = [2,3,5,8];
    $randomnumber = mt_rand(1,10);
    if ($submitbutton){   
        // mengecek nilai dari 2 kondisi
        /* Apakah $number(inputan) lebih besar dari 0 = benar
        * apakah $number(inputan) lebih kecil dari 11 = benar */
        /* maka akan menghasilkan true dan menampilkan $randomnumber
        * $randomnumber => variabel yang menampung random angka 1-10
        */
        // while($randomnumber != 3 ){
        //     $randomnumber= mt_rand(1,10);     
        // }
        if (($number > 0) && ($number <11)){
            if ($number == $randomnumber){
                $_SESSION['score'] += 1;
                echo '<div class ="alert alert-success">'. "$number Yap ini adalah tebakan yang benar. 
                Kamu menang! </div> </div>";   
            }
            else {
                echo '<div class ="alert alert-warning">' . "Yaah Tebakannya Salah. Nomor yang benar menurut komputer adalah
                $randomnumber. Coba Lagi! </div>";
            }
        }
        
    }
    // untuk mengecek apakah inputan kosong atau tidak
    /* jika kosong maka akan memunculkan pesan "Masukkan Angka
    * jika berisi maka tidak akan memunculkan pesan dan menjalankan tebakan game*/
    if($number == ""){
        echo '<div class ="alert alert-danger">'. "Masukkan Angka!" . "</div>";
    }
    // untuk mengecek apakah inputan lebih dari angka 10"
    /* jika lebih dari 10 maka akan menampilkan pesan*/
    elseif($number > 10){
        echo '<div class ="alert alert-danger">' . "Angka yang anda masukkan lebih dari 10" . "</div>";
    }
}
echo '<div class = "container"> <div class = "container"> 
<div class="card text bg-warning mb-3" style="max-width: 8rem; color:white; font-size: 24px;">' . 
'<h3>' . 'Score : ' . $_SESSION['score'] . ' <h3>'. '</div>';
?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    </body>
</html>
