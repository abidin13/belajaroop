<?php
	//buat class laptop
	class laptop
	{
		//buat public property
		public $pemilik;
		
		//buat public method
		public function hidupkan_laptop()
		{
			return "hidupkan laptop";
		}
	}
	//buat objek dari class laptop (instansiasi)
	$laptop_anto = new laptop();
	
	//set property
	$laptop_anto->pemilik = "anto";
	
	//tampilkan property
	echo $laptop_anto->pemilik;
	
	//tampilkan method 
	echo $laptop_anto->hidupkan_laptop(); //hidupkan laptop
	?>