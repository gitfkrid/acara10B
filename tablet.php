<?php 
    class Tablet {
        protected $merk;
        protected $camera;
        protected $memory;

        public function set_merk($merk) {
            $this -> merk = $merk;
        }

        public function beli_hp() {
            return "Saya Membeli HP : " . $this -> merk;
        }
    }

    class handphone extends Tablet {
        public function beli_hp_baru() {
            return "Saya membeli hp baru : " . $this -> merk;
        }
    }

    $Xiaomi = new handphone();
    $Xiaomi -> set_merk("Xiaomi");
    echo $Xiaomi -> beli_hp_baru();
?>