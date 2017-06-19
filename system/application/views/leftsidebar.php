<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$empDetail = $this->configmodel->getDetail('2',$this->session->userdata('eid'),'',$this->session->userdata('bid'));
$empName = $empDetail['empname'];
$year = date("Y");
$month = date("m");
?>
<!-- BEGIN TOP MENU -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
        <span class="sr-only">Toggle navigation
        </span>
        <span class="icon-bar">
        </span>
        <span class="icon-bar">
        </span>
        <span class="icon-bar">
        </span>
      </button>
      <a id="menu-medium" class="sidebar-toggle tooltips">
        <i class="fa fa-outdent">
        </i>
      </a>
      <a class="navbar-brand" href="Home">
        <img src="system/application/img/mcube-logo.png" alt="logo">
      </a>
    </div>
    <div class="navbar-center">
      <?php echo $html['title'];?> 
    </div>
    <div  class="navbar-header navbar-collapse collapse">
      <ul class="nav navbar-nav header-menu pull-right">
        <li id="notifications-header" class="dropdown">
          <?php echo '<a href="Report/CallbackUser" data-toggle="modal" data-target="#modal-responsive"  class="btn-danger"><span class="fa fa-headphones" title="Click To Connect" style="color:#00a2d9;font-size:16px;font-weight:bold;" >&nbsp;CallBack Request</span></a>'; ?>
        </li>
      </ul>
    </div>
    <div class="navbar-collapse collapse">
      <!-- BEGIN TOP NAVIGATION MENU -->
      <ul class="nav navbar-nav pull-right header-menu">
        <!-- BEGIN NOTIFICATION DROPDOWN -->
     <?php if($roleDetail['role']['admin']=='1'){?>
        <?php if($recent_delete['count']!=0){ ?>
        <li class="dropdown notify_head" id="notifications-header">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <i class="glyph-icon flaticon-notifications">
            </i>
            <span class="badge badge-danger badge-header">
              <?=$recent_delete['count'];?>
            </span>
          </a>
          <?php if($recent_delete['count']!=0){?>
          <ul class="dropdown-menu">
            <li class="dropdown-header clearfix">
              <p class="pull-left">Recent Delete Notification
              </p>
            </li>
            <li>
              <ul class="dropdown-menu-list withScroll" data-height="220">
                <?	foreach($recent_delete['data'] as $rec){
						if($rec['module_name'] =='Report'){
						$str = $rec['action'];
						preg_match_all('!\d+!', $str, $matches);
						$first = strtok($str, '/');
                        $last = array_pop(explode('/', $str));
           				if($matches>0){
						$r = $first.$last;
						}
						}elseif($rec['module_name'] == 'Group'){
						$r = "Group ".$rec['action']; 
						}else{
						$r = $rec['action'];
						}//exit;?>
                <li>
                  <i class="fa fa-star p-r-10 f-18 c-orange">
                  </i>
                  <?=$r;?>
                  <span class="dropdown-time">
                  </span>
                </li>
                <? }  ?>
              </ul>
            </li>
          </ul>
          <? }?>
        </li>
        <?php }
        } ?>
        <li id="notifications-header" class="dropdown">
          <?php echo '<a  style="color:#00a2d9;font-size:16px;font-weight:bold;" href="TrackReport/live" class="livecals btn-danger" >Live Calls - ' . $livecalls['count'].'</a>'; ?>
        </li>
        <li id="notifications-header" class="dropdown">
          <a href="Report/callMe/" class="btn-danger show-dialler" data-toggle="modal" data-target="#modal-responsive">
            <span class="fa fa-phone" title="Click To Connect" style="color:#00a2d9;font-size:14px;font-weight:bold;" >&nbsp;Dialer
            </span>
          </a>
        </a>
      </li>
    <li>&nbsp;
    </li>
    <li>&nbsp;
    </li>
    <!-- BEGIN USER DROPDOWN -->
    <li class="dropdown" id="user-header">
      <a href="#" class="dropdown-toggle c-white" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <span class="username">
          <?=ucfirst($empName)?>
        </span>
        <i class="fa fa-angle-down p-r-10">
        </i>
      </a>
      <ul class="dropdown-menu">
        <li>
          <a href="user/changepassword">
            <i class="glyph-icon flaticon-settings21">
            </i> Change Password
          </a>
        </li>
        <li>
          <?php 
if($selfdis == 0)
echo '<li><a href="user/selfdisable/'.$selfdis.'" title="Offline"><i class="glyphicon1 glyphicon-eye-open"></i> Offline</a></li>';
else
echo '<li><a href="user/selfdisable/'.$selfdis.'" title="Online"><i class="glyphicon1 glyphicon-eye-close"></i> Online</a></li>';
?>
        </li>
        <li>
          <a href="javascript:;" class="toggle_fullscreen">
            <i class="glyph-icon flaticon-fullscreen3">
            </i> Full Screen
          </a>
        </li>
        <li>
          <a href="user/logout">
            <i class="fa fa-power-off">
            </i> Logout
          </a>
        </li>
      </ul>
    </li>
    <!-- END USER DROPDOWN -->
    </ul>
  <!-- END TOP NAVIGATION MENU -->
  <!--
