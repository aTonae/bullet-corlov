<?php 
include_once "../config/init.php";
class SuRoute extends DbInit{


	public $tableName = "su_route_detail";
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
				$data['error'] = mysqli_error($this->getConnection());
			}
			

		}else{

			$data['con_error'] = "true";

		}

		

		return $data;
	}


	function insert($data){
		

		if($this->isConnected()){
			$data['con_error'] = "false";

			$query = "INSERT INTO `su_route_detail`(`route_code`, `name`, `status`, `created_at`, `updated_at`) VALUES ('".$data['route_code']."','".$data['route_name']."','1',NOW(),NOW())";

			$result = mysqli_query($this->getConnection() , $query);

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
