<?php
$arrNilai = array ("Ananda" => 90, "Gladis" => 80, "Serge" => 95, "Adit" => 80);
    echo "Menampilkan Isi Array dengan Foreach : <br>";
        foreach ($arrNilai as $Nama => $Nilai) {
            echo "Nilai $Nama = $Nilai <br>";
        }
    reset($arrNilai);
        echo "<br>Menampilkan Isi Array dengan While dan List : <br> ";
            while(list ($Nama, $Nilai) = each($arrNilai)){
                echo "Nilai $Nama = $Nilai <br>";
            }
?>