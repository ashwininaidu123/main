<?php
class Smstracker extends Controller {
	function Smstracker(){
		parent::controller();
		$this->load->model('smstrackermodel','SM'); 	
		$this->form_validation->_error_prefix="<br>";
		$this->form_validation->_error_suffix="";
	}
	function index(){
		echo "This is a private URL.";
	}
    function phone_track(){
	 $this->form_validation->set_rules('clientname', 'clientname', 'required');
	 $this->form_validation->set_rules('landingnumber', 'landingnumber', 'required');
     $this->form_validation->set_rules('battper', 'battper', 'required');
        if (!$this->form_validation->run() == FALSE) {
            $user = $this->SM->phonetrack($_POST);
           if ($user == '1') {
                $out = array(
                    'code' => '200',
                    'msg' => 'Battery need to charged'
                );
            }
       } else {
            $out = array(
                'code' => '420',
                'msg' => validation_errors()
            );
       }
        echo json_encode($out);
        exit;
  
    }
}
?>
