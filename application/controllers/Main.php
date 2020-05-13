<?php
class Main extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('document_model');
    }


    public function index()
    {
        $data['page']='index';
        $this->load->view('parts/header',$data);
        $this->load->view('doc/search');
        $this->load->view('parts/footer');
    }

    function get_autocomplete(){
		if (isset($_GET['term'])) {
		  	$result = $this->document_model->autocomplete_title($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'	=> $row->username,
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}

}