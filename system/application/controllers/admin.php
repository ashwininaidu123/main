<?php
class Admin extends controller
{
	var $data,$roleDetail;
	function Admin(){
		parent::controller();
		if(!$this->session->userdata('logged_in'))redirect('/site/login');
		$this->load->model('sysconfmodel');
		$this->data = $this->sysconfmodel->init();
		$this->load->model('systemmodel');
		$this->load->model('adminmodel');
		$this->roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
	}
	function index(){
		redirect('Admin/editprofile');
	}
	function acc_config(){
		$roleDetail = $this->roleDetail;
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="") ? $cbid : $this->session->userdata('bid');
		if(isset($_POST['update_system'])){
			$res = $this->adminmodel->acc_settings($bid);
			if($res == 1 && $res != ''){
				$this->session->set_flashdata('msgt', 'success');
				$this->session->set_flashdata('msg', "Account Settings Changed Successfully");
				$this->auditlog->auditlog_info('Account Settings', "changed by ".$this->session->userdata('username'));
				redirect('AccountSettings');
			}
		}
		$itemDetail = $this->adminmodel->getAccSettings($bid);
		$formFields = array();
		$formFields[] = array('label'=>"<label class='col-sm-4 text-right'>Outbound Call Feature: </label> ",
				  'field'=>form_checkbox(array(
										'name'        => 'obc_feature',
										'id'          => 'obc_feature',
										'value'       => '1',
										'class'		  => '',
										'checked'	  => (isset($itemDetail['obc_feature']) && $itemDetail['obc_feature'] == 1) ? 'TRUE' : ''
				  				) )
					);
		$formFields[] = array('label'=>"<label class='col-sm-4 text-right'>Download Notification: </label> ",
				  'field'=>form_checkbox(array(
										'name'        => 'down_notify',
										'id'          => 'down_notify',
										'value'       => '1',
										'class'		  => '',
										'checked'	  => (isset($itemDetail['down_notify']) && $itemDetail['down_notify'] == 1) ? 'TRUE' : ''
				  				) )
					);
	    $formFields[] = array('label'=>"<label class='col-sm-4 text-right'>Send SMS On Add Lead: </label> ",
				  'field'=>form_checkbox(array(
										'name'        => 'lead_sms',
										'id'          => 'lead_sms',
										'value'       => '1',
										'class'		  => '',
										'checked'	  => (isset($itemDetail['lead_sms']) && $itemDetail['lead_sms'] == 1) ? 'TRUE' : ''
				  				) )
					);
	   if(isset($itemDetail['textto_cust']) && $itemDetail['lead_sms'] != '0') {
			$st = "style=' '";
		}else{
			$st = "style='display:none;'";
		}	
	   $formFields[] = array("label"=>"<label for='text to cusomer' id='textto_cuslab'  ".$st." class='col-sm-4 text-right' >Message To Customer :</label>"
									,"field"=>form_textarea(array(
												'name'      => 'textto_cust',
												'id'        => 'textto_cust',
												'value'		=> isset($itemDetail['textto_cust']) ? $itemDetail['textto_cust'] : '',
												'class'		=> 'form-control',
												'style' 	  => (isset($itemDetail['lead_sms']) && $itemDetail['lead_sms'] != '0') ? '' : 'display:none'
											)));
	
