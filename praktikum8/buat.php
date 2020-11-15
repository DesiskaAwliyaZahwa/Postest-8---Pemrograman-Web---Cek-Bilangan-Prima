<?php
if( $nama == '2'){
    echo $nama."Bilangan Prima";
}
else if($nama =='1'){
    echo $nama."Bukan Bilangan Prima";
}
else if($nama % $nama == 0 && $nama % 1 == 0){
    echo $nama."Bilangan Prima";
}
else{
    echo $nama."Bukan Bilangan Prima";
}
echo 'Nama  : ' . $_POST['nama'] . '<br/>';
echo 'Email : ' . $_POST['email'];
echo '<pre>'; print_r($_POST);
?>