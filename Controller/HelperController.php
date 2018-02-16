<?php 

class HelperController {
	
	 public function __construct() {

	 	$app_token="ccqbImFyU7hKW9BXEp6nHTfbW";

	 	$this->socrata = new Socrata("https://www.datos.gov.co/", $app_token);		

		$this->view_uid = "pvwz-h8jb";
	 }


	 public function index()
	 {	 	
		
	 	$response = $this->socrata->get($this->view_uid);

		$table_headers = $this->get_search_headers($response);
	
		$rows = json_decode(json_encode($response), FALSE);

		require('View/FilterView.php');

	 }

	 public function execute_query()
	 {
	 	$params = array("\$query" =>$_POST['query']);

		$response = $this->socrata->get($this->view_uid, $params);

		$table_headers = $this->get_search_headers($response);
	
		$rows = json_decode(json_encode($response), FALSE);

		if($_POST['type_of_filter'] == 2)
		{
			header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
			header("Content-type:   application/x-msexcel; charset=utf-8");
			header("Content-Disposition: attachment; filename=data.xls"); 
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("Cache-Control: private",false);
			require('View/TableView.php');
			
		}
		else{
			require('View/FilterView.php');
		}

		
	 }

	 private function get_search_headers($response)
	 {
	 	$headers_array = array();
	 	if(!isset($response['error']))
	 	{
	 		foreach ($response[0] as $key => $value)
		 	{
		 		array_push($headers_array,$key);
		 	};

		 	return $headers_array;	
	 	}

	 	else
	 	{
	 		return null;
	 	}	
	 	
	 }
}