<?php
function urutanangka($angka) {
    $num = 1; 
    for ($i = 1; $i <= $angka; $i++) { 
        for ($j = 1; $j <= $i; $j++) { 
            echo $num . " "; 
            $num++; 
        }
        echo "<br>";
    }
}

urutanangka(5); 
?>
