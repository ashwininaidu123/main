<?php
  
class Dashboard extends Controller {
	var $data;
	function Dashboard(){
		parent::Controller();
		if(!$this->session->userdata('logged_in'))redirect('/site/login');
		$this->load->model('sysconfmodel');
		$this->load->model('systemmodel');
		$this->data = $this->sysconfmodel->init();
		$this->load->model('reportmodel');
		$this->load->model('colormodel');
		$this->session->set_userdata('cbid',$this->session->userdata('bid'));
		$this->session->unset_userdata('filter');
	    $this->gettimelimit = $this->sysconfmodel->getlimit();
	}
	public function __destruct() {
		$this->db->close();
	}
	public function dashboardInfo() {
		$data=array(
			 'offlineusers' => $this->reportmodel->offlineusers($data=''),
             'sms_bal'=>$this->reportmodel->sms_bal($data=''),
             'call_bal'=>$this->reportmodel->call_bal($data=''),
			 'lastcalls'=>$this->reportmodel->Lastcalls($data=''),
			 'trackd'=>$this->reportmodel->trackd(),
			 'trackw'=>$this->reportmodel->trackw(),
			 'trackm'=>$this->reportmodel->trackm(),
			 'mcubexd'=>$this->reportmodel->mcubexd(),
			 'mcubexw'=>$this->reportmodel->mcubexw(),
			 'mcubexm'=>$this->reportmodel->mcubexm(),
			 'ivrsd'=>$this->reportmodel->ivrsd(),
			 'ivrsw'=>$this->reportmodel->ivrsw(),
			 'ivrsm'=>$this->reportmodel->ivrsm(),
			 'leadd'=>$this->reportmodel->leadd(),
			 'leadw'=>$this->reportmodel->leadw(),
			 'leadm'=>$this->reportmodel->leadm(),
			 'supportd'=>$this->reportmodel->supportd(),
			 'supportw'=>$this->reportmodel->supportw(),
			 'supportm'=>$this->reportmodel->supportm(),
			 'outboundd'=>$this->reportmodel->outboundd(),
			 'outboundw'=>$this->reportmodel->outboundw(),
			 'outboundm'=>$this->reportmodel->outboundm(),
			 'mtrackd'=>$this->reportmodel->mtrackd(),
			 'mtrackw'=>$this->reportmodel->mtrackw(),
			 'mtrackm'=>$this->reportmodel->mtrackm(),
		);
		echo json_encode($data);
	}
	function index(){
		$data = array();
		$this->sysconfmodel->viewLayout('dashboard',$data);
		
	}
	function feature_access(){
		$show=0;
		$data1=array();
		$checklist=$this->systemmodel->checked_featuremanage();
		if(in_array(1,$checklist))	$data1['call']='1';
		if(in_array(2,$checklist))	$data1['ivrs']='1';
		if(in_array(8,$checklist))	$data1['pbx']='1';
		if(in_array(13,$checklist))$data1['lead']='1';
		if(in_array(14,$checklist))$data1['support']='1';
		if(in_array(15,$checklist))$data1['mtracker']='1';
		
		return $data1;
	}
	function lastcallsinfo(){
	    $gettimelimit = $this->gettimelimit;
		$data = array('lastcalls'=>$this->reportmodel->call_last_calls($gettimelimit));
		echo json_encode($data);
	}
	function followupsinfo(){
	    $gettimelimit = $this->gettimelimit;
		$data = array('followups'=>$this->reportmodel->call_followUps($gettimelimit));
		echo json_encode($data);
	}
	function groupwisecalls(){
	    $gettimelimit = $this->gettimelimit;
		$data = array('total_calls'=>$this->reportmodel->total_calls($gettimelimit),
					  'groupwise_calls'=>$this->reportmodel->groupwise_todaycall($gettimelimit));
		echo json_encode($data);
	}
	function empwisecalls(){   
	    $gettimelimit = $this->gettimelimit;
		$data = array( 'empwise_calls'=>$this->reportmodel->empgroupwise_todaycalls($gettimelimit));
		echo json_encode($data);
	}
	function allcallsinfo(){
	    $gettimelimit = $this->gettimelimit;
		$data = array('qualify_calls'=>$this->reportmodel->call_types('q','0',$gettimelimit),
			 'unqualify_calls'=>$this->reportmodel->call_types('u','0',$gettimelimit),
			 'positive_calls'=>$this->reportmodel->call_types('p','0',$gettimelimit),
			 'negative_calls'=>$this->reportmodel->call_types('n','0',$gettimelimit),
			 'missed_calls'=>$this->reportmodel->call_types('m','0',$gettimelimit),
			 'attend_calls'=>$this->reportmodel->call_types('at','0',$gettimelimit),
			 'qualify_calls1'=>$this->reportmodel->call_types('q','1',$gettimelimit),
			 'unqualify_calls1'=>$this->reportmodel->call_types('u','1',$gettimelimit),
			 'positive_calls1'=>$this->reportmodel->call_types('p','1',$gettimelimit),
			 'negative_calls1'=>$this->reportmodel->call_types('n','1',$gettimelimit),
			 'missed_calls1'=>$this->reportmodel->call_types('m','1',$gettimelimit),
			 'missed_calls2'=>$this->reportmodel->call_types('m','0',$gettimelimit),
			 'attend_calls1'=>$this->reportmodel->call_types('at','1',$gettimelimit),
			 'attend_calls2'=>$this->reportmodel->call_types('at','0',$gettimelimit),
			 'duration'=>$this->reportmodel->call_types('du','0',$gettimelimit),
			 'total_calls'=>$this->reportmodel->call_types('t','0',$gettimelimit),
			);
			
	    $data['total_per'] = ($data['total_calls']!= '0')?round(($data['total_calls']*100)/$data['total_calls'],2).'%':0;
	    $data['missed_per'] = ($data['total_calls']!= '0')?round(($data['missed_calls']*100)/$data['total_calls'],2).'%':0;
	    $data['attended_per'] = ($data['total_calls']!= '0')?round(($data['attend_calls']*100)/$data['total_calls'],2).'%':0;
	    $data['duration_per'] = '';
       if($gettimelimit == 1){
           $data['missed_avg']   = ($data['missed_calls'])?$data['missed_calls']:0;
		   $data['attended_avg'] = ($data['attend_calls'])?$data['attend_calls']:0;
		   $data['total_avg']    = ($data['total_calls'])?$data['total_calls']:0;
		   $data['duration_avg'] = ($data['duration'])?$data['duration']:0;
		   $data['duration'] = ($data['duration'])?$data['duration']:0;
	   }elseif($gettimelimit == 2){
		   $data['missed_avg']   = round(($data['missed_calls']/7),2);
		   $data['attended_avg'] = round(($data['attend_calls']/7),2);
		   $data['total_avg']    = round(($data['total_calls']/7),2);
		   $data['duration_avg'] = round(($data['duration']/7),2);
		   $data['duration'] = ($data['duration'])?$data['duration']:0;
	   }elseif($gettimelimit == 3){
		   $data['missed_avg']   = round(($data['missed_calls']/30),2);
		   $data['attended_avg'] = round(($data['attend_calls']/30),2);
		   $data['total_avg']    = round(($data['total_calls']/30),2);
		   $data['duration_avg'] = round(($data['duration']/30),2);
		   $data['duration'] = ($data['duration'])?$data['duration']:0;
	   }
		echo json_encode($data);
	}
	/*
	 * 
	 * name: calltrackdashboard
	 * @param
	 * @return calltrack dashboard details
	 * 
	 */
	function calltrackdashboard(){
		$data = array();
	    $gettimelimit = $this->gettimelimit;
		$this->session->unset_userdata('search');
		$data['gettimelimit'] = $gettimelimit;
		$data['groupname'] = $this->reportmodel->recent_calls($type='',$gettimelimit);
		$data['groupwise_qualifedcalls'] = $this->reportmodel->for_pieinfo('q',$gettimelimit);
		$data['groupwise_missedcalls'] = $this->reportmodel->for_pieinfo('m',$gettimelimit);
		$data['groups']=$this->reportmodel->groupnames($type='',$gettimelimit);
		$data['callbyemployee']=$this->reportmodel->callbyemployee($type='',$gettimelimit);
		$data['callbyregion']=$this->reportmodel->callbyregion($type='',$gettimelimit);
	    $data['callbytime']=$this->reportmodel->callbytime($type='',$gettimelimit);
	    $data['callbyweek']=$this->reportmodel->callbyweek($type='',$gettimelimit);
		$this->sysconfmodel->viewLayout('calltrackdsboard',$data);
	}
	/*
	 * 
	 * name: ivrsdashboard
	 * @param
	 * @return ivrs dashboard details
	 * 
	 */
	function ivrsCalls(){
	    $gettimelimit = $this->gettimelimit;
		$data = array('ivrs_last_calls'=>$this->reportmodel->ivrs_last_calls($gettimelimit));
		echo json_encode($data);
	}
	function ivrsTotalCalls(){
		$gettimelimit = $this->gettimelimit;
		$data = array('ivrs_total_calls'=>$this->reportmodel->ivrs_total_calls($gettimelimit),
	    'ivrs_groupwise_todaycall'=>$this->reportmodel->ivrs_groupwise_todaycall($gettimelimit));
		echo json_encode($data);
	}
	function ivrsfollowups(){
	    $gettimelimit = $this->gettimelimit;
		$data = array( 'ivrs_followUps'=>$this->reportmodel->ivrs_followUps($gettimelimit));
		echo json_encode($data);
	}
   function ivrsLanding(){
		$data = array('ivrs_Lastcalls'=>$this->reportmodel->ivrs_Lastcalls());
		echo json_encode($data);
	}
	function ivrsdashboard(){
        $data = array();
        $gettimelimit = $this->gettimelimit;
        $data['gettimelimit'] = $gettimelimit;
       	$this->session->unset_userdata('search');
		$data['ivrs_recent_calls'] = $this->reportmodel->ivrs_recent_calls($gettimelimit);
		$data['ivrs_groupnames'] =$this->reportmodel->ivrs_groupnames();
		$data['ivrs_callbytime'] =$this->reportmodel->ivrs_callbytime($gettimelimit);
		$data['ivrs_callbyweek'] =$this->reportmodel->ivrs_callbyweek($gettimelimit);
		$this->sysconfmodel->viewLayout('ivrsdashboard',$data);
	}
	/*
	 * 
	 * name: pbxdashboard
	 * @param
	 * @return pbx dashboard details
	 * 
	 */
	
