<?php
include_once "../controller/class.con.php";
include_once "../controller/stop.php";


class Routes{



	function loadView(){

		$class = new ClassData();


		$data = array();
		$data_set= $class->getDataset();
		$data['set'] = $data_set['data'];

		include_once "../views/class_page.php";




	

	}


	function postDataView($data){

		$class = new ClassData();
		ClassData::createClass($data);
		$data = array();
		$data_set= $class->getDataset();
		$data['set'] = $data_set['data'];

		include_once "../views/class_page.php";


	}

	public static function post($data , $url){


		switch ($url) {
			case 'stops':

				$input = Stop::createStop($data);

				if($input['route']){
					$url = $input['route_url'];
				
				}
				
				Routes::get($input , $url);

				//header('Location: http://localhost:9000/admin/production/views/stops');

				break;
			case 'notice':

				$input = Notice::createNotice($data);

				if($input['route']){
					$url = $input['route_url'];
				
				}
				
				Routes::get($input , $url);


				break;	
			
			default:

				Routes::renderView("" , "welcome.php");

				break;
		}



	}

	public static function get($data , $url){


		switch ($url) {
			case 'stops':


				$input = Stop::getDataset();
				$view = "stop_page.php";
				$data['set'] = $input;

				Routes::renderView($data , $view);

				break;

			
			default:

				Routes::renderView("" , "welcome.php");
				
				break;
		}



	}


	public static function renderView($data , $view){

		include "../views/".$view;

	}
}


?>