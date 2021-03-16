<?php include "header.php" ;
 include "config.php";




	$sql = "SELECT * FROM transfer";
	$result = mysqli_query($conn,$sql);
	?>

<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">


<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script></head>
<body>
	<table id="customers" class="center">
		<thead>
		<tr>
			<th>Sender ID</th>
			<th>Sender Name</th>
			<th>Receiver Name</th>
			<th>Amount Credited</th>
			<th>Date and Time</th>
			<th>Transact</th>
			
			
        </tr>
    </thead>
    <?php
        
	if ($result->num_rows > 0) {
		
		

	     while($row = mysqli_fetch_object($result)){
             
	    ?> 	
	     	<tr>
	     	<td><?php echo  $row->Sender_ID;?> </td>
	     	<td><?php echo  $row->Sender;?></td>
	     	<td><?php echo $row->Receiver;?></td>
	     	<td><?php echo $row->Credit;?></td>
	     	<td><?php echo $row->DateTime;?></td>
	     	<td><a href="transfer.php?CustomerID= <?php echo $row->Sender_ID;?> "><button type="button" class="btn btn-primary"  >Transfer Money</button></a><?php ?></td>
	     </tr>
	     <?php
	     }

     	     	echo "<table>";
     	     }
	     	else{
	     		echo "0 result";
	     	}
	     	?>
	 </table>
	</body>
	</html>
	<?php include "footer.php"?>