	function pbxCalls(){
	    $gettimelimit = $this->gettimelimit;
		$data = array('pbx_last_calls'=>$this->reportmodel->pbx_last_calls($gettimelimit));
		echo json_encode($data);
	}
	
	function pbxTotalCalls(){
	    $gettimelimit = $this->gettimelimit;
		$data = array('pbx_groupwise_todaycall'=>$this->reportmodel->pbx_groupwise_todaycall($gettimelimit),
	    'pbx_total_calls'=>$this->reportmodel->pbx_total_calls($gettimelimit));
		echo json_encode($data);
	}
	function pbxfollowups(){
	    $gettimelimit = $this->gettimelimit;
		$data = array( 'pbx_followUps'=>$this->reportmodel->pbx_followUps($gettimelimit));
		echo json_encode($data);
	}
	function pbxLanding(){
		$data = array('pbx_Lastcalls'=>$this->reportmodel->pbx_Lastcalls());
		echo json_encode($data);
	}
	function pbxdashboard(){
		$data = array();
		$this->session->unset_userdata('search');
	    $gettimelimit = $this->gettimelimit;
        $data['gettimelimit'] = $gettimelimit;
		$data['pbx_recent_calls'] = $this->reportmodel->pbx_recent_calls($gettimelimit);	
		$data['pbx_groupnames'] =$this->reportmodel->pbx_groupnames();
		$data['pbx_callbytime'] =$this->reportmodel->pbx_callbytime($gettimelimit);
		$data['pbx_callbyweek'] =$this->reportmodel->pbx_callbyweek($gettimelimit);
		$this->sysconfmodel->viewLayout('pbxdashboard',$data);
	}
	/*
	 * 
	 * name: leaddashboard
	 * @param
	 * @return lead dashboard details
	 * 
	 */
	function Leads_recent(){
	    $gettimelimit = $this->gettimelimit;
		$data = array('lead_empgroupwise_todaycalls'=>$this->reportmodel->lead_empgroupwise_todaycalls($gettimelimit));
		echo json_encode($data);
	}
	function lead_followUps(){
	    $gettimelimit = $this->gettimelimit;
		$data = array('lead_followUps'=>$this->reportmodel->leads_followUps($gettimelimit));
		echo json_encode($data);
	}
	function leads_assigned(){
	    $gettimelimit = $this->gettimelimit;
		$data = array('leads_assigned_detail'=>$this->reportmodel->leads_assigned_detail($gettimelimit));
		echo json_encode($data);
	}
	function leadstatus(){
	    $gettimelimit = $this->gettimelimit;
		$data = array('open_lead'=>$this->reportmodel->lead_types('o',$gettimelimit),
					    'pending_lead'=>$this->reportmodel->lead_types('p',$gettimelimit),
					    'closed_won'=>$this->reportmodel->lead_types('r',$gettimelimit),
					    'closed_lost'=>$this->reportmodel->lead_types('c',$gettimelimit));
		echo json_encode($data);
	}
	function leaddashboard(){
	    $gettimelimit = $this->gettimelimit;
		$this->session->unset_userdata('search');
		$lead=array(
		     'lead_recent_calls' => $this->reportmodel->lead_groupwiseleads($type="",$gettimelimit),
		     'gettimelimit' =>$this->sysconfmodel->getlimit(),
			 'feature'=>$this->feature_access());
		$this->sysconfmodel->viewLayout('leaddashboard',$lead);
	}
	/*
	 * 
	 * name: supportdashboard
	 * @param
	 * @return support dashboard details
	 * 
	 */
    function support_recent(){
	    $gettimelimit = $this->gettimelimit;
		$data = array('support_empgroupwise_todaycalls'=>$this->reportmodel->support_empgroupwise_todaycalls($gettimelimit));
		echo json_encode($data);
	}
	function support_followUps(){
	    $gettimelimit = $this->gettimelimit;
		$data = array('support_followUps'=>$this->reportmodel->support_followUps($gettimelimit));
		echo json_encode($data);
	}
	function support_assigned(){
		$gettimelimit = $this->gettimelimit;
		$data = array('supports_assigned_detail'=>$this->reportmodel->supports_assigned_detail($gettimelimit));
		echo json_encode($data);
	}
	function supportstatus(){
		$gettimelimit = $this->gettimelimit;
		$data = array(	 'open_tickets'=>$this->reportmodel->support_types('o',$gettimelimit),
			             'pending_tickets'=>$this->reportmodel->support_types('p',$gettimelimit),
			             'resolved_tickets'=>$this->reportmodel->support_types('r',$gettimelimit),
			             'closed_tickets'=>$this->reportmodel->support_types('c',$gettimelimit));
		echo json_encode($data);
	}
	function supportdashboard(){
		$this->session->unset_userdata('search');
	    $gettimelimit = $this->gettimelimit;
		$support=array(
	         'gettimelimit' =>$this->sysconfmodel->getlimit(),
		     'sup_recent_calls'=>$this->reportmodel->support_groupwisesupports($gettimelimit),
			 'support_empgroupwise_todaycalls'=>$this->reportmodel->support_empgroupwise_todaycalls($gettimelimit),
			 'feature'=>$this->feature_access());
		$this->sysconfmodel->viewLayout('supportdashboard',$support);
	}
	/*
	 * 
	 * name: Click2Connect Dashboard
	 * @param
	 * @return Click2Connect dashboard details
	 * 
	 */
		function c2cCalls(){
		    $gettimelimit = $this->gettimelimit;
			$data = array(
			'gettimelimit' =>$this->sysconfmodel->getlimit(),
			'c2c_last_calls'=>$this->reportmodel->c2c_last_calls($gettimelimit));
			echo json_encode($data);
		}
		function c2cdashboard(){
			$data1 = array();
			$this->session->unset_userdata('search');
		    $gettimelimit = $this->gettimelimit;
            $data1['gettimelimit'] = $gettimelimit;
			$this->sysconfmodel->viewLayout('c2cdashboard',$data1);
		}
		function c2callcalls(){
			$gettimelimit = $this->gettimelimit;
			$data = array(
			     'gettimelimit' =>$this->sysconfmodel->getlimit(),
				 'completed_calls'=>$this->reportmodel->c2c_calltypes('a',$c='',$gettimelimit),
				 'other_calls'=>$this->reportmodel->c2c_calltypes('all',$c='',$gettimelimit),
				);
			echo json_encode($data);
		}

	
	function priupdate(){
		$groups=$this->reportmodel->group_callupdates();
		$max = 0;
		include_once( 'system/application/views/open-flash-chart.php' );
		$g = new graph();
		foreach($groups as $group){
			$g->line_hollow( 2, 4, $this->colormodel->getColor(), substr($group['groupname'],0,4), 10 );
			$data = array(
				$group['day0']
				,$group['day1']
				,$group['day2']
				,$group['day3']
				,$group['day4']
				,$group['day5']
				,$group['day6']);
			$max = ($max < max($data)) ? max($data) : $max;
			$g->set_data($data);	
		}
		$g->set_x_labels( array(
				
				date('d M')//.$this->lang->line("cal_".strtolower(date('M')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-1),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-2),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-3),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-4),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-5),date('y')))
				,date('d M', mktime(0,0,0,date('m'),(date('d')-6),date('y')))
			 ),7 );
		$g->set_y_max( $max );
		$g->y_label_steps( 10 );
		$g->set_tool_tip( '#key#:#val#' );
		$g->title( 'Group Wise Calls', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}


	function cbytime(){
		$res=$this->reportmodel->callbyregion();
	}

	function weekpopup(){
		$data['groups']=$this->reportmodel->groupnames($type='');
	    $data['module']['title'] = "Weekly Calls For Last 7 Days";
	    $this->load->view('graphpopup',$data);
	}
	function groupwise(){
	    $gettimelimit = $this->gettimelimit;
	    $data['groupname']=$this->reportmodel->recent_calls($type='',$gettimelimit);
	    if($gettimelimit == 3){ 
		   $data['module']['title'] = "Group Wise calls For Last 30 Days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Group Wise calls For Last 7 Days";
	    }else{
		   $data['module']['title'] = "Today Group Wise calls";
	    }
	    $this->load->view('groupwise',$data);
	}
	function missedpop(){
		$gettimelimit = $this->gettimelimit;
        $data['groupwise_missedcalls'] = $this->reportmodel->for_pieinfo('m',$gettimelimit);
         if($gettimelimit == 3){ 
		   $data['module']['title'] = "Missed Calls By Group For Last 30 Days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Missed Calls By Group For Last 7 Days";
	    }else{
		   $data['module']['title'] = "Today Missed Calls By Group";
	    }
	    $this->load->view('missedpopup',$data);
	}
	function callbyregionpop(){
	    $gettimelimit = $this->gettimelimit;
	    $data['callbyregion']=$this->reportmodel->callbyregion($type='',$gettimelimit);
	    if($gettimelimit == 3){ 
		   $data['module']['title'] = "Calls By Region for Last 30 days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Calls By Region for Last 7 days";
	    }else{
		   $data['module']['title'] = "Today Calls By Region";
	    }
	    $this->load->view('callbyregionpop',$data);
	}
	function callbyemppop(){
	    $gettimelimit = $this->gettimelimit;
	    $data['callbyemployee']=$this->reportmodel->callbyemployee($type='', $gettimelimit );
	    if($gettimelimit == 3){ 
		   $data['module']['title'] = "Calls By Employee for Last 30 days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Calls By Employee for Last 7 days";
	    }else{
		   $data['module']['title'] = "Today Calls By Employee";
	    }
	    $this->load->view('callbyemppop',$data);
	}
	function groupwise_ivrs(){
		$gettimelimit = $this->gettimelimit;
        $data['ivrs_recent_calls'] = $this->reportmodel->ivrs_recent_calls($gettimelimit);	
	    if($gettimelimit == 3){ 
		   $data['module']['title'] = "Group Wise calls For Last 30 Days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Group Wise calls For Last 7 Days";
	    }else{
		   $data['module']['title'] = "Today Group Wise calls";
	    }
	    $this->load->view('ivrs_groupwise',$data);
	}
	function groupwise_pbx(){
	    $gettimelimit = $this->gettimelimit;
        $data['pbx_recent_calls'] = $this->reportmodel->pbx_recent_calls($gettimelimit);	
	    if($gettimelimit == 3){ 
		   $data['module']['title'] = "Group Wise calls For Last 30 Days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Group Wise calls For Last 7 Days";
	    }else{
		   $data['module']['title'] = "Today Group Wise calls";
	    }
	    $this->load->view('pbx_groupwise',$data);
	}
	function groupwise_lead(){
	    $gettimelimit = $this->gettimelimit;
        $data['lead_recent_calls'] = $this->reportmodel->lead_groupwiseleads($type="",$gettimelimit);
	    if($gettimelimit == 3){ 
		   $data['module']['title'] = "Group Wise Leads For Last 30 Days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Group Wise Leads For Last 7 Days";
	    }else{
		   $data['module']['title'] = "Today Group Wise Leads";
	    }
	    $this->load->view('lead_groupwise',$data);
	}
	function groupwise_support(){
	    $gettimelimit = $this->gettimelimit;
        $data['sup_recent_calls'] = $this->reportmodel->support_groupwisesupports($gettimelimit);
        if($gettimelimit == 3){ 
		   $data['module']['title'] = "Group Wise Tickets For Last 30 Days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Group Wise Tickets For Last 7 Days";
	    }else{
		   $data['module']['title'] = "Today Group Wise Tickets";
	    }
	    $this->load->view('support_groupwise',$data);
	}
	function weekpopup_ivrs(){
		$data['ivrs_groupnames'] =$this->reportmodel->ivrs_groupnames();
	    $data['module']['title'] = "Weekly Calls For Last 7 Days";
	    $this->load->view('graphpopup_ivrs',$data);
	}
	function weekpopup_pbx(){
	    $data['pbx_groupnames'] =$this->reportmodel->pbx_groupnames();
	    $data['module']['title'] = "Weekly Calls For Last 7 Days";
	    $this->load->view('graphpopup_pbx',$data);
	}   
	function callbytime(){
	    $gettimelimit = $this->gettimelimit;
         if($gettimelimit == 3){ 
		   $data['module']['title'] = "Calls By Time for Last 30 days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Calls By Time for Last 7 days";
	    }else{
		   $data['module']['title'] = "Today Calls By Time";
	    }
	   $data['callbytime']=$this->reportmodel->callbytime($type='',$gettimelimit);
	   $this->load->view('CallTimepopup',$data);
	}		
	function callbytime_ivrs(){
	   $gettimelimit = $this->gettimelimit;
	    if($gettimelimit == 3){ 
		   $data['module']['title'] = "Calls By Time for Last 30 days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Calls By Time for Last 7 days";
	    }else{
		   $data['module']['title'] = "Today Calls By Time";
	    }
	   $data['callbytime_ivrs']=$this->reportmodel->ivrs_callbytime($gettimelimit);
	   $this->load->view('calltimepopup_ivrs',$data);
	}
	function callbytime_pbx(){
	   $gettimelimit = $this->gettimelimit;
	   $data['pbx_callbytime'] =$this->reportmodel->pbx_callbytime($gettimelimit);
	    if($gettimelimit == 3){ 
		   $data['module']['title'] = "Calls By Time for Last 30 days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Calls By Time for Last 7 days";
	    }else{
		   $data['module']['title'] = "Today Calls By Time";
	    }
	   $this->load->view('calltimepopup_pbx',$data);
	}
	function callbyweek(){
	   $gettimelimit = $this->gettimelimit;
	   $data['callbyweek']=$this->reportmodel->callbyweek($type='',$gettimelimit);
	    if($gettimelimit == 3){ 
		   $data['module']['title'] = "Calls By Day for Last 30 days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Calls By Day for Last 7 days";
	    }else{
		   $data['module']['title'] = "Today Calls";
	    }
	   $this->load->view('Callweekpopup',$data);
	}
	function callbyweek_ivrs(){  
	   $gettimelimit = $this->gettimelimit;	
	   $data['callbyweek_ivrs']=$this->reportmodel->ivrs_callbyweek($gettimelimit);
	     if($gettimelimit == 3){ 
		   $data['module']['title'] = "Calls By Day for Last 30 days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Calls By Day for Last 7 days";
	    }else{
		   $data['module']['title'] = "Today Calls";
	    }
	   $this->load->view('callweekpopup_ivrs',$data);
	}
	function callbyweek_pbx(){  
	   $gettimelimit = $this->gettimelimit;		
       $data['pbx_callbyweek'] =$this->reportmodel->pbx_callbyweek($gettimelimit);
	   if($gettimelimit == 3){ 
		   $data['module']['title'] = "Calls By Day for Last 30 days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Calls By Day for Last 7 days";
	    }else{
		   $data['module']['title'] = "Today Calls";
	    }
	   $this->load->view('callweekpopup_pbx',$data);
	}
	function missedmtpop(){
	    $gettimelimit = $this->gettimelimit;
        $data['empwise_missed'] = $this->reportmodel->empwise_missed($gettimelimit);
        if($gettimelimit == 3){ 
		   $data['module']['title'] = "Missed Calls By Emp for Last 30 days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Missed Calls By Emp for Last 7 days";
	    }else{
		   $data['module']['title'] = "Today Missed Calls By Employee";
	    }
	    $this->load->view('missedmtpopup',$data);
	}
	function outboundpop(){
		$gettimelimit = $this->gettimelimit;
        $data['empwise_outbound'] = $this->reportmodel->empwise_outbound($gettimelimit);
        if($gettimelimit == 3){ 
		   $data['module']['title'] = "Outbound Calls By Employee for Last 30 days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Outbound Calls By Employee for Last 7 days";
	    }else{
		   $data['module']['title'] = "Today Outbound Calls By Employee";
	    }
	    $this->load->view('outboundmt_popup',$data);
	}
	function inboundpop(){
		$gettimelimit = $this->gettimelimit;
		if($gettimelimit == 3){ 
		   $data['module']['title'] = "Inbound Calls By Employee for Last 30 days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Inbound Calls By Employee for Last 7 days";
	    }else{
		   $data['module']['title'] = "Today Inbound Calls By Employee";
	    }
        $data['empwise_inbound'] = $this->reportmodel->empwise_inbound($gettimelimit);
	    $this->load->view('inboundmt_popup',$data);
	}
	function totalmtpop(){
		$gettimelimit = $this->gettimelimit;
        $data['empwise_total'] = $this->reportmodel->empwise_total($gettimelimit);
        if($gettimelimit == 3){ 
		   $data['module']['title'] = "Total Calls By Employee for Last 30 days";
	    }elseif($gettimelimit == 2){ 
		   $data['module']['title'] = "Total Calls By Employee for Last 7 days";
	    }else{
		   $data['module']['title'] = "Today Total Calls By Employee";
	    }
	    $this->load->view('empwise_total',$data);
	}
	function callsbyemotion(){
		$cbid=$this->session->userdata('cbid');
		$bid=(isset($cbid) && $cbid!="")?$cbid:$this->session->userdata('bid');		
		$recent_calls = $this->reportmodel->emotionCalls($bid);
		$data['values'] = array();
		$data['colours'] = array();
		$data['pie_labels'] = array();
		for($i=0;$i<sizeof($recent_calls);$i++){
			if($recent_calls[$i]['count']>'0'){
				array_push($data['values'],$recent_calls[$i]['count']);
				array_push($data['pie_labels'],substr($recent_calls[$i]['emotion'],0,4));
				array_push($data['colours'],$this->colormodel->getColor());
			}
		}
		include_once( 'system/application/views/open-flash-chart.php' );
		$g = new graph();
		$g->pie(60,'#505050','{font-size: 12px; color: #404040;');
		$g->pie_values( $data['values'], $data['pie_labels']);
		$g->pie_slice_colours($data['colours']);

		$g->set_tool_tip( '#x_label#<br>#val# Calls' );
		$g->title( 'Calls By Emotions', '{font-size:18px; color: #d01f3c}' );	
		echo $g->render();
	}
/*
	 * 
	 * name: Mtrackerdashboard
	 * @param
	 * @return Mtrackerdashboard details
	 * 
	 */
	function mtrackerdashboard(){
		$this->session->unset_userdata('search');
		$gettimelimit = $this->gettimelimit;
		$mtrack=array(
	         'gettimelimit' =>$this->sysconfmodel->getlimit(),
			 'empwise_missed'=>$this->reportmodel->empwise_missed($gettimelimit),
			 'empwise_outbound' => $this->reportmodel->empwise_outbound($gettimelimit),
			 'empwise_inbound' => $this->reportmodel->empwise_inbound($gettimelimit),
			 'empwise_total' => $this->reportmodel->empwise_total($gettimelimit));
			// echo "<pre>"; print_r($mtrack); exit;
		$this->sysconfmodel->viewLayout('mtrackerdashboard',$mtrack);
	}
	function mtrack_recent_calls(){
		$gettimelimit = $this->gettimelimit;
	    $data = array('mtrack_recent_calls'=>$this->reportmodel->mtrack_recent_calls($gettimelimit));
		echo json_encode($data);
	}
	function empwise_calls(){
		$gettimelimit = $this->gettimelimit;
	    $data = array('empwise_calls'=>$this->reportmodel->empgroupwise_mtrack($gettimelimit));
		echo json_encode($data);
	}
	function timlim_set($val){
		$data = $this->reportmodel->dash_limit_set($val);
	}
}
?>