<h4><font color="#fff" style="font-weight:bold;" size="+2"> <marquee  onmouseover="this.stop();" onmouseout="this.start();">
Do not miss a single enquiry, 
Now you can track all your Incoming SMS,
Reach out your customers using our "Click to call",
You can also manage mobile calls using MTracker (Android App). 
For enquiry please call / write us.  
</marquee></font></h4>
-->
  </div>
</div>
</nav>
<!-- END TOP MENU -->
<!-- BEGIN WRAPPER -->
<div id="wrapper">
  <!-- BEGIN MAIN SIDEBAR -->
  <?php
$menubar = $this->lang->language['menu'];
$URI = $this->uri->segments[1];
$key = array_search($URI, $menubar);
for($k=0;$k<count($menubar);$k++){
if($k == $key){
$cls1[$k] = "current active hasSub";
$cls2[$k] = "current";
}else{
$cls1[$k] = '';
$cls2[$k] = '';
}
}
?>
  <nav id="sidebar">
    <div id="main-menu">
      <ul class="sidebar-nav">
        <li class="<?=$cls1[0].$cls1[1].$cls1[84].$cls1[85].$cls1[86].$cls1[87].$cls1[88].$cls1[101].$cls1[102];?>">
          <a href="#" title="Dashboard">
            <i class="fa fa-home">
            </i>
            <span class="sidebar-text">Home
            </span>
            <span class="fa arrow">
            </span>
          </a>
          <ul class="submenu collapse" >
	
            <!--
<li class="">
<a href="<?php //echo site_url($menubar[0]);?>"><span class="sidebar-text"><b><?php echo "Dashboard";?></b></span><span class="fa arrow"></span></a>
<ul class="menu2 submenu collapse">
-->
            <li class="<?=$cls2[0];?>">
              <a href="<?php echo site_url($menubar[0]);?>">
                <span class="sidebar-text">
                  <?php echo "Dashboard"; ?>
                </span>
              </a>
            </li>
            <?php if(isset($feature['call']) && $feature['call']=="1"){?>
            <li class="<?=$cls2[84];?>">
              <a href="<?php echo site_url($menubar[84]);?>">
                <span class="sidebar-text">
                  <?php echo " MCube Track"; ?>
                </span>
              </a>
            </li>
            <?php } ?>
            <?php if(isset($feature['ivrs']) && $feature['ivrs']=="1"){?>
            <li class="<?=$cls2[85];?>">
              <a href="<?php echo site_url($menubar[85]);?>">
                <span class="sidebar-text">
                  <?php echo "MCube IVRS"; ?>
                </span>
              </a>
            </li>
            <?php } ?>
            <?php if(isset($feature['pbx']) && $feature['pbx']=="1" && $roleDetail['role']['admin']=='1'){?>
            <li class="<?=$cls2[86];?>">
              <a href="<?php echo site_url($menubar[86]);?>">
                <span class="sidebar-text">
                  <?php echo "MCube X"; ?>
                </span>
              </a>
            </li>
            <?php } ?>
            <?php if(isset($feature['mtracker']) && $feature['mtracker']=="1"){?>
            <li class="<?=$cls2[102];?>">
              <a href="<?php echo site_url($menubar[102]);?>">
                <span class="sidebar-text">
                  <?php echo "M Tracker"; ?>
                </span>
              </a>
            </li>
            <?php } ?>

            <?php if(isset($feature['lead']) && $feature['lead']=="1"){?>
            <li class="<?=$cls2[87];?>">
              <a href="<?php echo site_url($menubar[87]);?>">
                <span class="sidebar-text">
                  <?php echo "Leads"; ?>
                </span>
              </a>
            </li>
            <?php } ?>
            <?php if(isset($feature['support']) && $feature['support']=="1"){?>
            <li class="<?=$cls2[88];?>">
              <a href="<?php echo site_url($menubar[88]);?>">
                <span class="sidebar-text">
                  <?php echo "Support"; ?>
                </span>
              </a>
            </li>
            <?php }?>
            <?php //if(isset($feature['c2c']) && $feature['c2c']=="1"){?>
            <li class="<?=$cls2[101];?>">
              <a href="<?php echo site_url($menubar[101]);?>">
                <span class="sidebar-text">
                  <?php echo "Outbound"; ?>
                </span>
              </a>
            </li>
            <?php //}?>
           
            
            <!--
