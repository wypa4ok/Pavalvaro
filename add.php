<html>
<head lang="en" style="width: 100%;">
	<link type="text/css" rel="stylesheet" href="css/Assign2.css" />
	<title> My Assignment 02 - ULI705</title>
	<script type="text/javascript" src="valid.js"> </script>
</head>

<body>


		<!-- START OF PRE-HEADER BLOCK FOR Info and LOGO--> 
		
		<table class="table_scale" width="650" align="center" cellpadding="0" cellspacing="0" border="0" style="margin-top: 20px;border-collapse: collapse;">
				<tr>
					<td>
						<table bgcolor="" width="650" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">
							<tr>
								
								<td align="right" valign="top" style="padding: 10px 0px; font-family:Arial, Helvetica;  color:#677b82; font-size:16px; font-size:1.6rem; line-height:30px;"> 
								<img src="images/logo1.jpg" alt="Company Logo" width="350" height="130"  border="0" style="display: inline;">
								</td>
								<td align="left" valign="top" style="padding: 10px 0px; font-family:Arial, Helvetica;  color:#33312f; font-size:28px; font-size:1.8rem; line-height:28px;">
									 <table width="650" cellpadding="0" cellspacing="0" border="0" style="margin-top: 10px;border-collapse: collapse;">
									 		<tr>
									 			<td align="center" valign="top" style="padding: 5px 100px; font-family:Arial, Helvetica;  color:#677b82; font-size:16px; font-size:1.6rem; line-height:30px;"> It's easy to find us! 
									 			</td>
									 		</tr>
									 		<tr>
									 			<td align="center" valign="top" style="padding: 5px 80px; font-family:Arial, Helvetica;  color:#677b82; font-size:14px; font-size:1.2rem; line-height:20px;">
								  			 	<ul class="">
														<li>343 Yonge St., Toronto, On.</li>
														<li>Phone: (416) 878-6655 </li>
														<li>infotravel@tratravel.ca </li>
														<li>www.tratravelagency.ca</li>
										  		</ul>
										  	</td>
										  </tr>		
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			
			<ul id="menu">
			<li><a href="Assign2.html">Home</a></li>
			<!-- <li><a href="https://zenit.senecac.on.ca/~uli705_143a01/assign2/products.html">Products</a></li>  
		  -->
			<li><a href="products.html">Products</a></li>
			<li><a href="Contact.html">Contact</a></li>
			<li><a href="Inventory.html">Inventory</a></li>
		</ul>
<h2 align="center">ADD</h2>

<div style="width: 50%; float:left;">

<?php 
$host="db-mysql.zenit";
$db_user="uli705_143a17";
$db_password="rkNJ5377";
$database="uli705_143a17";
$query="select * from Product";

$dbh=mysql_connect($host,$db_user,$db_password);
mysql_select_db($database);
$result=mysql_query($query, $dbh);
?>

<table style="color:0066FF;" align="center" border="1" cellpadding="3" cellspacing="0">

<?php

if ($myrow = mysql_fetch_array($result))
{

echo "<tr><th>ID</th><th>NAME</th><th>COST</th><th>Quantity</th></tr>\n";
do
{

printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n", $myrow[0],$myrow[1],$myrow[2],$myrow[3]);
} while ($myrow = mysql_fetch_array($result));
} else
echo "The table is empty";
?>
</table>		


</div>
		
<div style="width: 50%; float:right;">			
<h3>Please enter information about the product you want to add:</h3>
<br/>
<form name="myForm" action="add_prod.php" method="POST" onsubmit="return validation()" >
Product id:  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="prod_id" /> <br/> <br/>
Product name:  &nbsp &nbsp &nbsp <input type="text" name="prod_name" /> <br/><br/>
Product cost: &nbsp &nbsp  &nbsp &nbsp <input type="text" name="prod_cost" /> <br/><br/>
Product quantity: &nbsp <input type="text" name="prod_qnt" /> <br/><br/>
<input type="submit" name="sub" value = "Add record">
</form>

</div>

</body>
</html>