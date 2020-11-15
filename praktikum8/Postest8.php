<!DOCTYPE html>
<html>
    <head>
        <title>POSTEST 8</title>
    </head>
    <style>
    body {
    background-image: url(we.jpg);
    }

    h1 {
    padding: 13px;
    text-align: center;
    color: black;
    }

    #kotak {
    background-color: wheat;
    border-radius: 10px;
    box-shadow: 1px 2px 30px rgba(0, 0, 0, 0.9);
    height: 260px;
    margin: 0rem auto 0rem auto;
    width: 430px;
    }

    #kotak-content {
    padding: 12px 44px;
    }

    .form {
    font-family: Times New Roman ;
    }

    .cekbil {
    background: green;
    border: none;
    border-radius: 21px;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 24.5px;
    margin: 0;
    width: 100px;
    }
    
    </style>
    <body>
        <h1>POSTEST PRAKTIKUM 8 DASAR-DASAR PHP</h1>
        <div id="kotak">
        <div id="kotak-content">
            <form action=" " method="GET" class="form">
                <h2><marquee behavior="alternate">&emsp; &emsp; Cek Bilangan Prima</marquee></h2>
                <tr>
                    <td<td>Masukkan Bilangan</td><td>:</td>
                    <td><input type="text" name="bilangan"></td>
                </tr>
                <br><br>
            </form>
            <br>
            &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
            <td>
            <input class="cekbil" type="submit" name="cek" value="cek">
            <br>
            <div align="center">
                <br>
	                <?php
                    if(isset($_GET['cek']))
                    {
		                $n = $_GET['bilangan'];
		                    if ($n <=1) {
			                echo "Bilangan ".$n." bukan merupakan bilangan prima";
                    }
                            else
                            {
			                    if ($n == 2) {
				                    echo "Bilangan ".$n. " merupakan bilangan prima";
                                }
                                else
                                {
				                    for ($i=2; $i < $n ; $i++) { 
					                    if ($n % $i == 0) {
					                        $hasil = 0;
					                        break;
                                        }
                                        else{
					                        $hasil =1;
				                        }
				                    }
				                   if ($hasil == 0) {
					                    echo "Bilangan ".$n. " bukan bilangan prima";
                                    }
                                    else
                                    {
					                    echo "Bilangan " .$n. " adalah bilangan prima";
				                    }
			                    }
		                    }
	                }
                    ?>
        </div>
            <?php 
                if (isset($_GET['cek'])) : 
            ?>	
            <br>
            <div class="lagi">
            <a href="Postest8.php">Try Again ?</a>
            <?php 
                endif; 
            ?>
            </div>
        </div>
        </div>
    </body>
</html>