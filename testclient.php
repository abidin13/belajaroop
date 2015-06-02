<?php
	class Client {

public function __construct($obj)
{
$pc = new Pc;
$laptop = new Laptop;
$chromebook = new Chromebook;

$this->booting_os_komputer($obj);
$this->double_klik_komputer($obj);
}

public function booting_os_komputer(Komputer $komputer)
{
echo $komputer->booting_os();
}

public function double_klik_komputer (mouse $obj)
{
echo $obj->double_klik();
}
}

$client = new Client;
?>