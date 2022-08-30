<?php
require_once "connection.php";
session_start();


if(!isset($_SESSION['user'])){
	header("location:index.php");
}
?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<title>Welcome</title>
	<style type="text/css">   
        html {
    height:100%;
            }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #92b4e0;
}

.rtIn {
    color: black;
    background-color: white;
}

.rtUL {
    background-color: white;
    color: white;
}


li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #7e9fd2;
}

.active {
  background-color: #04AA6D;
}


    </style>  
</head>
<body style="background-color: #7e9fd2; background-image: url('./images/background.jpg');
    background-position: left top; background-repeat: repeat-x; margin: 0px; padding: 0px;
    border: none;">>
	<div class="container">

	


	</div>
	<form name="aspnetForm" method="post" action="Profile.aspx" id="aspnetForm">

 
<div style="margin: 5px auto auto auto ;  border: solid 1px #4e75b3; width: 800px;">
	<div style="background-color: White; width: 800px">
		<table style="width: 800px; margin-left: 0px;" cellpadding="2px" cellspacing="2px">
			<tr>
				<td align="left" width="250px">
					<img id="ctl00_Image1" src="images/adrian.png" style="border-width:0px;" />
				</td>
				<td align="right">
					&nbsp;
				</td>
				<td align="right" valign="middle" >
					<table>
					<tr><td>
					<span id="ctl00_lblWelcome" style="color:#000066;font-family:sans-serif;font-size:10pt;">Welcome,<?php
		echo "<p>".$_SESSION['user']['name']."</p>";?>
	 </span><span class="link">&nbsp;|&nbsp;</span>
				<a href="#" onclick="window.open('Kalpa_PDMS_V3_documentation.pdf')" class="link">Help</a><span class="link">&nbsp;|&nbsp;</span> <a href="Logout.php"
							class="link">Logout</a>
					  </td>
					  </tr>
					  <tr><td>
						 <span id="ctl00_lblSchool" style="color:#000066;font-family:sans-serif;font-size:14pt;">Adrian Public Schools</span>
							
					 </td></tr>
					 </table>
				</td>
				
			</tr>
		</table>
	</div>
	<div style="background-color:White;width:800px;">
   
			
			<div id="ctl00_MainMenu" class="RadMenu RadMenu_Web20 rmSized" style="width:800px;z-index: 2000">
<ul class="rmRootGroup rmHorizontal">
<li class="rmItem rmFirst"><a class="rmLink rmRootLink" href="Home.aspx"><span class="rmText">Bulletin Board</span></a></li><li class="rmItem "><a class="rmLink rmRootLink" href="PDPlan.aspx"><span class="rmText">Professional Development Plan</span></a></li><li class="rmItem "><a class="rmLink rmRootLink" href="Registration.aspx"><span class="rmText">Registration</span></a></li><li class="rmItem "><a class="rmLink rmRootLink" href="Documents.aspx"><span class="rmText">Documents</span></a></li><li class="rmItem "><a class="rmLink rmRootLink rmSelected" href="Profile.aspx"><span class="rmText">Profile</span></a></li><li class="rmItem rmLast"><a class="rmLink rmRootLink" href="Help.aspx"><span class="rmText">Contact</span></a></li>
</ul><input id="ctl00_MainMenu_ClientState" name="ctl00_MainMenu_ClientState" type="hidden" />
</div>
	</div>
	   
	<div align="center" style="width:800px ;background-color:White;border: solid 0px #4e75b3;">
		<div  style="width:750px" >
			
<div style='height:25px'></div>
<br />
<table style='width:750px; border:solid 1px #4e75b3; text-align:left'  >
 <tr>
		<td align="center" colspan="2" bgcolor="#92B4E0">
			<span id="ctl00_ContentPlaceHolder1_Label3" class="lbl" style="color:White;font-weight:bold;">General Information</span>
		</td>
	</tr>
	<tr>
		<td align="right" >
			<span id="ctl00_ContentPlaceHolder1_Label1" class="lbl" style="display:inline-block;width:75px;">First Name:</span>
		</td>
		<td>
