
<?php
session_start();
include_once "Function.php";
$obj2=new record;
$obj2->Ofmanager->fileN="product.txt";



$obj1=new record;
$obj1->Ofmanager->fileN="users.txt";
$es = $_SESSION["Email"];
$is=$obj1->Esearchid($es);
$is2=$obj1->Esearchuser($es);
//echo $is;

//$all=[];
$arr=$obj2->req($_GET["id"]);
$line=[];
$line=$obj2->req2($_GET["id"]);
$arrline = explode("~", $line);




?>
<table border="1" style="font-family:Arial,sans-serif;font-size:10pt;empty-cells:show" cellpadding="5" cellspacing="0" width="100%" dir="ltr">


<tbody><tr>
    <th style="font-size:10pt;font-family:Arial" dir="ltr" align="center" width="10%">Product ID</th>
    <th style="font-size:10pt;font-family:Arial" dir="ltr" align="center" width="10%">Product Name</th>
    <th style="font-size:10pt;font-family:Arial" dir="ltr" align="center" width="30%">Details</th>
    <th style="font-size:10pt;font-family:Arial" dir="ltr" align="center" width="25%">Shipped To</th>
    <th style="font-size:10pt;font-family:Arial" dir="ltr" align="center" width="10%">Unit Price</th>
    <th style="font-size:10pt;font-family:Arial" dir="ltr" align="center" colspan="2">Amount</th>
</tr>


    <tr>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="center"><?php echo $arrline[0]?></td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="left"><?php echo $arrline[1]?></td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="30%" dir="ltr" align="left"><?php echo $arrline[2]?></td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="25%" dir="ltr" align="left">
                        Candidate ID:
                        <?php echo $is?>
                        <br><br> 
                        Candidate Name:
                        <?php echo $is2?>
        </td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="right"><?php echo $arrline[4]?></td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="right"><?php echo $arrline[4]?></td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="5%" dir="ltr" align="center">EGP</td>
    </tr>



    <!-- <tr>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="center">1</td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="left">422435469</td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="30%" dir="ltr" align="left">
            Microsoft Training Day
                <br><br>  
        </td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="25%" dir="ltr" align="left">
                Not Applicable
        </td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="right">-39.00</td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="right">-39.00</td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="5%" dir="ltr" align="center">USD</td>
    </tr> -->





<tr>
    <td style="font-size:10pt;font-family:Arial" valign="top" colspan="4" rowspan="6" width="75%" dir="ltr" align="left">
<br>
<br>
<br>



               Om el moameneen is a charity ,Where we help people in many ways
                <br><br>



				<div style="font-size:10pt;font-family:Arial" dir="ltr">
                    Our Address:<br>
						Ay giha t5af tgiha
                        <br>
	Cairo

<!-- &nbsp;<br> -->
	

&nbsp;<br>
	Egypt

&nbsp;<br>
				</div>

			
			<br><br>

    </td>
    <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="left">Subtotal</td>
    <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="right">0.00</td>
    <td style="font-size:10pt;font-family:Arial" valign="top" width="5%" dir="ltr" align="center">USD</td>
</tr>
<tr>
    <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="left">Shipping:</td>
    <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="right">0.00</td>
    <td style="font-size:10pt;font-family:Arial" valign="top" width="5%" dir="ltr" align="center">USD</td>
</tr>

    <tr>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="left">Tax</td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="right">0.00</td>
        <td style="font-size:10pt;font-family:Arial" valign="top" width="5%" dir="ltr" align="center">USD</td>
    </tr>

<tr>
    <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="left">Total</td>
    <td style="font-size:10pt;font-family:Arial" valign="top" width="10%" dir="ltr" align="right">0.00</td>
    <td style="font-size:10pt;font-family:Arial" valign="top" width="5%" dir="ltr" align="center">USD</td>
</tr>


<tr>
    <td style="font-size:10pt;font-family:Arial" colspan="7">&nbsp;</td>
</tr>

</tbody>
</table>
<?php echo"<img src='$arrline[3]' class=way>"?>
<br>
<style>
     @media print{
 .way { 
    visibility: hidden;
}
/* .print-container, .print-container *{
    visibility: visible;
}
.print-container *{
   position:absolute;
   left:110px;
   top: 1110px;;
    }  */
} 
</style>
<button class="way" name="dd" onclick="window.print()">Print the invoice</button>
<?php
// echo "<a class=way href=prodppp.php>Go back</a>";
?>