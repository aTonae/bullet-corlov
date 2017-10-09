<?php 
include_once "../config/init.php"; 
include_once '../model/stop.model.php';

class Stop{

	public static function getDataset(){

		$stop = new SuStopDetail();

		return $data_stop = $stop->selectComp()['data'];

	}


	public static function createStop($data){

		$output = array();
		$stop = new SuStopDetail();

		$output['sql'] = $stop->insert($data);

		$output['route'] = TRUE;

		$output['route_url'] = "student";

		return $output;





	}
}
?>