<!-- need to take out jessica value for a return of the session user--><span id="ctl00_ContentPlaceHolder1_txtFirst_wrapper" class="riSingle RadInput RadInput_Default" style="width:180px;"><input id="ctl00_ContentPlaceHolder1_txtFirst" name="ctl00$ContentPlaceHolder1$txtFirst" size="25" maxlength="25" class="riTextBox riRead" readonly="readonly" Title="" TitleIconImageUrl="" TitleUrl="" value="   <?php
		echo $_SESSION['user']['name'];?>" type="text" /><input id="ctl00_ContentPlaceHolder1_txtFirst_ClientState" name="ctl00_ContentPlaceHolder1_txtFirst_ClientState" type="hidden" /></span>
			&nbsp;
			
		</td>
		
	</tr>
	<tr>
		<td align="right"  >
			<span id="ctl00_ContentPlaceHolder1_Label2" class="lbl">Last Name:</span>
		</td>
		<td>
			<span id="ctl00_ContentPlaceHolder1_txtLast_wrapper" class="riSingle RadInput RadInput_Default" style="width:230px;"><input id="ctl00_ContentPlaceHolder1_txtLast" name="ctl00$ContentPlaceHolder1$txtLast" size="30" maxlength="30" class="riTextBox riRead" readonly="readonly" value="Adams" type="text" /><input id="ctl00_ContentPlaceHolder1_txtLast_ClientState" name="ctl00_ContentPlaceHolder1_txtLast_ClientState" type="hidden" /></span>
			&nbsp;
			
		</td>
		
	</tr>

	
	
	
	<tr>
		<td align="right" >
			<span id="ctl00_ContentPlaceHolder1_Label4" class="lbl">Mentor:</span>
		</td>
		<td>
			<span id="ctl00_ContentPlaceHolder1_txtMentor_wrapper" class="riSingle RadInput RadInput_Default" style="width:160px;"><input id="ctl00_ContentPlaceHolder1_txtMentor" name="ctl00$ContentPlaceHolder1$txtMentor" size="20" class="riTextBox riRead" readonly="readonly" TitleIconImageUrl="" Description="" PromptChar="_" Title="" value="" TitleUrl="" type="text" CatalogIconImageUrl="" DisplayPromptChar="_" /><input id="ctl00_ContentPlaceHolder1_txtMentor_ClientState" name="ctl00_ContentPlaceHolder1_txtMentor_ClientState" type="hidden" /></span>
		</td>
	   
	</tr>
	<tr id="ctl00_ContentPlaceHolder1_trPIC">
<td align="right">
			<span id="ctl00_ContentPlaceHolder1_Label9" class="lbl">PIC:</span>
		</td>
<td>
			<span id="ctl00_ContentPlaceHolder1_txtPIC_wrapper" class="riSingle RadInput RadInput_Default" style="width:160px;"><input id="ctl00_ContentPlaceHolder1_txtPIC" name="ctl00$ContentPlaceHolder1$txtPIC" size="20" maxlength="10" class="riTextBox riRead" readonly="readonly" TitleIconImageUrl="" Description="" PromptChar="_" Title="" value="" TitleUrl="" type="text" CatalogIconImageUrl="" DisplayPromptChar="_" /><input id="ctl00_ContentPlaceHolder1_txtPIC_ClientState" name="ctl00_ContentPlaceHolder1_txtPIC_ClientState" type="hidden" /></span>
			&nbsp;
			
		</td>
