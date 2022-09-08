<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires:0");
	
	require_once("lib/encdec_paytm.php");
	require_once("lib/config_paytm.php");
	require_once("dbconfig.php");
	
	$appno=$_POST['application_no'];

$q=	mysqli_query($connect,"select * from onlinepu where application_no='$appno'");
        while($row=mysqli_fetch_array($q)){
                            $email='raghavendraehmitrasoftwares@gmail.com';
            	            $name=$row['stu_name'];
        					$custId=$row['stu_aad_num'];
        					$orderId=$appno;
            				$mobileNo=$row['con_no_fat'];
        					$txnamount=$row['txnamount'];
    }
	
	
	try {
	
	
	define("email",$email);
	define("custId",$custId);
	define("orderId",$orderId);
	define("mobileNo",$mobileNo);
    define("txnAmount",$txnamount);
	
    $paytmParams = array();
	$paytmParams["EMAIL"] = email;
    $paytmParams["CUST_ID"] = custId;
	$paytmParams["ORDER_ID"] = orderId;
    $paytmParams["MOBILE_NO"] = mobileNo;
	$paytmParams["TXN_AMOUNT"] = txnamount;
	$paytmParams["MID"] = PAYTM_MERCHANT_MID;
	$paytmParams["CALLBACK_URL"] = CALLBACK_URL;
    $paytmParams["CHANNEL_ID"] =PAYTM_CHANNEL_ID;
    $paytmParams["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
    $paytmParams["INDUSTRY_TYPE_ID"] =PAYTM_INDUSTRY_TYPE_ID;
    $paytmChecksum = getChecksumFromArray($paytmParams, PAYTM_MERCHANT_KEY);
    $transactionURL = "https://securegw.paytm.in/order/process";//constant value need to change from website for production
	
	
	}
	catch(PDOException $e)
    {
    $errors = $sql . " " . $e->getMessage();
	
	$sql1 = "INSERT INTO pay_paytm_error (errors,orderId)VALUES ('$errors','$orderId')";
    $conn->exec($sql1);
    }
	$conn = null;
?>
<html>
    <head>
        <title>Merchant Checkout Page</title>
    </head>
    <body>
        <center><h1>Please do not refresh this page...</h1></center>
        <form method='post' action='<?php echo $transactionURL; ?>' name='f1'>
            <?php
                foreach($paytmParams as $name => $value) {
                    echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
                }
            ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $paytmChecksum ?>">
        </form>
        <script type="text/javascript">
            document.f1.submit();
        </script>
    </body>
</html>