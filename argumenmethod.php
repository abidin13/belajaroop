<?php
	//buat class laptop
	class laptop
	{
		//buat method untuk class laptop
		public function hidupkan_laptop($merk,$pemilik)
		{
			return "Hidupkan laptop $merk milik $pemilik";
		}
		
	}
	//buat objek dari class laptop
	$laptop_andi = new laptop();
	
	echo $laptop_andi->hidupkan_laptop("lenovo","andi");	
?>