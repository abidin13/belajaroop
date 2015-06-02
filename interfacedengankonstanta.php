<?php
interface mouse{
   const JENIS = "Laser Mouse";
   public function klik_kanan();
   public function klik_kiri();
}
  
echo mouse::JENIS;
// Laser Mouse
?>