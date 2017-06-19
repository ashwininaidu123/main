
   <!-- BEGIN TOP MENU -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="menu-medium" class="sidebar-toggle tooltips">
                    <i class="fa fa-outdent"></i>
                </a>
                <a class="navbar-brand" href="Home">
                    <img src="system/application/img/mcube-logo.png" alt="logo">
                </a>
            </div>
<!--
            //<div class="navbar-center">404 Error</div>
-->
            <div class="navbar-collapse collapse">
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right header-menu">
					
					
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>	
					<li>&nbsp;</li>
                    <!-- BEGIN USER DROPDOWN -->
                   
                </ul>
                <!-- END TOP NAVIGATION MENU -->
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
                        <a href="#" title="Dashboard"><i class="fa fa-home"></i><span class="sidebar-text">Home</span><span class="fa arrow"></span></a>
						<ul class="submenu collapse" >
<!--
							<li class="">
								<a href="<?php //echo site_url($menubar[0]);?>"><span class="sidebar-text"><b><?php echo "Dashboard";?></b></span><span class="fa arrow"></span></a>
									<ul class="menu2 submenu collapse">
-->
											<li class="<?=$cls2[0];?>"><a href="<?php echo site_url($menubar[0]);?>"><span class="sidebar-text"><?php echo "Dashboard"; ?></span></a></li>
											<?php if(isset($feature['call']) && $feature['call']=="1"){?>
											<li class="<?=$cls2[84];?>"><a href="<?php echo site_url($menubar[84]);?>"><span class="sidebar-text"><?php echo " MCube Track"; ?></span></a></li>
											 <?php } ?>
											 <?php if(isset($feature['ivrs']) && $feature['ivrs']=="1"){?>
											<li class="<?=$cls2[85];?>"><a href="<?php echo site_url($menubar[85]);?>"><span class="sidebar-text"><?php echo "MCube IVRS"; ?></span></a></li>
											<?php } ?>
											<?php if(isset($feature['pbx']) && $feature['pbx']=="1"){?>
											<li class="<?=$cls2[86];?>"><a href="<?php echo site_url($menubar[86]);?>"><span class="sidebar-text"><?php echo "MCube X"; ?></span></a></li>
											<?php } ?>
										     <?php if(isset($feature['mtracker']) && $feature['mtracker']=="1"){?>
											<li class="<?=$cls2[102];?>"><a href="<?php echo site_url($menubar[102]);?>"><span class="sidebar-text"><?php echo "M Tracker"; ?></span></a></li>
											<?php } ?>
											<?php if(isset($feature['lead']) && $feature['lead']=="1"){?>
											<li class="<?=$cls2[87];?>"><a href="<?php echo site_url($menubar[87]);?>"><span class="sidebar-text"><?php echo "Leads"; ?></span></a></li>
											<?php } ?>
											<?php if(isset($feature['support']) && $feature['support']=="1"){?>
											<li class="<?=$cls2[88];?>"><a href="<?php echo site_url($menubar[88]);?>"><span class="sidebar-text"><?php echo "Support"; ?></span></a></li>
											 <?php }?>
											<?php //if(isset($feature['c2c']) && $feature['c2c']=="1"){?>
											<li class="<?=$cls2[101];?>"><a href="<?php echo site_url($menubar[101]);?>"><span class="sidebar-text"><?php echo "Outbound"; ?></span></a></li>
											 <?php //}?>
<!--
							        </ul>
							</li>