</ul>
</li>
-->
            <li class="<?=$cls2[1];?>">
              <a href="<?php echo site_url($menubar[1]);?>">
                <span class="sidebar-text">
                  <?php echo $this->lang->line('blocknumbers');?>
                </span>
              </a>
            </li>
          </ul>
        </li>
        <li class="cls <?=$cls1[2].$cls1[3].$cls1[4].$cls1[5].$cls1[6].$cls1[7].$cls1[58].$cls1[59].$cls1[46].$cls1[65].$cls1[66].$cls1[67].$cls1[68].$cls1[76].$cls1[77].$cls1[78].$cls1[79].$cls1[80].$cls1[73];?>">
          <a href="#" title="Mcube Track">
            <i class="fa fa-group">
            </i>
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_calltrack');?>
            </span>
            <span class="fa arrow">
            </span>
          </a>
          <ul class="submenu collapse">
            <li>
              <a href="#">
                <span class="sidebar-text">
                  <b>
                    <?=$this->lang->line('label_group')?>
                  </b>
                </span>
                <span class="fa arrow">
                </span>
              </a>
              <ul class="menu2 submenu collapse">
                <li class="<?=$cls2[3];?>">
                  <a href="<?php echo site_url($menubar[3]);?>">
                    <span class="sidebar-text">
                      <?php echo $this->lang->line('label_groupadd');?>
                    </span>
                  </a>
                </li>
                <li class="<?=$cls2[2].$cls2[58].$cls2[59];?>">
                  <a href="<?php echo site_url($menubar[2]);?>/0">
                    <span class="sidebar-text">
                      <?php echo $this->lang->line('label_groupmanage');?>
                    </span>
                  </a>
                </li>
                <li class="<?=$cls2[5];?>">
                  <a href="<?php echo site_url($menubar[5]);?>/0">
                    <span class="sidebar-text">
                      <?php echo $this->lang->line('deletedgroup');?>
                    </span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                <span class="sidebar-text">
                  <b>Contacts
                  </b>
                </span>
                <span class="fa arrow">
                </span>
              </a>
              <ul class="menu2 submenu collapse">
                <li class="<?=$cls2[6];?>">
                  <a href="<?php echo site_url($menubar[6]);?>" />
                  <span class="sidebar-text">
                    <?php echo "Add Contact";?>
                  </span>
                </a>
            </li>
            <li class="<?=$cls2[7];?>">
              <a href="<?php echo site_url($menubar[7].'/0');?>"/>
              <span class="sidebar-text">
                <?php echo "Contacts List";?>
              </span>
            </a>
        </li>
      </ul>
      </li>
    <li>
      <a href="#">
        <span class="sidebar-text">
          <b>
            <?php echo "Reports";?>
          </b>
          <span class="fa arrow">
          </span>
          </a>
        <ul class="menu2 submenu collapse">
          <li class="<?=$cls2[46];?>">
            <a href="<?php echo site_url($menubar[46].'/all');?>">
              <span class="sidebar-text">
                <?php echo $this->lang->line('label_incoming');?>
              </span>
            </a>
          </li>
          <li class="<?=$cls2[66];?>">
            <a href="<?php echo site_url($menubar[66].'/all');?>">
              <span class="sidebar-text">
                <?php echo $this->lang->line('level_AttendCalls');?>
              </span>
            </a>
          </li>
          <li class="<?=$cls2[65];?>">
            <a href="<?php echo site_url($menubar[65].'/all');?>">
              <span class="sidebar-text">
                <?php echo $this->lang->line('label_incoming_missed');?>
              </span>
            </a>
          </li>
          <li class="<?=$cls2[67];?>">
            <a href="<?php echo site_url($menubar[67].'/all');?>">
              <span class="sidebar-text">
                <?php echo $this->lang->line('label_incoming_qualified');?>
              </span>
            </a>
          </li>
          <li class="<?=$cls2[68];?>">
            <a href="<?php echo site_url($menubar[68].'/all');?>">
              <span class="sidebar-text">
                <?php echo $this->lang->line('label_incoming_unqualified');?>
              </span>
            </a>
          </li>
          <li class="<?=$cls2[73];?>">
            <a href="<?php echo site_url($menubar[73]);?>">
              <span class="sidebar-text">
                <?php echo "Call Analytics";?>
              </span>
            </a>
          </li>
          <!--
<li class="<?php //echo $cls2[95];?>"><a href="<?php //echo site_url($menubar[95].'/all');?>"><span class="sidebar-text"><?php //echo "Positive Calls";?></span></a></li>
<li class="<?php //echo $cls2[96];?>"><a href="<?php //echo site_url($menubar[96].'/all');?>"><span class="sidebar-text"><?php //echo "Negative Calls";?></span></a></li>
-->
          <li class="<?=$cls2[80];?>">
            <a href="<?php echo site_url($menubar[80].'/0');?>">
              <span class="sidebar-text">
                <?php echo "Connect to Group";?>
              </span>
            </a>
          </li>
          <li class="<?=$cls2[77];?>">
            <a href="<?php echo site_url($menubar[77].'/0/0');?>">
              <span class="sidebar-text">
                <?php echo $this->lang->line('label_callarchive');?>
              </span>
            </a>
          </li>
          <?php if($this->session->userdata('roleid')==1){?>
          <li class="<?=$cls2[79];?>">
            <a href="<?php echo site_url($menubar[79].'/0');?>">
              <span class="sidebar-text">
                <?php echo "Deleted Calls";?>
              </span>
            </a>
          </li>
          <li class="<?=$cls2[78];?>">
            <a href="<?php echo site_url($menubar[78].'/0');?>">
              <span class="sidebar-text">
                <?php echo "Deleted Connect to Group";?>
              </span>
            </a>
          </li>
          <li class="<?=$cls2[76];?>">
            <a href="<?php echo site_url($menubar[76].'/0');?>">
              <span class="sidebar-text">Call Summary
              </span>
            </a>
          </li>
          <?php } ?>
        </ul>
        </li>
    </ul>
  </li>
