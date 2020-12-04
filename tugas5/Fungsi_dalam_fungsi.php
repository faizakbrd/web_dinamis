<?php
    function hitungumur($tgl_lahir){
        $umur = date('Y') - $tgl_lahir;
        return $umur;
    }

    function perkenalan($web, $salam="Assalamualaikum"){
        echo $salam. "<br>";
        echo "Selamat datang di channel ". $web. "<br>";
        echo "Sekarang Webber berusia ".hitungumur(2001). " tahun<br>";
        echo "Nice To Meet You";
    }

    perkenalan("Faiz Akbar Dzulfiqar");
    
?>