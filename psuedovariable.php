<?php
	//buat class laptop 
	class laptop
	{
		//buat property untuk class laptop
		public $pemilik;
		public $merk;
		
		
		//buat method untuk class laptop
		public function hidupkan_laptop()
		{
			return "hidupkan laptop $this->merk punya $this->pemilik";
		}
		
		public function matikan_laptop()
		{
			return "matikan laptop $this->merk punya $this->pemilik";
		}
		
		public function restart_laptop()
		{
			$matikan= $this->matikan_laptop();
			$hidupkan= $this->hidupkan_laptop();
			$restart= $matikan."<br>".$hidupkan;
			return $restart;
		}
	}
	$laptop_baru =  new laptop();
		
		//isi property objek
		$laptop_baru->pemilik="Anto";
		$laptop_baru->merk="asus";
		
		echo $laptop_baru->hidupkan_laptop();
		
		echo "<br>";
		
		echo $laptop_baru->matikan_laptop();
		
		echo"<br>";
		
		echo $laptop_baru->restart_laptop();
	?>