<li class="cls <?=$cls1[8].$cls1[9].$cls1[10].$cls1[61].$cls1[94].$cls1[60]?>">
  <a href="#" title="MCube X">
    <i class="fa fa-asterisk">
    </i>
    <span class="sidebar-text">
      <?=$this->lang->line('label_pbx')?>
    </span>
    <span class="fa arrow">
    </span>
  </a>
  <ul class="submenu collapse">
    <li class="<?=$cls2[8];?>">
      <a href="<?=site_url($menubar[8].'/0')?>">
        <span class="sidebar-text">
          <?=$this->lang->line('label_pbxconfigure')?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[9].$cls1[61];?>">
      <a href="<?=site_url($menubar[9].'/0')?>">
        <span class="sidebar-text">
          <?=$this->lang->line('label_pbxlist')?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[10];?>">
      <a href="<?=site_url($menubar[10].'/0')?>">
        <span class="sidebar-text">
          <?=$this->lang->line('label_pbxdeleted')?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[60].$cls2[94];?>">
      <a href="<?php echo site_url($menubar[60].'/all/0');?>">
        <span class="sidebar-text">
          <?php echo "Reports";?>
        </span>
      </a>
    </li>
  </ul>
</li>
<li class="<?=$cls1[13].$cls1[14].$cls1[15].$cls1[16].$cls1[17].$cls1[62].$cls1[93].$cls1[63]?>">
  <a href="#" title="IVRS">
    <i class="fa fa-sitemap">
    </i>
    <span class="sidebar-text">
      <?php echo $this->lang->line('label_ivrs');?>
    </span>
    <span class="fa arrow">
    </span>
  </a>
  <ul class="submenu collapse">
    <li class="<?=$cls2[13];?>">
      <a href="<?=site_url($menubar[13])?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('label_ivrsconfig');?>
        </span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="sidebar-text">
          <b>
            <?php echo "IVRS Reference";?>
          </b>
        </span>
        <span class="fa arrow">
        </span>
      </a>
      <ul class="menu2 submenu collapse">
        <li class="<?=$cls2[16];?>">
          <a href="<?=site_url($menubar[16].'/0')?>">
            <span class="sidebar-text">
              <?php echo "Add Reference";?>
            </span>
          </a>
        </li>
        <li class="<?=$cls2[17];?>">
          <a href="<?=site_url($menubar[17].'/0')?>">
            <span class="sidebar-text">
              <?php echo "List Reference";?>
            </span>
          </a>
        </li>
      </ul>
    </li>
    <li class="<?=$cls2[14];?>">
      <a href="<?=site_url($menubar[14])?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('label_ivrsmanage');?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[15];?>">
      <a href="<?=site_url($menubar[15])?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('label_ivrsdeleted');?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[63].$cls2[93];?>">
      <a href="<?php echo site_url($menubar[63].'/all');?>">
        <span class="sidebar-text">
          <?php echo "Reports";?>
        </span>
      </a>
    </li>
  </ul>
</li>
<?php if(isset($feature['mtracker']) && $feature['mtracker']=="1"){?>
<li class="<?=$cls1[98].$cls1[99].$cls1[97].$cls1[105].$cls1[106].$cls1[109].$cls1[110].$cls1[111];?>">
  <a href="#" title="MTracker">
    <i class="fa fa-phone-square">
    </i>
    <span class="sidebar-text">
      <?php echo "M Tracker"?>
    </span>
    <span class="fa arrow">
    </span>
  </a>
  <ul class="submenu collapse">
    <?php if($roleDetail['role']['admin']=='1' && $mtracker_access == 1){?>
    <li class="<?=$cls2[98];?>">
      <a href="<?=site_url($menubar[98].'/0')?>">
        <span class="sidebar-text">
          <?php echo "Add Licence";?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[99];?>">
      <a href="<?=site_url($menubar[99].'/0')?>">
        <span class="sidebar-text">
          <?php echo "List Licences";?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[105];?>">
      <a href="<?=site_url($menubar[105].'/0')?>">
        <span class="sidebar-text">
          <?php echo "Licences TimeLine";?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[110];?>">
      <a href="<?=site_url($menubar[110].'/0')?>">
        <span class="sidebar-text">
          <?php echo "Add CallBarring";?>
        </span>
      </a>
    <li class="<?=$cls2[111];?>">
      <a href="<?=site_url($menubar[111].'/0')?>">
        <span class="sidebar-text">
          <?php echo "List CallBarring";?>
        </span>
      </a>
    </li>
    <?php }?>
    <li class="<?=$cls2[97];?>">
      <a href="<?=site_url($menubar[97].'/0')?>">
        <span class="sidebar-text">
          <?php echo "Reports"; ?>
        </span>
      </a>
    </li>
    <!--<li class="<?=$cls2[106];?>"><a href="<?=site_url($menubar[106].'/0/0')?>"><span class="sidebar-text"><?php echo "Archive Reports"; ?></span></a></li>-->
    <li class="<?=$cls2[109];?>">
      <a href="<?php echo site_url($menubar[109]);?>">
        <span class="sidebar-text">
          <?php echo "MTracker Analytics";?>
        </span>
      </a>
    </li>
  </ul>
</li>
<?php } ?>

 <?php if(isset($feature['callbyref']) && $feature['callbyref']=="1"){ ?>
		<li class="cls <?=$cls1[120].$cls1[121].$cls1[122]?>">
  <a href="#" title="Call By Reference">
    <i class="fa fa-comments">
    </i>
    <span class="sidebar-text">
      <?='Call By Reference'?>
    </span>
    <span class="fa arrow">
    </span>
  </a>
  <ul class="submenu collapse">
    <li class="<?=$cls2[120];?>">
      <a href="<?=site_url($menubar[120].'/0')?>">
        <span class="sidebar-text">
          <?='Add References'?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[121];?>">
      <a href="<?=site_url($menubar[121].'/0')?>">
        <span class="sidebar-text">
          <?='List References'?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[122];?>">
      <a href="<?=site_url($menubar[122].'/0')?>">
        <span class="sidebar-text">
          <?='Reports'?>
        </span>
      </a>
    </li>
  </ul>
</li>
<?php }?>
            
            
         
