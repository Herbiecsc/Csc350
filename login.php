<?php
	session_start();

	if (isset($_POST['submitLogin'])) {
		if ($_POST['buyOrSell'] == "buy")
		{$_SESSION['buyer_id'] = 1;}
		header("Location: loginPage.php");
		
	}

	if (isset($_POST['buyOrSell'])) {
		if($_POST['buyOrSell'] == "sell")
		{


		}else {

		}


	}else {echo "Does not verify buyer or seller";}



?>