</tr>

	<tr>
		<td align="right" >
			District
			<span id="ctl00_ContentPlaceHolder1_Label8" class="lbl">Email:</span>
		</td>
		<td>
			<span id="ctl00_ContentPlaceHolder1_txtEmail_wrapper" class="riSingle RadInput RadInput_Default" style="width:250px;"><input id="ctl00_ContentPlaceHolder1_txtEmail" name="ctl00$ContentPlaceHolder1$txtEmail" size="20" maxlength="80" class="riTextBox riRead" readonly="readonly" CatalogIconImageUrl="" Description="" Title="" TitleIconImageUrl="" TitleUrl="" value="jadams@adrian.k12.mi.us" type="text" /><input id="ctl00_ContentPlaceHolder1_txtEmail_ClientState" name="ctl00_ContentPlaceHolder1_txtEmail_ClientState" type="hidden" /></span>
		</td>
		
	</tr>
   
	<tr>
		<td align="right" >
			Alternate Email:</td>
		<td>
			<span id="ctl00_ContentPlaceHolder1_txtAltEmail_wrapper" class="riSingle RadInput RadInput_Default" style="width:250px;"><input id="ctl00_ContentPlaceHolder1_txtAltEmail" name="ctl00$ContentPlaceHolder1$txtAltEmail" size="20" maxlength="80" class="riTextBox riEnabled" CatalogIconImageUrl="" Description="" Title="" TitleIconImageUrl="" TitleUrl="" type="text" value="" /><input id="ctl00_ContentPlaceHolder1_txtAltEmail_ClientState" name="ctl00_ContentPlaceHolder1_txtAltEmail_ClientState" type="hidden" /></span>
		&nbsp;
			<input type="image" name="ctl00$ContentPlaceHolder1$btnSave" id="ctl00_ContentPlaceHolder1_btnSave" title="Save" src="images/Update.gif" style="height:16px;border-width:0px;" />
		</td>
		
	</tr>
   
	<tr>
		<td align="center" colspan="2" bgcolor="#92B4E0">
			<span id="ctl00_ContentPlaceHolder1_Label11" class="lbl" style="color:White;font-weight:bold;">Administrator(s):</span>
		</td>
	</tr>
	<tr>
		<td align="right" >
			&nbsp;
		</td>
		<td>
			<div id="ctl00_ContentPlaceHolder1_AdminTreeView" class="RadTreeView RadTreeView_Web20" style="overflow:auto;height:75px;">
<ul class="rtUL">
<li class="rtLI rtFirst"><div class="rtTop">
	<span class="rtSp"></span><span class="rtIn">Chamberlain, Alice</span>
</li>
</ul><input id="ctl00_ContentPlaceHolder1_AdminTreeView_ClientState" name="ctl00_ContentPlaceHolder1_AdminTreeView_ClientState" type="hidden" />
</div>
		   </td>
		   
	</tr>
	<tr>
		<td align="center" colspan="2" bgcolor="#92B4E0">
			<span id="ctl00_ContentPlaceHolder1_Label12" class="lbl" style="color:White;font-weight:bold;">Supervisor(s):</span>
		</td>
	</tr>
	<tr>
		<td align="right" >
			&nbsp;
		</td>
		<td>
			<div id="ctl00_ContentPlaceHolder1_SuperTreeView" class="RadTreeView RadTreeView_Web20" style="overflow:auto;height:25px;">
<ul class="rtUL">
<li class="rtLI rtFirst rtLast"><div class="rtTop">
	<span class="rtSp"></span><span class="rtIn">Dolan, Julianne</span>
</div></li>
</ul><input id="ctl00_ContentPlaceHolder1_SuperTreeView_ClientState" name="ctl00_ContentPlaceHolder1_SuperTreeView_ClientState" type="hidden" />
</div>
		</td>
	   
	</tr>
	<tr>
		<td align="center" colspan="2" bgcolor="#92B4E0">
			<span id="ctl00_ContentPlaceHolder1_Label13" class="lbl" style="color:White;font-weight:bold;">Schools:</span>
		</td>
	</tr>
	<tr>
		<td align="right" >
			&nbsp;
		</td>
		<td>
			<div id="ctl00_ContentPlaceHolder1_trSchools" class="RadTreeView RadTreeView_Web20" style="overflow:auto;height:25px;">
