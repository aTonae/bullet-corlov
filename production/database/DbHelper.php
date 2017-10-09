<?php
include "config/init.php";

class DbHelper extends DbInit{
	
  public $tableName;

  function selectComp($condition == null){

		if($this->isConnected()){
			$data['con_error'] = "false";

			$query = "SELECT * FROM $this->tableName WHERE $condition";

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

  function select(){

			if($this->isConnected()){
			$data['con_error'] = "false";

			$query = "SELECT * FROM $this->tableName WHERE 1";

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

}