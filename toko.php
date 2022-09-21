<?php
    include_once("topi_class.php");
    include_once("baju_class.php");
    include_once("celana_class.php");
     
    define("br", "<br />");
     
    // buat objek Topi
    $obj_topi = new Topi(); // buat objek
     
    // setting property objek
    $obj_topi->setNama("Topi_001");
    $obj_topi->setUkuran(10);
    $obj_topi->setWarna("biru");
    $obj_topi->setModel("bordiran");
     
    // get property objek
    echo "Nama Produk : " . $obj_topi->getNama() . br;
    echo "Ukuran : " . $obj_topi->getUkuran() . br;
    echo "Warna : " . $obj_topi->getWarna() . br;
    echo "Model : " . $obj_topi->getModel() . br;
     
     
    // buat objek baju
    $obj_baju = new Baju();
     
    // setting property baju;
    $obj_baju->setNama("Baju_001");
    $obj_baju->setUkuran(10);
    $obj_baju->setWarna("biru");
    $obj_baju->setTipe("Kemeja");
     
    // get property objek baju
    echo br;
    echo "Nama Produk : " . $obj_baju->getNama() . br;
    echo "Ukuran : " . $obj_baju->getUkuran() . br;
    echo "Warna : " . $obj_baju->getWarna() . br;
    echo "Tipe : " . $obj_baju->getTipe() . br;
     
     
    // buat objek celana
    $obj_celana = new Celana();
     
    // setting property celana
    $obj_celana->setNama("Celana_001");
    $obj_celana->setUkuran(12);
    $obj_celana->setWarna("biru");
    $obj_celana->setModel("Cutbray..");
    $obj_celana->setTipe("Katun");
     
    // get property objek celana
    echo br;
    echo "Nama Produk : " . $obj_celana->getNama() . br;
    echo "Ukuran : " . $obj_celana->getUkuran() . br;
    echo "Warna : " . $obj_celana->getWarna() . br;
    echo "Tipe : " . $obj_celana->getTipe() . br;
    echo "Model : " . $obj_celana->getModel() . br;
?>