-->
							<li class="<?=$cls2[1];?>">
								<a href="<?php echo site_url($menubar[1]);?>"><span class="sidebar-text"><?php echo $this->lang->line('blocknumbers');?></span></a>
							</li>
						</ul>
                    </li>   
                    <li class="cls <?=$cls1[2].$cls1[3].$cls1[4].$cls1[5].$cls1[6].$cls1[7].$cls1[58].$cls1[59].$cls1[46].$cls1[65].$cls1[66].$cls1[67].$cls1[68].$cls1[76].$cls1[77].$cls1[78].$cls1[79].$cls1[80];?>">
						  <a href="#" title="Mcube Track"><i class="fa fa-group"></i><span class="sidebar-text"><?php echo $this->lang->line('label_calltrack');?></span><span class="fa arrow"></span></a>
                			 <ul class="submenu collapse">
							    <li>
                			      <a href="#"><span class="sidebar-text"><b><?=$this->lang->line('label_group')?></b></span><span class="fa arrow"></span></a>
									 <ul class="menu2 submenu collapse">
											<li class="<?=$cls2[3];?>"><a href="<?php echo site_url($menubar[3]);?>"><span class="sidebar-text"><?php echo $this->lang->line('label_groupadd');?></span></a></li>
											<li class="<?=$cls2[2].$cls2[58].$cls2[59];?>"><a href="<?php echo site_url($menubar[2]);?>/0"><span class="sidebar-text"><?php echo $this->lang->line('label_groupmanage');?></span></a></li>
											<li class="<?=$cls2[5];?>"><a href="<?php echo site_url($menubar[5]);?>/0"><span class="sidebar-text"><?php echo $this->lang->line('deletedgroup');?></span></a></li>
							        </ul>
							   </li>
							   <li><a href="#"><span class="sidebar-text"><b>Contacts</b></span><span class="fa arrow"></span></a>
									<ul class="menu2 submenu collapse">
										<li class="<?=$cls2[6];?>"><a href="<?php echo site_url($menubar[6]);?>" /><span class="sidebar-text"><?php echo "Add Contact";?></span></a></li>
										<li class="<?=$cls2[7];?>"><a href="<?php echo site_url($menubar[7].'/0');?>"/><span class="sidebar-text"><?php echo "Contacts List";?></span></a></li>
									</ul>
								</li>	
								<li><a href="#"><span class="sidebar-text"><b><?php echo "Reports";?></b><span class="fa arrow"></span></a>
								<ul class="menu2 submenu collapse">
									<li class="<?=$cls2[46];?>"><a href="<?php echo site_url($menubar[46].'/all');?>"><span class="sidebar-text"><?php echo $this->lang->line('label_incoming');?></span></a></li>
									<li class="<?=$cls2[66];?>"><a href="<?php echo site_url($menubar[66].'/all');?>"><span class="sidebar-text"><?php echo $this->lang->line('level_AttendCalls');?></span></a></li>
									<li class="<?=$cls2[65];?>"><a href="<?php echo site_url($menubar[65].'/all');?>"><span class="sidebar-text"><?php echo $this->lang->line('label_incoming_missed');?></span></a></li>
									<li class="<?=$cls2[67];?>"><a href="<?php echo site_url($menubar[67].'/all');?>"><span class="sidebar-text"><?php echo $this->lang->line('label_incoming_qualified');?></span></a></li>
									<li class="<?=$cls2[68];?>"><a href="<?php echo site_url($menubar[68].'/all');?>"><span class="sidebar-text"><?php echo $this->lang->line('label_incoming_unqualified');?></span></a></li>
<!--
									<li class="<?php //echo $cls2[95];?>"><a href="<?php //echo site_url($menubar[95].'/all');?>"><span class="sidebar-text"><?php //echo "Positive Calls";?></span></a></li>
									<li class="<?php //echo $cls2[96];?>"><a href="<?php //echo site_url($menubar[96].'/all');?>"><span class="sidebar-text"><?php //echo "Negative Calls";?></span></a></li>
