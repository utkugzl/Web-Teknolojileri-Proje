<?php

if(isset($_POST['kullanici'],$_POST['sifre'])
&& ($_POST['kullanici']=='b201210039@sakarya.edu.tr')
&& ($_POST['sifre']=='b201210039'))
{
    echo "Hoşgeldiniz ".$_POST['kullanici'];
}
else
{
    echo "Bilgilerinizi kontrol ediniz !!!.<br>"; 
}

echo "<p> <a href='kayit.html'>&lt;GERİ DÖN&gt;</a></p>"


?>