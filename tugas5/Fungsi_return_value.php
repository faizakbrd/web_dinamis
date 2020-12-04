<?php
    function hitungumur($tgl_lahir){
        $umur = date('Y') - $tgl_lahir;
        return $umur;
    }

    echo "Umur saya adalah ".hitungumur(2001);
?>