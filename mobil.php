<?php 
    class mobilLengkap {
        public function nontonTV() {
            return "Tv dihidupkan, Tv Mencari Chanel, Tv Menampilkan gambar.";
        }
    }

    class mobilBMW extends mobilLengkap {
        
    }
    
    class mobilBMWberaksi {
        public function nontonTV() {}
        public function HidupkanMobil() {}
        public function MatikanMobil() {}
        public function ubahGigi() {}
    }
?>