<li class="<?=$cls1[18].$cls1[19].$cls1[20].$cls1[21].$cls1[100].$cls1[117];?>">
  <a href="#" title="Employee">
    <i class="fa fa-user">
    </i>
    <span class="sidebar-text">
      <?php echo $this->lang->line('label_Employee');?>
    </span>
    <span class="fa arrow">
    </span>
  </a>
  <ul class="submenu collapse">
    <li class="<?=$cls2[18];?>">
      <a href="<?=site_url($menubar[18].'/0')?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('label_Employeeadd');?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[19];?>">
      <a href="<?=site_url($menubar[19].'/0')?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('label_Employeemanage');?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[20];?>">
      <a href="<?=site_url($menubar[20].'/0')?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('label_Employee_delemp');?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[21];?>">
      <a href="<?=site_url($menubar[21].'/0')?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('label_Employee_unconfirm');?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[100],$cls2[117];?>">
      <a href="<?php echo site_url($menubar[100]).'/0';?>">
        <span class="sidebar-text">
          <?php echo "Employee Performance";?>
        </span>
      </a>
    </li>
  </ul>
</li>
<?php if($roleDetail['role']['admin']=='1'){?>
<li class="<?=$cls1[22].$cls1[23].$cls1[24].$cls1[25].$cls1[26].$cls1[27].$cls1[28].$cls1[29].$cls1[30].$cls1[31].$cls1[32].$cls1[33].$cls1[34].$cls1[35].$cls1[36].$cls1[64].$cls1[81].$cls1[82].$cls1[83].$cls1[108]?>">
  <a href="#" title="Admin">
    <i class="fa fa-cog">
    </i>
    <span class="sidebar-text">
      <?php echo $this->lang->line('level_Settings');?>
    </span>
    <span class="fa arrow">
    </span>
  </a>
  <ul class="submenu collapse">
    <li class="<?=$cls2[22];?>">
      <a href="<?=site_url($menubar[22])?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('level_edit_profile');?>
        </span>
      </a>
      <?php //if($this->systemmodel->countOFChild()>0){ ?>
      <!--
<ul>
<li><a href='Business/RelatedBusiness'><span class="sidebar-text">Related Business</span></a></li>
</ul>-->
      <?php //} ?>
    <li class="<?=$cls2[23];?>">
      <a href="<?php echo site_url($menubar[23]);?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('level_manage_customlabel');?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[24];?>">
      <a href="<?php echo site_url($menubar[24].'/0');?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('emprole');?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[25];?>">
      <a href="<?php echo site_url($menubar[25]);?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('manage_role');?>
        </span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="sidebar-text">
          <b>
            <?php echo $this->lang->line('holiday');?>
          </b>
        </span>
        <span class="fa arrow">
        </span>
      </a>
      <ul class="menu2 submenu collapse">
        <li  class="<?=$cls2[26];?>">
          <a href="<?php echo site_url($menubar[26]);?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('add_holiday');?>
            </span>
          </a>
        </li>
        <li  class="<?=$cls2[27].$cls2[64];?>">
          <a href="<?php echo site_url($menubar[27].'/0');?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('list_holiday');?>
            </span>
          </a>
        </li>
      </ul>
    </li>
    <li class="<?=$cls2[28];?>">
      <a href="<?php echo site_url($menubar[28].'/0');?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('label_auditlog');?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[29].$cls2[81].$cls2[82].$cls2[83];?>">
      <a href="<?php echo site_url($menubar[29]);?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('label_manageregion');?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[30];?>">
      <a href="<?php echo site_url($menubar[30].'/0');?>">
        <span class="sidebar-text">
          <?php echo $this->lang->line('blocklist');?>
        </span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="sidebar-text">
          <b>
            <?php echo "Email Templates";?>
          </b>
        </span>
        <span class="fa arrow">
        </span>
      </a>
      <ul class="menu2 submenu collapse">
        <li class="<?=$cls2[31];?>">
          <a href="<?php echo site_url($menubar[31].'/0');?>">
            <span class="sidebar-text">
              <?php echo "Add Template";?>
            </span>
          </a>
        </li>
        <li class="<?=$cls2[32];?>">
          <a href="<?php echo site_url($menubar[32].'/0');?>">
            <span class="sidebar-text">
              <?php echo "List Template";?>
            </span>
          </a>
        </li>
      </ul>
    <li>
      <a href="#">
        <span class="sidebar-text">
          <b>
            <?php echo "SMS Templates";?>
          </b>
        </span>
        <span class="fa arrow">
        </span>
      </a>
      <ul class="menu2 submenu collapse">
        <li class="<?=$cls2[33];?>">
          <a href="<?php echo site_url($menubar[33].'/0');?>">
            <span class="sidebar-text">
              <?php echo "Add Template";?>
            </span>
          </a>
        </li>
        <li class="<?=$cls2[34];?>">
          <a href="<?php echo site_url($menubar[34].'/0');?>">
            <span class="sidebar-text">
              <?php echo "List Template";?>
            </span>
          </a>
        </li>
      </ul>
    </li>
    <li class="<?=$cls2[35];?>">
      <a href="<?php echo site_url($menubar[35]);?>">
        <span class="sidebar-text">
          <?php echo "Email Configuration";?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[108];?>">
      <a href="<?php echo site_url($menubar[108]);?>">
        <span class="sidebar-text">
          <?php echo "SMS Configuration";?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[36];?>">
      <a href="<?php echo site_url($menubar[36]);?>">
        <span class="sidebar-text">
          <?php echo "Account Settings";?>
        </span>
      </a>
    </li>
  </ul>
</li>
<?php } ?>
<?php if($lead_access == 1){?>
<li class="<?=$cls1[37].$cls1[38].$cls1[39].$cls1[40].$cls1[41].$cls1[42].$cls1[43].$cls1[44].$cls1[45].$cls1[54].$cls1[55].$cls1[89].$cls1[90].$cls1[91];?>">
  <a href="#" title="Leads">
    <i class="fa fa-caret-square-o-down">
    </i>
    <span class="sidebar-text">
      <?php echo "Lead Management";?>
    </span>
    <span class="fa arrow">
    </span>
  </a>
  <ul class="submenu collapse">
    <li>
      <a href="#">
        <span class="sidebar-text">
          <b>
            <?php echo $this->lang->line('label_leadGroup');?>
          </b>
        </span>
        <span class="fa arrow">
        </span>
      </a>
      <ul class="menu2 submenu collapse">
        <li class="<?=$cls2[37];?>">
          <a href="<?php echo site_url($menubar[37]);?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_addleadgrp');?>
            </span>
          </a>
        </li>
        <li class="<?=$cls2[38].$cls2[54].$cls2[55].$cls2[91];?>">
          <a href="<?php echo site_url($menubar[38].'/0');?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_listleadgrp');?>
            </span>
          </a>
        </li>
        <li class="<?=$cls2[39];?>">
          <a href="<?php echo site_url($menubar[39].'/0');?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_delLeadgrp');?>
            </span>
          </a>
        </li>
      </ul>
    </li>
    <?php if($leadView == 1 || $leadView == 3){?>
    <li>
      <a href="#">
        <span class="sidebar-text">
          <b>
            <?php echo $this->lang->line('label_leads');?>
          </b>
        </span>
        <span class="fa arrow">
        </span>
      </a>
      <ul class="menu2 submenu collapse">
        <li class="<?=$cls2[43];?>">
          <a href="<?php echo site_url($menubar[43].'/0');?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_addleads');?>
            </span>
          </a>
        </li>
        <li class="<?=$cls2[44];?>">
          <a href="<?php echo site_url($menubar[44].'/0');?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_listleads');?>
            </span>
          </a>
        </li>
        <li class="<?=$cls2[45];?>">
          <a href="<?php echo site_url($menubar[45].'/0');?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_deleteleads');?>
            </span>
          </a>
        </li>
      </ul>
    </li>
    <?php } else { ?>
    <li>
      <a href="#">
        <span class="sidebar-text">
          <b>
            <?php if (isset($leadstatus[1])) echo $leadstatus[1];?>
          </b>
        </span>
        <span class="fa arrow">
        </span>
      </a>
      <ul class="menu2 submenu collapse">
        <li class="<?=$cls2[43];?>">
          <a href="<?php echo site_url($menubar[43].'/1');?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_addleads');?>
            </span>
          </a>
        </li>
        <li class="<?=$cls2[44].$cls2[89].$cls2[90];?>">
          <a href="<?php echo site_url($menubar[44].'/1');?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_listleads');?>
            </span>
          </a>
        </li>
        <li class="<?=$cls2[45];?>">
          <a href="<?php echo site_url($menubar[45].'/1');?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_deleteleads');?>
            </span>
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#">
        <span class="sidebar-text">
          <b>
            <?php echo $this->lang->line('label_leads');?>
          </b>
        </span>
        <span class="fa arrow">
        </span>
      </a>
      <ul class="menu2 submenu collapse">
        <li class="<?=$cls2[43];?>">
          <a href="<?php echo site_url($menubar[43].'/2');?>">
            <span class="sidebar-text">
              <?php echo "Add Leads";?>
            </span>
          </a>
        </li>
        <?php
for($k=2;$k<=count($leadstatus);$k++){
?>
        <li>
          <a href="<?php echo site_url($menubar[44].'/'.$k);?>">
            <span class="sidebar-text">
              <?php echo $leadstatus[$k];?>
            </span>
          </a>
        </li>
        <?php
}
?>
        <li class="<?=$cls2[45];?>">
          <a href="<?php echo site_url($menubar[45].'/0');?>">
            <span class="sidebar-text">
              <?php echo "Deleted Leads";?>
            </span>
          </a>
        </li>
      </ul>
    </li>
    <?php } ?>
  </ul>
</li>
<?php }?>
<?php if($support_access == 1){?>
<li class="<?=$cls1[47].$cls1[48].$cls1[49].$cls1[50].$cls1[51].$cls1[52].$cls1[53].$cls1[56].$cls1[57].$cls1[92];?>">
  <a href="#" title="Support">
    <i class="fa fa-tasks">
    </i>
    <span class="sidebar-text">
      <?php echo "Support Management";?>
    </span>
    <span class="fa arrow">
    </span>
  </a>
  <ul class="submenu collapse">
    <li>
      <a href="#">
        <span class="sidebar-text">
          <b>
            <?php echo $this->lang->line('label_supGroup');?>
          </b>
        </span>
      </a>
      <ul class="menu2 submenu collapse">
        <li class="<?=$cls2[47];?>">
          <a href="<?php echo site_url($menubar[47]);?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_addsupgrp');?>
            </span>
          </a>
        </li>
        <li class="<?=$cls2[48].$cls2[56].$cls2[57];?>">
          <a href="<?php echo site_url($menubar[48].'/0');?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_listsupgrp');?>
            </span>
          </a>
        </li>
        <li class="<?=$cls2[49];?>">
          <a href="<?php echo site_url($menubar[49].'/0');?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_delSupgrp');?>
            </span>
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#">
        <span class="sidebar-text">
          <b>
            <?php echo $this->lang->line('label_tkts');?>
          </b>
        </span>
      </a>
      <ul class="menu2 submenu collapse">
        <li class="<?=$cls2[50];?>">
          <a href="<?php echo site_url($menubar[50].'/0');?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_addtkt');?>
            </span>
          </a>
        </li>
        <li class="<?=$cls2[51].$cls2[92];?>">
          <a href="<?php echo site_url($menubar[51].'/0');?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_listtkt');?>
            </span>
          </a>
        </li>
        <li class="<?=$cls2[52];?>">
          <a href="<?php echo site_url($menubar[52]);?>">
            <span class="sidebar-text">
              <?php echo $this->lang->line('label_deletetkt');?>
            </span>
          </a>
        </li>
      </ul>
    </li>
    <?php if($this->session->userdata('roleid')==1){?>
    <li>
      <a href="#">
        <span class="sidebar-text">
          <b>
            <?php echo "Support Configuration";?>
          </b>
        </span>
      </a>
      <ul class="menu2 submenu collapse">
        <li class="<?=$cls2[53];?>">
          <a href="<?php echo site_url($menubar[53]);?>">
            <span class="sidebar-text">
              <?php echo "Followup Settings";?>
            </span>
          </a>
        </li>
      </ul>
    </li>
    <?php } ?>
  </ul>
</li>
<?php }?>
<li class="<?=$cls1[69].$cls1[70].$cls1[71].$cls1[72].$cls1[74].$cls1[75].$cls1[95].$cls1[96].$cls1[107] ?>">
  <a href="#" title="Reports">
    <i class="fa fa-archive">
    </i>
    <span class="sidebar-text">
      <?php echo $this->lang->line('label_report');?>
    </span>
    <span class="fa arrow">
    </span>
  </a>
  <ul class="submenu collapse">
    <li>
      <a href="#">
        <span class="sidebar-text">
          <b>
            <?php echo $this->lang->line('label_incommingcall');?>
          </b>
          <span class="fa arrow">
          </span>
          </a>
        <ul class="menu2 submenu collapse">
          <li class="<?=$cls2[46];?>">
            <a href="<?php echo site_url($menubar[46].'/all');?>">
              <span class="sidebar-text">
                <?php echo $this->lang->line('label_incoming');?>
              </span>
            </a>
          </li>
          <li class="<?=$cls2[66];?>">
            <a href="<?php echo site_url($menubar[66].'/all');?>">
              <span class="sidebar-text">
                <?php echo $this->lang->line('level_AttendCalls');?>
              </span>
            </a>
          </li>
          <li class="<?=$cls2[65];?>">
            <a href="<?php echo site_url($menubar[65].'/all');?>">
              <span class="sidebar-text">
                <?php echo $this->lang->line('label_incoming_missed');?>
              </span>
            </a>
          </li>
          <li class="<?=$cls2[67];?>">
            <a href="<?php echo site_url($menubar[67].'/all');?>">
              <span class="sidebar-text">
                <?php echo $this->lang->line('label_incoming_qualified');?>
              </span>
            </a>
          </li>
          <li class="<?=$cls2[68];?>">
            <a href="<?php echo site_url($menubar[68].'/all');?>">
              <span class="sidebar-text">
                <?php echo $this->lang->line('label_incoming_unqualified');?>
              </span>
            </a>
          </li>
          <!--