<ul class="rtUL">
<li class="rtLI rtFirst rtLast"><div class="rtTop">
	<span class="rtSp"></span><span class="rtIn">Central Office Adms (HOME)</span>
</div></li>
</ul><input id="ctl00_ContentPlaceHolder1_trSchools_ClientState" name="ctl00_ContentPlaceHolder1_trSchools_ClientState" type="hidden" />
</div>
		</td>
	   
	</tr>
	<tr>
		<td align="center" colspan="2" bgcolor="#92B4E0">
			<span id="ctl00_ContentPlaceHolder1_Label14" class="lbl" style="color:White;font-weight:bold;">Positions:</span>
		</td>
	</tr>
	<tr>
		<td align="right" >
			&nbsp;
		</td>
		<td>
			<div id="ctl00_ContentPlaceHolder1_trPositions" class="RadTreeView RadTreeView_Web20" style="overflow:auto;height:50px;">
<ul class="rtUL">
<li class="rtLI rtFirst"><div class="rtTop">
	<span class="rtSp"></span><span class="rtIn">Fine Arts Employee                                          </span>
</div></li>
</ul><input id="ctl00_ContentPlaceHolder1_trPositions_ClientState" name="ctl00_ContentPlaceHolder1_trPositions_ClientState" type="hidden" />
</div>
		</td>
		
	</tr>
	<tr>
		<td align="center" colspan="2" bgcolor="#92B4E0">
			<span id="ctl00_ContentPlaceHolder1_Label15" class="lbl" style="color:White;font-weight:bold;">Access:</span>
		</td>
	</tr>
	<tr>
		<td align="right" >
			&nbsp;
		</td>
		<td>
			<div id="ctl00_ContentPlaceHolder1_grdAccess" class="RadGrid RadGrid_Web20" style="border-style:None;">

<table class="rgMasterTable" border="0" id="ctl00_ContentPlaceHolder1_grdAccess_ctl00" style="width:450px;table-layout:auto;empty-cells:show;">
<colgroup>
<col style="display:none;" />
<col  />
<col  />
</colgroup>
<thead>
<tr>
	<th scope="col" class="rgHeader" style="display:none;">logintableid</th><th scope="col" class="rgHeader">Login ID</th><th scope="col" class="rgHeader">Access Type</th>
</tr>
</thead><tbody>
<tr class="rgRow" id="ctl00_ContentPlaceHolder1_grdAccess_ctl00__0">
<td style="display:none;">140198</td><td>
								<span id="ctl00_ContentPlaceHolder1_grdAccess_ctl00_ctl04_loginidLabel" style="display:inline-block;width:146px;">JADAMS                                            </span>
							</td><td>
								<span id="ctl00_ContentPlaceHolder1_grdAccess_ctl00_ctl04_accessLabel" style="display:inline-block;width:146px;">Users                                   </span>
							</td>
</tr>
</tbody>

</table><input id="ctl00_ContentPlaceHolder1_grdAccess_ClientState" name="ctl00_ContentPlaceHolder1_grdAccess_ClientState" type="hidden" />	</div>

		</td>
	   
	</tr>
	<tr>
		<td align="center" colspan="2" bgcolor="#92B4E0">
			<span id="ctl00_ContentPlaceHolder1_Label16" class="lbl" style="color:White;font-weight:bold;">Requirements:</span>
		</td>
	</tr>
	<tr>
		<td align="right" >
			&nbsp;
		</td>
		<td>
			<div id="ctl00_ContentPlaceHolder1_grdRequirements" class="RadGrid RadGrid_Web20" style="border-style:None;width:450px;">

<table class="rgMasterTable" border="0" id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00" style="width:100%;table-layout:auto;empty-cells:show;">
<colgroup>
<col  />
<col  />
<col  />
</colgroup>
<thead>
<tr>
	<th scope="col" class="rgHeader">Assigned</th><th scope="col" class="rgHeader">Requirement</th><th scope="col" class="rgHeader">Required Hours</th>
