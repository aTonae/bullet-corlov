<?php
include '../model/bus_detail.model.php';
include '../model/stop.model.php';
include '../model/student.model.php';
include '../model/assign_bus_student.model.php';





class AssignBusStudent{


	function getBusData(){

		$bus = new SuBusDetail();

		return $data_bus = $bus->selectComp();

	}

	function getStopData(){

		$stop = new SuStopDetail();

		return $data_stop = $stop->selectComp();

	}

	function getStudentData(){

		$student = new SuStudentDetail();

		return $data_student = $student->selectComp();

	}


	function assingBus($data){

			$modelAssign = new SuAssignBusStudent();

			return $modelAssign->insert($data);


	}

	function getDataset(){

			$modelAssign = new SuAssignBusStudent();

			return $modelAssign->selectComp();

	}
}


?>