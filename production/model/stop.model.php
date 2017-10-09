<?php 
include_once "../config/init.php";

class SuStopDetail extends DbInit{


	public $tableName = "su_stop_detail";
	public $data = array();


	function selectComp(){


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
			}
			

		}else{

			$data['con_error'] = "true";

		}

		

		return $data;
	}

	function insert($data){
		if($this->isConnected()){
			$data['con_error'] = "false";

			$query = "INSERT INTO `su_stop_detail`(`name`, `stop_code`, `latitude`, `longitude`, `school_id`,`status`, `created_at`, `updated_at`) VALUES ('".$data['name']."','".$data['stop_code']."','".$data['latitude']."','".$data['longitude']."','".$data['school_id']."','1',NOW(),NOW())";

			$result = mysqli_query($this->getConnection() , $query);

			$data['result_id'] = $this->getConnection()->insert_id;

			if($result){
				$data['mysql_error'] = "false";
				$data['status'] = "success";


			
				
			}else{

				$data['mysql_error'] = "true";
				$data['status'] = "failed";
				$data['error_detail'] = mysqli_error($this->getConnection());

			}
			

		}else{

			$data['con_error'] = "true";
			$data['status'] = "failed";


		}

		

		return $data;
	}
}
?>

