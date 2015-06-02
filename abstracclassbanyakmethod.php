<?php
// buat abstract class
abstract class komputer{
   // buat abstract method
   abstract public function lihat_spec();
   abstract public function lihat_processor();
   abstract public function lihat_harddisk();
   abstract public function lihat_pemilik();
}
  
class laptop extends komputer{
   // .. isi class laptop
   public function lihat_spec()
   {
      
   }
   public function lihat_processor() 
   {
      
   }
   public function lihat_harddisk() 
   {
      
   }
   public function lihat_pemilik()
   {
      
   }
}
  
class pc extends komputer{
   // .. isi class pc
   public function lihat_spec()
   {
      
   }
   public function lihat_processor()
   {
      
   }
   public function lihat_harddisk()
   {
      
   }
   public function lihat_pemilik()
   {
      
   }
}
  
class netbook extends komputer{
   // .. isi class netbook
   public function lihat_spec()
   {
      
   }
   public function lihat_processor()
   {
      
   }
   public function lihat_harddisk()
   {
      
   }
   public function lihat_pemilik()
   {
      
   }
}
?>