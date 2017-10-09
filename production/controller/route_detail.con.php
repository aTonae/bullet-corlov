<?php
include '../model/route_detail.model.php';





class RouteDetail{


	function createRouteDetail($data){

		$modelRoute = new SuBusRoute();
		return $modelRoute->insert($data);	

	}


	function getDataset(){

		$modelRoute = new SuBusRoute();
		return $modelRoute->selectComp();
	}


	



}


?>