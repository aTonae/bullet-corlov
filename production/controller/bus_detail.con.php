<?php
include '../model/bus_detail.model.php';





class BusDetail{


	function createRouteDetail($data){

		$modelRoute = new SuBusDetail();
		return $modelRoute->insert($data);	

	}


	function getDataset(){

		$modelRoute = new SuBusDetail();
		return $modelRoute->selectComp();
	}


	



}


?>