<?php
class Data extends CI_Controller{
    public function autocomplete()
    {
        $data=array(
            'element_3','nganu'
        );
        
        echo json_encode($data);
    }
}