<?php
class Employee extends Controller {
	var $data,$roleDetail;
	function Employee(){	
		parent::controller();
		if(!$this->session->userdata('logged_in'))redirect('/site/login');
		$this->load->model('sysconfmodel');
		$this->data = $this->sysconfmodel->init();
		$this->load->model('systemmodel');
		$this->load->model('groupmodel');
		$this->load->model('configmodel');
		$this->load->model('empmodel');
		$this->roleDetail = $this->sysconfmodel->data['roleDetail'];
	}
	function index(){
		$this->add_employee();
	}
	function test(){
		$this->load->view('emailTemp');
	}
	function add_employeeFrm($id='',$formname,$ac=''){
		if($this->input->post('update_system')){
			$this->form_validation->set_rules('empname', 'Employee Name', 'required|min_length[4]|max_length[250]');
			$this->form_validation->set_rules('empnumber', 'Employee Number', 'required|min_length[10]|max_length[15]|numeric');
			$this->form_validation->set_rules('empemail', 'Email', 'min_length[5]|max_length[200]|valid_email');
			$this->form_validation->set_rules('extension', 'Extension', 'numeric|callback_uniques_extension');
			$this->form_validation->set_rules('roleid', 'Role', 'required');
			if($id=="" ||$ac=="uncomfirm"){
				$this->form_validation->set_rules('empemail', 'Email','callback_username_check');
			}
			if(!$this->form_validation->run() == FALSE){	
				if( $id!="" && $id!= '0'){
					if($ac!=""){
						 $res=$this->empmodel->update_uncofirmemployee($id);
					}else{
						 $res=$this->empmodel->update_employee($id);
					}
					if($res==3){
						$this->session->set_flashdata('msgt', 'error');
						$this->session->set_flashdata('msg', $this->lang->line('error_limitexceed'));
						redirect('ManageEmployee/0');
					}else if($res!=2){
						$this->session->set_flashdata('msgt', 'success');
						$this->session->set_flashdata('msg', $this->lang->line('error_empupdatedsuccmsg'));
						if($ac!=""){ redirect('UnconfirmEmployees/0'); }else{ redirect('ManageEmployee/0');}

					}else{
						$this->session->set_flashdata('msgt', 'error');
						$this->session->set_flashdata('msg', $this->lang->line('error_emploginerrmsg'));
						redirect('ManageEmployee/0');
					}
				}else{
					$res=$this->empmodel->add_emp();
					if($res!="Email Exists"){
						$this->session->set_flashdata('msgt', 'success');
						$this->session->set_flashdata('msg', $this->lang->line('error_empsuccmsg'));
						redirect('AddempGroups/'.$res);
					}
					else{
						$this->session->set_flashdata('msgt', 'error');
						$this->session->set_flashdata('msg', $this->lang->line('error_emperrmsg'));
						redirect('AddEmployee/0');
					}
				}
			}		
		}
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['2']['opt_add']) redirect('Employee/access_denied');
		$this->sysconfmodel->data['html']['title'] .= " | ".$this->lang->line('label_Employeefrm');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$parentbids=array();
		if($this->session->userdata('eid')==1){
			$parentbids=$this->systemmodel->getChildBusiness();
		}
		$data['module']['title'] = $this->lang->line('label_Employeefrm');
		$fieldset = $this->configmodel->getFields('2',$bid);
		$notinarray = array();
		if($this->data['mtracker_access'] != 1) 
			array_push($notinarray,'recording');
		$formFields = array();$formFields1 = array();
		$itemDetail = $this->configmodel->getDetail('2',$id,'',$bid);
		(sizeof($itemDetail)>0)?$x='edit':$x='add';
		foreach($fieldset as $field){
			$checked=false;
			if($field['type']=='s' && $field['show']){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
					if($checked && !in_array($field['fieldname'] ,$notinarray)){
						$empday = ($field['fieldname']=='empday' && isset($itemDetail['empday']))?json_decode($itemDetail['empday']):'';
						$cf = array('label'=>'<label class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).'&nbsp;&nbsp;<img src="system/application/img/icons/help.png" title="'.$this->lang->line('TTmod_'.$field['modid'])->$field['fieldname'].'" >&nbsp;&nbsp: </label>',
									'field'=>(($field['fieldname']=="role")?
									form_dropdown('roleid',$this->empmodel->get_roles(),(isset($itemDetail['roleid'])?$itemDetail['roleid']:$this->input->post('roleid')),'id="roleid" class = "form-control required"')

									:(($field['fieldname']=="reportto")?form_dropdown('reportto',$this->groupmodel->employee_list(),
														 (isset($itemDetail['reportto'])?$itemDetail['reportto']:$this->input->post('reportto'))
														,'id="reportto"   class = "form-control"'):
														(($field['fieldname']=="empemail" && $id!=' ' && $id!='0' && $ac=="")?
										form_input(array(

												  'name'      => $field['fieldname'],
												  'id'        => $field['fieldname'],
												  'readonly'    => 'readonly',
												  'class'     => 'form-control',
												  'value'     => isset($itemDetail[$field['fieldname']])?$itemDetail[$field['fieldname']]:''
										))
										:(($field['fieldname']=="tollfree")?
											form_checkbox(array(
													'name'      => $field['fieldname'],
													'id'        => $field['fieldname'],
													'value'     => '1',
													'checked'=>(isset($itemDetail[$field['fieldname']]) && $itemDetail[$field['fieldname']]=='1') ? true : false))
										
											:(($field['fieldname']=="empday")?
																'<table class="short"><tr>'
																.'<td>'.form_checkbox(array('name'=>'empday[Mon][day]','value'=>'1','id'=>'mon_day','checked'=>((isset($empday->Mon->day) || $id=='')?true:''))).'<label for="mon_day">Monday</label>'.'</td>'
																.'<td>'.form_input(array('name'=>'empday[Mon][st]','id'=>'mon_st','class'=>'timepicker form-control','placeholder'=>'Start Time','value'=>(isset($empday->Mon->st)?$empday->Mon->st:'00:00'))).'</td>'
																.'<td>'.form_input(array('name'=>'empday[Mon][et]','id'=>'mon_et','class'=>'timepicker form-control','placeholder'=>'End Time','value'=>(isset($empday->Mon->et)?$empday->Mon->et:'23:59'))).'</td>'
																.'</tr><tr>'
																.'<td>'.form_checkbox(array('name'=>'empday[Tue][day]','value'=>'1','id'=>'tue_day','checked'=>((isset($empday->Tue->day) || $id=='')?true:''))).'<label for="tue_day">Tuesday</label>'.'</td>'
																.'<td>'.form_input(array('name'=>'empday[Tue][st]','id'=>'tue_st','class'=>'timepicker form-control','placeholder'=>'Start Time','value'=>(isset($empday->Tue->st)?$empday->Tue->st:'00:00'))).'</td>'
																.'<td>'.form_input(array('name'=>'empday[Tue][et]','id'=>'tue_et','class'=>'timepicker form-control','placeholder'=>'End Time','value'=>(isset($empday->Tue->et)?$empday->Tue->et:'23:59'))).'</td>'
																.'</tr><tr>'
																.'<td>'.form_checkbox(array('name'=>'empday[Wed][day]','value'=>'1','id'=>'wed_day','checked'=>((isset($empday->Wed->day) || $id=='')?true:''))).'<label for="wed_day">Wednesday</label>'.'</td>'
																.'<td>'.form_input(array('name'=>'empday[Wed][st]','id'=>'wed_st','class'=>'timepicker form-control','placeholder'=>'Start Time','value'=>(isset($empday->Wed->st)?$empday->Wed->st:'00:00'))).'</td>'
																.'<td>'.form_input(array('name'=>'empday[Wed][et]','id'=>'wed_et','class'=>'timepicker form-control','placeholder'=>'End Time','value'=>(isset($empday->Wed->et)?$empday->Wed->et:'23:59'))).'</td>'
																.'</tr><tr>'
																.'<td>'.form_checkbox(array('name'=>'empday[Thu][day]','value'=>'1','id'=>'thu_day','checked'=>((isset($empday->Thu->day) || $id=='')?true:''))).'<label for="thu_day">Thursday</label>'.'</td>'
																.'<td>'.form_input(array('name'=>'empday[Thu][st]','id'=>'thu_st','class'=>'timepicker form-control','placeholder'=>'Start Time','value'=>(isset($empday->Thu->st)?$empday->Thu->st:'00:00'))).'</td>'
																.'<td>'.form_input(array('name'=>'empday[Thu][et]','id'=>'thu_et','class'=>'timepicker form-control','placeholder'=>'End Time','value'=>(isset($empday->Thu->et)?$empday->Thu->et:'23:59'))).'</td>'
																.'</tr><tr>'
																.'<td>'.form_checkbox(array('name'=>'empday[Fri][day]','value'=>'1','id'=>'fri_day','checked'=>((isset($empday->Fri->day) || $id=='')?true:''))).'<label for="fri_day">Friday</label>'.'</td>'
																.'<td>'.form_input(array('name'=>'empday[Fri][st]','id'=>'fri_st','class'=>'timepicker form-control','placeholder'=>'Start Time','value'=>(isset($empday->Fri->st)?$empday->Fri->st:'00:00'))).'</td>'
																.'<td>'.form_input(array('name'=>'empday[Fri][et]','id'=>'fri_et','class'=>'timepicker form-control','placeholder'=>'End Time','value'=>(isset($empday->Fri->et)?$empday->Fri->et:'23:59'))).'</td>'
																.'</tr><tr>'
																.'<td>'.form_checkbox(array('name'=>'empday[Sat][day]','value'=>'1','id'=>'sat_day','checked'=>((isset($empday->Sat->day) || $id=='')?true:''))).'<label for="sat_day">Saturday</label>'.'</td>'
																.'<td>'.form_input(array('name'=>'empday[Sat][st]','id'=>'sat_st','class'=>'timepicker form-control','placeholder'=>'Start Time','value'=>(isset($empday->Sat->st)?$empday->Sat->st:'00:00'))).'</td>'
																.'<td>'.form_input(array('name'=>'empday[Sat][et]','id'=>'sat_et','class'=>'timepicker form-control','placeholder'=>'End Time','value'=>(isset($empday->Sat->et)?$empday->Sat->et:'23:59'))).'</td>'
																.'</tr><tr>'
																.'<td>'.form_checkbox(array('name'=>'empday[Sun][day]','value'=>'1','id'=>'sun_day','checked'=>((isset($empday->Sun->day) || $id=='')?true:''))).'<label for="sun_day">Sunday</label>'.'</td>'
																.'<td>'.form_input(array('name'=>'empday[Sun][st]','id'=>'sun_st','class'=>'timepicker form-control','placeholder'=>'Start Time','value'=>(isset($empday->Sun->st)?$empday->Sun->st:'00:00'))).'</td>'
																.'<td>'.form_input(array('name'=>'empday[Sun][et]','id'=>'sun_et','class'=>'timepicker form-control','placeholder'=>'End Time','value'=>(isset($empday->Sun->et)?$empday->Sun->et:'23:59'))).'</td>'
																.'</tr></table>'
										
											:(($field['fieldname']=="empnumber" || $field['fieldname']=="empemail" )? form_input(array(
											  'name'      => $field['fieldname'],
											  'id'        => $field['fieldname'],
											  'type'	  => 'text',
											  'class'     => ($field['fieldname'] != 'extension' && $field['fieldname'] != 'alternate_number') ? 'form-control required' : 'form-control',
											  'parsley-type' => ($field['fieldname']=="empnumber") ? "number":(($field['fieldname']=="empemail")?"email":''),
											  'value'     => isset($itemDetail[$field['fieldname']])?$itemDetail[$field['fieldname']]:set_value($field['fieldname'])))
											  :form_input(array(
											  'name'      => $field['fieldname'],
											  'id'        => $field['fieldname'],
											  'type'	  => 'text',
											  'class'     => ($field['fieldname'] != 'extension' && $field['fieldname'] != 'alternate_number') ? 'form-control required' : 'form-control',
											  'value'     => isset($itemDetail[$field['fieldname']])?$itemDetail[$field['fieldname']]:set_value($field['fieldname'])
										)))))))));
						array_push($formFields,$cf);
				}			
				}elseif($field['type']=='c' && $field['show']){
					foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
					if($checked)$formFields[] = array(
							'label'=>'<label class="col-sm-4 text-right" for="custom_'.$field['fieldid'].'">'.$field['customlabel'].' : </label>',
							'field'=>$this->configmodel->createFieldAdvance($field,isset($itemDetail[$field['fieldKey']]) ? $itemDetail[$field['fieldKey']] : '',''));
			}
		}	
		$check_in=(isset($itemDetail['login']) && $itemDetail['login']=="1") ? true : false;
		$cf=array('label'=>'<label class="col-sm-4 text-right">'.$this->lang->line('e_loginaccess').' : </label>',
				  'field'=>form_checkbox(array(
									    'name'        => 'login',
										'id'          => 'login',
										'value'       => '1',
										'checked'=>$check_in
									)
							)
					);
		array_push($formFields,$cf);
		/* Reports Section */
		if(isset($id) && $id != '0') {
			$st = "style=' '";
		}else{
			$st = "style='display:none;'";
		}
		$chkw=(isset($itemDetail['weeklyreport']) && $itemDetail['weeklyreport']=="1") ? true : false;
		$chkd=(isset($itemDetail['dailyreport']) && $itemDetail['dailyreport']=="1") ? true : false;
		$cf=array('label'=>'<label class="col-sm-4 text-right" id="dreport" '.$st.'> Daily Reports: </label>',
				  'field'=>form_checkbox(array(
									    'name'        => 'dailyreport',
										'id'          => 'dailyreport',
										'value'       => '1',
										'checked'	  => $chkd,
										'style' 	  => (isset($id) && $id != '0') ? '' : 'display:none'
									)
							)
					);
		array_push($formFields,$cf);
		$cf=array('label'=>'<label class="col-sm-4 text-right" id="wreport" '.$st.'> Weekly Reports: </label>',
				  'field'=>form_checkbox(array(
									    'name'        => 'weeklyreport',
										'id'          => 'weeklyreport',
										'value'       => '1',
										'checked'	  => $chkw,
										'style' 	  => (isset($id) && $id != '0') ? '' : 'display:none'
									)
							)
					);
		array_push($formFields,$cf);
		/* Reports Section */	
		if($id != '' ){$url = $id.'/'.$ac;}else{$url= '';}
		$data['form'] = array(
		            'form_attr'=>array('action'=>'AddEmployee/'.$url,'name'=> $formname,'id'=> $formname,'enctype'=>"multipart/form-data"),
					'fields'=>$formFields,
					'fields1'=>$formFields1,
					'parentids'=>($id=='')?$parentbids:'',
					'busid'=>$bid,
					'pid'=>$this->session->userdata('pid'),
					'close'=>form_close()
				);
		return $data;
	}
	function username_check($str){
		if($this->commonmodel->userexists($str)=="user exists"){
		$this->form_validation->set_message('username_check', 'The '.$str.' email is not available');
			return FALSE;
		}else{
			return TRUE;
		}
	}
	function add_employee($id='',$f=''){
		$this->sysconfmodel->viewLayout('form_view',$this->add_employeeFrm($id,'addemp',$f));

	}
	function add_employeepopup($id=''){
		$this->load->view('form_view2',$this->add_employeeFrm($id,'popaddemp'));
	}
	function activerecords($id=''){
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['2']['opt_view']) redirect('Employee/access_denied');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$this->sysconfmodel->data['html']['title'] .= " | ".$this->lang->line('label_Employeefrm');
		$data['module']['title'] = $this->lang->line('label_Employeefrm');
		$fieldset = $this->configmodel->getFields('2',$bid);
		$formFields = array();$formFields1 = array();
		$itemDetail = $this->configmodel->getDetail('2',$id,'',$bid);
		(sizeof($itemDetail)>0)?$x='edit':$x='add';
		$itemDetail['reportto']=$itemDetail['reporttoname'];
		foreach($fieldset as $field){
			$checked=false;
			if($field['type']=='s' && $field['show']){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
						if($checked){
							$v = '';
							if($field['fieldname']=='empday' && $itemDetail[$field['fieldname']]!=''){
								$empday = json_decode($itemDetail[$field['fieldname']]);
								$v = '';
								foreach($empday as $b => $d){ $v .= (isset($d->day) && $d->day=='1')?$b.'='.$d->st.'-'.$d->et.'<br>':'';}
							}else{
								$v = isset($itemDetail[$field['fieldname']])?$itemDetail[$field['fieldname']]:"";
							}
							$cf = array('label'=>'<label  class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="") ? $field['customlabel']
												:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']
											).' : </label>',
										'field'=>$v
								);
							array_push($formFields,$cf);
					  }
				}elseif($field['type']=='c' && $field['show']){
					foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
					if($checked)$formFields[] = array(
							'label'=>'<label  class="col-sm-4 text-right" for="custom_'.$field['fieldid'].'">'.$field['customlabel'].' : </label>',
							'field'=>isset($itemDetail[$field['fieldKey']]) ? $itemDetail[$field['fieldKey']] : '','');
			}
		}
		$data['form'] = array(
					'open'=>form_open_multipart('AddEmployee/'.$id,array('name'=>'form','class'=>'form','id'=>'addgroup','method'=>'post','enctype'=>"multipart/form-data")),
					'fields'=>$formFields,
					'close'=>form_close()
				);
		$this->load->view('active_view',$data);
	}
	function manage_emp($page=''){
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['2']['opt_view']) redirect('Employee/access_denied');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$parentbids=array();
		$dlink = '';
		if($this->session->userdata('eid')==1){
			$parentbids=$this->systemmodel->getChildBusiness();
		}
		if($this->input->post('download')){
			$filename = $this->empmodel->empdownload($bid);
			$dlink =  "<a href='".$this->config->item('reports_path').$filename.".zip' target='_blank' style='color:#fff'><b>Download</b></a>  ";
		}
		$data['downlink'] = $dlink;
		$ofset = ($this->uri->segment(2)!=null)?$this->uri->segment(2):0;
		$limit = '30';
		$data['itemlist'] = $this->empmodel->getEmplist($bid,$ofset,$limit);
		$this->sysconfmodel->data['html']['title'] .= " | ".$this->lang->line('label_Employeemanage');
		$data['module']['title'] = $this->lang->line('label_Employeemanage'). "[".$data['itemlist']['count']."]";
		$this->pagination->initialize(array(
						 'base_url'=>site_url('ManageEmployee')
						,'total_rows'=>$data['itemlist']['count']
						,'per_page'=>$limit	
						,'uri_segment'=>2						
		));
		$data['paging'] = $this->pagination->create_links();
		$links = array();
		$links[] = '<li><a href="Report/blksms" class="blkSMs"  data-toggle="modal" data-target="#modal-blksms"
		rel="employee"><span title="Bulk SMS" class="glyphicon glyphicon-comment">&nbsp;SMS</span></a></li>';
		$links[] = ($roleDetail['modules']['2']['opt_delete']) ?'<li><a href="Employee/bulkDel" class="blkDel"><span title="BulkDelete" class="glyphicon glyphicon-trash">&nbsp;Delete</span></a></li>':'';
		$links[] = '<li><a href="AddEmployee/0"><span class="glyphicon glyphicon-plus-sign" title="Add Employee">&nbsp;AddEmployee</span></a></li>';
		$links[] = '<li class="divider"><a>&nbsp;</a></li>';
		$links[] = '<li><a href="'.$_SERVER['REQUEST_URI'].'" class="btn-search" data-toggle="modal" data-target="#modal-search" ><span title="Search" class="glyphicon glyphicon-search" >&nbsp;Search</span></a></li>';
	    $links[] = '<li class="divider"><a>&nbsp;</a></li>';
		$links[] =  '<li><a href="Employee/empdownload/" class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><span title="Download" class="glyphicon glyphicon-download-alt">&nbsp;DownloadAll</span></a></li>';
		$fieldset = $this->configmodel->getFields('2',$bid); 
		$formFields = array();
		$advsearch = array();
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && $field['show'] ){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked) { 
					$formFields[] = array(
									'label'=>'<label class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' : </label>',
									'field'=>form_input(array(
											'name'      => $field['fieldname'],
											'class'     => 'form-control',
											'id'        => $field['fieldname'],
											'value'     => $this->session->userdata($field['fieldname'])))
											);
					$advsearch[$field['fieldname']]=(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']);			
					}				
			}
		}	
		$save_cnt=save_search_count($bid,'2',$this->session->userdata('eid'));
		$data['links'] = $links;
		$data['form'] = array(
							'open'=>form_open_multipart('ManageEmployee/0/',array('name'=>'manageemp','class'=>'form','id'=>'manageemp','method'=>'post')),
							'form_field'=>$formFields,
							'adv_search'=>array(),
							'parentids'=>$parentbids,
							'save_search'=>$save_cnt,
							'busid'=>$bid,
							'pid'=>$this->session->userdata('pid'),
							'close'=>form_close(),
							'title'=>$this->lang->line('level_search')
							);
		if(isset($_POST['search']) && $_POST['search'] == 'search'){
			$this->load->view('search_view',$data);
			return true;
		}
		$this->sysconfmodel->viewLayout('list_view',$data);
	}
	function unconfirmlist($page=''){
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['2']['opt_view']) redirect('Employee/access_denied');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$parentbids=array();
		if($this->session->userdata('eid')==1){
			$parentbids=$this->systemmodel->getChildBusiness();
		}
		$this->sysconfmodel->data['html']['title'] .= " | ".$this->lang->line('label_Employeemanage');
		$ofset = ($this->uri->segment(2)!=null)?$this->uri->segment(2):0;
		$limit = '30';
		$data['itemlist'] = $this->empmodel->getunconfrimEmplist($bid,$ofset,$limit);
		$data['module']['title'] = $this->lang->line('label_Employeemanage')."[".$data['itemlist']['count']."]";
		$this->pagination->initialize(array(
						 'base_url'=>site_url('UnconfirmEmployees')
						,'total_rows'=>$data['itemlist']['count']
						,'per_page'=>$limit	
						,'uri_segment'=>2					
		));
		$data['paging'] = $this->pagination->create_links();
		$links = array();
		$links[] = '<li><a href="'.$_SERVER['REQUEST_URI'].'" class="btn-search" data-toggle="modal" data-target="#modal-search" ><span title="Search" class="glyphicon glyphicon-search" >&nbsp;Search</span></a></li>';
		$fieldset = $this->configmodel->getFields('2',$bid);
		$formFields = array();
		$advsearch = array();
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && $field['show'] && $field['fieldname']!="tollfree"){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked) { $formFields[] = array(
									'label'=>'<label class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' : </label>',
									'field'=>form_input(array(
											'name'      => $field['fieldname'],
											'class'     => 'form-control',
											'id'        => $field['fieldname'],
											'value'     => $this->session->userdata($field['fieldname'])))
											);
							}				
					}elseif($field['type']=='c' && $field['show']){
						foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
						if($checked) { $formFields[] = array(
										'label'=>'<label class="col-sm-4 text-right" for="custom_'.$field['fieldid'].'">'.$field['customlabel'].' : </label>',
										'field'=>form_input(array(
															'name'      => 'custom['.$field['fieldid'].']',
															'class'     => 'form-control'
															)));
						}						
			       }
		
		}
		$data['links']= $links;
		$data['form'] = array(
							'open'=>form_open_multipart('UnconfirmEmployees/0',array('name'=>'manageemp','class'=>'form','id'=>'manageemp','method'=>'post')),
							'form_field'=>$formFields,
							'parentids'=>$parentbids,
							'busid'=>$bid,
							'pid'=>$this->session->userdata('pid'),
							'close'=>form_close(),
							'title'=>$this->lang->line('level_search')
							);
		if(isset($_POST['search']) && $_POST['search'] == 'search'){
			$this->load->view('search_view',$data);
			return true;
		}
		$this->sysconfmodel->viewLayout('list_view',$data);
	}
	function Delete_Employee($eid){
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['2']['opt_delete']) redirect('Employee/access_denied');
		$this->empmodel->delete_emp($eid);
		echo "1";
	}
	function unDelete_Employee($eid){
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['2']['opt_delete']) redirect('Employee/access_denied');
		$this->empmodel->undelete_emp($eid);
		echo "1";
	}
	function change_status($eid){
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['2']['opt_add']) redirect('Employee/access_denied');
		$this->empmodel->ChangeStatus($eid);
		echo "1";
	}
	function edit($id){
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['2']['opt_delete']) redirect('Employee/access_denied');
		if($this->input->post('UpdateEmployee')){
			$res=$this->empmodel->update_employee($id);
			if($res){
				$this->session->set_flashdata('msgt', 'success');
				$this->session->set_flashdata('msg', $this->lang->line('error_empupdatedsuccmsg'));
				redirect('ManageEmployee/0');
			}
		}
		$get_labels=$this->systemmodel->get_system_labels();
		$get_custom_lables=$this->systemmodel->get_system_custom_label();
		$business_list=$this->groupmodel->BusinessList();
		$geditlist=$this->empmodel->get_employee($id);
		$custom_group=$this->groupmodel->get_custom_group($id);
		$data = array(
			'system'		=> $get_labels,
			'custom'		=> $get_custom_lables,
			'business_list'	=>$business_list,
			'geditlist'		=>$geditlist,
			'editcustomlist'=>$custom_group,
			'list_types'	=>$this->systemmodel->get_listtypes_employee()	
		);
		$this->sysconfmodel->viewLayout('AddEmp',$data);
	}
	function access_denied(){
		$this->sysconfmodel->viewLayout('form_err');
	}	
	function addemp_popup(){
		$res=$this->empmodel->add_emp();
		if($res!="Email Exists"){
			$group_list=$this->groupmodel->employee_list();
		}else{
			echo "fail";
		}
	}
   function bulkDel(){
		$res=$this->empmodel->bulkDel($_POST['leadids']);
	}
	function deleted_employees($page=''){
		$roleDetail = $this->roleDetail; 
		if(!$roleDetail['modules']['2']['opt_view']) redirect('Employee/access_denied');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$parentbids=array();
		if($this->session->userdata('eid')==1){
			$parentbids=$this->systemmodel->getChildBusiness();
		}
		$this->sysconfmodel->data['html']['title'] .= " | ".$this->lang->line('label_Employee_deleteusers');
		$ofset = ($this->uri->segment(2)!=null)?$this->uri->segment(2):0;
		$limit = '30';
		$data['itemlist'] = $this->empmodel->getDeletedEmplist($bid,$ofset,$limit);
		$data['module']['title'] = $this->lang->line('label_Employee_deleteusers').'['.$data['itemlist']['count'].']';
		$this->pagination->initialize(array(
						 'base_url'=>site_url('DeletedEmployee')
						,'total_rows'=>$data['itemlist']['count']
						,'per_page'=>$limit	
						,'uri_segment'=>2					
				));
		$data['paging'] = $this->pagination->create_links();
		$links = array();
		$links[] = '<li><a href="'.$_SERVER['REQUEST_URI'].'" class="btn-search" data-toggle="modal" data-target="#modal-search" ><span title="Search"class="glyphicon glyphicon-search" >&nbsp;Search</span></a></li>';
		$fieldset = $this->configmodel->getFields('2',$bid);
		$formFields = array();
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && $field['show'] && $field['fieldname']!='tollfree'){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked) {
					$formFields[] = array(
									'label'=>'<label class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' : </label>',
									'field'=>form_input(array(
											'name'      => $field['fieldname'],
											'class'     => 'form-control',
											'id'        => $field['fieldname'],
											'value'     => $this->session->userdata($field['fieldname'])))
											);
				}					
			}
		}
		$data['links'] = $links;
		$data['form'] = array(
							'open'=>form_open_multipart('DeletedEmployee/0',array('name'=>'manageemp','class'=>'form','id'=>'manageemp','method'=>'post')),
							'form_field'=>$formFields,
							'parentids'=>$parentbids,
							'busid'=>$bid,
							'pid'=>$this->session->userdata('pid'),
							'close'=>form_close(),
							'title'=>$this->lang->line('level_search')
							);
		if(isset($_POST['search']) && $_POST['search'] == 'search'){
			$this->load->view('search_view',$data);
			return true;
		}
		$this->sysconfmodel->viewLayout('list_view',$data);
	}
	function uniques_extension($str){
		$con_id=($this->uri->segment('2')!="")?$this->uri->segment('2'):'';
		$check_ex=$this->empmodel->CheckExtension($con_id);
		if($check_ex){
			return true;
		}else{
			$this->form_validation->set_message('uniques_extension', 'The Extension :'.$str.' is not available');
			return FALSE;
		}
	}
	function del_unconfirm($eid){
		$res=$this->empmodel->unconfirmDel($eid);
		redirect('UnconfirmEmployees/0');
	}
	function ClickasEmp($eid){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$Status=$this->empmodel->ClickasEmp($eid,$bid);
		$this->session->set_flashdata('msgt', 'success');
		$this->session->set_flashdata('msg','Click to Call Employee Updated Successfully');
		redirect('ManageEmployee/0');
	}
	function add_audiofrm($id='',$formname,$ac=''){
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['2']['opt_add']) redirect('Employee/access_denied');
		$this->sysconfmodel->data['html']['title'] .= " | ".$this->lang->line('label_Audiopopup');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$parentbids=array();
		if($this->session->userdata('eid')==1){
			$parentbids=$this->systemmodel->getChildBusiness();
		}
		$data['module']['title'] = $this->lang->line('label_Audiopopup');
		$fieldset = $this->configmodel->getFields('3',$bid,'1');
		$get_audiofile=$this->systemmodel->getAudioFile();
		$data['form'] = array(
					'open'=>form_open_multipart('group/add_group'.$id,array('name'=>$formname,'class'=>'form','id'=>$formname,'method'=>'post')),
					'fields'=>$get_audiofile,
					'parentids'=>($id=='')?$parentbids:'',
					'busid'=>$bid,
					'pid'=>$this->session->userdata('pid'),
					'close'=>form_close()
				);
		return $data;
	}
	function add_greetingfrm($id='',$formname,$ac=''){
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['2']['opt_add']) redirect('Employee/access_denied');
		$this->sysconfmodel->data['html']['title'] .= " | ".$this->lang->line('label_Greetingpopup');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$parentbids=array();
		if($this->session->userdata('eid')==1){
			$parentbids=$this->systemmodel->getChildBusiness();
		}
		$data['module']['title'] = $this->lang->line('label_Greetingpopup');
		$fieldset = $this->configmodel->getFields('3',$bid,'1');
		$get_welfile=$this->systemmodel->getWelcomeFile();
		$data['form'] = array(
					'open'=>form_open_multipart('group/add_group'.$id.'/'.$ac,array('name'=>$formname,'class'=>'form','id'=>$formname,'method'=>'post')),
					'fields'=>$get_welfile,
					'parentids'=>($id=='')?$parentbids:'',
					'busid'=>$bid,
					'pid'=>$this->session->userdata('pid'),
					'close'=>form_close()
				);
		return $data;
	}
	function delaudio($gid=''){
		 $cbid=$this->session->userdata('cbid');
		 $bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
	     $res=$this->groupmodel->delaudio($gid,$bid);
	     if($res){
			 redirect(site_url('EditGroup/'.$gid));
		 }
	}
	function delgreeting($gid=''){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$res=$this->groupmodel->delgreeting($gid,$bid);
		 if($res){
			 redirect(site_url('EditGroup/'.$gid));
		 }
	}
	function delvoicemessage($gid=''){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$res=$this->groupmodel->delvoicemessage($gid,$bid);
		 if($res){
			 redirect(site_url('EditGroup/'.$gid));
		 }
	}
	function add_greetings($id=''){
		$this->load->view('add_greeting',$this->add_greetingfrm($id,'greetings'));
	}
	
	function addaudio($id=''){
		$this->load->view('audio_file',$this->add_audiofrm($id,'addaudio'));
	}
	
	function addemptogroups($eid=''){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		if($this->input->post('update_system')){
		    $res=$this->empmodel->addemp2groups();		
			if($res==0){
				$this->session->set_flashdata('msgt', 'error');
				$this->session->set_flashdata('msg', $this->lang->line('error_alreadyexists'));
				redirect('AddempGroups/'.$eid);
			}else{
				$this->session->set_flashdata('msgt', 'success');
				$this->session->set_flashdata('msg', $this->lang->line('error_addempsucss'));
				redirect('ManageEmployee/0');
			}

		}
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['2']['opt_add']) redirect('Employee/access_denied');
		$gpDetail = $this->configmodel->getDetail('3',$bid);
		if(count($_POST)>0){
			redirect($_SERVER['HTTP_REFERER']);
		}
		$this->sysconfmodel->data['html']['title'] .= " | ".$this->lang->line('label_addemptogroups');
		$data['module']['title'] = $this->lang->line('label_addemptogroups');
		$formFields = array();
		$data['form'] =  array( 'form_attr'=>array('action'=>'AddempGroups/'.$eid,'name'=>'addempgrp','id'=>'addempgrp',),
										'fields'=>$formFields,
										'hidden' => array('bid'=>$bid,'empid'=>$eid),
										'close'=>form_close(),
										'emplist'=>$this->empmodel->getgroups($bid),
										'empexists'=>$this->groupmodel->group_enteremplist1(),
										'gdetail'=>$gpDetail,
						);
		$this->sysconfmodel->viewLayout('addemptogroup',$data);
	}

	function empdownload(){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$data=array('systemfields'=>$this->configmodel->getFields('2',$bid),
					'roleDetail'=>$this->roleDetail,
					 'bid'=>$bid);
		$this->load->view('empdownload',$data);
	}

   function empperf($download){
		$eid = $this->session->userdata('eid');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$data=array('roleDetail'=>$this->roleDetail,
				    'bid' => $bid,
				    'download' => $download,
					'eid'=>($eid!="")?$eid:'');
	  $this->load->view('empperfdowmload',$data);
	}
	
	function reportrolechk($roleid){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$rolechk = $this->empmodel->reportrolechk($roleid,$bid);
		echo $rolechk;
	}
	function performance(){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$dlink ='';
	    $ofset = ($this->uri->segment(3)!=null)?$this->uri->segment(3):0;
		$limit = '30';
		if($this->input->post('submit') && ($this->input->post('download') == "")){
			$this->session->set_userdata('duration',$_POST);
			$data = $_POST;
			$data['bid'] = $bid;
		}elseif($this->input->post('submit') && $this->input->post('download')){
			$this->session->set_userdata('duration',$_POST);
			$data = $_POST;
			$data['bid'] = $bid;
			$filename= $this->empmodel->empReport_download($data);
			$dlink =  "<a href='".$this->config->item('reports_path').$filename.".zip' target='_blank' style='color:#fff'><b>Download</b></a>";
		}else{
			$data = array('bid' => $bid,
				'starttime'=>date('Y-m-d',strtotime('-6 days')),
				'endtime'=>date('Y-m-d')
			);
		}
        $data['mcubeapp'] ="1";
		$records= $this->empmodel->empReport($data,$ofset,$limit,$source='web');
		$result ='';
	    $this->pagination->initialize(array(
						 'base_url'=>site_url('empPerformance/0')
						,'total_rows'=>$records['count']
						,'per_page'=>$limit	
						,'uri_segment'=>3					
				));
        if($this->input->post('graphchart')){
		    $d = $this->session->userdata('duration');
		    $k = "graph";
		    $data1['empgraph_rep'] = $this->empmodel->empperrep($d,$bid,$k);
		    $data1['module']['title'] = "Employee Performance";
		    $this->sysconfmodel->viewLayout('Empperanalytics',$data1);
		   	return true;
	    }
	    if($this->input->post('monthlyrecord')){
			$year = date("Y");
			$month = date("m");
	       ($d['eid']!= '')?redirect('/EmpMonthlyPer/0/'.$year.'/'.$month.'/'.$d['eid']):redirect('/EmpMonthlyPer/0/'.$year.'/'.$month);
		   	return true;
	    }
		$result['paging'] = $this->pagination->create_links();
		$this->sysconfmodel->data['html']['title'] .= " | ".'Employee Performance Report';
		$result['module']['title'] ='Employee Performance Report'. "[".$records['count']."]";
		$links = array();
		$links[] =  '<li><a href="Employee/empperf/1" class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><span title="Download" class="glyphicon glyphicon-download-alt">&nbsp;Download</span></a></li>';
		$links[] = '<li class="divider"><a>&nbsp;</a></li>';
		$links[] =  '<li><a href="Employee/empperf/0" class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><span title="Search" class="glyphicon glyphicon-search" >&nbsp;Search</span></a></li>';
		if($this->session->userdata('roleid')==1){
		 $result['links'] = $links;
		}else{
	     $result['nobulk']=true;
		}
		$result['header'] = array("#","Emp Name","Total Hits","Answered","Missed & Assigned","Routed to others","Inbound(min)","Outbound(min)","Last 7 days");
		$result['downlink'] = $dlink;
		$result['data'] = $records['data'];
        $this->sysconfmodel->viewLayout('empReport',$result);
	    }

	function importNumbers(){
		if($this->input->post('submit')){
			$bid = $_POST['businessuser'];
			$err = FALSE;
			$msg = '';
			$ext = pathinfo($_FILES['empfile']['name'],PATHINFO_EXTENSION);
			if(!(($_FILES['empfile']['type'] == 'text/csv') || ($ext == 'csv'))){
				$msg .= "Please upload the .csv format file. ";
				$err = "TRUE";
			}
			$err_number = 'importNumbers.txt';
			if($err == FALSE){
				$ext = pathinfo($_FILES['empfile']['name'],PATHINFO_EXTENSION);
				$newName = "IM".date('YmdHis').".".$ext;
				@move_uploaded_file($_FILES['empfile']['tmp_name'],$this->config->item('sound_path').$newName);
				$moved_file = $this->config->item('sound_path').$newName;
				@chmod($moved_file,0777);
				$row = 1;
				$emp = array(); $headerData = array();
				if (($handle = fopen($moved_file, "r")) !== FALSE) {
					while (($csvdata = fgetcsv($handle,100000, ',') )!== FALSE) {
						$num = count($csvdata);
						if($row == 1)
							$headerData = $csvdata;
						else{
							for($k=0;$k<count($csvdata);$k++){
								if($headerData[$k] == 'name')
									$emp['empname'] = $csvdata[$k];
								if($headerData[$k] == 'number')
									$emp['empnumber'] = $csvdata[$k];
								if($headerData[$k] == 'email')
									$emp['empemail'] = $csvdata[$k];
								if($headerData[$k] == 'login')
									$emp['login'] = ($csvdata[$k] == 'yes') ? '1' : '0';
							}
							$addNumber = $this->empmodel->import($emp,$bid);
							if($addNumber == 0){
								echo "error";
								//~ $fp = fopen($err_number,'w');
								//~ fwrite($fp,$emp['empname'].":".$emp['empemail'].":".$emp['empnumber']);
							}
						}
						$row++;
					}
					fclose($handle);
				}
			}else{
				echo "pad else ";exit;
			}
		}
		$data['module']['title'] = "Import Employees";
		$data = array('businessUsers'=>$this->empmodel->get_businessusers(),
					 'action'=>'Employee/importNumbers',
					);	
		$this->load->view('emp-import',$data);
		//$this->sysconfmodel->viewLayout('emp-import',$data);			
	}
    function EmpGrpdetails($eid=''){
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['2']['opt_add']) redirect('Employee/access_denied');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$data['module']['title'] = $this->lang->line('label_Employee_grpdetails');
		$data['links'] = '';
		$data['nosearch']=true;
		$data['paging'] = '';
		$data['sub,it']=true;
		$data['itemlist'] = $this->empmodel->getEmpGrpdetails($eid,$bid);
		$data['form']=array('adv_search'=>array());
		$this->load->view('popupListView',$data);
	}
	function empgraphrep($eid){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$data = array();
		$data = array(
		              'eid' => $eid,
				      'starttime'=>date('Y-m-d',strtotime('-6 days')),
				      'endtime'=>date('Y-m-d')
			);
		$k = "per";
		$data['empgraph_rep'] = $this->empmodel->empperrep($data,$bid,$k);
		$data['module']['title'] = "Employee Performance";
	    $this->load->view('emp_perf',$data);
	}	

    function Monthlyper(){
		    $d = $this->session->userdata('duration');
			$year =$this->uri->segment(3);
			$month =$this->uri->segment(4);
		    if($this->session->userdata('roleid')==1){
			 $eid =$this->uri->segment(5);
		    }else{
			 $eid = $this->session->userdata('eid');
		    }
			$data['calendar'] = $this->empmodel->empmonthrep($year,$month,$eid,$d);
		    $data['module']['title'] = "Monthly Employee Performance";
		    $this->sysconfmodel->viewLayout('empcalender',$data);
	}

}

	   
/* end of Employee controller */
