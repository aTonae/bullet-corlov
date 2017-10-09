<?php 
include_once "../config/init.php";

class SuAssignBusStudent extends DbInit{


	public $tableName = "su_bus_assign";
	public $data = array();


	function selectComp(){

		//$DB = new DbInit();

		if($this->isConnected()){
			$data['con_error'] = "false";

			//$query = "SELECT * FROM $this->tableName WHERE status = 1";

			$que = "SELECT su_bus_rel_student.id AS id, su_bus_assign.bus_id AS 		r_number, su_bus_assign.route_id AS r_code, 	su_stop_detail.stop_code AS s_code, 	su_stop_detail.name AS name, su_student_info.name AS s_name
					FROM su_bus_rel_student
					INNER JOIN su_bus_assign ON su_bus_rel_student.bus_id = su_bus_assign.id
					INNER JOIN su_stop_detail ON su_bus_rel_student.stop_id = su_stop_detail.id
					INNER JOIN su_student_info ON su_bus_rel_student.student_id = su_student_info.id";

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

			$query = "INSERT INTO `su_bus_rel_student`(`student_id`, `bus_id`, `stop_id`, `status`, `created_at`, `updated_at`) VALUES ('".$data['student_id']."','".$data['bus_id']."','".$data['stop_id']."','1',NOW(),NOW())";

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
