<?php 
include '../model/bus.model.php';





class Bus{

	function createBus($data){

			$modelBus = new SuBusInfo();

			return $modelBus->insert($data);


	}

	function getDataset(){

			$modelBus = new SuBusInfo();

			return $modelBus->selectComp();

	}

}

?>
