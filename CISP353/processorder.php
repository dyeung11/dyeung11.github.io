<?php
	//defining local variables
	$tireqty=$_POST['tireqty'];
	$oilqty=$_POST['oilqty'];
	$sparkqty=$_POST['sparkqty'];
	$find=$_POST['find'];
	//setting prices for items
	define('TIREPRICE', 100);
	define('OILPRICE', 10);
	define('SPARKPRICE', 4); 
?>
<html>
<head>
<title>Bob's Auto Parts - Order Results</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?php
	echo "<p>Order Processed at ".date('H:i, F jS Y')."</p>"; //Time of purchase
	echo '<p>Your order is as follows: </p>';
	//Print quantity of items with error checking.;
	$totalqty = 0; //Initializing final quantity.
	$totalqty = $tireqty + $oilqty + $sparkqty; //Final number of items is sum of items.
	if ($totalqty == 0) {
	echo "You did not order anything on the previous page!<br />";
	} else {
	if ($tireqty > 0)
	echo $tireqty." tires<br />";
	if ($oilqty > 0)
	echo $oilqty." bottles of oil<br />";
	if ($sparkqty > 0)
	echo $sparkqty." spark plugs<br />";
}
	
	//Testing quantity of tires and respective discount.
	if ($tireqty < 10) {
	$discount = 0;
	} elseif (($tireqty >= 10) && ($tireqty <= 49)) {
	$discount = 0.05; echo "You ordered enough for a discount of 5%.<br />";
	} elseif (($tireqty >= 50) && ($tireqty <= 99)) {
	$discount = 0.10; echo "You ordered enough for a discount of 10%.<br />";
	} elseif ($tireqty >= 100) {
	$discount = 0.15; echo "You ordered enough for a discount of 15%.<br />";
	}
	
	//Retrieve choice selection from orderform html. 
	if ($find == "a") {
	echo "<p>Regular customer.</p>";
	} elseif ($find == "b") {
	echo "<p>Customer referred by TV advert.</p>";
	} elseif ($find == "c") {
	echo "<p>Customer referred by phone directory.</p>";
	} elseif ($find == "d") {
	echo "<p>Customer referred by word of mouth.</p>";
	} else {
	echo "<p>We do not know how this customer found us.</p>";
	}
	
	
	echo "Items ordered: ".$totalqty."<br />"; //Display sum of items.
	$totalamount = 0.00;
	//Calculate total cost amount by multiplying cost with number of each item.
	$totalamount = $tireqty * TIREPRICE
	+ $oilqty * OILPRICE
	+ $sparkqty * SPARKPRICE;
	echo "Subtotal: $".number_format($totalamount,2)."<br />";
	$totalamount -= $tireqty * TIREPRICE * $discount;
	echo "Total after discount: $".number_format($totalamount,2)."<br />";
	$taxrate = 0.10; // local sales tax is 10%
	$totalamount = $totalamount * (1 + $taxrate);
	echo "Total including tax: $".number_format($totalamount,2)."<br />";
?>
</body>
</html>
