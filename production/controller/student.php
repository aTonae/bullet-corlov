<?php 
include "../model/student.model.php"; 
include "../model/student_class.model.php"; 


include_once "../controller/class.con.php"; 






class Student{


	public static function getDataset(){

		$data = array();

		$student = new SuStudentDetail();

		$data['set'] = $student->selectComp()['data'];

		return $data;

	}


	public function createStudent($input){

	$output = array();

	$student = new SuStudentDetail();

	$output = $student->insert($input);


	$input['student_id'] = $output['result_id'];


	$studentClass = new SuStudentClass();

	$output = $studentClass->insert($input);

	return $output;





	}


	public static function addStudent(){

		$data = array();
		$data['class'] = ClassData::getDataset()['data'];

		return $data;


	}

}

?>
