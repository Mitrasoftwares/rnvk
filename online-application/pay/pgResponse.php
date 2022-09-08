<!DOCTYPE html>
<html>
<title>PAY</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body align="center">

<div class="w3-container">
<h2>Thank You</h2>
<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
//include'sendsms.php';
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
require_once("dbconfig.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	
//	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<center><p class='w3-border w3-border-green' style='width:200px;'><b>Transaction is success</b></p></center>";
		
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<p><b>Transaction is fail</b></p>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
			$PAY_ORDERID=$_POST['ORDERID'];
			$PAY_TXNAMOUNT=$_POST['TXNAMOUNT'];
			$PAY_TXNDATE=$_POST['TXNDATE'];
			$PAY_PAYMENTMODE=$_POST['PAYMENTMODE'];
			$PAY_TXNID=$_POST['TXNID'];
			$PAY_STATUS=$_POST['STATUS'];
			$PAY_RESPMSG=$_POST['RESPMSG'];
			$PAY_CURRENCY=$_POST['CURRENCY'];


if($PAY_PAYMENTMODE=='NB'||$PAY_PAYMENTMODE=='DC'||$PAY_PAYMENTMODE=='CC'||$PAY_PAYMENTMODE=='PPI'){
	$PAY_BANKNAME=$_POST['BANKNAME'];
}else{
	$PAY_BANKNAME=null;
}

try {
	$sql = "UPDATE `online1` SET `txtdate`='$PAY_TXNDATE',`paymentmode`='$PAY_PAYMENTMODE',`txnid`='$PAY_TXNID',`status`='$PAY_STATUS',`bankname`='$PAY_BANKNAME' WHERE application_no='$PAY_ORDERID'";
    mysqli_query($connect,$sql);
    
    
//     $stmt=$conn->prepare("select distinct mobile from pay_paytm where orderid='$PAY_ORDERID'");
// 		$stmt->execute();
// 		$result=$stmt->fetch();
// 		$mb= $result['mobile'];
  
    // if($PAY_STATUS=='TXN_SUCCESS'){
    //     $msg = "Your Transaction is Successfull. Transaction ID : $PAY_TXNID, Transaction Amount : $PAY_TXNAMOUNT";
    //     sendsms($msg,$mb);
    // }
    // else{
        
    // }
    
    
	}
	catch(PDOException $e)
    {
    $errors = $sql . " " . $e->getMessage();
	
// 	$sql1 = "INSERT INTO pay_paytm_error (errors,orderId)VALUES ('$errors','$orderId')";
//     $conn->exec($sql1);
    }
//	$conn = null;
	}
	

}
else {
	
	echo"<center><p class='w3-border w3-border-red' style='width:200px;'><b>Transaction is fail</b></p></center>";
	$PAY_ORDERID="-------";
	$PAY_TXNDATE="-------";
	$PAY_TXNID="-------";
}






?>

   
    <div class="w3-panel w3-blue w3-card-4 col-sm-4 w3-padding-32" align="left">
    <table>
		<tr >
		<td width="350px">Application ID</td><td><?php echo $PAY_ORDERID;?></td>
		</tr>
		<tr>
		<td>Order Date and Time</td><td><?php echo $PAY_TXNDATE;?></td>
		</tr>
		<tr>
		<td>Transaction ID</td><td><?php echo $PAY_TXNID;?></td>
		</tr>
	</table>
	
  </div>
  
  </div>
</div>

</body>
</html>

<?php
if($PAY_STATUS=="TXN_SUCCESS"){


?>
<a href="<?php echo '/print_rece.php?application_no='.$PAY_ORDERID ?>"><button class="btn btn-secondary">
	    
	   Take a Print/Download a copy of Submitted Application Form of college
	</button></a>
	<a href="<?php echo '/print_rece12.php?application_no='.$PAY_ORDERID ?>"><button class="btn btn-secondary">
	    
	   Take a Print/Download a copy of Submitted Application Form of school
	</button></a>
	
<!--<script>-->

<!--window.setTimeout(function(){-->

       
<!--       window.location.href = "https://rnvk.in/print_rece.php?application_no="+<?php echo $PAY_ORDERID;?>;-->

<!--    }, 9000);-->
<!--</script>-->
<?php }


?>