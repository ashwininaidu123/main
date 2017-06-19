
 <?php
class Newrelease extends Controller {
function Newrelease(){
		parent::controller();
		if(!$this->session->userdata('logged_in'))redirect('/site/login');
		$this->load->model('sysconfmodel');
		$this->data = $this->sysconfmodel->init();
		$this->load->model('systemmodel');
		$this->roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
	}	
	function index(){
	  $roleDetail = $this->roleDetail;
	  $data['module']['title'] = "Error!!";
      $this->sysconfmodel->viewLayouterror('error_404');
	}
	function error_db(){
	  $roleDetail = $this->roleDetail;
	  $data['module']['title'] = "Error!!";
      $this->sysconfmodel->viewLayouterror('error_db');
	}
	function error_general(){
	  $roleDetail = $this->roleDetail;
	  $data['module']['title'] = "Error!!";
      $this->sysconfmodel->viewLayouterror('error_general');
	}
	function error_php(){
	  $roleDetail = $this->roleDetail;
	  $data['module']['title'] = "Error!!";
      $this->sysconfmodel->viewLayouterror('error_php');
	}
	
}
?>