	    $formFields[] = array('label'=>"<label class='col-sm-4 text-right'>Delete Notification: </label> ",
				  'field'=>form_checkbox(array(
										'name'        => 'del_notify',
										'id'          => 'del_notify',
										'value'       => '1',
										'class'		  => '',
										'checked'	  => (isset($itemDetail['del_notify']) && $itemDetail['del_notify'] == 1) ? 'TRUE' : ''
				  				) )
					);
		$formFields[] = array("label"=>"<label for='Auto followup' class='col-sm-4 text-right'>Support Auto Followup :</label>"
									,"field"=>form_checkbox(array(
										'name'        => 'sup_followup',
										'id'          => 'sup_followup',
										'class'		  => '',
										'value'       => '1',
										'checked'	  => (isset($itemDetail['sup_followup']) && $itemDetail['sup_followup'] == 1) ? 'TRUE' : ''
				  				) )
							);
		$formFields[] = array("label"=>"<label for='followup Interval' class='col-sm-4 text-right'>Support Followup Interval :</label>"
									,"field"=>form_input(array(
												'name'      => 'sup_interval',
												'id'        => 'sup_interval',
												'value'		=> isset($itemDetail['sup_interval']) ? $itemDetail['sup_interval'] : '',
												'class'		=> 'form-control',
												'style'		=> 'width:150px;'
												
											))."&nbsp;&nbsp;(Hours)&nbsp;&nbsp;");
		$formFields[] = array("label"=>"<label for='action' class='col-sm-4 text-right'>Action Alignment :</label>"
							,'field'=>form_radio(array(
										"name"=>"action_align",
										"id"=>"action_align",
										"value"=>"1",
										'checked'=> (isset($itemDetail['action_align']) && ($itemDetail['action_align'] == 1)) ? 'checked' : '' 
										))." &nbsp; Left &nbsp;  ".
										form_radio(array(
										"name"=>"action_align",
										"id"=>"action_align",
										"value"=>"2",
										'checked'=> (isset($itemDetail['action_align']) && ($itemDetail['action_align'] == 2)) ? 'checked' : '' ))." &nbsp; Right &nbsp; "
							);	
		$formFields[] = array("label"=>"<label for='Auto followup' class='col-sm-4 text-right'>SMS Alert For Lead API :</label>"
									,"field"=>form_checkbox(array(
										'name'        => 'sms_alert_lead_api',
										'id'          => 'sms_alert_lead_api',
										'class'		  => '',
										'value'       => '1',
										'checked'	  => (isset($itemDetail['sms_alert_lead_api']) && $itemDetail['sms_alert_lead_api'] == 1) ? 'TRUE' : ''
				  				) )
							);	
	
		$formFields[] = array("label"=>"<label for='action' class='col-sm-4 text-right'>Dashboard Time Limit :</label>"
							,'field'=>form_radio(array(
										"name"=>"dashboard_limit",
										"id"=>"dashboard_limit",
										"value"=>"1",
										'checked'=> (isset($itemDetail['dashboard_limit']) && ($itemDetail['dashboard_limit'] == 1)) ? 'checked' : '' 
										))." &nbsp; Daily &nbsp;  ".
										form_radio(array(
										"name"=>"dashboard_limit",
										"id"=>"dashboard_limit",
										"value"=>"2",
										'checked'=> (isset($itemDetail['dashboard_limit']) && ($itemDetail['dashboard_limit'] == 2)) ? 'checked' : '' ))." &nbsp; 7 days &nbsp; ".
										form_radio(array(
										"name"=>"dashboard_limit",
										"id"=>"dashboard_limit",
										"value"=>"3",
										'checked'=> (isset($itemDetail['dashboard_limit']) && ($itemDetail['dashboard_limit'] == 3)) ? 'checked' : '' ))." &nbsp; 30 days &nbsp; "
							);
	  $formFields[] = array('label'=>"<label class='col-sm-4 text-right'> Archive Option: </label> ",
				  'field'=>form_checkbox(array(
										'name'        => 'archive_option',
										'id'          => 'archive_option',
										'value'       => '1',
										'class'		  => '',
										'checked'	  => (isset($itemDetail['archive_option']) && $itemDetail['archive_option'] == 1) ?  true : false
				  				) )
					);
	   if(isset($itemDetail['archive_option']) && $itemDetail['archive_option'] != '0') {
			$st = "style=' '";
		}else{
			$st = "style='display:none;'";
		}	
	   $formFields[] = array("label"=>"<label for='archive path' id='archivelab'  ".$st." class='col-sm-4 text-right' >Archive Recording Path :</label>"
									,"field"=>form_input(array(
												'name'      => 'archive_path',
												'id'        => 'archive_path',
												'value'		=> isset($itemDetail['archive_path']) ? $itemDetail['archive_path'] : '',
												'class'		=> 'form-control',
												'style' 	  => (isset($itemDetail['archive_option']) && $itemDetail['archive_option'] != '0') ? '' : 'display:none'
											)));
	
