<?php
include_once '../model/class.model.php';





class ClassData{


	public static function createClass($data){

		$modelClass = new SuClassInfo();
		return $modelClass->insert($data);	

	}


	public static function getDataset(){



		$modelClass = new SuClassInfo();

		return $modelClass->selectComp();

	}





	



}


?>