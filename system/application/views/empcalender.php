        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
				<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading heading-class">
					<h3 class="panel-title" style="width:100%;text-align:center;">

				    <div class="col-md-10">	
						<?php echo $module['title']; ?>
					</div>	
				 
					</h3>
				</div>
					<div class="panel-body" style="padding:20px 0 0 0">
					<div class="row">
						<div class="col-md-12" style="padding:0px" >
						  <div class="col-md-5" >
						  </div>
						 <div class="col-md-2" >
					   <div class="graph-info"><a  id="tableview" href='empPerformance/0'><span><i title="Tabular Representation of Report"  class="fa fa-table iconcss3"></i></span></a></div>
                        <form id="my_form" method="post" action='empPerformance/0'>
                         <div class="graph-info"><input type="hidden" name="graphchart" value='1'>
                          <a  id="lines"  title="Graphical Representation of Report" href="javascript:{}" onclick="document.getElementById('my_form').submit();"><span></span></a></div>
                        </form>
                        <form id="mymonthlyform" method="post" class="active" action=<?=$_SERVER['REQUEST_URI']?>>
                         <div class="graph-info"><input type="hidden" name="monthlyrecord" value='1'>
                          <a  id="monthrecord"  title="Monthly Report" href="javascript:{}" class="active" onclick="document.getElementById('mymonthlyform').submit();"><span><i class="fa fa-calendar iconcss2"></i></i></span></a></div>
                        </form>
					     </div>					  
						<div class="col-md-5" >
						<?php if(!empty($paging)) { ?>	
						<div class="dataTables_paginate paging_bootstrap table-red">
							<ul class="pagination"><?=$paging;?></ul>
						</div>
						<?php } ?>
						</div>	
						</div>	
					</div>
				</div>
					

            <!-- END MODAL -->
                <div class="col-md-12 p-0 no-bd">
                    <div class="widget bg-white">
                        <div class="widget-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                     <?php echo $calendar; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END MAIN CONTENT -->

<style>
	
	table.calendar{
		font-size: 12px;
		width: 100%;
		
	}
	td{
		text-align:center;
	    border: 1px solid #ddd;
		font-size:18px;
	}
	.height-td{
        min-height: 100px;
	    width: 135px;
        text-align: center;
		padding:4px;
	    font-weight: 500;
	}
	.calendar th{
		background:#ffffff;
		border: 1px solid #ddd;
		font-size:20px;
		color:#000000;
	    text-align: center;
	    padding:4px
	}
	.calendar th a{
		color:#000000;
	}
	.calendar th a:hover{
		color:#000000;
	    text-decoration:none;
	}
	.prevcell a, .nextcell a{
		color:#ffffff;
		text-decoration:none;
	}
	
	tr.header_week{
		color:#000;
	    height: 30px;
        font-weight: 600;
	    text-transform: uppercase;
	}
	tr.header_month {
      height: 60px;
   }
   .header_week td{
	   font-size:15px;
   }
   .day_num {
		font-weight: 100;
		text-align: right;
		font-size: 15px;
		float: right;
		padding: 0 2px;

   }
   .day_content {
		text-align: left;
		font-weight: 400;
		font-size: 15px;
		float: left;
        padding: 30px 0 0px 0;

   }
	.calendar .days td:hover {
		background-color: #0294bc;
		color:white;
		font-weight:bold;
	}
	.calendar .highlight{
		background:#0294bc;
		color:white;
		font-weight: bolder;
        font-size: 16px;
	}
	
</style>

