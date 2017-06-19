<?php
class Connectemp extends Controller {
	var $data,$roleDetail,$access;
	function Connectemp(){
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
		$this->load->model('connectempmodel','ct');
	}
	public function __destruct() {
		$this->db->close();
	}
	function index(){
		redirect('listCalls/0');
	}
	function addctemp(){
		if(!$this->feature_access(18))redirect('Employee/access_denied');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		if($this->input->post('update_system')){
			$res = $this->ct->addct_emp($bid,$eid);
			if($res==0){
				$this->session->set_flashdata('msgt', 'error');
				$this->session->set_flashdata('msg', $this->lang->line('error_emperrmsg'));
				redirect('AddConnectEmp');
			}else{
				$this->session->set_flashdata('msgt', 'success');
				$this->session->set_flashdata('msg', $this->lang->line('error_empsuccmsg'));
				redirect('ListConnectEmp/0');
		    }
	   }
		$roleDetail = $this->roleDetail;
		//if(!$roleDetail['modules']['51']['opt_add']) redirect('Employee/access_denied');
		$this->sysconfmodel->data['html']['title'] .= " | Add Employee";
		$data['module']['title'] = " Add Employee";
		$fieldset = $this->configmodel->getFields('56',$bid);
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && $field['show'] && $field['fieldname']!='filename'){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked && !in_array($field['fieldname'] ,array('assignied_date'))) 
					$formFields[] = array(
									'label'=>'<label  class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' <img src="system/application/img/icons/help.png" title="'.$this->lang->line('TTmod_'.$field['modid'])->$field['fieldname'].'" >&nbsp;&nbsp: </label>',
												'field'=>form_input(array(
												'name'      => $field['fieldname'],
												'id'        => $field['fieldname'],
												'value'		=> '',
												'class'		=> ($field['fieldname'] == 'groupname') ? 'form-control required' : 'form-control')
												));
			}elseif($field['type']=='c' && $field['show']){
					foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
					if($checked)$formFields[] = array(
							'label'=>'<label  class="col-sm-4 text-right" for="custom_'.$field['fieldid'].'">'.$field['customlabel'].' : </label>',
							'field'=>$this->configmodel->createFieldAdvance($field,'',''));
			}
		}
		$data['form'] = array(
		            'form_attr'=>array('action'=>'AddConnectEmp','name'=>'addctemp','id'=>'addctemp','enctype'=>"multipart/form-data"),
					'hidden'=>array('bid'=>$bid),
					'fields'=>$formFields,
					'busid'=>$bid,
					'pid'=>$this->session->userdata('pid'),
					'close'=>form_close()
				);
		$this->sysconfmodel->viewLayout('form_view',$data);
	}
    function editctemp($eid){
		if($this->input->post('update_system')){
			$res=$this->ct->updateemp($eid);
			if($res == ''){
				$this->session->set_flashdata('msgt', 'success');
				$this->session->set_flashdata('msg', "Employee Updated Successfully");
			}
			redirect($this->session->userdata('refurl'));
		}
		if(isset($_SERVER['HTTP_REFERER']))$this->session->set_userdata(array('refurl'=>$_SERVER['HTTP_REFERER']));
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['56']['opt_view']) redirect('Employee/access_denied');
        $this->sysconfmodel->data['html']['title'] .= " | Edit Employee";
		$data['module']['title'] = "Edit Employee";
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$fieldset = $this->configmodel->getFields('56',$bid);
		$formFields = array();
		$itemId = $eid;
		$itemDetail = $this->configmodel->getDetail('56',$itemId,'',$bid);
		foreach($fieldset as $field){$checked = false;
			if($field['type']=='s' && $field['show']){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked && !in_array($field['fieldname'],array('assignied_date'))) $formFields[] = array(
									'label'=>'<label class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' : </label>',
									'field'=>in_array($field['fieldname'],array('asgempname','asgempnum','asgempemail'))
												?form_input(array(
																	  'name'      => $field['fieldname'],
																	  'id'        => $field['fieldname'],
																	  'class'     => 'form-control',
																	  'value'     => isset($itemDetail[$field['fieldname']])?$itemDetail[$field['fieldname']]:set_value($field['fieldname'])))
												:(isset($itemDetail[$field['fieldname']])
													?$itemDetail[$field['fieldname']]
													:''));
			}elseif($field['type']=='c' && $field['show']){
					foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
					if($checked)$formFields[] = array(
							'label'=>'<label class="col-sm-4 text-right" for="custom_'.$field['fieldid'].'">'.$field['customlabel'].' : </label>',
							'field'=>$this->configmodel->createFieldAdvance($field,isset($itemDetail[$field['fieldKey']]) ? $itemDetail[$field['fieldKey']] : '',''));
			}
		}
		$data['form'] = array(
		            'form_attr'=>array('action'=>'EditConnectEmp/'.$eid,'name'=>'editemp','id'=>'editemp','enctype'=>"multipart/form-data"),
					'hidden'=>array('bid'=>$bid),
					'fields'=>$formFields,
					'close'=>form_close()
				);
		$this->sysconfmodel->viewLayout('form_view',$data);
	}
	function listconnectemp($type=''){
		if(!$this->feature_access())redirect('Employee/access_denied');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$roleDetail = $this->roleDetail;	
		if(!$roleDetail['modules']['56']['opt_view']) redirect('Employee/access_denied');
		if($this->input->post('submit')){
			if($this->session->userdata('search')!=""){
				$s=$this->session->unset_userdata('search');
			}
		}
		$type = ($this->uri->segment(1) == 'ListConnectEmp') ? 'act' : (($this->uri->segment(1) == 'DeleteConnectEmp') ? 'del' :'');
		$parentbids=array();
		if($this->session->userdata('eid')==1){
			$parentbids=$this->systemmodel->getChildBusiness();
		}
		$ofset = ($this->uri->segment(2)!=null)?$this->uri->segment(2):0;
		$limit = '30';
		$data['itemlist'] = $this->ct->listConnectEmp($bid,$ofset,$limit,$type);
		$this->pagination->initialize(array(
						 'base_url'=>site_url($this->uri->segment(1).'/')
						,'total_rows'=>$data['itemlist']['count']
						,'per_page'=>$limit		
						,'uri_segment'=>2				
				));
		$data['module']['title'] = "List Employee [".$data['itemlist']['count']."]";	
		$links = array();	
		if($type == 'act'){
		$links[] = '<li><a href="AddConnectEmp"><span title="Add Employee" class="glyphicon glyphicon-plus-sign">&nbsp;AddEmployee</span></a></li>';
	    $links[] = ($roleDetail['modules']['56']['opt_delete']) ?'<li><a  class="blkDeleteEmp" href="connectemp/bulkDelEmp" ><span title="Bulk Delete" class="glyphicon glyphicon-trash">&nbsp;Delete</span></a></li>':'';
	    $links[] = '<li class="divider"><a>&nbsp;</a></li>';
	    }
		$links[] = '<li><a href="'.$_SERVER['REQUEST_URI'].'" class="btn-search" data-toggle="modal" data-target="#modal-search" ><span title="Search" class="glyphicon glyphicon-search" >&nbsp;Search</span></a></li>';
		$fieldset = $this->configmodel->getFields('56',$bid);
		$formFields = array();
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && $field['show'] && !in_array($field['fieldname'],array())){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked) { $formFields[] = array(
									'label'=>'<label class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' : </label>',
									'field'=> form_input(array(
												'name'      => $field['fieldname'],
												'id'        => $field['fieldname'],
												'class'		=>($field['fieldname']=="createdon" || $field['fieldname']=="lastmodified")?'datepicker_leads form-control':'form-control'
												))
									);
								}		
			}elseif($field['type']=='c' && $field['show']){
				foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked) { $formFields[] = array(
								'label'=>'<label class="col-sm-4 text-right" for="custom_'.$field['fieldid'].'">'.$field['customlabel'].' : </label>',
								'field'=>form_input(array(
													'name'      => 'custom['.$field['fieldid'].']',
													'class'      => 'form-control'
													)));
								//$advsearch['custom['.$field['fieldid'].']']=$field['customlabel'];							
							}						
			}
		}
		$data['links'] = $links;
		$data['form'] = array(
					'open'=>form_open_multipart(site_url($this->uri->segment(1).'/0'),array('name'=>'listcontemp','class'=>'form','id'=>'listcontemp','method'=>'post')),
					'form_field'=>$formFields,
					'parentids'=>$parentbids,
					'adv_search'=>array(),
					'busid'=>$bid,
					'pid'=>$this->session->userdata('pid'),
					'close'=>form_close(),
					'title'=>$this->lang->line('level_search')
					);
		$data['paging'] = $this->pagination->create_links();
		$this->sysconfmodel->data['html']['title'] .= " | List Employee ";
		if(isset($_POST['search']) && $_POST['search'] == 'search'){
			$this->load->view('search_view',$data);
			return true;
		}
		$this->sysconfmodel->viewLayout('list_view',$data);
	}
	function feature_access(){
		$show=0;
		$checklist=$this->systemmodel->checked_featuremanage();
		if(in_array(1,$checklist)){
			$show=1;
		}
		return $show;
	}
  	function delConnectemp($id='',$type1=''){
		if(!$this->feature_access())redirect('Employee/access_denied');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['56']['opt_delete']) redirect('Employee/access_denied');
		$type = ($type1 == '') ?'2' : $type1;
		$this->ct->del_Connectemp($id,$bid,$type);
		if($type1 == '')
			redirect('ListConnectEmp/0');
		else
			redirect('DeleteConnectEmp/0');
	}
    function report(){
		$cbid=$this->session->userdata('cbid');
		$bid = (isset($cbid) && $cbid!="") ? $cbid : $this->session->userdata('bid');
		$roleDetail = $this->roleDetail;
		if(!$this->feature_access(18))redirect('Employee/access_denied');
		if(!$roleDetail['modules']['57']['opt_view']) redirect('Employee/access_denied');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$parentbids=array();
		if($this->session->userdata('eid')==1){
			$parentbids=$this->systemmodel->getChildBusiness();
		}
	    $dlink = "";
	    $page = "ConnectReport";
	    $url = "all";
		if($this->input->post('download')){
			$filename = $this->ct->connectemp_csv($this->uri->segment(1),$bid);
			$dlink =  "<a href='".$this->config->item('reports_path').$filename.".zip' target='_blank' style='color:#fff'><b>Download</b></a>  ";
		}elseif($this->input->post('blk_down')){
			$filename = $this->ct->blk_down($bid);
			$dlink =  "<a href='".$this->config->item('reports_path').$filename.".zip"."' target='_blank' style='color:#fff'><b>Download</b></a>  ";
		}
		$u3 = ($this->uri->segment(2)!='')?$this->uri->segment(2):'all';
		$this->sysconfmodel->data['html']['title'] .= " | ".$this->lang->line('label_connectreport');
		$csv_link = ($this->uri->segment(2)!='')?$this->uri->segment(2):'all';
		$csv_link1 = ($this->uri->segment(1)!='')?$this->uri->segment(1):'ConnectReport';
		$links = array();
		$links[] = ($roleDetail['modules']['57']['opt_delete']) ?'<li><a  class="blkDeletecall" href="connectemp/ctBulkDel" ><span title="Bulk Delete" class="glyphicon glyphicon-trash">&nbsp;Delete</span></a></li>':'';
		$links[] = '<li><a href="#" class="blkemail" rel="Connect"><span title="Bulk Mail" class="glyphicon glyphicon-envelope">&nbsp;Email</span></a></li>';
		$links[] = '<li><a href="Report/blksms" class="blkSMs" data-toggle="modal" data-target="#modal-blksms" rel="connect"><span title="Bulk SMS" class="glyphicon glyphicon-comment">&nbsp;SMS</span></a></li>';
		$links[] = '<li  class="divider"><a>&nbsp;</a></li>';
		$links[] = '<li><a href="'.$_SERVER['REQUEST_URI'].'" class="btn-search" data-toggle="modal" data-target="#modal-search" ><span title="Search" class="glyphicon glyphicon-search">&nbsp;Search</span></a></li>';
	    $links[] = '<li  class="divider"><a>&nbsp;</a></li>';
		$links[] = ($roleDetail['modules']['57']['opt_download']!=0) ? '<li><a href="connectemp/Bulkconnect_down/'.$csv_link1.'/'.$csv_link.'" class="blk_calls" data-toggle="modal" data-target="#modal-pop"><span title="Download" class="glyphicon glyphicon-arrow-down">&nbsp;DownloadSelect</span></a></li>':'';
		$links[] = ($roleDetail['modules']['57']['opt_download']!=0) ? '<li><a href="connectemp/connect_csv/'.$csv_link1.'/'.$csv_link.'" class="btn-danger" data-toggle="modal" data-target="#modal-responsive"><span title="Download" class="glyphicon glyphicon-download-alt">&nbsp;DownloadAll</span></a></li>':'';
		$ofset = ($this->uri->segment(3)!=null)?$this->uri->segment(3):0;
		$limit = '30';
		$data['itemlist'] = $this->ct->getConnectReportlist($bid,$ofset,$limit,$u3);
		$data['module']['title'] = $this->lang->line('label_connectreport'). "[".$data['itemlist']['count']."]";
		$this->pagination->initialize(array(
						 'base_url'=>site_url('ConnectReport/'.$u3.'/')
						,'total_rows'=>$data['itemlist']['count']
						,'per_page'=>$limit		
						,'uri_segment'=>3					
				));
		$data['paging'] = $this->pagination->create_links();
		$fieldset = $this->configmodel->getFields('57',$bid);
		$formFields = array();$advsearch=array();
		foreach($fieldset as $field){
			$checked = false;
			if($field['type']=='s' && $field['show'] && $field['fieldname']!='filename'){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked && !in_array($field['fieldname'],array('callid','pulse','filename'))) { 
					$formFields[] = in_array($field['fieldname'],array('empname','empnumber','empemail','cusnumber','cusname','cusemail','callfrom','starttime','endtime','callstatus','remark'))?array(
									'label'=>'<label  class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' : </label>',
									'field'=>form_input(array(
											'name'      => $field['fieldname'],
											'id'        => $field['fieldname'],
											'class'		=>($field['fieldname']=="endtime" ||$field['fieldname']=="starttime")?'datepicker form-control':'form-control'))
											):array('label'=>'','field'=>'');
								$advsearch[$field['fieldname']]=(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']);				
							}				
		}elseif($field['type']=='c' && $field['show']){
					foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
					if($checked)
						$formFields[] = array(
							'label'=>'<label  class="col-sm-4 text-right" for="custom_'.$field['fieldid'].'">'.$field['customlabel'].' : </label>',
							'field'=>$this->configmodel->createFieldAdvance($field,isset($itemDetail[$field['fieldKey']]) ? $itemDetail[$field['fieldKey']] : '',''));
			}
		}
		unset($advsearch['options']);
		unset($advsearch['employee']);
		$save_cnt=save_search_count($bid,'57',$this->session->userdata('eid'));	
		$search_names=get_save_searchnames($bid,'57',$this->session->userdata('eid'));
		$data['form'] = array(
						'open'=>form_open_multipart(site_url($page.'/'.$u3.'/')
						,array('name'=>'connectlist','class'=>'form','id'=>'connectlist','method'=>'post')
						,array('module'=>'tracker')),
					'form_field'=>$formFields,
					'search_url'=>$page.'/',
					'parentids'=>$parentbids,
					'busid'=>$bid,
					'pid'=>$this->session->userdata('pid'),
					'close'=>form_close(),
					'title'=>$this->lang->line('level_search')
					);
		$data['tab'] = true;	
		$data['links'] = $links;	
		$data['downlink'] = $dlink;	
	    if(isset($_POST['search']) && $_POST['search'] == 'search'){
			$this->load->view('search_view',$data);
			return true;
		}
		$this->sysconfmodel->viewLayout('list_view',$data);		
	}
	function editReport($callid){
		if($this->input->post('update_system')){
			$res=$this->ct->updateConnectReport($callid);
			if($res == ''){
				$this->session->set_flashdata('msgt', 'success');
				$this->session->set_flashdata('msg', "Call Report Updated Successfully");
			}
			redirect($this->session->userdata('refurl'));
		}
		if(isset($_SERVER['HTTP_REFERER']))$this->session->set_userdata(array('refurl'=>$_SERVER['HTTP_REFERER']));
		$roleDetail = $this->roleDetail;
		if(!$roleDetail['modules']['57']['opt_view']) redirect('Employee/access_denied');
		$this->sysconfmodel->data['html']['title'] .= " | ".$this->lang->line('label_connectreport');
		$data['module']['title'] = $this->lang->line('label_connectreport');
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$fieldset = $this->configmodel->getFields('57',$bid);
		$formFields = array();
		$itemId = $callid;
		$itemDetail = $this->configmodel->getDetail('57',$itemId,'',$bid);
		foreach($fieldset as $field){$checked = false;
			if($field['type']=='s' && $field['show']){
				foreach($roleDetail['system'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
				if($checked) $formFields[] = array(
									'label'=>'<label class="col-sm-4 text-right" for="'.$field['fieldname'].'">'.(($field['customlabel']!="")
											 ?$field['customlabel']:$this->lang->line('mod_'.$field['modid'])->$field['fieldname']).' : </label>',
									'field'=>in_array($field['fieldname'],array('remark'))
												?form_textarea(array(
																	  'name'      => $field['fieldname'],
																	  'id'        => $field['fieldname'],
																	  'class'     => 'form-control',
																	  'value'     => isset($itemDetail[$field['fieldname']])?$itemDetail[$field['fieldname']]:set_value($field['fieldname'])))
												:(isset($itemDetail[$field['fieldname']])
													?$itemDetail[$field['fieldname']]
													:''));
			}elseif($field['type']=='c' && $field['show']){
					foreach($roleDetail['custom'] as $ret){if($ret['fieldid']==$field['fieldid'])$checked = true;}
					if($checked)$formFields[] = array(
							'label'=>'<label class="col-sm-4 text-right" for="custom_'.$field['fieldid'].'">'.$field['customlabel'].' : </label>',
							'field'=>$this->configmodel->createFieldAdvance($field,isset($itemDetail[$field['fieldKey']]) ? $itemDetail[$field['fieldKey']] : '',''));
			}
		}
		$data['form'] = array(
		            'form_attr'=>array('action'=>'ConnectEditReport/'.$callid,'name'=>'editconn','id'=>'editconn','enctype'=>"multipart/form-data"),
					'hidden'=>array('bid'=>$bid,'number'=>$itemDetail['callfrom']),
					'fields'=>$formFields,
					'close'=>form_close()
				);
		$this->sysconfmodel->viewLayout('form_view',$data);
	}
	function ctBulkDel(){
		$rst = $this->ct->ctBulkDel($_POST['callid']);
		echo "1";	
	}
	function bulkDelEmp(){
		$rst = $this->ct->BulkDel_emp($_POST['eid']);
		echo "1";	
	}
	function Bulkconnect_down($url,$type){
		$t='';	
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$roleDetail = $this->roleDetail;			
		$fieldset = $this->configmodel->getFields('57',$bid);
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
	function connect_csv($type='',$eid=''){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');
		$data=array('systemfields'=>$this->configmodel->getFields('57',$bid),
					'roleDetail'=>$this->roleDetail,
					 'type'=>$type,
					 'bid'=>$bid,
					 'eid'=>($eid!="")?$eid:'');
		$this->load->view('connect_csv',$data);
	}
}

	
/* end */
?>