-->
									<li class="<?=$cls2[80];?>"><a href="<?php echo site_url($menubar[80].'/0');?>"><span class="sidebar-text"><?php echo "Connect to Group";?></span></a></li>
									<li class="<?=$cls2[77];?>"><a href="<?php echo site_url($menubar[77].'/0/0');?>"><span class="sidebar-text"><?php echo $this->lang->line('label_callarchive');?></span></a></li>
									<?php if($this->session->userdata('roleid')==1){?>
									<li class="<?=$cls2[79];?>"><a href="<?php echo site_url($menubar[79].'/0');?>"><span class="sidebar-text"><?php echo "Deleted Calls";?></span></a></li>
									<li class="<?=$cls2[78];?>"><a href="<?php echo site_url($menubar[78].'/0');?>"><span class="sidebar-text"><?php echo "Deleted Connect to Group";?></span></a></li>
									<li class="<?=$cls2[76];?>"><a href="<?php echo site_url($menubar[76].'/0');?>"><span class="sidebar-text">Call Summary</span></a></li>
									<?php } ?>
								</ul>
							</li>
							</ul>		
                    </li>
                    <li class="cls <?=$cls1[8].$cls1[9].$cls1[10].$cls1[61].$cls1[94].$cls1[60]?>">
						<a href="#" title="MCube X"><i class="fa fa-asterisk"></i><span class="sidebar-text"><?=$this->lang->line('label_pbx')?></span><span class="fa arrow"></span></a>
						<ul class="submenu collapse">
							<li class="<?=$cls2[8];?>"><a href="<?=site_url($menubar[8].'/0')?>"><span class="sidebar-text"><?=$this->lang->line('label_pbxconfigure')?></span></a></li>
							<li class="<?=$cls2[9].$cls1[61];?>"><a href="<?=site_url($menubar[9].'/0')?>"><span class="sidebar-text"><?=$this->lang->line('label_pbxlist')?></span></a></li>
							<li class="<?=$cls2[10];?>"><a href="<?=site_url($menubar[10].'/0')?>"><span class="sidebar-text"><?=$this->lang->line('label_pbxdeleted')?></span></a></li>
							<li class="<?=$cls2[60].$cls2[94];?>"><a href="<?php echo site_url($menubar[60].'/all/0');?>"><span class="sidebar-text"><?php echo "Reports";?></span></a></li>
						</ul>
                    </li>
                    <li class="<?=$cls1[13].$cls1[14].$cls1[15].$cls1[16].$cls1[17].$cls1[62].$cls1[93].$cls1[63]?>">
						<a href="#" title="IVRS"><i class="fa fa-sitemap"></i><span class="sidebar-text"><?php echo $this->lang->line('label_ivrs');?></span><span class="fa arrow"></span></a>
						<ul class="submenu collapse">
							<li class="<?=$cls2[13];?>"><a href="<?=site_url($menubar[13])?>"><span class="sidebar-text"><?php echo $this->lang->line('label_ivrsconfig');?></span></a></li>
							<li><a href="#"><span class="sidebar-text"><b><?php echo "IVRS Reference";?></b></span><span class="fa arrow"></span></a>
								<ul class="menu2 submenu collapse">
									<li class="<?=$cls2[16];?>"><a href="<?=site_url($menubar[16].'/0')?>"><span class="sidebar-text"><?php echo "Add Reference";?></span></a></li>
									<li class="<?=$cls2[17];?>"><a href="<?=site_url($menubar[17].'/0')?>"><span class="sidebar-text"><?php echo "List Reference";?></span></a></li>
								</ul>
							</li>
							<li class="<?=$cls2[14];?>"><a href="<?=site_url($menubar[14])?>"><span class="sidebar-text"><?php echo $this->lang->line('label_ivrsmanage');?></span></a></li>
							<li class="<?=$cls2[15];?>"><a href="<?=site_url($menubar[15])?>"><span class="sidebar-text"><?php echo $this->lang->line('label_ivrsdeleted');?></span></a></li>
							<li class="<?=$cls2[63].$cls2[93];?>"><a href="<?php echo site_url($menubar[63].'/all');?>"><span class="sidebar-text"><?php echo "Reports";?></span></a></li>
						</ul>
                    </li>
                     <?php if(isset($feature['mtracker']) && $feature['mtracker']=="1"){?>
                    <li class="<?=$cls1[98].$cls1[99].$cls1[97].$cls1[105].$cls1[106];?>">
						<a href="#" title="MTracker"><i class="fa fa-phone-square"></i><span class="sidebar-text"><?php echo "M Tracker"?></span><span class="fa arrow"></span></a>
						<ul class="submenu collapse">
							<?php if($roleDetail['role']['admin']=='1' && $mtracker_access == 1){?>
							<li class="<?=$cls2[98];?>"><a href="<?=site_url($menubar[98].'/0')?>"><span class="sidebar-text"><?php echo "Add Licence";?></span></a></li>
							<li class="<?=$cls2[99];?>"><a href="<?=site_url($menubar[99].'/0')?>"><span class="sidebar-text"><?php echo "List Licences";?></span></a></li>
							<li class="<?=$cls2[105];?>"><a href="<?=site_url($menubar[105].'/0')?>"><span class="sidebar-text"><?php echo "Licences TimeLine";?></span></a></li>
							<?php }?>
							<li class="<?=$cls2[97];?>"><a href="<?=site_url($menubar[97].'/0')?>"><span class="sidebar-text"><?php echo "Reports"; ?></span></a></li>
							<li class="<?=$cls2[106];?>"><a href="<?=site_url($menubar[106].'/0/0')?>"><span class="sidebar-text"><?php echo "Archive Reports"; ?></span></a></li>
						</ul>
					</li>
					<?php } ?>
                    <li class="<?=$cls1[18].$cls1[19].$cls1[20].$cls1[21].$cls1[100];?>">
						<a href="#" title="Employee"><i class="fa fa-user"></i><span class="sidebar-text"><?php echo $this->lang->line('label_Employee');?></span><span class="fa arrow"></span></a>
						<ul class="submenu collapse">
							<li class="<?=$cls2[18];?>"><a href="<?=site_url($menubar[18].'/0')?>"><span class="sidebar-text"><?php echo $this->lang->line('label_Employeeadd');?></span></a></li>
							<li class="<?=$cls2[19];?>"><a href="<?=site_url($menubar[19].'/0')?>"><span class="sidebar-text"><?php echo $this->lang->line('label_Employeemanage');?></span></a></li>
							<li class="<?=$cls2[20];?>"><a href="<?=site_url($menubar[20].'/0')?>"><span class="sidebar-text"><?php echo $this->lang->line('label_Employee_delemp');?></span></a></li>
							<li class="<?=$cls2[21];?>"><a href="<?=site_url($menubar[21].'/0')?>"><span class="sidebar-text"><?php echo $this->lang->line('label_Employee_unconfirm');?></span></a></li>
							<?php if($this->session->userdata('roleid')==1){?>
							<li class="<?=$cls2[100];?>"><a href="<?php echo site_url($menubar[100]).'/0';?>"><span class="sidebar-text"><?php echo "Employee Performance";?></span></a></li>
							<?php } ?>
					  </ul>
					</li>

				<li class="<?=$cls1[69].$cls1[70].$cls1[71].$cls1[72].$cls1[73].$cls1[74].$cls1[75].$cls1[95].$cls1[96].$cls1[107] ?>">
					<a href="#" title="Reports"><i class="fa fa-archive"></i><span class="sidebar-text"><?php echo $this->lang->line('label_report');?></span><span class="fa arrow"></span></a>
						<ul class="submenu collapse">
							<li><a href="#"><span class="sidebar-text"><b><?php echo $this->lang->line('label_incommingcall');?></b><span class="fa arrow"></span></a>
								<ul class="menu2 submenu collapse">
									<li class="<?=$cls2[46];?>"><a href="<?php echo site_url($menubar[46].'/all');?>"><span class="sidebar-text"><?php echo $this->lang->line('label_incoming');?></span></a></li>
									<li class="<?=$cls2[66];?>"><a href="<?php echo site_url($menubar[66].'/all');?>"><span class="sidebar-text"><?php echo $this->lang->line('level_AttendCalls');?></span></a></li>
									<li class="<?=$cls2[65];?>"><a href="<?php echo site_url($menubar[65].'/all');?>"><span class="sidebar-text"><?php echo $this->lang->line('label_incoming_missed');?></span></a></li>
									<li class="<?=$cls2[67];?>"><a href="<?php echo site_url($menubar[67].'/all');?>"><span class="sidebar-text"><?php echo $this->lang->line('label_incoming_qualified');?></span></a></li>
									<li class="<?=$cls2[68];?>"><a href="<?php echo site_url($menubar[68].'/all');?>"><span class="sidebar-text"><?php echo $this->lang->line('label_incoming_unqualified');?></span></a></li>
