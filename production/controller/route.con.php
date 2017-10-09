<?php
include '../model/route.model.php';





class Route{


	function createRoute($data){

		$modelRoute = new SuRoute();
		return $modelRoute->insert($data);	

	}


	function getDataset(){

		$modelRoute = new SuRoute();
		return $modelRoute->selectComp();
	}



}


?>