	if($this->feature_access(51)){									
       $formFields[] = array("label"=>"<label for='Mtracker api' class='col-sm-4 text-right'>URL for MTracker Api:</label>"
									,"field"=>form_input(array(
												'name'      => 'mtr_apiurl',
												'id'        => 'mtr_apiurl',
												'value'		=> isset($itemDetail['mtr_apiurl']) ? $itemDetail['mtr_apiurl'] : '',
												'class'		=> 'form-control'
												
											)));
		}									
		$data['module']['title'] = "Account Configuration";
		$data['form'] = array(
		            'form_attr'=>array('action'=>'AccountSettings','name'=>'accconfig','id'=>'accconfig','enctype'=>"multipart/form-data"),
					'fields'=>$formFields,
					'close'=>form_close()
				);
		$this->sysconfmodel->viewLayout('form_view',$data);
	}
	function sms_config(){
		$roleDetail = $this->roleDetail;
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="") ? $cbid : $this->session->userdata('bid');
		if(isset($_POST['update_system'])){
			$res = $this->adminmodel->smsConfig($bid);
			if($res == 1){
				$this->session->set_flashdata('msgt', 'success');
				$this->session->set_flashdata('msg', "SMS Settings Changed Successfully");
				$this->auditlog->auditlog_info('SMS Settings', "SMS Settings changed by ".$this->session->userdata('username'));
				redirect('SMSConfig');
			}
		}
		$itemDetail = $this->adminmodel->getSMSSettings($bid);
		$formFields = array();
		$formFields[] =array("label"=>"<label for='action' class='col-sm-4 text-right'>SMS Type :</label>"
							,'field'=>form_radio(array(
										"name"=>"clientsms",
										"id"=>"clientsms",
										"value"=>"0",
										'checked'=> (isset($itemDetail['clientsms']) && ($itemDetail['clientsms'] == 0)) ? 'checked' : '' 
										))." &nbsp; MCube SMS &nbsp;  ".
										form_radio(array(
										"name"=>"clientsms",
										"id"=>"clientsms",
										"value"=>"1",
										'checked'=> (isset($itemDetail['clientsms']) && ($itemDetail['clientsms'] == 1)) ? 'checked' : '' ))." &nbsp; Client SMS &nbsp; "
							);
		$dis = "none";
		if(isset($itemDetail['clientsms']) && $itemDetail['clientsms'] == 1){
			$dis = "block";
		}
		$formFields[] =array("label"=>"<label for='SMS API URL' id='smsapi_label' style='display:".$dis."' class='col-sm-4 text-right'>SMS API :</label>"
									,"field"=>form_input(array(
												'name'      => 'smsapi',
												'id'        => 'smsapi',
												'value'		=> isset($itemDetail['smsapi']) ? $itemDetail['smsapi'] : '',
												'class'		=> 'form-control ',
												'style'		=> 'display:'.$dis.';'
											))."&nbsp;","style"=>$dis);
		$formFields[] =array("label"=>"<label for='To parameter' id='sms_to_label' style='display:".$dis.";'  class='col-sm-4 text-right'>To Field:</label>"
									,"field"=>form_input(array(
												'name'      => 'smsto',
												'id'        => 'smsto',
												'value'		=> isset($itemDetail['smsto']) ? $itemDetail['smsto'] : '',
												'class'		=> 'form-control',
												'style'		=> 'display:'.$dis.';'
											))."&nbsp;","style"=>$dis);
		$formFields[] =array("label"=>"<label for='SMS Text to put the Message' id='sms_text_label'  style='display:".$dis.";' class='col-sm-4 text-right'>SMS Text</label>"
									,"field"=>form_input(array(
												'name'      => 'smstext',
												'id'        => 'smstext',
												'value'		=> isset($itemDetail['smstext']) ? $itemDetail['smstext'] : '',
												'class'		=> 'form-control',
												'style'		=> 'display:'.$dis.';'
											))."&nbsp;","style"=>$dis);
		$formFields[] =array("label"=>"<label for='action' class='col-sm-4 text-right'>Call SMS </label>"
							,'field'=>form_checkbox(array(
										"name"=>"calls",
										"id"=>"calls",
										"value"=>"1",
										'checked'=> (isset($itemDetail['calls']) && ($itemDetail['calls'] == 1)) ? 'checked' : '' 
										))
							);	
		$formFields[] =array("label"=>"<label for='action' class='col-sm-4 text-right'>Send SMS :</label>"
							,'field'=>form_checkbox(array(
										"name"=>"sendsms",
										"id"=>"sendsms",
										"value"=>"1",
										'checked'=> (isset($itemDetail['sendsms']) && ($itemDetail['sendsms'] == 1)) ? 'checked' : '' 
										))
							);
		$formFields[] =array("label"=>"<label for='Auto followup' class='col-sm-4 text-right'>SMS Lead API :</label>"
									,"field"=>form_checkbox(array(
										'name'        => 'leadapi',
										'id'          => 'leadapi',
										'class'		  => '',
										'value'       => '1',
										'checked'	  => (isset($itemDetail['leadapi']) && $itemDetail['leadapi'] == 1) ? 'TRUE' : ''
				  				) )
							);	
		$formFields[] =array("label"=>"<label for='Auto followup' class='col-sm-4 text-right'>Lead Assignment :</label>"
									,"field"=>form_checkbox(array(
										'name'        => 'leadassign',
										'id'          => 'leadassign',
										'class'		  => '',
										'value'       => '1',
										'checked'	  => (isset($itemDetail['leadassign']) && $itemDetail['leadassign'] == 1) ? 'TRUE' : ''
				  				) )
							);	
		$formFields[] =array("label"=>"<label for='Auto followup' class='col-sm-4 text-right'>Ticket Assignment :</label>"
									,"field"=>form_checkbox(array(
										'name'        => 'tktassign',
										'id'          => 'tktassign',
										'class'		  => '',
										'value'       => '1',
										'checked'	  => (isset($itemDetail['tktassign']) && $itemDetail['tktassign'] == 1) ? 'TRUE' : ''
				  				) )
							);	
		$formFields[] =array("label"=>"<label for='Auto followup' class='col-sm-4 text-right'>Followups :</label>"
									,"field"=>form_checkbox(array(
										'name'        => 'followup',
										'id'          => 'followup',
										'class'		  => '',
										'value'       => '1',
										'checked'	  => (isset($itemDetail['followup']) && $itemDetail['followup'] == 1) ? 'TRUE' : ''
				  				) )
							);	
		$formFields[] =array("label"=>"<label for='Allow DND' id='allowdnd_label' style='display:".$dis."' class='col-sm-4 text-right'>Allow DND :</label>"
									,"field"=>form_checkbox(array(
												'name'      => 'allowdnd',
												'id'        => 'allowdnd',
											    'class'		  => '',
										        'value'       => '1',
										        'checked'	  => (isset($itemDetail['allowdnd']) && $itemDetail['allowdnd'] == 1) ? 'TRUE' : '',
												'style'		=> 'display:'.$dis.';'
											))."&nbsp;","style"=>$dis
							);	
		$data['module']['title'] = "SMS Configuration";
		$data['form'] = array(
		            'form_attr'=>array('action'=>'admin/sms_config/','name'=>'smsconfig','id'=>'smsconfig','enctype'=>"multipart/form-data"),
					'fields'=>$formFields,
					'close'=>form_close()
				);
		$this->sysconfmodel->viewLayout('form_view',$data);
	}
	function feature_access(){
		$show=0;
		$checklist=$this->systemmodel->checked_featuremanage();
		if(in_array(15,$checklist)){
			$show=1;
		}
		return $show;
	}
}
?>
