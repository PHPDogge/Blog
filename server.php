<?php

class Dth11
{
	public $link = '';

	public function __construct($temperature, $humidity)
	{
		$this->connect();
		$this->storeInDB($temperature, $humidity);
	}

	public function connect()
	{
		try {
			$this->link = mysqli_connect('localhost','root','');
			mysqli_select_db($this->link,'DatacenterDB');
		} catch (Exeption $e) {
			$this->logger($e->getMessage());
		}
	}

	public function storeInDB($temperature, $humidity)
	{
		try {
			$query = "insert into Datacenter_table set humidity='".$humidity."', temperature='".$temperature."'";
			$result = mysqli_query($this->link,$query);
		} catch (Exeption $e) {
			$this->logger($e->getMessage());
		}
	}
}

if (!empty($_GET['temperature']) && !empty($_GET['humidity'])) {
	$temperature = $_GET['temperature'];
	$humidity = $_GET['humidity'];
	$Dth11 = new Dth11($temperature, $humidity);
}


?>
