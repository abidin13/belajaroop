<?php
	//buat class komputer
	class komputer 
	{
		//property dengan hak akses private
		private $jenis_processor = "Core i5 Intel";
		
		public function tampilkan_processor()
		{
			return $this->jenis_processor;
		}
	}
	
	//buat class laptop 
	class laptop extends komputer 
	{
		public function tampilkan_processor()
		{
			return $this->jenis_processor;
		}
	}
	
	//buat objek dari class laptop
	$komputer_baru = new komputer();
	$laptop_baru = new laptop();
	
	//jalankan method dari class komputer
	echo $komputer_baru->tampilkan_processor();
	
	//jalankan method dari class laptop
	echo $laptop_baru->tampilkan_processor();
	?>