</tr>
</thead><tbody>
<tr class="rgEditRow" id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00__0" style="background-color:White;">
<td>
								<span disabled="disabled"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl04_chkAssigned" type="checkbox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl04$chkAssigned" disabled="disabled" /></span>
							</td><td>
								<span id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl04_requirementTextBox_wrapper" class="riSingle RadInput RadInput_Default" style="width:250px;"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl04_requirementTextBox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl04$requirementTextBox" size="20" class="riTextBox riRead" readonly="readonly" value="Administrative Requirement                        " type="text" /><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl04_requirementTextBox_ClientState" name="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl04_requirementTextBox_ClientState" type="hidden" /></span>
							</td><td style="width:75px;">
								<span id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl04_requiredhoursTextBox_wrapper" class="riSingle RadInput RadInput_Default" style="width:100px;"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl04_requiredhoursTextBox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl04$requiredhoursTextBox" class="riTextBox riRead" readonly="readonly" value="180.00" type="text" /><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl04_requiredhoursTextBox_ClientState" name="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl04_requiredhoursTextBox_ClientState" type="hidden" /></span>
							</td>
</tr><tr class="rgEditRow" id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00__1" style="background-color:White;">
<td>
								<span disabled="disabled"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl05_chkAssigned" type="checkbox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl05$chkAssigned" disabled="disabled" /></span>
							</td><td>
								<span id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl05_requirementTextBox_wrapper" class="riSingle RadInput RadInput_Default" style="width:250px;"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl05_requirementTextBox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl05$requirementTextBox" size="20" class="riTextBox riRead" readonly="readonly" value="Annual Professional Development                   " type="text" /><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl05_requirementTextBox_ClientState" name="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl05_requirementTextBox_ClientState" type="hidden" /></span>
							</td><td style="width:75px;">
								<span id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl05_requiredhoursTextBox_wrapper" class="riSingle RadInput RadInput_Default" style="width:100px;"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl05_requiredhoursTextBox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl05$requiredhoursTextBox" class="riTextBox riRead" readonly="readonly" value="30.00" type="text" /><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl05_requiredhoursTextBox_ClientState" name="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl05_requiredhoursTextBox_ClientState" type="hidden" /></span>
							</td>
</tr><tr class="rgEditRow" id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00__2" style="background-color:White;">
<td>
								<span disabled="disabled"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl06_chkAssigned" type="checkbox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl06$chkAssigned" disabled="disabled" /></span>
							</td><td>
								<span id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl06_requirementTextBox_wrapper" class="riSingle RadInput RadInput_Default" style="width:250px;"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl06_requirementTextBox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl06$requirementTextBox" size="20" class="riTextBox riRead" readonly="readonly" value="New Teacher Professional Development              " type="text" /><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl06_requirementTextBox_ClientState" name="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl06_requirementTextBox_ClientState" type="hidden" /></span>
							</td><td style="width:75px;">
								<span id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl06_requiredhoursTextBox_wrapper" class="riSingle RadInput RadInput_Default" style="width:100px;"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl06_requiredhoursTextBox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl06$requiredhoursTextBox" class="riTextBox riRead" readonly="readonly" value="90.00" type="text" /><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl06_requiredhoursTextBox_ClientState" name="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl06_requiredhoursTextBox_ClientState" type="hidden" /></span>
							</td>
</tr><tr class="rgEditRow" id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00__3" style="background-color:White;">
<td>
								<span disabled="disabled"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl07_chkAssigned" type="checkbox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl07$chkAssigned" disabled="disabled" /></span>
							</td><td>
								<span id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl07_requirementTextBox_wrapper" class="riSingle RadInput RadInput_Default" style="width:250px;"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl07_requirementTextBox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl07$requirementTextBox" size="20" class="riTextBox riRead" readonly="readonly" value="Online Professional Development Requirement       " type="text" /><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl07_requirementTextBox_ClientState" name="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl07_requirementTextBox_ClientState" type="hidden" /></span>
							</td><td style="width:75px;">
								<span id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl07_requiredhoursTextBox_wrapper" class="riSingle RadInput RadInput_Default" style="width:100px;"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl07_requiredhoursTextBox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl07$requiredhoursTextBox" class="riTextBox riRead" readonly="readonly" value="3.00" type="text" /><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl07_requiredhoursTextBox_ClientState" name="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl07_requiredhoursTextBox_ClientState" type="hidden" /></span>
							</td>
