<?php 
include_once "../config/init.php";

class SuBusInfo extends DbInit{


	public $tableName = "su_bus_info";
	public $data = array();


	function selectComp(){

		//$DB = new DbInit();

		if($this->isConnected()){
			$data['con_error'] = "false";

			$query = "SELECT * FROM $this->tableName WHERE status = 1";

			$result = mysqli_query($this->getConnection() , $query);

			if($result){
				$data['mysql_error'] = "false";

			$data_list = array();

			while($row_data  = mysqli_fetch_assoc($result)){

				array_push($data_list , $row_data);

			}
			$data['data'] = $data_list;
				
			}else{

				$data['mysql_error'] = "true";
				$data['error_info'] = mysqli_error($this->getConnection());
			}
			

		}else{

			$data['con_error'] = "true";

		}

		

		return $data;
	}

	function insert($data){
		if($this->isConnected()){
			$data['con_error'] = "false";

			$query = "INSERT INTO `su_bus_info`( `reg_number`, `name`, `code`, `status`, `created_at`, `updated_at`, `school_id`) VALUES ('".$data['reg_number']."','".$data['name']."','".$data['code']."','1',NOW(),NOW(),'".$data['school_id']."')";


			$con = $this->getConnection();
			$result = mysqli_query($con , $query);
			$data['error_info'] =  mysqli_error($con);
			if($result){
				$data['mysql_error'] = "false";
				$data['status'] = "success";


			
				
			}else{

				$data['mysql_error'] = "true";
				$data['status'] = "failed";


			}
			

		}else{

			$data['con_error'] = "true";
			$data['status'] = "failed";


		}

		

		return $data;
	}
}
?>
