<?php
interface mouse{
   public function klik_kanan();
   public function klik_kiri(){
     return "Klik Kiri...";
   }
}
  
class laptop implements mouse{
   public function klik_kanan(){
     return "Klik Kanan...";
   }
}
  
$laptop_baru = new laptop();
// Fatal error: Interface function
// mouse::klik_kiri() cannot contain body
?>