<!--
									<li class="<?php //echo $cls2[95];?>"><a href="<?php //echo site_url($menubar[95].'/all');?>"><span class="sidebar-text"><?php //echo "Positive Calls";?></span></a></li>
									<li class="<?php //echo $cls2[96];?>"><a href="<?php //echo site_url($menubar[96].'/all');?>"><span class="sidebar-text"><?php //echo "Negative Calls";?></span></a></li>
-->
									<li class="<?=$cls2[80];?>"><a href="<?php echo site_url($menubar[80].'/0');?>"><span class="sidebar-text"><?php echo "Connect to Group";?></span></a></li>
									<?php if($this->session->userdata('roleid')==1){?>
									<li class="<?=$cls2[79];?>"><a href="<?php echo site_url($menubar[79].'/0');?>"><span class="sidebar-text"><?php echo "Deleted Calls";?></span></a></li>
									<li class="<?=$cls2[78];?>"><a href="<?php echo site_url($menubar[78].'/0');?>"><span class="sidebar-text"><?php echo "Deleted Connect to Group";?></span></a></li>
									<?php } ?>
									<li class="<?=$cls2[77];?>"><a href="<?php echo site_url($menubar[77].'/0/0');?>"><span class="sidebar-text"><?php echo $this->lang->line('label_callarchive');?></span></a></li>
									<?php if($this->session->userdata('roleid')==1){?>
									<li class="<?=$cls2[76];?>"><a href="<?php echo site_url($menubar[76].'/0');?>"><span class="sidebar-text">Call Summary</span></a></li>
									<?php } ?>
								</ul>
							</li>
							<li class="<?=$cls2[63];?>"><a href="<?php echo site_url($menubar[63].'/all');?>"><span class="sidebar-text"><?php echo "MCube IVRS"?></span></a></li>
							<li class="<?=$cls2[60];?>"><a href="<?php echo site_url($menubar[60].'/all/0');?>"><span class="sidebar-text"><?php echo "MCube X";?></span></a></li>
							<li class="<?=$cls2[69];?>"><a href="<?php echo site_url($menubar[69].'/0');?>"><span class="sidebar-text"><?php echo "Sent Emails";?></span></a></li>
							<li class="<?=$cls2[70];?>"><a href="<?php echo site_url($menubar[70].'/0');?>"><span class="sidebar-text"><?php echo "Click2Connect";?></span></a></li>
							<li class="<?=$cls2[107];?>"><a href="<?php echo site_url($menubar[107].'/0/0');?>"><span class="sidebar-text"><?php echo "Click2Connect Archive";?></span></a></li>
							<li class="<?=$cls2[71];?>"><a href="<?php echo site_url($menubar[71].'/0');?>"><span class="sidebar-text"><?php echo "SMS Report";?></span></a></li>
							<li class="<?=$cls2[72];?>"><a href="<?php echo site_url($menubar[72].'/0');?>"><span class="sidebar-text"><?php echo "Follow ups";?></span></a></li>
							<li class="<?=$cls2[73];?>"><a href="<?php echo site_url($menubar[73]);?>"><span class="sidebar-text"><?php echo "Call Analytics";?></span></a></li>
							<li class="<?=$cls2[74];?>"><a href="<?php echo site_url($menubar[74].'/0');?>"><span class="sidebar-text"><?php echo "Break History";?></span></a></li>
							<li class="<?=$cls2[75];?>"><a href="<?php echo site_url($menubar[75].'/0');?>"><span class="sidebar-text"><?php echo "Outbound Calls";?></span></a></li>
					
						</ul>
				</li>
				 <li class="<?=$cls2[118];?>">
				   <a href="NewRelease"  title="New Release">
					 <i class="fa fa-cogs"></i> 
					 <span class="sidebar-text">
						 <? echo "New Release";?> 
					</span>  
					 <span class="fa arrow"></span>
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
                        <i class="fa fa-power-off"></i><span class="sidebar-text"><?php echo "Logout";?></span> 
                     </a>
                     </li>
				<!-- for spacing -->
				<li>&nbsp;</li>
				<li>&nbsp;</li>
				<li>&nbsp;</li>
				<li>&nbsp;</li>
					
               
            </div>
        </nav>
        <!-- END MAIN SIDEBAR -->
