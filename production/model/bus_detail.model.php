<?php 
include_once "../config/init.php";

class SuBusDetail extends DbInit{


	public $tableName = "su_bus_assign";
	public $data = array();


	function selectComp(){

		//$DB = new DbInit();

		if($this->isConnected()){
			$data['con_error'] = "false";

			$query = "SELECT * FROM $this->tableName WHERE status = 1";

			$que = "SELECT su_bus_assign.id AS id, su_bus_info.reg_number AS 		reg_number, su_bus_info.name AS bus_name , su_route_detail.route_code AS route_code , su_route_detail.name AS route_name , su_bus_assign.status AS status , su_bus_assign.created_at AS created_at
					FROM su_bus_assign
					INNER JOIN su_bus_info ON su_bus_assign.bus_id = su_bus_info.id
					INNER JOIN su_route_detail ON su_bus_assign.route_id = su_route_detail.id
					";

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
			}
			

		}else{

			$data['con_error'] = "true";

		}

		

		return $data;
	}

	function insert($data){
		if($this->isConnected()){
			$data['con_error'] = "false";

			$query = "INSERT INTO `su_bus_assign`(`bus_id`, `origin`, `destination`, `status`, `school_id`, `route_id`, `created_at`, `updated_at`) VALUES ( '".$data['bus_id']."','','','1','".$data['school_id']."','".$data['route_id']."',NOW(),NOW())";

			$con = $this->getConnection();
			$result = mysqli_query($con , $query);

			if($result){
				$data['mysql_error'] = "false";
				$data['status'] = "success";


			
				
			}else{

				$data['mysql_error'] = "true";
				$data['status'] = "failed";
			
				$data['error_info'] =  mysqli_error($con);

			}
			

		}else{

			$data['con_error'] = "true";
			$data['status'] = "failed";


		}

		

		return $data;
	}
}
?>
