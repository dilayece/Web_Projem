<?php
$host="LAPTOP-HV0FKJMO\SQLEXPRESS01";
$kullanici="ecekizilkaya";
$sifre="bilisim";
$veritabani="kullanicilar"
$tablo="yazilar";
$baglanti=mysqli_connect($host,$kullanici,$sifre);
if($baglanti){
    echo "baglantı saglandı";
}
else{
    echo "baglantı sağlanamadı";
}
@mysqli_select_db($baglanti,$veritabani) or die ("veri tabanına baglanamadi");
?>