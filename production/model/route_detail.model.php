<?php 
include_once "../config/init.php";
class SuBusRoute extends DbInit{


	public $tableName = "su_bus_route_detail";
	public $data = array();


	function selectComp(){

		//$DB = new DbInit();

		if($this->isConnected()){
			$data['con_error'] = "false";

			//$query = "SELECT * FROM $this->tableName WHERE status = 1";

			$que = "SELECT su_bus_route_detail.id AS id, su_route_detail.route_code AS 		route_code, su_route_detail.name AS r_name, 	su_stop_detail.stop_code AS s_code, 	su_stop_detail.name AS s_name, su_bus_route_detail.created_at AS created_at
					FROM su_bus_route_detail
					INNER JOIN su_route_detail ON su_bus_route_detail.route_id = su_route_detail.id
					INNER JOIN su_stop_detail ON su_bus_route_detail.stop_id = su_stop_detail.id";
					

			$result = mysqli_query($this->getConnection() , $que);

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

			$query = "INSERT INTO `su_bus_route_detail`(`route_id`, `stop_id`, `arrival_time`, `status`, `created_at`, `updated_at`) VALUES ('".$data['route_id']."','".$data['stop_id']."','','1',NOW(),NOW())";

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
