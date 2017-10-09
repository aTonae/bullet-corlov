<?php

$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


$uri  = $_SERVER['REQUEST_URI'];

$method = $_SERVER['REQUEST_METHOD'];

//Code to get the last parameter in the url

// $path = parse_url($uri, PHP_URL_PATH);
// $pathFragments = explode('/', $path);
// echo $end = end($pathFragments);

$static_url = "/admin/production/views/";
$controller_url = "../controller/";

if($method == "GET"){


	if($uri == $static_url."custom"){
	
	
	include "code1.php";
		
	}else if($uri == $static_url."custom2"){

	include $controller_url."student.php";

	}else if($uri == $static_url."student"){

	include $controller_url."student.php";

	//$student = new Student();

	$data = Student::getDataset();

	include "student_page.php";

	}else if($uri == $static_url."buses"){

	include $controller_url."bus.php";

	$bus = new Bus();
	$data_bus = $bus->getDataset();
	$data = array();
	$data['set'] = $data_bus['data'];
	include "bus_page.php";

	}else if($uri == $static_url."stops"){

	// include $controller_url."stop.php";

	// $stop = new Stop();

	// $data['set'] = $stop->getDataset();


	// include "stop_page.php";

	include "../route/routes.php";

	$route = new Routes();
	$route->get($_GET,"stops");


	}else if($uri == $static_url."assignbus"){

	include $controller_url."assign_bus_student.con.php";

	$AssignBus = new AssignBusStudent();
	$data_bus = $AssignBus->getBusData();
	$data_stop = $AssignBus->getStopData();
	$data_stu= $AssignBus->getStudentData();
	$data_set= $AssignBus->getDataset();




	$data = array();

	$data['bus'] = $data_bus;
	$data['stop'] = $data_stop;
	$data['stu'] = $data_stu;
	$data['set'] = $data_set;




	include "assign_bus_student.php";





	}else if($uri == $static_url."routes"){

	include $controller_url."route.con.php";

	$route = new Route();
	$data_set = $route->getDataset();

	$data = array();

	$data['set'] = $data_set['data'];

	include "route_page.php";

	}else if($uri == $static_url."addstoptoroute"){

	include $controller_url."route_detail.con.php";
	include $controller_url."stop.php";
	include $controller_url."route.con.php";



	$data = array();

	$route = new Route();
	$data_set = $route->getDataset();


	$data['route'] = $data_set['data'];

	$stop = new Stop();
	$data_set = $stop->getDataset();

	$data['stop'] = $data_set;

	$route_detail = new RouteDetail();
	$data_set = $route_detail->getDataset();

	$data['set'] = $data_set['data'];


	include "add_stop_to_route.php";

	}else if($uri == $static_url."addstudent"){

		$data = array();

		include $controller_url."student.php";


		$data = Student::addStudent();

		generateView($data , "add_student.php");

	}else if($uri == $static_url."addbus"){

		$data = array();
		generateView($data , "add_bus.php");

	}else if($uri == $static_url."addbustoroute"){

	include $controller_url."bus_detail.con.php";
	include $controller_url."bus.php";
	include $controller_url."route.con.php";



	$data = array();

	$route = new Route();
	$data_set = $route->getDataset();


	$data['route'] = $data_set['data'];

	$bus = new Bus();
	$data_set = $bus->getDataset();

	$data['bus'] = $data_set['data'];

	$bus_detail = new BusDetail();
	$data_set = $bus_detail->getDataset();

	$data['set'] = $data_set['data'];


	include "add_bus_to_route.php";

	}else if($uri == $static_url."class"){

		include "../route/routes.php";

		$route = new Routes();
		$route->loadView();



	}else if($uri == $static_url."notice"){

		// include "../route/routes.php";

		// $route = new Routes();
		// $route->loadView();

		include "add_notice.php";




	}else{

		include "welcome.php";
	}

}

if($method == "POST"){


	if($uri == $static_url."custom"){
	
	
	include "code1.php";
		
	}else if($uri == $static_url."custom2"){

	include $controller_url."student.php";

	}else if($uri == $static_url."student"){

	include $controller_url."student.php";

	$student = new Student();

	$data['set'] = $student->getDataset();


	include "student_page.php";

	}else if($uri == $static_url."buses"){

	include $controller_url."bus.php";

	$bus = new Bus();
	$bus->createBus($_POST);

	$data_bus = $bus->getDataset();
	$data = array();
	$data['set'] = $data_bus['data'];



	include "bus_page.php";

	}else if($uri == $static_url."stops"){

	// include $controller_url."stop.php";
	// include "stop_page.php";

		include "../route/routes.php";

		$route = new Routes();
		$route->post($_POST,"stops");

	}else if($uri == $static_url."assignbus"){

	include $controller_url."assign_bus_student.con.php";

	$AssignBus = new AssignBusStudent();
	$data_insert = $AssignBus->assingBus($_POST);

	$data_bus = $AssignBus->getBusData();
	$data_stop = $AssignBus->getStopData();
	$data_stu= $AssignBus->getStudentData();
	$data_set= $AssignBus->getDataset();



	$data = array();

	$data['bus'] = $data_bus;
	$data['stop'] = $data_stop;
	$data['stu'] = $data_stu;
	$data['set'] = $data_set['data'];

	print_r($data_set);



	include "assign_bus_student.php";





	}else if($uri == $static_url."routes"){

	include $controller_url."route.con.php";

	$route = new Route();
	$insert = $route->createRoute($_POST);
	$data_set = $route->getDataset();

	$data = array();

	$data['set'] = $data_set['data'];

	include "route_page.php";



	}else if($uri == $static_url."addstoptoroute"){

	include $controller_url."route_detail.con.php";
	include $controller_url."stop.php";
	include $controller_url."route.con.php";


	$route_detail = new RouteDetail();

	$route_detail->createRouteDetail($_POST);


	


	$data = array();

	$route = new Route();
	$data_set = $route->getDataset();


	$data['route'] = $data_set['data'];

	$stop = new Stop();
	$data_set = $stop->getDataset();

	$data['stop'] = $data_set;

	$route_detail = new RouteDetail();
	$data_set = $route_detail->getDataset();

	$data['set'] = $data_set['data'];

	include "add_stop_to_route.php";


	}else if($uri == $static_url."addstudent"){


		include $controller_url."student.php";

		$student = new Student();
		$student->createStudent($_POST);

		header('Location: '.$static_url.student);

		$data['set'] = $student->getDataset();


		include "student_page.php";

	}else if($uri == $static_url."addbustoroute"){

	include $controller_url."bus_detail.con.php";
	include $controller_url."bus.php";
	include $controller_url."route.con.php";

	$data = array();


	$bus_detail = new BusDetail();
	$data['create_info']  = $bus_detail->createRouteDetail($_POST);



	$route = new Route();
	$data_set = $route->getDataset();


	$data['route'] = $data_set['data'];

	$bus = new Bus();
	$data_set = $bus->getDataset();

	$data['bus'] = $data_set['data'];

	
	$data_set = $bus_detail->getDataset();

	$data['set'] = $data_set['data'];


	include "add_bus_to_route.php";

	}else if($uri == $static_url."class"){

		include "../route/routes.php";

		$route = new Routes();
		$route->postDataView($_POST);

	}


}

function generateView($init_data , $view){

	$data = array();

	$data = $init_data;

	include $view;

}

?>