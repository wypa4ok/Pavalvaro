<html>
<head lang="en" style="width: 100%;">
	<link type="text/css" rel="stylesheet" href="css/Assign2.css" />
	<title> My Assignment 02 - ULI705</title>
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
        
	<!--		
		<div>
		<h2> WINDROSE Company </h2>
		<sub> Freedom Fun Adventure </sub>
		</div>
	-->
	<!-- END OF PRE-HEADER BLOCK FOR DATE and LOGO-->

	<!-- START OF MENU BLOCK-->
		<ul id="menu">
			<li><a href="Assign2.html">Home</a></li>
			<!-- <li><a href="https://zenit.senecac.on.ca/~uli705_143a01/assign2/products.html">Products</a></li>  
		  -->
			<li><a href="products.html">Products</a></li>
			<li><a href="Contact.html">Contact</a></li>
			<li><a href="Inventory.html">Inventory</a></li>
		</ul>
		
		<?php 
$host="mysql-db.zenit"
$db_user="uli705_143a17";
$db_password="rkNJ5377";
$database="uli705_143a17";
$query="select * from Product";

$dbh=mysql_connect($host,$db_user,$db_password);
mysql_select_db($database);
$result=mysql_query($query, $dbh);
$fh = fopen("./data/result.xml", "w") or die("can't open file");

fwrite($fh, "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n");
fwrite($fh, "<travel>\n");
if ($myrow = mysql_fetch_array($result))
{
do
{
fwrite($fh,"\t<place>\n");
$data = "\t\t<id>".$myrow[0]."</id>\n";
fwrite($fh,$data);
$data = "\t\t<name>".$myrow[1]."</name>\n";
fwrite($fh,$data);
$data = "\t\t<cost>".$myrow[2]."</cost>\n";
fwrite($fh,$data);
$data = "\t\t<qnt>".$myrow[3]."</qnt>\n";
fwrite($fh,$data);
fwrite($fh,"\t</place>\n");
} while ($myrow = mysql_fetch_array($result));
echo "The XML file was successfully created!!";
} else
// else if table is empty, give error message
echo "The table is empty";
// write the final closing root tag to the xml file
fwrite($fh, "</travel>\n");

fclose($fh);
// close the database
mysql_close($dbh);
?>
<br/><br/>

<h3><a href="./data/result.xml">ResultXML</a></h3>
?>

	
		
		
</body>
</html>