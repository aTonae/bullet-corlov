<?php 
require_once "../config/init.php"; 

class SuStudentDetail extends DbInit{


	public $tableName = "su_student_info";
	public $data = array();


	function selectComp(){


		if($this->isConnected()){
			$data['con_error'] = "false";

			$query = "SELECT * FROM $this->tableName WHERE status = 1";

			$que = "SELECT s . * , (
					SELECT name
					FROM su_class_info
					WHERE id
					IN (

					SELECT class_id
					FROM su_student_class AS sc
					WHERE sc.student_id = s.id
					)
					) AS class_id
					FROM su_student_info AS s";

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

			$query = "INSERT INTO `su_student_info`(`name`, `email`, `contact`, `address`, `status`, `created_at`, `updated_at`) VALUES ('".$data['name']."','".$data['email']."','".$data['contact']."','".$data['address']."','1',NOW(),NOW())";

			$result = mysqli_query($this->getConnection() , $query);

			$data['result_id'] = $this->getConnection()->insert_id;

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
