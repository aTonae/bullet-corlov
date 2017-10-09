<?php
$db_name = "cptas_array";
$db_user = "obl_array";
$db_pass = "obl@array";
$server = "obleamlabs.com";
$con = mysqli_connect($server , $db_user ,$db_pass , $db_name);
if(!$con)
{
// echo "connection error".mysqli_connect_error();
}
else
{
// echo "<h3> Database Connection Success</ h3>";
}

class DbInit{


	public $db_name = "cptas_array";
	public $db_user = "obl_array";
	public $db_pass = "obl@array";
	public $server = "obleamlabs.com";

	public $con;


	function connectDB(){
		$this->con = mysqli_connect($this->server , $this->db_user ,$this->db_pass , $this->db_name);


	}

	function isConnected(){
		$this->connectDB();

		if($this->con){
			return TRUE;
		}else{
			return FALSE;
		}

	
	}

	function getConnection(){
		return $this->con;
	}


}

?>
