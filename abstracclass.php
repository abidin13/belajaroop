<?php
   abstract class komputer {
   abstract public function lihat_spec($pemilik);
   }
 
$komputer_baru=new komputer();
// Fatal error: Cannot instantiate abstract class komputer
?>