<h2>Latihan 1</h2>

<?php 

/*buat catatan */
// buat catatan

//cara buat variable

    $panjang = 5;
    $lebar = 3;
    $luas = $panjang * $lebar; //perkalian di php
    echo "Luas Persegi Panjang Adalah = ". $luas . "Cm<sup>2</sup><br>";

    $buah = array("Jeruk", "Manggo", "Nanasu");
    $hewan = ["Meong", "Manuk", "Moo"];
    
    echo "Buah ". $buah[1]."<br>";
    echo "Buah ". $hewan[2]."<br>";
echo "<br>";
    $ipk = 3.1;
        if ($ipk >= 3.5){
            echo "Pujian";
        } elseif($ipk >= 3) {
            echo "Memuaskan";
        }else {
            echo "bolehla";
        }
    
    

    echo "<h1>Halo</h1>";

?>