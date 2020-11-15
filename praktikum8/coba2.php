<!DOCTYPE html>
<html>
    <title>Logout</title>
</html>
<body>
    <?php
        echo "Hello Wordl <br>";

        //variabel
        $nama = "gorila";
        $angka_pertama = 12;
        $angka_kedua = 3;

        //tanda . untuk memanggil variabel
        echo "Nama saya adalah" .$nama."<br><br>";
        echo $angka_pertama + $angka_kedua."<br><br>";

        if($nama == "Gorila"){
           echo "Saya adalah ".$nama;
        }

        else{
            echo "Saya bukan Gorila <br>";
        }

        //array
        $mobil = array("toyota" => 10, "mercedes" => 20, "ferari" => 30, "lamborgini"=> 40);
        //count utk menghitung
        $length = count($mobil);
        
        //perulangan for
        for($i=0; $i<$length; $i++){
            echo $mobil[$i]."<br>";
        }
        
        foreach ($mobil as $x => $value){
            echo $value. "<br>";
            echo $x."<br>";

        }

        //perulangan while
        $i = 0;
        while($i < $length){
            echo $mobil[$i]."<br>";
            $i++;
        }

        //perulangan do while
        //do{
        //   echo $mobil[$i]. "<br>";
        //    $i++;
        //} while ($i < $length);


        
    ?>
    <?php
    //memanggil nama file
        require("looping.php");
        loop_for(1,10);

    //include lebih simple dari require dari php ke html
        include 'file.php';

    ?>

</body>