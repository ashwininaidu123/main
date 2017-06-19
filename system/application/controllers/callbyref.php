
<?php
class Callbyref extends controller
{
	var $data,$roleDetail;
	function Callbyref(){
		parent::controller();
		if(!$this->session->userdata('logged_in'))redirect('/site/login');
		$this->load->model('sysconfmodel');
		$this->data = $this->sysconfmodel->init();
		$this->load->model('systemmodel');
		$this->load->model('callbyrefmodel');
		$this->roleDetail = $this->empmodel->getRoledetail($this->session->userdata('roleid'));
	}
	function index(){
		redirect('ListReference');
	}
	function feature_access($access){
		$show=0;
		$checklist=$this->systemmodel->checked_featuremanage();
		if(in_array($access,$checklist)){
			$show=1;
			}
		return $show;
	}
	function addreference(){
		$dlink = '';
	    $cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		if(!$this->feature_access(19))redirect('Employee/access_denied');
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['59']['opt_add']) redirect('Employee/access_denied');
		if($this->input->post('update_system')){
					$res=$this->callbyrefmodel->addref();
					if($res['errcount'] != '0'){
						if($res['uploadfailed']){
								$rdata['module']['title'] = "Upload Failed List" . ' ['.$res['errcount'].']';
								$rdata['itemlist'] = $res['uploadfailed'];
								$rdata['links']='';
								$rdata['nosearch']='1';
								$rdata['nobulk']=true;
								$rdata['noaction']='1';
								//~ $this->session->set_flashdata('msgt', 'error');
								//~ $this->session->set_flashdata('msg', $res['errcount']." Reference was not added");
								$this->sysconfmodel->viewLayout('list_view',$rdata);
					    }
				    }else{
						$this->session->set_flashdata('msgt', 'success');
						$this->session->set_flashdata('msg', $res['suscount']." Reference added successfully");
						redirect('ListReference/0');
					}
	    }else{
			$roleDetail = $this->roleDetail;
			$this->sysconfmodel->data['html']['title'] .= " | Add Reference";
			$data['module']['title'] = "Add Reference";
			$formFields[] = array('label'=>'<label class="col-sm-4 text-right" for="filename">'.$this->lang->line('label_autodiallerfile').'&nbsp;&nbsp;<img src="system/application/img/icons/help.png" title="Upload csv or txt file with the list of numbers to be called and tracked. The format of the file should be Number,Name,Email">&nbsp;&nbsp;: </label>',
								  'field'=>form_input(array(
												'name'      => 'filename',
												'id'        => 'filename',
												'class'	  => ' ',
												'type'	  => 'file')
												).'<b>File Formate : Number,Name,Email,Source</b>'
									);					
			$fieldset = $this->configmodel->getFields('59',$bid);
			foreach($fieldset as $field){
				$checked = false;
				if($field['type']=='s' && $field['show'] && $field['fieldname']!='filename'){
			foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
			if($checked && !in_array($field['fieldname'] ,array('name','email','number','refid','source'))) 
				$formFields[] = array(
								'label'=>'<label class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
										 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' : </label>',
								'field'=>(($field['fieldname']=="assigntoemp")?
									 form_dropdown('assigntoemp',$this->callbyrefmodel->employee_list(),
															 (isset($itemDetail['assigntoemp']) && $itemDetail['assigntoemp']!="") ? $itemDetail['assigntoemp'] : $this->input->post('assigntoemp')
															,'id="assigntoemp" class="form-control" data-style="input-sm btn-default"') 
									:form_input(array(
										'name'      => $field['fieldname'],
										'id'        => $field['fieldname'],
										'class'	    => 'form-control'
										))));
					}

			}			
			
			$data['form'] = array(
				'form_attr'=>array('action'=>'AddReference/0','name'=>'addref','id'=>'addref','enctype'=>"multipart/form-data"),
						'fields'=>$formFields,
						'busid'=>$bid,
						'close'=>form_close()
					);
			$this->sysconfmodel->viewLayout('form_view',$data);
		}
	}
    function editpopup(){
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['59']['opt_add']) redirect('Employee/access_denied');
		$this->load->view('form_view2',$this->editFrm());
	}
	function editFrm(){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['59']['opt_add']) redirect('Employee/access_denied');
		if($this->input->post('update_system')){
			$this->form_validation->set_rules('assigntoemp', 'Assign Employee', 'required');
			if(!$this->form_validation->run() == FALSE){
				if(count($_POST)>0){
				 	$get = $this->callbyrefmodel->editref();
					redirect('ListReference/0');
				}
			}	
		}		
		$this->sysconfmodel->data['html']['title'] .= " | Edit Reference";
		$parentbids=array();
		if($this->session->userdata('eid')==1){
			$parentbids=$this->systemmodel->getChildBusiness();
		}
		$data['module']['title'] = "Edit Reference";
		$fieldset = $this->configmodel->getFields('59',$bid);
		$formFields = array();
		$itemId = ($this->uri->segment(2)!=null)?$this->uri->segment(2):"";
		$itemDetail = $this->configmodel->getDetail('59',$itemId,'',$bid);
			foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && $field['show'] && $field['fieldname']!='filename'){
		foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
		if($checked && !in_array($field['fieldname'] ,array('name','email','number','refid','source'))) 
			$formFields[] = array(
							'label'=>'<label class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
									 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' : </label>',
							'field'=>(($field['fieldname']=="assigntoemp")?
							     form_dropdown('assigntoemp',$this->callbyrefmodel->employee_list(),
														 (isset($itemDetail['assigntoemp']) && $itemDetail['assigntoemp']!="") ? $itemDetail['assigntoemp'] : $this->input->post('assigntoemp')
														,'id="assigntoemp" class="form-control" data-style="input-sm btn-default"') 
								:form_input(array(
									'name'      => $field['fieldname'],
									'id'        => $field['fieldname'],
									'class'	    => 'form-control'
									))));
				}
			
		}	
		$data['form'] = array(
		        'form_attr'=>array('action'=>'EditReference/'.$itemId,'name'=>'editref','id'=>'editref','enctype'=>"multipart/form-data"),
				'hidden'=>array('rid'=>$itemId
							  ,'bid'=>$bid
							),
				'fields'=>$formFields,
				'busid'=>$bid,
				'pid'=>$this->session->userdata('pid'),
				'close'=>form_close()
				);
		return $data;
	}
  function listreference(){
	    $cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$roleDetail = $this->roleDetail;
		$ofset = ($this->uri->segment(3)!=null)?$this->uri->segment(3):0;
		$limit = '30';
		$modid = '59';
		if($this->input->post('download')){
			$filename = $this->callbyrefmodel->callbyrefdownload($bid);
			$dlink = "<a href='".site_url("reports/".$filename.".zip")."' target='_blank' style='color:#fff'>Download</a>  ";
		}else{
			$dlink = "";
		}
	   	$opt_add 	= $roleDetail['modules']['59']['opt_add'];
		$opt_view 	= $roleDetail['modules']['59']['opt_view'];
		$opt_delete = $roleDetail['modules']['59']['opt_delete'];
		$data['itemlist'] = $this->callbyrefmodel->listreferences($bid,$ofset,$limit);
		//~ echo '<pre>';print_r($data);exit;
		$data['module']['title'] = 'List References'. "[".$data['itemlist']['count']."]";
		$csv_link = ($this->uri->segment(2)!='')?$this->uri->segment(2):'0';
		$csv_link1 = ($this->uri->segment(1)!='')?$this->uri->segment(1):'ListReference';
		$this->pagination->initialize(array(
						 'base_url'=>site_url('ListReference/0')
						,'total_rows'=>$data['itemlist']['count']
						,'per_page'=>$limit
						,'uri_segment'=>3					
				));
		$data['paging'] = $this->pagination->create_links();
		$this->sysconfmodel->data['html']['title'] .= " | List References ";
		$links = array();
		$links[] = '<li><a href="AddReference/0"><span title="Search" class="glyphicon glyphicon-plus-sign" >&nbsp;AddReferences</span></a></li>';
		$links[] = '<li><a href="'.$_SERVER['REQUEST_URI'].'" class="btn-search" data-toggle="modal" data-target="#modal-search" ><span title="Search"class="glyphicon glyphicon-search" >&nbsp;Search</span></a></li>';
		$links[] = ($opt_add) ?'<li><a href="callbyref/bulk_Assign" class="lead_owner" data-toggle="modal" data-target="#modal-leadowner"><span title="Bulk Assign" class="glyphicon glyphicon-share">&nbsp;Assign</span></a></li>':'';
		$links[] = ($opt_delete) ?'<li  class="divider"><a>&nbsp;</a></li>'.'<li><a href="callbyref/callbyref_csv/'.$csv_link1.'/'.$csv_link.'" class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><span title="Download" class="glyphicon glyphicon-download-alt">&nbsp;DownloadAll</span></a></li>':'';
		$fieldset = $this->configmodel->getFields('59',$bid);
		$formFields = array();
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && $field['show'] && !in_array($field['fieldname'],
						array('number','email'))){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked){ $formFields[] = array(
									'label'=>'<label class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' : </label>',
									'field'=>($field['fieldname']=='eid')
												?form_dropdown('empid',$this->groupmodel->employee_list(),''," class='form-control'")
												:form_input(array(
													'name'      => $field['fieldname'],
													'id'        => $field['fieldname'],
													'class'        => 'form-control',
													'value'     => $this->session->userdata($field['fieldname'])))
											);
										 }
			}elseif($field['type']=='c' && $field['show'] ){
					foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
					if($checked)
							$formFields[] = array(
								'label'=>'<label class=" col-sm-4 text-right" for="custom_'.$field['fieldid'].'">'.$field['customlabel'].' : </label>',
								'field'=>$this->configmodel->createFieldAdvance($field,'','search',"class='form-control'"));
					
			}
		}
		$advsearch = array();
		
		$data['links']= $links;
		$data['downlink']= $dlink;				
		$data['form'] = array(
			'open'=>form_open_multipart('ListReference/0',array('name'=>'manageemp','class'=>'form','id'=>'manageemp','method'=>'post')),
			'form_field'=>$formFields,
			'adv_search'=>array(),
			'save_search'=>3,
			'close'=>form_close(),
			'title'=>$this->lang->line('level_search')
			);
		if(isset($_POST['search']) && $_POST['search'] == 'search'){
			$this->load->view('search_view',$data);
			return true;
		}
		$this->sysconfmodel->viewLayout('list_view',$data);

   }
   
   function reports(){
	   	$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['60']['opt_view']) redirect('Employee/access_denied');
		$ofset = ($this->uri->segment(2)!=null)?$this->uri->segment(2):0;
		$limit = '30';
		$fieldset_s = $this->configmodel->getFields('60',$bid);
		$fieldset_c = $this->configmodel->getFields('59',$bid);
		$keys = array();
		$csv_link = ($this->uri->segment(2)!='')?$this->uri->segment(2):'0';
		$csv_link1 = ($this->uri->segment(1)!='')?$this->uri->segment(1):'CallbyRefReports';
		$opt_add 	= $roleDetail['modules']['60']['opt_add'];
		$opt_view 	= $roleDetail['modules']['60']['opt_view'];
		$opt_delete = $roleDetail['modules']['60']['opt_delete'];
		$data['itemlist'] = $this->callbyrefmodel->listcallbyrefrep($ofset,$limit);
		if($this->input->post('download')){
			$filename = $this->callbyrefmodel->callbyrep_download($bid);
			$dlink =  "<a href='".$this->config->item('reports_path').$filename.".zip' target='_blank' style='color:#fff;'>Download</a>  ";
		}else{
			$dlink = "";
		}
		$data['module']['title'] ="List Call by Reference Report". "[".$data['itemlist']['count']."]";
		$links = array();
		$links[] ='<li><a href="Report/blksms" class="blkSMs" data-toggle="modal" data-target="#modal-blksms" 
		rel="contact"><span title="Bulk SMS" class="glyphicon glyphicon-comment">&nbsp;SMS</span></a></li>';
		$links[] = '<li class="divider"><a>&nbsp;</a></li>';
		$links[] = '<li><a href="'.$_SERVER['REQUEST_URI'].'" class="btn-search" data-toggle="modal" data-target="#modal-search" ><span title="Search" class="glyphicon glyphicon-search" >&nbsp;Search</span></a></li>';
		$links[] = ($roleDetail['modules']['60']['opt_download']!=0)?
		'<li class="divider"><a>&nbsp;</a></li>'.
	    '<li><a href="callbyref/callbyrep_csv/'.$csv_link1.'/'.$csv_link.'" class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><span title="Download" class="glyphicon glyphicon-download-alt">&nbsp;DownloadAll</span></a></li>':'';
		$rec = array();$list = array();
		$this->pagination->initialize(array(
						 'base_url'=>site_url('CallbyRefReports/')
						,'total_rows'=>$data['itemlist']['count']
						,'per_page'=>$limit		
						,'uri_segment'=>2					
				));
					
		$data['paging'] = $this->pagination->create_links();
		$formFields = array();
		$advsearch = array();
		$calltype = array(
		                    ''=>'Select Calltype',
		                    '0'=>'Outbound',
		                    '1'=>'Inbound');
		foreach($fieldset_s as $field){
			$checked = false;
			if($field['type']=='s' && $field['show'] && $field['fieldname']!='filename'){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked && !in_array($field['fieldname'] ,array('number','status','refidr','callid'))){ 
					$formFields[] = array(
									'label'=>'<label class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' : </label>',
								   'field'=>(($field['fieldname']=='calltype')
											?form_dropdown('calltype',$calltype,'',"class='form-control'")
											:form_input(array(
											'name'      => $field['fieldname'],
											'id'        => $field['fieldname'],
											'class'		=>($field['fieldname']=="endtime" ||$field['fieldname']=="statrtime")?'datepicker form-control':'form-control'))
											));
							$advsearch[$field['fieldname']]=(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']);				
						}					
			}
		}
	  foreach($fieldset_c as $field){
			$checked = false;
			if($field['type']=='c' && $field['show']){
				foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
	            if($checked){
						$formFields[] = array(
							'label'=>'<label  class="col-sm-4 text-right" for="custom_'.$field['fieldid'].'">'.$field['customlabel'].' : </label>',
							'field'=>$this->configmodel->createFieldAdvance($field,''));
						$advsearch['custom['.$field['fieldid'].']']=$field['customlabel'];
					}

			       }
		}
		$save_cnt=save_search_count($bid,'60',$this->session->userdata('eid'));
		$data['links'] = $links;	
		$data['downlink'] = $dlink;		
		$data['form'] = array(
			'open'=>form_open_multipart('CallbyRefReports/0',array('name'=>'callbyrefrep','class'=>'form','id'=>'callbyrefrep','method'=>'post')),
			'form_field'=>$formFields,
			'adv_search'=>array(),
			'save_search'=>$save_cnt,
			'busid'=>$bid,
			'close'=>form_close(),
			'title'=>$this->lang->line('level_search')
			);
		if(isset($_POST['search']) && $_POST['search'] == 'search'){
			$this->load->view('search_view',$data);
			return true;
		}
		$this->sysconfmodel->viewLayout('list_view',$data);
   }
   /// call by reference csv //////
    
    function callbyref_csv($type,$eid){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$data=array('systemfields'=>$this->configmodel->getFields('59',$bid),
					'roleDetail'=>$this->roleDetail,
					 'type'=>$type,
					 'eid'=>$eid,
					 );
		$this->load->view('callbyref_csv',$data);
	}
	  /// call by reference csv //////
	  
	  
	 /// call by reference report csv //////
    
    function callbyrep_csv($type,$eid){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$sys = $this->configmodel->getFields('60',$bid);
		$cus = $this->callbyrefmodel->getRefCustomFields('59',$bid);
		$systemfields = array_merge($sys,$cus);
		$data=array('systemfields'=>$systemfields,
					'roleDetail'=>$this->roleDetail,
					 'type'=>$type,
					 'eid'=>$eid,
					 );
		$this->load->view('callbyrep_csv',$data);
	}
	  /// call by reference report csv //////
	function bulk_Assign(){
			echo '<div class="modal-dialog modal-lg">
		         <div class="modal-content">
		         	<div class="modal-body">
					<button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="fa fa-times"></i></button>
                      <h4>Bulk Employee Assign</h4>
		  <form action="callbyref/assign_Emp/" class="form" id="assignemp" name="assignemp" method="POST">
                <div class="form-group col-sm-12">
					<label class="col-sm-4 text-right">Employee :</label>
						<!--<input type="text" class="form-control" name="empname" id="empname" />-->
						<input type="hidden" class="form-control" name="ids" id="ids" />
						 <div class="col-sm-6 input-icon right">             
							'.form_dropdown('empname',$this->groupmodel->employee_list(),'','id="empname" class="form-control"').'
					</div>
				</div>
				<div class="form-group text-center">
					<input id="button1" type="submit" class="btn btn-primary blk_submit" name="submit" value='.$this->lang->line('submit').' > 
                    <input id="button2" type="reset" class="btn btn-default" value='.$this->lang->line('reset').' />
                </div>
				</form>
			</div></div></div>
			</div>';
	}
	function assign_Emp(){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$roleDetail = $this->roleDetail;
		$result = $this->callbyrefmodel->blk_assignempTo();
		if($result == 1){
			$this->session->set_flashdata('msgt', 'success');
			$this->session->set_flashdata('msg',"Bulk Employee Assign successfully done ");
			redirect('ListReference/0');
		}
	}
}
?>
