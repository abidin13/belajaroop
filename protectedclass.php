<?php
	//buat class laptop
	class laptop
	{
		//buat protected property
		protected $pemilik = "anto";
		
		public function akses_pemilik()
		{
			return $this->pemilik;
		}
		//buat protected method
		protected function hidupkan_laptop()
		{
			return "hidupkan laptop";
		}
		public function paksa_hidup()
		{
			return $this->hidupkan_laptop();
		}
	}
	//buat objek dari class laptop (instansiasi)
	$laptop_anto = new laptop();
	
	//tampilkan property
	echo $laptop_anto->akses_pemilik();
	
	//tampilkan method 
	echo $laptop_anto->paksa_hidup(); //hidupkan laptop
	?>