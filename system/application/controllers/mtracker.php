<?php
class Mtracker extends Controller {
	var $data,$roleDetail,$access;
	function Mtracker(){
		parent::controller();
		if(!$this->session->userdata('logged_in'))redirect('/site/login');
		$this->load->model('sysconfmodel');
		$this->data = $this->sysconfmodel->init();
		$this->load->model('systemmodel');	
		$this->load->model('reportmodel');	
		$this->load->model('leadsmodel');	
		$this->load->model('groupmodel');	
		$this->load->model('supportmodel');	
		$this->roleDetail=$this->empmodel->getRoledetail($this->session->userdata('roleid'));
		$this->load->model('mtrackermodel','mt');
	}
	public function __destruct() {
		$this->db->close();
	}
	function index(){
		redirect('listCalls/0');
	}
	function addLicence($eid=''){
		if(!$this->feature_access(15))redirect('Employee/access_denied');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		if($this->input->post('update_system')){
			$res = $this->mt->addMtEmp($bid);
			if($res==0){
				$this->session->set_flashdata('msgt', 'error');
				$this->session->set_flashdata('msg', $this->lang->line('error_alreadyexists'));
				redirect('AddMTLicence/0');
			}elseif($res == 1){
				$this->session->set_flashdata('msgt', 'success');
				$this->session->set_flashdata('msg', $this->lang->line('error_addempsucss'));
				redirect('ListMTLicence/0');
			}elseif($res == 2){
				$this->session->set_flashdata('msgt', 'error');
				$this->session->set_flashdata('msg', "Your MTracker Licences has been exceeded please contact your Relationship Manager");
				redirect('ListMTLicence/0');
			}elseif($res == 3){
				$this->session->set_flashdata('msgt', 'success');
				$this->session->set_flashdata('msg', "You do not have MTracker Licences please contact your Relationship Manager");
				redirect('ListMTLicence/0');
			}
		}
		$roleDetail = $this->roleDetail;
		//if(!$roleDetail['modules']['51']['opt_add']) redirect('Employee/access_denied');
		$mtdetails = ($eid != '' && $eid != '0') ? $this->mt->editEmp($bid,$eid) : $this->mt->mtEmp($bid) ;
		$this->sysconfmodel->data['html']['title'] .= " | Add MTracker Employee";
		$data['module']['title'] = " Add MTracker Employee";
		$formFields = array();
		$data['form'] =  array( 'form_attr'=>array('action'=>'mtracker/addLicence/'.$eid,'name'=>'addempl','id'=>'addempl',),
										'fields'=>$formFields,
										'hidden' => array('bid'=>$bid,'eid'=>$eid),
										'close'=>form_close(),
										'emplist'=>$mtdetails,
						);
		$this->sysconfmodel->viewLayout('form_view_mtemp',$data);
	}
	function listLicence(){
		if(!$this->feature_access(15))redirect('Employee/access_denied');
		$cbid = $this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$roleDetail = $this->roleDetail;
		$data['module']['title'] = "List MTracker Employees";
		$ofset = ($this->uri->segment(2)!=null)?$this->uri->segment(2):0;
		$limit = '30';
		$header = array("Employee Name","Employee Number","Start Time","End Time","Last Location");
		$data['itemlist']['header'] = $header;
		$emp_list = $this->mt->mtemplist($bid,$ofset,$limit);
		$rec = array();$list = array();
		if(count($emp_list['data'])>0){
			$i=1;
			foreach ($emp_list['data'] as $item){
				$rec = array($i);
				$opt = '';
				$opt .= '<a href="'.site_url('AddMTLicence/'.$item['eid']).'"><span title="Edit Licence" class="glyphicon glyphicon-edit"></span></a>';
				$opt .= '<a href="'.site_url('mtracker/delete_mtemp/'.$item['eid']).'"><span title="Delete Licence" class="glyphicon glyphicon-trash"></span></a>';
				$rec[] = '<a href="Employee/activerecords/'.$item['eid'].'" class="btn-danger" data-toggle="modal" data-target="#modal-responsive">'.(($item['status']=="1") ? $item['empname'] : '<font color=red>'.$item['empname'].'</font>').'</a>';
				$rec[] = (($item['status']=="1") ? $item['empnumber'] : '<font color=red>'.$item['empnumber'].'</font>');
	            $rec[] = ($item['status']=="1") ? $item['starttime'] : '<font color=red>'.$item['starttime'].'</font>';
				$rec[] = ($item['status']=="1") ? $item['endtime'] : '<font color=red>'.$item['endtime'].'</font>';
				$rec[] = ($item['status']=="1") ? '<a href="mtracker/geochart_loc/'.$item['last_location'].'"  class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><i class="fa fa-map-marker"></i>Last Location</a>' : '<font color=red><a href="mtracker/geochart_loc/'.$item['last_location'].'"  class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><i class="fa fa-map-marker"></i>Last Location</a></font>';
				$rec['action'] = $opt;
				$i++;
				array_push($list,$rec);
			 }
		}
		$data['itemlist']['rec'] = $list;
		$data['itemlist']['count'] = $emp_list['count'];
		$this->pagination->initialize(array(
						 'base_url'=>site_url('ListMTLicence/')
						,'total_rows'=>$data['itemlist']['count']
						,'per_page'=>$limit	
						,'uri_segment'=>2					
				));
		$data['paging'] = $this->pagination->create_links();
		$this->sysconfmodel->data['html']['title'] .= " | List MTracker Employees"; 
		$links = array();
		$links[] ='<li><a href="AddMTLicence/0"><span title="Add Licence" class="glyphicon glyphicon-plus-sign">&nbsp;AddLicence</span></a></li>';
		$links[] = '<li class="divider"><a>&nbsp;</a></li>';
		$links[] = '<li><a href="'.$_SERVER['REQUEST_URI'].'" class="btn-search" data-toggle="modal" data-target="#modal-search" ><span title="Search" class="glyphicon glyphicon-search" >&nbsp;Search</span></a></li>';
		$formFields = array();
		$cf=array('label'=>'<label class="col-sm-4 text-right" for="groupname">Employee Name : </label>',
				  'field'=>form_input(array(
									   'name'         => 'empname',
									   'class'        => 'form-control',
										'id'          => 'empname',
										'value'       => $this->session->userdata('empname'))));
		array_push($formFields,$cf);
		$data['links'] = $links;				
		$data['form'] = array(
			'open'=>form_open_multipart('ListMTLicence/0',array('name'=>'listmtEmp','class'=>'form','id'=>'listmtEmp','method'=>'post')),
			'form_field'=>$formFields,
			'adv_search'=>array(),
			'close'=>form_close(),
			'title'=>$this->lang->line('level_search')
			);
		if(isset($_POST['search']) && $_POST['search'] == 'search'){
			$this->load->view('search_view',$data);
			return true;
		}
		$this->sysconfmodel->viewLayout('list_view',$data);
	}
	function delete_mtemp($eid){
		$cbid=$this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="") ? $cbid : $this->session->userdata('bid');
		$res=$this->mt->del_mtgrp($bid,$eid);
		redirect('ListMTLicence/0');
	}	
	function listCalls(){
		$cbid=$this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="") ? $cbid : $this->session->userdata('bid');
		$roleDetail = $this->roleDetail;	
		if(!$this->feature_access(15))redirect('Employee/access_denied');
		$url = "all";
		$heading = "MTracker Calls";
		$page = "MTracker";
		$u3 = ($this->uri->segment(2)!='')?$this->uri->segment(2):'all';
		$dlink = "";
		if($this->input->post('download')){
			$filename = $this->mt->mtracker_csv($this->uri->segment(1),$bid);
			$dlink =  "<a href='".$this->config->item('reports_path').$filename.".zip' target='_blank' style='color:#fff'><b>Download</b></a>  ";
		}elseif($this->input->post('blk_down')){
			$filename = $this->mt->blk_down($bid);
			$dlink =  "<a href='".$this->config->item('reports_path').$filename.".zip"."' target='_blank' style='color:#fff'><b>Download</b></a>  ";
		}
		//if(!$roleDetail['modules']['51']['opt_view']) redirect('Employee/access_denied');
		if($this->input->post('submit')){	
			if($this->session->userdata('search')!=""){
				$s=$this->session->unset_userdata('search');
			}
		}
		$data['downlink'] = $dlink;
			//echo "<pre>"; print_r($roleDetail); exit;
		$parentbids=array();
		if($this->session->userdata('eid')==1){
			$parentbids=$this->systemmodel->getChildBusiness();
		}
		$ofset = ($this->uri->segment(3)!=null)?$this->uri->segment(3):0;
		$limit = '30';
		$data['itemlist'] = $this->mt->mTrackerList($bid,$ofset,$limit,$url,$u3);
		$data['module']['title'] =$heading . ' ['.$data['itemlist']['count'].']';
		$csv_link = ($this->uri->segment(2)!='')?$this->uri->segment(2):'all';
		$csv_link1 = ($this->uri->segment(1)!='')?$this->uri->segment(1):'mTracker';
		$links = array();
		$links[] = ($roleDetail['modules']['51']['opt_delete']) ?'<li><a  class="blkDeletecall" href="mtracker/mtBulkDel" ><span title="Bulk Delete" class="glyphicon glyphicon-trash">&nbsp;Delete</span></a></li>':'';
		$links[] = '<li><a href="#" class="blkemail" rel="calls"><span title="Bulk Mail" class="glyphicon glyphicon-envelope">&nbsp;Email</span></a></li>';
		$links[] = '<li><a href="Report/blksms" class="blkSMs" data-toggle="modal" data-target="#modal-blksms" rel="mtracker"><span title="Bulk SMS" class="glyphicon glyphicon-comment">&nbsp;SMS</span></a></li>';
		$links[] = '<li  class="divider"><a>&nbsp;</a></li>';
		$links[] = '<li><a href="'.$_SERVER['REQUEST_URI'].'" class="btn-search" data-toggle="modal" data-target="#modal-search" ><span title="Search" class="glyphicon glyphicon-search">&nbsp;Search</span></a></li>';
	    $links[] = '<li  class="divider"><a>&nbsp;</a></li>';
		//~ $links[] = '<li><a href="'.$_SERVER['REQUEST_URI'].'" class="btn-advsearch" data-toggle="modal" data-target="#modal-advsearch" ><span title="Search" class="glyphicon glyphicon-zoom-in">&nbsp;Advance Search</span></a></li>';
		$links[] = ($roleDetail['modules']['51']['opt_download']!=0) ? '<li><a href="mtracker/Bulktrack_down/'.$csv_link1.'/'.$csv_link.'" class="blk_calls" data-toggle="modal" data-target="#modal-pop"><span title="Download" class="glyphicon glyphicon-arrow-down">&nbsp;DownloadSelect</span></a></li>':'';
		$links[] = ($roleDetail['modules']['51']['opt_download']!=0) ? '<li><a href="mtracker/mtrack_csv/'.$csv_link1.'/'.$csv_link.'" class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><span title="Download" class="glyphicon glyphicon-download-alt">&nbsp;DownloadAll</span></a></li>':'';
		$fieldset = $this->configmodel->getFields('51',$bid);
		$formFields = array();
		$advsearch = array();
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && $field['show'] && !in_array($field['fieldname'],array(
																						'calleraddress',
																						'callerbusiness',
																						'region',
																						'rate',
																						'exefeedback',
																						'custfeedback'))){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked) { $formFields[] = array(
									'label'=>'<label class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' : </label>',
									'field'=>
										($field['fieldname']=='gid')
											?form_dropdown('gid',$this->systemmodel->get_groups(),'',"class='form-control'")
											:(($field['fieldname']=='eid')
												?form_dropdown('empid',$this->groupmodel->employee_list(),'',"class='form-control'")
												:(($field['fieldname']=='pulse')
													?
													form_dropdown('ptype',array(
																				'>'=>' > ',
																				'='=>' = ',
																				'<'=>' < '
																			),'',"style='width:60px;color:#000;' class='form-control'").' '.
													form_input(array(
													'name'      => $field['fieldname'],
													'class'     => 'form-control',
													'id'        => $field['fieldname']
													),'',"style='width:79.5%;'")
													:form_input(array(
													'name'      => $field['fieldname'],
													'id'        => $field['fieldname'],
													'class'		=>($field['fieldname']=="starttime" || $field['fieldname']=="endtime")?'datepicker_leads form-control':'form-control'
													))
												)
											)
										);
								$advsearch[$field['fieldname']]=(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']);		
							}			
			}elseif($field['type']=='c' && $field['show']){
				foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					$formFields[] = array(
						'label'=>'<label class=" col-sm-4 text-right" for="custom_'.$field['fieldid'].'">'.$field['customlabel'].' : </label>',
						'field'=>$this->configmodel->createFieldAdvance($field,'','search',"class='form-control'"));
					$advsearch[$field['fieldKey']]=$field['customlabel'];
				}					
			}
		}
		unset($advsearch['gid']);
		unset($advsearch['eid']);
		$save_cnt=save_search_count($bid,'51',$this->session->userdata('eid'));	
		$search_names=get_save_searchnames($bid,'51',$this->session->userdata('eid'));
		$data['form'] = array(
						'open'=>form_open_multipart(site_url($page.'/'.$u3.'/')
						,array('name'=>'manageemp','class'=>'form','id'=>'manageemp','method'=>'post')
						,array('module'=>'tracker')),
					'form_field'=>$formFields,
					'search_url'=>$page.'/',
					'parentids'=>$parentbids,
					'busid'=>$bid,
					'pid'=>$this->session->userdata('pid'),
					'close'=>form_close(),
					'title'=>$this->lang->line('level_search')
					);
		$data['mtab'] = true;	
		$data['mtab1'] = true;	
	    //~ $data['report'] = true;
	    //~ if($this->input->post('graphchart')){
			//~ $data1['module']['title'] = 'MTracker Analytics';
			//~ $data1['empwise_missed'] = $this->reportmodel->empwise_missed();	
			//~ $data1['empwise_outbound'] =$this->reportmodel->empwise_outbound();
			//~ $data1['empwise_inbound'] =$this->reportmodel->empwise_inbound();
			//~ $data1['empwise_total'] =$this->reportmodel->empwise_total();
		    //~ $this->sysconfmodel->viewLayout('mtreportanalytics',$data1);
		   	//~ return true;
	    //~ }
		$this->pagination->initialize(array(
						 'base_url'=>site_url($this->uri->segment(1).'/'.$u3).'/'
						,'total_rows'=>$data['itemlist']['count']
						,'per_page'=>$limit	
						,'uri_segment'=>3			
		));
		$data['paging'] = $this->pagination->create_links();
		$data['links'] = $links;
		$this->sysconfmodel->data['html']['title'] .= " | MTracker Calls";
		if(isset($_POST['search'])){
			if($_POST['search'] == 'search'){
				$this->load->view('search_view',$data);
				return true;
			}
			if($_POST['search'] == 'advsearch'){
				$this->load->view('advsearch_view',$data);
				return true;
			}
		}
		//echo '<pre>'; print_r($data); exit;
 		$this->sysconfmodel->viewLayout('list_view',$data);
	}
	
	function mtedit($id){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$roleDetail = $this->roleDetail;
		//if(!$roleDetail['modules']['51']['opt_add']) redirect('Employee/access_denied');
		if($this->input->post('update_system')){
			$res=$this->mt->update_mtdetails($id,$bid);
			if($res == 1){
				$this->session->set_flashdata('msgt', 'error');
				$this->session->set_flashdata('msg', "You donot have enough usage of conversion of lead, please contact your account manager");
			}elseif($res == 2){
				$this->session->set_flashdata('msgt', 'error');
				$this->session->set_flashdata('msg', "You dont have enough SMS credits");
			}elseif($res == 3){
				$this->session->set_flashdata('msgt', 'error');
				$this->session->set_flashdata('msg', "You donot have enough usage of conversion of support, please contact your account manager");
			}else{
				$this->session->set_flashdata('msgt', 'success');
				$this->session->set_flashdata('msg', "Call Updated Successfully");
			}
			redirect($this->session->userdata('refurl'));
	}
		if(isset($_SERVER['HTTP_REFERER']))$this->session->set_userdata(array('refurl'=>$_SERVER['HTTP_REFERER']));
		$data['module']['title'] = $this->lang->line('level_Report');
		$fieldset = $this->configmodel->getFields('51');
		$formFields = array();
		$itemDetail = array();
		$itemDetail = $this->configmodel->getDetail('51',$id,'',$bid);
		foreach($fieldset as $field){
			$checked=false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show']){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
					if($checked){
						$cf = array('label'=>'<label class="col-sm-4 text-right">'.(($field['customlabel']!="")
												?$field['customlabel']
												:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']
										).' : </label>',
									'field'=>($field['fieldname']!="name" 
												&& $field['fieldname']!="business" 
												&& $field['fieldname']!="assignto" 
												&& $field['fieldname']!="address" 
												&& $field['fieldname']!="email" 
												&& $field['fieldname']!="remark")?(isset($itemDetail[$field['fieldname']])?$itemDetail[$field['fieldname']]:''):(($field['fieldname']=="calleraddress" || $field['fieldname']=="remark")?form_textarea(array(
												  'name'      => $field['fieldname'],
												  'id'        => $field['fieldname'],
												   'class'        => 'form-control',
												   'value'     => isset($itemDetail[$field['fieldname']])?$itemDetail[$field['fieldname']]:''
										)):(($field['fieldname']=="assignto")?form_dropdown('assignto',$this->groupmodel->employee_list(),$itemDetail['asto'],"id='assignto'  class='form-control'"):form_input(array(
												  'name'      => $field['fieldname'],
												  'id'        => $field['fieldname'],
												  'class'        => 'form-control',
												  'value'     => isset($itemDetail[$field['fieldname']])?$itemDetail[$field['fieldname']]:''
										))))
							);
						array_push($formFields,$cf);
				}
			}elseif($field['type']=='c' && $field['show']){
					foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
					if($checked)
						$formFields[] = array(
							'label'=>'<label class="col-sm-4 text-right" for="custom_'.$field['fieldid'].'">'.$field['customlabel'].' : </label>',
							'field'=>$this->configmodel->createFieldAdvance($field,isset($itemDetail[$field['fieldKey']]) ? $itemDetail[$field['fieldKey']] : '',''));
			}
		}
		/* convert lead and support ticket start */
		$lead_access = $this->sysconfmodel->getfeatureAccess('13');
		if($lead_access == 1){
			$leadstchk = $this->reportmodel->leadstatuschk($itemDetail['callto'],$bid);
			if(empty($leadstchk) ){
				$leadtype = $this->sysconfmodel->leadtypeCheck();
				if($leadtype == 1 || $leadtype == 3){
					$cf=array('label'=>'<label class="col-sm-4 text-right">Convert As Lead :</label>	'
						,'field'=>form_checkbox(array("name"=>"convertlead","id"=>"convertlead","value"=>"2"))
						);
				}else{
					$cf=array('label'=>'<label class="col-sm-4 text-right">Convert As  :</label>	'
							,'field'=>form_radio(array("name"=>"convertlead","id"=>"convertlead","value"=>"1"))." &nbsp; Prospect &nbsp;  ".form_radio(array("name"=>"convertlead","id"=>"convertlead","value"=>"2"))." &nbsp; Lead &nbsp; "
							);
				}
			}elseif(isset($leadstchk['lead_status']) && $leadstchk['lead_status'] != 1){
				$cf=array('label'=>'<label class="col-sm-4 text-right">Update Lead :</label>	'
						,'field'=>form_checkbox(array("name"=>"updatelead","id"=>"updatelead","value"=>"1")));
			}else{
				$cf=array('label'=>'<label class="col-sm-4 text-right">Convert As Lead :</label>	'
						,'field'=>form_checkbox(array("name"=>"convertlead","id"=>"convertlead","value"=>"2"))
						);
			}
			array_push($formFields,$cf);
		}
		$cf = array('label'=>'<label class="col-sm-4 text-right" id="grLabel" style="display:none;">Lead Group :</label>	'
					,'field'=>form_dropdown('lgid',$this->leadsmodel->getGroups(),'',"id='grempId' class ='form-control' style='display:none;'")
					,"style"=>"none");
		array_push($formFields,$cf);
		$cf=array('label'=>'<label class="col-sm-4 text-right" id="assignLabel" style="display:none;">Lead Assignto :</label>	'
					,'field'=>form_dropdown('lassignto',$this->groupmodel->employee_list(),'',"id='assignemp'  class ='form-control' style='display:none;' ")	
				 ,"style"=>"none");
					array_push($formFields,$cf);
		$arr=array("0"=>"select","1"=>"Email Alert","2"=>"SMS Alert","3"=>"Both");
		$cf = array('label'=>'<label class="col-sm-4 text-right" id="alertLabel" style="display:none;">Alert Type :</label>	'
					,"field"=>form_dropdown("lalerttype",$arr,'',"id='alerttype'  class ='form-control' style='display:none;'")
					,"style"=>"none");
					array_push($formFields,$cf);
		$sup_access = $this->sysconfmodel->getfeatureAccess('14');
		if($sup_access == 1){
			$disabled = ($itemDetail['suptkt']==null || $itemDetail['tktid'] == 0)  ? '1' : '0';
			if($disabled == 1){
				$cf=array('label'=>'<label  class="col-sm-4 text-right">Convert to Support Ticket :</label>	'
						,'field'=>form_checkbox(array("name"=>"convertsuptkt","id"=>"convertsuptkt","value"=>"1")));
				array_push($formFields,$cf);
			}else{
				$cf=array('label'=>'<label class="col-sm-4 text-right">Update Support Ticket :</label>	'
						,'field'=>form_checkbox(array("name"=>"updatesuptkt","id"=>"updatesuptkt","value"=>"1")));
				array_push($formFields,$cf);
			}
		}
		$cf=array('label'=>'<label class="col-sm-4 text-right" id="supgrLabel" style="display:none;">Support Group :</label>	'
					,'field'=>form_dropdown('sgid',$this->supportmodel->getSupportGrps(),'','id="supgrId"  class ="form-control" style="display:none;"')
					,"style"=>"none");
					array_push($formFields,$cf);
		$cf=array('label'=>'<label class="col-sm-4 text-right" id="supassignLabel" style="display:none;">Ticket Assignto :</label>	'
					,'field'=>form_dropdown('sassignto',$this->supportmodel->getEmployees(),'',"id='supEmpid'  class ='form-control' style='display:none;'"),"style"=>"none");
					array_push($formFields,$cf);
		$cf=array('label'=>'<label  class="col-sm-4 text-right" id="suplevelLabel" style="display:none;">Ticket Level :</label>	'
					,'field'=>form_dropdown('tkt_level',$this->supportmodel->getSupTktLevel(),'',"id='tkt_level'   class ='form-control' style='display:none;'"),"style"=>"none");
					array_push($formFields,$cf);
		$escProcess = $this->systemmodel->getSupEscBusiness();
		if($escProcess == 1){
			$cf=array('label'=>'<label class="col-sm-4 text-right" id="suptimeLabel" style="display:none;">Ticket Escalation Time :</label>	'
						,'field'=>form_input(array(	  'name'      => 'tkt_esc_time',
													  'id'        => 'tkt_esc_time',
													  'value'     => '',
													  'class'     => 'form-control',
													  'style'	  => 'display:none;'
											))
						,"style"=>"none");
			array_push($formFields,$cf);
		}
		$arr=array("0"=>"Select","1"=>"Email Alert","2"=>"SMS Alert","3"=>"Both");
		$cf = array('label'=>'<label class="col-sm-4 text-right" id="supalertLabel" style="display:none;">Alert Type :</label>	'
					,"field"=>form_dropdown("salerttype",$arr,'',"id='supalerttype' class ='form-control' style='display:none;'")
					,"style"=>"none");
		array_push($formFields,$cf);
		/*  End of Conversion */
		$cf = ($roleDetail['role']['accessrecords']=='0') ? array('label'=>'<label class="col-sm-4 text-right">Recorded File : </label>',
								'field'=>($roleDetail['role']['accessrecords']=='0') ? (($itemDetail['filename']!='' && file_exists($this->config->item('sound_path').$itemDetail['filename'])) ?(($itemDetail['recordlisten']=='1')?('<a target="_blank" href="'.site_url('sounds/'.$itemDetail['filename']).'"><span title="Sound" id='.$itemDetail['callid'].' class="glyphicon glyphicon-volume-up downloadclass recordclass"></span></a>'):('<a target="_blank" href="'.site_url('sounds/'.$itemDetail['filename']).'"><span title="Sound" id='.$itemDetail['callid'].' class="glyphicon glyphicon-volume-up recordclass"></span></a>')) :'<a><span '.$itemDetail['callid'].' class="glyphicon glyphicon-volume-off"></span></a>') : ""
						):'';		
		array_push($formFields,$cf);
		$cf = array('label'=>'<label class="col-sm-4 text-right">Click To Connect : </label>',
					'field'=>anchor("Report/clicktoconnect/".$itemDetail['callid']."/1", '<span title="click To Connect" class="fa fa-phone"></span>',array('class'=>'clickToConnect'))
					);
		array_push($formFields,$cf);
		$data['form'] = array(
		            'form_attr'=>array('action'=>'mtracker/mtedit/'.$id,'name'=>'editreport','id'=>'editreport','enctype'=>"multipart/form-data"),
					'hidden' =>array('number'=>$itemDetail['callto']),
					'fields'=>$formFields,
					'close'=>form_close()
				);
		$this->sysconfmodel->viewLayout('form_view',$data);
	}
	function mtDelete($id){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$roleDetail = $this->roleDetail;
		//if(!$roleDetail['modules']['51']['opt_delete']) redirect('Employee/access_denied');
		$this->mt->mtDeleteCall($id,$bid);
		return 1;
	}
	function mtBulkDel(){
		$rst = $this->mt->mtBulkDel($_POST['callid']);
		echo "1";	
	}
	function feature_access(){
		$show=0;
		$checklist=$this->systemmodel->checked_featuremanage();
		if(in_array(1,$checklist)){
			$show=1;
		}
		return $show;
	}
 
	function mtrack_csv($type='',$eid=''){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$data=array('systemfields'=>$this->configmodel->getFields('51',$bid),
					'roleDetail'=>$this->roleDetail,
					 'type'=>$type,
					 'bid'=>$bid,
					 'eid'=>($eid!="")?$eid:'');
		$this->load->view('mtrack_csv',$data);
	}
	function Bulktrack_down($url,$type){
		$t='';	
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$roleDetail = $this->roleDetail;			
		$fieldset = $this->configmodel->getFields('51',$bid);
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && !$field['is_hidden'] && $field['show']){
				foreach($roleDetail['system'] as $f){if($f['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){
					$t .= '<input type="checkbox" checked name="lisiting['.$field['fieldname'].']" value="'.(($field['customlabel']!="")?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).'" />'.(($field['customlabel']!="")?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).'<br/>';
				}
			}elseif($field['type']=='c' && $field['show'] && $field['listing']){
				foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked)
				$t .= '<input type="checkbox" checked name="lisiting['.$field['fieldKey'].']" value="'.$field['fieldname'].'" />'.$field['customlabel'].'<br/>';
			}
		}
		$t.='<input type="checkbox" name="lisiting[filename]" value="filename" checked />Filename';
		echo  '<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-body">
			<div class="row">					
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="fa fa-times"></i></button>
				  <h4>Bulk Mtracker Calls Download</h4>
			<form action="'.$url.'/'.$type.'" class="form" id="blk_ddd" name="blk_ddd" method="POST">
					<TABLE>
						<tr>
							<th><label class="col-sm-4 text-right">Fields :</label></th>
							<td><!--<input type="text" name="empname" id="empname" />-->
							 <div class="col-sm-6 input-icon right">
							<input type="hidden" name="call_ids" id="call_ids" />
								'.$t.'
							</div>
							</td>
							<td></td>
						</tr>
					</TABLE>
					<div class="form-group text-center">
						<input id="button1" type="submit" class="btn btn-primary blk_submit" name="blk_down" value='.$this->lang->line('submit').' > 
						<input id="button2" type="reset" class="btn btn-default" value='.$this->lang->line('reset').' />
					 </div>
					</form>
		</div></div></div>
		</div>';
	}
	function licencesTimes(){
		if(!$this->feature_access(15))redirect('Employee/access_denied');
		$cbid = $this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$roleDetail = $this->roleDetail;
		$data['module']['title'] = "List Employees Time Lines";
		$ofset = ($this->uri->segment(2)!=null)?$this->uri->segment(2):0;
		$limit = '30';
		$header = array("#","Employee Name","Employee Num","Last Activity","Recent Login","Offline(mins)","Model","History","Status");
		$data['itemlist']['header'] = $header;
		$emp_list = $this->mt->mtlicencesTimes($bid,$ofset,$limit);
		//echo "<pre>";print_r($emp_list);exit;
		$rec = array();$list = array();

		if(count($emp_list['data'])>0){
			$i=1;
			foreach ($emp_list['data'] as $item){
				$rec = array($i);
				$opt = '';
				//~ $opt .= '<a href="'.site_url('AddMTLicence/'.$item['eid']).'"><span title="Edit Licence" class="glyphicon glyphicon-edit"></span></a>';
				//~ $opt .= '<a href="'.site_url('mtracker/delete_mtemp/'.$item['eid']).'"><span title="Delete Licence" class="glyphicon glyphicon-trash"></span></a>';
				$rec[] = '<a href="Employee/activerecords/'.$item['eid'].'" class="btn-danger" data-toggle="modal" data-target="#modal-responsive">'.(($item['status']=="1") ? $item['empname'] : '<font color=red>'.$item['empname'].'</font>').'</a>';
				$rec[] = (($item['status']=="1") ? $item['empnumber'] : '<font color=red>'.$item['empnumber'].'</font>');
				$rec[] = (! isset($item['last_activity'])) ? 'No Activity' : (($item['status']=="1") ? $item['last_activity'] : '<font color=red>'.$item['last_activity'].'</font>');
	            $rec[] = ( ! isset($item['last_login'])) ? '0000-00-00 00:00:00' : (($item['status']=="1") ? $item['last_login'] : '<font color=red>'.$item['last_login'].'</font>');
				$rec[] = ( ! isset($item['offline'])) ? '0' : (($item['status']=="1" ) ? $item['offline'] : '<font color=red>'.$item['offline'].'</font>');
				$rec[] =  (isset($item['model'])) ? $item['model'] :'Unknown';
				$rec[] = '<a href="mtracker/loginhistory/'.$item['eid'].'" class="btn-danger" title="Login History" data-toggle="modal" data-target="#modal-responsive"><div class="fa fa-clock-o spanclass"></div></a>';
				$rec[] = (isset($item['pstatus']) && $item['pstatus'] == 0) ?'<span style="font-size: 12px;" class="glyphicon glyphicon-eye-open">&nbspOnline</span>':'<span style="font-size: 12px;" class="glyphicon glyphicon-eye-close">&nbspOffline</span>';
				//$rec['action'] = $opt;
				$i++;
				array_push($list,$rec);
			 }
		}
		$data['noaction'] = 1;
		$data['itemlist']['rec'] = $list;
		$data['itemlist']['count'] = $emp_list['count'];
		$this->pagination->initialize(array(
						 'base_url'=>site_url('LicenceTimeLine/')
						,'total_rows'=>$data['itemlist']['count']
						,'per_page'=>$limit	
						,'uri_segment'=>2					
				));
		$data['paging'] = $this->pagination->create_links();
		$this->sysconfmodel->data['html']['title'] .= " | List MTracker Employees"; 
		$links = array();
		$links[] ='<li><a href="AddMTLicence/0"><span title="Add Licence" class="glyphicon glyphicon-plus-sign">&nbsp;AddLicence</span></a></li>';
		$links[] = '<li class="divider"><a>&nbsp;</a></li>';
		$links[] = '<li><a href="'.$_SERVER['REQUEST_URI'].'" class="btn-search" data-toggle="modal" data-target="#modal-search" ><span title="Search" class="glyphicon glyphicon-search" >&nbsp;Search</span></a></li>';
		$formFields = array();
		$cf=array('label'=>'<label class="col-sm-4 text-right" for="groupname">Employee Name : </label>',
				  'field'=>form_input(array(
									   'name'         => 'empname',
									   'class'        => 'form-control',
										'id'          => 'empname',
										'value'       => $this->session->userdata('empname'))));
		array_push($formFields,$cf);
		$data['links'] = $links;				
		$data['form'] = array(
			'open'=>form_open_multipart('LicenceTimeLine/0',array('name'=>'listmtEmp','class'=>'form','id'=>'listmtEmp','method'=>'post')),
			'form_field'=>$formFields,
			'adv_search'=>array(),
			'close'=>form_close(),
			'title'=>$this->lang->line('level_search')
			);
		if(isset($_POST['search']) && $_POST['search'] == 'search'){
			$this->load->view('search_view',$data);
			return true;
		}
		$this->sysconfmodel->viewLayout('list_view',$data);
	}
	function archiveReports($y='0',$m='0'){
		if(!$this->feature_access(15))redirect('Employee/access_denied');
		$roleDetail = $this->roleDetail;
		//if(!$roleDetail['modules']['51']['opt_view']) redirect('Employee/access_denied');
		if($this->input->post('submit')){	
			if($this->session->userdata('search')!=""){
				$s=$this->session->unset_userdata('search');
			}
		}
		$cbid = $this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="") ? $cbid : $this->session->userdata('bid');
		$parentbids = array();
		if($this->session->userdata('eid')==1){
			$parentbids=$this->systemmodel->getChildBusiness();
		}
		$data['module']['title'] ='MTracker Archive Reports';
		$ofset = ($this->uri->segment(4)!=null)?$this->uri->segment(4):0;
		$limit = '30';
		$data['itemlist'] = $this->mt->getArchivelist(
												array('bid'		=> $bid,
													  'ofset'	=> $ofset,
													  'limit'	=> $limit,
													  'year'	=> $y,
													  'month'	=> $m)
												);
		$this->pagination->initialize(array(
						 'base_url'=>site_url('archiveReports/'.$y.'/'.$m)
						,'total_rows'=>$data['itemlist']['count']
						,'per_page'=>$limit		
						,'uri_segment'=>4				
				));
		$data['links']='';
		$data['nosearch']='1';
	    $data['nobulk']=true;	
		$formFields = array();
		$data['form'] = array(
					'open'=>form_open(site_url('archiveReports/'.$y.'/'.$m),array('name'=>'mtarchive','class'=>'form','id'=>'mtarchive','method'=>'post')),
					'form_field'=>$formFields,
					'adv_search'=>array(),
					'close'=>form_close(),
					'parentids'=>$parentbids,
					'busid'=>$bid,
					'pid'=>$this->session->userdata('pid'),
					'title'=>$this->lang->line('level_search')
					);
		$data['paging'] = $this->pagination->create_links();
		$this->sysconfmodel->data['html']['title'] .= " | ".$this->lang->line('level_report');
		$this->sysconfmodel->viewLayout('list_view',$data);
	}
	function archive_download($y='0',$m='0'){
		$args['year']=($y!='0')?$y:date('Y');
		$args['month']=($m!='0')?$m:date('m');
		$args['bid']=$this->session->userdata('bid');
		$list = $this->mt->archiveDownload($args);
		redirect(base_url()."downloads.php?file=".$list);
	}

 function sethigh($id){
		$roleDetail = $this->roleDetail;
		$cbid = $this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		if($roleDetail['role']['admin']=='1'){
		$list = $this->mt->sethigh($id,$bid);
	    }
	}
	function sethigharchive($id){
		$roleDetail = $this->roleDetail;
	    $cbid = $this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		if($roleDetail['role']['admin']=='1'){
		$list = $this->mt->sethigharchive($id,$bid);
	    }
	}
   function addcallbarring(){
		if($this->input->post('update_system')){
			$this->form_validation->set_rules('callbarring', 'Callbarring', 'required|min_length[10]|max_length[12]|numeric');
			if(!$this->form_validation->run() == FALSE){	
				$res=$this->mt->add_barrednumber();
				if($res!=""){
					$this->session->set_flashdata('msgt', 'success');
					$this->session->set_flashdata('msg', $this->lang->line('error_callbarringsuccmsg'));
					redirect('ListCallBarring/0');
				}
			}	
		}
		$this->sysconfmodel->data['html']['title'] .= " | ".$this->lang->line('barrednumbers');
		$data['module']['title'] = $this->lang->line('barrednumbers');
		$formFields = array();$formFields1 = array();
		$cf=array('label'=>'<label class="col-sm-4 text-right" for="gid">'.$this->lang->line('level_callbaring').'</label>',
				  'field'=>form_input(array(
									    'name'        		=> 'callbarring',
										'id'          		=> 'callbarring',
										'value'       		=> '',
										'class'		  		=> 'form-control required',
										'parsley-minlength' => '3'
				  				)));
		array_push($formFields,$cf);
		$cf=array('label'=>'<label class="col-sm-4 text-right">'.$this->lang->line('level_callbaringreason').'</label>',
				  'field'=>form_textarea(array(
										'name'          => 'mtcbreason',
										'id'          	=> 'mtcbreason',
										'value'       	=> '',
										'class'		  	=> 'form-control'
				  				)));
		array_push($formFields,$cf);
		$data['form'] = array(
				'form_attr'=>array('action'=>'AddCallBarring/0','name'=>'addcallbarring' ,'id'=>'addcallbarring','enctype'=>"multipart/form-data"),
				'fields'=>$formFields,
				'close'=>form_close()
			);
		$this->sysconfmodel->viewLayout('form_view',$data);
	}
	function listcallbarring(){
		$data['module']['title'] =$this->lang->line('level_module_barrednum');
		$header = array('#',
						'Number',
						'Reason',
						'Request By',
						'Date &time',
						'Action'
						);
		$data['itemlist']['header'] = $header;
		$ofset = ($this->uri->segment(2)!=null)?$this->uri->segment(2):0;
		$limit = '30';
		$credit_info=$this->mt->barrednumber_list($ofset,$limit);
		$rec = array();
		if(count($credit_info['data'])>0)
		$i=1;
		foreach ($credit_info['data'] as $item){
				($item['status']=="0")
				?$s='<a href="'.base_url().'mtracker/barrednumber_status/'.$item['id'].'">
				<span class="fa fa-lock" id="'.$item['id'].'" title="Enable"></span>
				</a>'
				:$s='<a href="'.base_url().'mtracker/barrednumber_status/'.$item['id'].'"> <span class="fa fa-unlock" id="'.$item['id'].'" title="Disable"></span></a>';
			$rec[] = array(
					$item['id'],
					$item['number'],
					$item['reason'],
					$item['requestby'],
					$item['datetime'],
					'<a href="'.base_url().'mtracker/Delete_barrednumber/'.$item['id'].'" class="deleteClass" title="Are you sure to Delete the group"><span title="Delete" class="glyphicon glyphicon-trash"></span></a>'.$s
			);
			$i++;
		}
		$data['itemlist']['rec'] = $rec;
		$data['itemlist']['count'] = $credit_info['count'];
		$this->pagination->initialize(array(
						 'base_url'=>site_url('ListCallBarring/0')
						,'total_rows'=>$data['itemlist']['count']
						,'per_page'=>'20'	
						,'uri_segment'=>2					
				));
		$data['paging'] = $this->pagination->create_links();
		$this->sysconfmodel->data['html']['title'] .= " |".$this->lang->line('level_module_barrednum');
		$links = array();
		$links[]='<li><a href="AddCallBarring/0"><span title="Add Call barring number" class="glyphicon glyphicon-plus-sign">&nbsp;AddNumber</span></a></li>';
		$links[] = '<li class="divider"><a>&nbsp;</a></li>';
		$links[] = '<li><a href="'.$_SERVER['REQUEST_URI'].'" class="btn-search" data-toggle="modal" data-target="#modal-search" ><span title="Search" class="glyphicon glyphicon-search" >&nbsp;Search</span></a></li>';
	    $formFields1 = array();
		$cf=array('label'=>'<label class="col-sm-4 text-right" for="groupname">'.$this->lang->line('level_callbaring').' : </label>',
				  'field'=>form_input(array(
									  'name'        => 'barrednumber',
									  'class'       => 'form-control',
									  'id'          => 'barrednumber',
									  'value'       => $this->session->userdata('barrednumber'))));
		array_push($formFields1,$cf);
		$formFields = array();
		$formFields[] = array();
		$data['links'] = $links; 
		$data['form'] = array(
							'open'=>form_open_multipart('ListCallBarring/0',array('name'=>'CallBarringlist','class'=>'form','id'=>'CallBarringlist','method'=>'post')),
							'form_field'=>$formFields1 ,
							'adv_search'=>array(),
							'save_search'=>3,
							'close'=>form_close(),
							'title'=>$this->lang->line('level_search')
							);
		if(isset($_POST['search']) && $_POST['search'] == 'search'){
			$this->load->view('search_view',$data);
			return true;
		}
		$data['noaction'] = '1';
		$this->sysconfmodel->viewLayout('list_view',$data);
	}
	function barrednumber_status($id){
		$res=$this->mt->barrednumber_status($id);
		$this->session->set_flashdata('msgt', 'success');
		$this->session->set_flashdata('msg', $this->lang->line('status_update'));
		redirect('ListCallBarring/0');
	}
	function Delete_barrednumber($id){
		$res=$this->mt->Delete_barrednumber($id);
		$this->session->set_flashdata('msgt', 'success');
		$this->session->set_flashdata('msg', $this->lang->line('error_delbarredsuccmsg'));
		redirect('ListCallBarring/0');
	}
	function rating($id='',$dsh = '',$type=''){ 
	   	if(isset($_POST['callid'])){
				$res = $this->mt->addRating($_POST);
				if($res == TRUE){
				$this->session->set_flashdata('msgt', 'success');
				$this->session->set_flashdata('msg', "Rating added Successfully");
				redirect($_SERVER['HTTP_REFERER']);
			    }else{
			    $this->session->set_flashdata('msgt', 'error');
				$this->session->set_flashdata('msg', "You have already rated this call");
				redirect($_SERVER['HTTP_REFERER']);
				}
		}
		$rtype = $type;
		$cbid=$this->session->userdata('cbid');
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));	
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$rdata['module']['title'] = "Ratings";
		$data['module']['title'] = "Ratings";
		$rdata['links'] = '';
		$rdata['nosearch']=true;
		$rdata['paging'] = '';
		$rdata['form']=array('adv_search'=>array());
		$rdata['itemlist'] = $this->mt->getRatinglist($id,$bid,$dsh);
		if($dsh == 1){
			$this->load->view('popupListView',$rdata);
		}elseif($dsh != 1){
			$fieldset = $this->configmodel->getFields('55',$bid);
			$formFields = array();
			foreach($fieldset as $field){
				$checked = false;
				if($field['type']=='s' && $field['show'] && $field['fieldname']!='eid'){
					foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
					if($checked) 
						$formFields[] = array(
										'label'=>'<label class="col-sm-4 text-right" for="'.$field['fieldname'].'" class="col-sm-4 text-right">'.(($field['customlabel']!="")
												 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' <img src="system/application/img/icons/help.png" title="'.$this->lang->line('TTmod_'.$field['modid'])->$field['fieldname'].'" >&nbsp;&nbsp: </label>',
										'field'=>($field['fieldname']=="comment")?(form_textarea(array(
													'name'      => 'comment',
													'id'        => 'comment',
													'maxlength' => '100',
													'class'     => 'form-control')))
													:(($field['fieldname']=="rating_title")?
													form_input(array(
													'name'      => $field['fieldname'],
													'class'     => 'form-control',
													'id'        => $field['fieldname']
													),'')
													:' <fieldset id="demo2" class="rating">
														<input class="stars" type="radio" id="star5" name="rating" value="5" />
														<label class = "full" for="star5" title="Awesome - 5 stars"></label>
														<input class="stars" type="radio" id="star4half" name="rating" value="4.5" />
														<label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
														<input class="stars" type="radio" id="star4" name="rating" value="4" />
														<label class = "full" for="star4" title="Pretty good - 4 stars"></label>
														<input class="stars" type="radio" id="star3half" name="rating" value="3.5" />
														<label class="half" for="star3half" title="Good - 3.5 stars"></label>
														<input class="stars" type="radio" id="star3" name="rating" value="3" />
														<label class = "full" for="star3" title="Ok - 3 stars"></label>
														<input class="stars" type="radio" id="star2half" name="rating" value="2.5" />
														<label class="half" for="star2half" title="Ok - 2.5 stars"></label>
														<input class="stars" type="radio" id="star2" name="rating" value="2" />
														<label class = "full" for="star2" title="Bad - 2 stars"></label>
														<input class="stars" type="radio" id="star1half" name="rating" value="1.5" />
														<label class="half" for="star1half" title="Bad - 1.5 stars"></label>
														<input class="stars" type="radio" id="star1" name="rating" value="1" />
														<label class = "full" for="star1" title="Very bad - 1 star"></label>
														<input class="stars" type="radio" id="starhalf" name="rating" value="0.5" />
														<label class="half" for="starhalf" title="Very bad - 0.5 stars"></label>
													</fieldset>'
												));
												
				}elseif($field['type']=='c' && $field['show']){
						foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
						if($checked)$formFields[] = array(
								'label'=>'<label class="col-sm-4 text-right" for="custom_'.$field['fieldid'].'">'.$field['customlabel'].' : </label>',
								'field'=>$this->configmodel->createFieldAdvance($field,isset($itemDetail[$field['fieldKey']]) ? $itemDetail[$field['fieldKey']] : '',''));
				}
			}	
					
			$data['form'] = array(
					   'form_attr'=>array('action'=>'mtracker/rating/','name'=>'rating'),
						'hidden' => array('bid'=>$bid,'callid'=>$id,'type'=>$rtype),
						'fields'=>$formFields,
						'parentids'=>'',
						'busid'=>$bid,
						'close'=>form_close()
					);
			if(!empty($rdata['itemlist']['rec'])){
				$data['rating'] = $rdata;
			}
			$this->load->view('popupFormView',$data);
	    }
   }
   function mtrackeranalytics(){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		if($this->input->post('submit')){
				$this->session->set_userdata('filter',$_POST);
				$data=$_POST;
		}else{
			$data=array(
				'stime'=>date('Y-m-d',strtotime('-6 days')),
				'etime'=>date('Y-m-d')
			);
		}
		$data['totalempcalls']=$this->mt->toatalempMtcalls($bid);
	   // echo "<pre>"; print_r($data); exit;
		$this->sysconfmodel->viewLayout('mtrackeranalytics',$data);
   }
   function loginhistory($id){
		$cbid=$this->session->userdata('cbid');
		$roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));	
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$rdata['module']['title'] = "Login History";
		$rdata['itemlist'] = $this->mt->getloginhistory($id);
		$this->load->view('popupListView',$rdata);
   }
  function geochart($id=''){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$data = $this->data;
		$data['module']['title'] = "Location";
		$data['links'] = '';
		$data['nosearch']=true;
		$data['paging'] = '';
		$data['title'] = 'Location';
		$formFields=array();
		$data['itemlist'] = $this->mt->getchartlocation($id,$bid);
		$this->load->view('mtlocation',$data);
	}
	function geochart_loc($loc){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$data = $this->data;
		$formFields=array();
		$data['location']=$loc;
		$this->load->view('mt_location',$data);
	}
	function showresp($id=''){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$data = $this->data;
		$data['module']['title'] = 'API Response';
		$data['links'] = '';
		$data['nosearch']=true;
		$data['paging'] = '';
		$data['title'] = 'API Response';
		$formFields=array();
		$data['itemlist'] = $this->mt->apiResonse($id,$bid);
		$this->load->view('counter_view',$data);
	}
}
/* end */
?>
