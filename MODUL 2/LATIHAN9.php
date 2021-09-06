<?php
    $arrWarna = array ("Black","Navy","Grey","Purple","Green");
    echo "Menampilkan isi array dengan for : <br>";
    for ($i=0; $i<count($arrWarna); $i++){
        echo "Do You Like <font color=$arrWarna[$i]>".$arrWarna[$i]. "</font> ?<br>";
    }

    echo "<br>Menampilkan Isi Array dengan Foreach: <br>";
    foreach ($arrWarna as $Warna) {
            echo "Do You Like <Font color=$Warna>". $Warna ."</font> ? <br>";
    }
    ?>