<li class="<?php //echo $cls2[95];?>"><a href="<?php //echo site_url($menubar[95].'/all');?>"><span class="sidebar-text"><?php //echo "Positive Calls";?></span></a></li>
<li class="<?php //echo $cls2[96];?>"><a href="<?php //echo site_url($menubar[96].'/all');?>"><span class="sidebar-text"><?php //echo "Negative Calls";?></span></a></li>
-->
          <li class="<?=$cls2[80];?>">
            <a href="<?php echo site_url($menubar[80].'/0');?>">
              <span class="sidebar-text">
                <?php echo "Connect to Group";?>
              </span>
            </a>
          </li>
          <?php if($this->session->userdata('roleid')==1){?>
          <li class="<?=$cls2[79];?>">
            <a href="<?php echo site_url($menubar[79].'/0');?>">
              <span class="sidebar-text">
                <?php echo "Deleted Calls";?>
              </span>
            </a>
          </li>
          <li class="<?=$cls2[78];?>">
            <a href="<?php echo site_url($menubar[78].'/0');?>">
              <span class="sidebar-text">
                <?php echo "Deleted Connect to Group";?>
              </span>
            </a>
          </li>
          <?php } ?>
          <li class="<?=$cls2[77];?>">
            <a href="<?php echo site_url($menubar[77].'/0/0');?>">
              <span class="sidebar-text">
                <?php echo $this->lang->line('label_callarchive');?>
              </span>
            </a>
          </li>
          <?php if($this->session->userdata('roleid')==1){?>
          <li class="<?=$cls2[76];?>">
            <a href="<?php echo site_url($menubar[76].'/0');?>">
              <span class="sidebar-text">Call Summary
              </span>
            </a>
          </li>
          <?php } ?>
        </ul>
        </li>
    <li class="<?=$cls2[63];?>">
      <a href="<?php echo site_url($menubar[63].'/all');?>">
        <span class="sidebar-text">
          <?php echo "MCube IVRS"?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[60];?>">
      <a href="<?php echo site_url($menubar[60].'/all/0');?>">
        <span class="sidebar-text">
          <?php echo "MCube X";?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[69];?>">
      <a href="<?php echo site_url($menubar[69].'/0');?>">
        <span class="sidebar-text">
          <?php echo "Sent Emails";?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[70];?>">
      <a href="<?php echo site_url($menubar[70].'/0');?>">
        <span class="sidebar-text">
          <?php echo "Click2Connect";?>
        </span>
      </a>
    </li>
    <!--<li class="<?=$cls2[107];?>"><a href="<?php echo site_url($menubar[107].'/0/0');?>"><span class="sidebar-text"><?php echo "Click2Connect Archive";?></span></a></li>-->
    <?php if($mtracker_access == 1) { ?>
    <li class="<?=$cls2[97];?>">
      <a href="<?php echo site_url($menubar[97].'/0');?>">
        <span class="sidebar-text">
          <?php echo "MTracker";?>
        </span>
      </a>
    </li>
    <?php } ?> 
    <li class="<?=$cls2[71];?>">
      <a href="<?php echo site_url($menubar[71].'/0');?>">
        <span class="sidebar-text">
          <?php echo "SMS Report";?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[72];?>">
      <a href="<?php echo site_url($menubar[72].'/0');?>">
        <span class="sidebar-text">
          <?php echo "Follow ups";?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[74];?>">
      <a href="<?php echo site_url($menubar[74].'/0');?>">
        <span class="sidebar-text">
          <?php echo "Break History";?>
        </span>
      </a>
    </li>
    <li class="<?=$cls2[75];?>">
      <a href="<?php echo site_url($menubar[75].'/0');?>">
        <span class="sidebar-text">
          <?php echo "Outbound Calls";?>
        </span>
      </a>
    </li>

  </ul>
