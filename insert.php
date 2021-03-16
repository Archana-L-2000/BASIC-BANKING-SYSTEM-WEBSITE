
<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
  
<html>
<head>
	<style type="text/css">
		body{
		 background :url("https://webcomsystem.net/wp-content/uploads/Start-Online-Money-Transfer-Business-with-money-transfer-software.jpg") no-repeat left !important;
		}
		.right{
			color:white;
			font-family:"elephant";
			margin:50px 50px 50px 50px;
			text-shadow: 2px 5px 5px violet;
		}
		.right:hover{
			color: yellow;
			font-size:24px;
		}
	</style>
</head>
<body>
	<p style="font-size: 72px; color:white; text-shadow: 2px 2px 2px yellow;">MONEY TRANSFER</p>
	<p class=right>



 <?php


   {

    	 echo  "Transaction Done Successfully" ;
			
			}
			mysqli_close($conn);

?>
</p>
<a href ="transaction.php" ><button class ="button"><span>See TRANSACTION history</span></button></a>
<a href ="details.php" ><button class ="button"><span>Back to Customers Data</span></button></a>
<br>
<br>
<a href ="banking website.php"  style="margin-left: 180px;"><button class ="button"><span>Back to Home Page</span></button></a>
</body>
</html>
	
	