</tr><tr class="rgEditRow" id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00__4" style="background-color:White;">
<td>
								<span disabled="disabled"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl08_chkAssigned" type="checkbox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl08$chkAssigned" checked="checked" disabled="disabled" /></span>
							</td><td>
								<span id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl08_requirementTextBox_wrapper" class="riSingle RadInput RadInput_Default" style="width:250px;"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl08_requirementTextBox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl08$requirementTextBox" size="20" class="riTextBox riRead" readonly="readonly" value="All other PD not DPPD                             " type="text" /><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl08_requirementTextBox_ClientState" name="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl08_requirementTextBox_ClientState" type="hidden" /></span>
							</td><td style="width:75px;">
								<span id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl08_requiredhoursTextBox_wrapper" class="riSingle RadInput RadInput_Default" style="width:100px;"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl08_requiredhoursTextBox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl08$requiredhoursTextBox" class="riTextBox riRead" readonly="readonly" value="0.00" type="text" /><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl08_requiredhoursTextBox_ClientState" name="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl08_requiredhoursTextBox_ClientState" type="hidden" /></span>
							</td>
</tr><tr class="rgEditRow" id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00__5" style="background-color:White;">
<td>
								<span disabled="disabled"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl09_chkAssigned" type="checkbox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl09$chkAssigned" disabled="disabled" /></span>
							</td><td>
								<span id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl09_requirementTextBox_wrapper" class="riSingle RadInput RadInput_Default" style="width:250px;"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl09_requirementTextBox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl09$requirementTextBox" size="20" class="riTextBox riRead" readonly="readonly" value="School Counselor                                  " type="text" /><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl09_requirementTextBox_ClientState" name="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl09_requirementTextBox_ClientState" type="hidden" /></span>
							</td><td style="width:75px;">
								<span id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl09_requiredhoursTextBox_wrapper" class="riSingle RadInput RadInput_Default" style="width:100px;"><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl09_requiredhoursTextBox" name="ctl00$ContentPlaceHolder1$grdRequirements$ctl00$ctl09$requiredhoursTextBox" class="riTextBox riRead" readonly="readonly" value="150.00" type="text" /><input id="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl09_requiredhoursTextBox_ClientState" name="ctl00_ContentPlaceHolder1_grdRequirements_ctl00_ctl09_requiredhoursTextBox_ClientState" type="hidden" /></span>
							</td>
</tr>
</tbody>

</table><input id="ctl00_ContentPlaceHolder1_grdRequirements_ClientState" name="ctl00_ContentPlaceHolder1_grdRequirements_ClientState" type="hidden" />	</div>

		</td>
	   
	</tr>
	<tr>
		<td align="right" >
			&nbsp;
		</td>
		<td height="20px">
		</td>
	   
	</tr>
	<tr>
		<td colspan="2">
		 
		
		
		</td>
	
	  </tr>
	 </table>


	  </div>
		 
	  </div>
   <div id="footer" style="padding:5px; position: relative; background-color: #E8E8E8; height: 75px;
		font-family: Arial, Helvetica, sans-serif; font-size: 10pt; text-align: left;
		vertical-align: middle;">
		<br />
		KALPA Professional Development Management System (Version 3)<br />
		
		<font style='font-size: 8pt;color:Gray'>KALPA Systems Inc.©<br />
			
			2022 All rights reserved</font>
	 
	</div>
   
</div>   

</form>
</body>
</html>