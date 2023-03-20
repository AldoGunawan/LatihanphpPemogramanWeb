<?php

$username = $_GET["uname"];
$pass = $_GET["pwd"];

echo "Username = ".$username." <br>";
echo "Pawod = ".$pass." <br>";

$data = array("admin"=>"12345", "aldi"=>"babi1234");
$ada = false;
foreach($data as $u => $p){
    if($u == $username && $p == $pass){
        $ada = true;
        break;
    }
}

if ($ada) {
    echo "Anda berhasil tol";
}else {
    echo "anda gagal goblok";
}
?>