</li>

  <li class="<?=$cls2[118];?>">
       <a href="NewRelease"  title="New Release">
         <i class="fa fa-cogs"></i> 
         <span class="sidebar-text">
			 <? echo "New Release";?> 
		</span>  
		 <span class="fa arrow">
    </span>
		</a> 
	</li>

	<li class="<?=$cls2[119];?>">
	   <a href="MCubeProducts"  title="MCubeProducts">
	     <i class="fa fa-dropbox"></i>
	     <span class="sidebar-text">
			 <? echo "MCube Products";?>
	    </span>  
	     <span class="fa arrow">
             </span>
	   </a> 
	</li>

<li>
  <a href="user/logout"  title="Logout">
    <i class="fa fa-power-off">
    </i>
    <span class="sidebar-text">
      <?php echo "Logout";?>
    </span> 
  </a>
</li>

<!--
<li>
<a href="Report/facebook"  title="facebook">
<i class="fa fa-facebook"></i> <span class="sidebar-text">// echo "facebook";</span>  
</a> 
</li>
-->
<!-- for spacing -->
<li>&nbsp;
</li>
<li>&nbsp;
</li>
<li>&nbsp;
</li>
<li>&nbsp;
</li>
<div class="footer-widget">
  <div class="sidebar-footer clearfix"> 
    <?php if($this->session->userdata('roleid')==1){?>
    <a class="pull-left" href="AccountSettings" rel="tooltip" data-placement="top" data-original-title="Settings">
      <i class="glyph-icon flaticon-settings21">
      </i>
    </a>
    <?php } ?>
    <a class="pull-left toggle_fullscreen" href="javascript:;" rel="tooltip" data-placement="top" data-original-title="Fullscreen">
      <i class="glyph-icon flaticon-fullscreen3">
      </i>
    </a>
    <?php 
if($selfdis == 0)
echo '<a class="pull-left" href="user/selfdisable/'.$selfdis.'" rel="tooltip" data-placement="top" data-original-title="Offline"><i class="glyphicon glyphicon-eye-open"></i></a>';
else
echo '<a class="pull-left" href="user/selfdisable/'.$selfdis.'" rel="tooltip" data-placement="top" data-original-title="Online"><i class="glyphicon glyphicon-eye-close"></i></a>';
?>
    <a class="pull-left" href="user/logout" rel="tooltip" data-placement="top" data-original-title="Logout">
      <i class="fa fa-power-off">
      </i>
    </a>
  </div>
</div>
</div>
</nav>
<!-- END MAIN SIDEBAR -->
