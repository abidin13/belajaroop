<?php
	class komputer
	{
		protected $jenis_processor = "Core i5 Intel";
	}
	
	//buat class laptop turunan dari komputer
	class laptop extends komputer
	{
		public function tampilkan_processor()
		{
			return $this->jenis_processor;
		}
	}
	
	//buat objeck dari class laptop 
	$laptop_baru = new laptop();
	
	//jalankan method
	echo $laptop_baru->tampilkan_processor();
?>