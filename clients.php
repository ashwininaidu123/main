<? //if(!in_array($_SERVER['REMOTE_ADDR'],array('220.227.66.89','182.72.110.206','180.151.5.36'))) header("Location: /");?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Numbers List</title>
	<link rel="stylesheet" type="text/css" href="easyui.css">
	<script type="text/javascript" src="jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="jquery.easyui.min.js"></script>
	<script type="text/javascript">
	/*$(function(){

			$('input[type=text]').keyup(function() {
			  doSearch();
			});
		});*/
		$(document).ready(function() {
			$(document).keyup(function(event) {
				if (event.keyCode == 13) {
					//alert("pad");
				 //$("#myForm").submit();
					doSearch();
				}
			})
		});
		function doSearch(){
			$('#tt').datagrid('load',{
				BusinessName: $('#BusinessName').val()
				,LandingNumber: $('#LandingNumber').val()
				,PRI: $('#PRI').val()
				,Place: $('#Place').val()
				,Rental: $('#Rental').val()
				,AnnualSalesValue: $('#AnnualSalesValue').val()
				,CreditLimit: $('#CreditLimit').val()
				,Talktime: $('#Talktime').val()
				,SIMOwner: $('#SIMOwner').val()
				,SIMInfo: $('#SIMInfo').val()
				,ThisMonthUsage: $('#ThisMonthUsage').val()
				,ExtraUsage: $('#ExtraUsage').val()
				,PaymentTerm: $('#PaymentTerm').val()
				,ActivationDate: $('#ActivationDate').val()
				,ServiceStartDate: $('#ServiceStartDate').val()
				,NextRenewalDate: $('#NextRenewalDate').val()
				,NextBillingAmount: $('#NextBillingAmount').val()
				,ContactPerson: $('#ContactPerson').val()
				,ContactNumber: $('#ContactNumber').val()
				,ContactEmail: $('#ContactEmail').val()
				,ExecutiveName: $('#ExecutiveName').val()
				,Soldby: $('#Soldby').val()
				//,BusinessStatus: $('#BusinessStatus').val()
			});
		}
	</script>
</head>
<body>
	<table id="tt" align="center" class="easyui-datagrid" style="height:600px;"
			url="clients2.php"
			title="Numbers List" iconCls="icon-search" toolbar="#tb"
			rownumbers="true" pagination="true">
		<thead data-options="frozen:true">
			<tr>
				<th field="Bid" sortable="true">Bid</th>
				<th field="Business Name" sortable="true">Business Name</th>
				<th field="Landing Number" sortable="true">Mcube Number</th>
			</tr>
		</thead>
		<thead>
			<tr>
				<th field="PRI" align="right" sortable="true">DID</th>
			    <th field="SIM Info" sortable="true">Middle Number</th>
				<th field="Place" sortable="true">Circle</th>
				<th field="Rental" align="right" sortable="true">Plan</th>
				<th field="Annual Sales Value" align="right" sortable="true">Annual Sales Value</th>
				<th field="Talktime" align="right" sortable="true">Free Min</th>
				<th field="Credit Limit" align="right" sortable="true">Credit Limit</th>
				<th field="This Month Usage" align="right" sortable="true">Current Usage</th>
				<th field="Extra Usage" align="right" sortable="true">Extra Usage</th>
				<th field="SIM Owner" sortable="true">Owrship</th>
				<th field="Payment Term" align="right" sortable="true">Payment Term</th>
				<th field="Activation Date" sortable="true">Creation Date</th>
				<th field="Service Start Date" sortable="true">Start Date</th>
				<th field="Next Renewal Date" sortable="true">Next Renewal Date</th>
				<th field="Next Billing Amount" align="right" sortable="true">Next Billing Amount</th>
				<th field="Contact Person" sortable="true">Contact Person</th>
				<th field="Contact Number" sortable="true">Contact Number</th>
				<th field="Contact Email" sortable="true">Contact Email</th>
				<th field="Executive Name" sortable="true">Executive Name</th>
				<th field="Soldby" sortable="true">Sold By</th>
				<th field="Status" sortable="true">Service Status</th>
				<!--<th field="Business Status" sortable="true">Business Status</th>-->
			</tr>
		</thead>
	</table>	
	<div id="tb">
		<table width="100%">
		<tr>
			<th>Business Name:</th><td><input type="text" id="BusinessName"></td>
			<th>Mcube Number:</th><td><input type="text" id="LandingNumber"></td>
			<th>DID:</th><td><input type="text" id="PRI"></td>
		</tr>
		<tr>
			<th>Circle:</th><td><input type="text" id="Place"></td>
			<th>Plan:</th><td><input type="text" id="Rental"></td>
			<th>Annual Sales Value:</th><td><input type="text" id="AnnualSalesValue"></td>
		</tr>
		<tr>
			<th>Free Min:</th><td><input type="text" id="Talktime"></td>
			<th>Credit Limit:</th><td><input type="text" id="CreditLimit"></td>
			<th>Ownership:</th><td><input type="text" id="SIMOwner"></td>
		</tr>
		<tr>
			
			<th>Current Usage:</th><td><input type="text" id="ThisMonthUsage"></td>
			<th>Extra Usage:</th><td><input type="text" id="ExtraUsage"></td>
			<th>Payment Term:</th><td><input type="text" id="PaymentTerm"></td>
		</tr>
		<tr>
			
			<th>Creation Date:</th><td><input type="text" id="ActivationDate"></td>
			<th>Start Date:</th><td><input type="text" id="ServiceStartDate"></td>
			<th>Next Billing Date:</th><td><input type="text" id="NextBillingDate"></td>
		</tr>
		<tr>
			<th>Contact Person:</th><td><input type="text" id="ContactPerson"></td>
	        <th>Contact Number:</th><td><input type="text" id="ContactNumber"></td>
	        <th>Contact Email:</th><td><input type="text" id="ContactEmail"></td>
		</tr>
		<tr>
			<th>ExecutiveName:</th><td><input type="text" id="ExecutiveName"></td>
		    <th>Middle Number:</th><td><input type="text" id="SIMInfo"></td>
		    <th>Sold by:</th><td><input type="text" id="Soldby"></td>
		</tr>
<!--
	
		<tr>
			<th>Business Status:</th><td><input type="text" id="BusinessStatus"></td>
		</tr>
-->
		<tr><td colspan="6" align="center"><a href="#" class="easyui-linkbutton" plain="true" onclick="doSearch()">Search</a></td></tr>
		</table>
		
	</div>
</body>
</html>



<style type="text/css">
	
*{
	font-size:12px;
}
body {
	font-family:verdana,helvetica,arial,sans-serif;
	padding:0 1%;
	font-size:12px;
	margin:0 auto;
	width:98%;
}
th{
	text-align:right;
}
.easyui-linkbutton{
	font-weight:bold;
	background-color:#E0ECFF;
}
</style>
