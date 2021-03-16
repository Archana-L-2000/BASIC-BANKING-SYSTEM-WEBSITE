
<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
<?php include "header.php";

    include"config.php";
	$sql = "SELECT * FROM accountholderinfo";
	$result = mysqli_query($conn,$sql);
	?>

<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">



<body>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
	<table id="customers" class="center">
		<thead>
		<tr>
			<th>Customer ID</th>
			<th>Customer Name</th>
			<th>Customer Email</th>
			<th>Current Balance</th>
			<th>Transact</th>
			<th >Details </th>
			
        </tr>
    </thead>
    <?php
        
	if ($result->num_rows > 0) {
		
		

	     while($row = mysqli_fetch_object($result)){
             
	    ?> 	
	     	<tr>
	     	<td><?php echo  $row->CustomerID;?> </td>
	     	<td><?php echo  $row->CustomerName;?></td>
	     	<td><?php echo $row->CustomerEmail;?></td>
	     	<td><?php echo $row->CurrentBalance;?></td>
	     	<td><a href="transfer.php?CustomerID= <?php echo $row->CustomerID ;?> "><button type="button" class="btn btn-primary"  >Transfer Money</button></a><?php ?></td>
	     	<td >
	     	     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="<?php echo $row->CustomerID;?>" onclick="showDetails (this);">VIEW
                             </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                            <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                   
                               </div>
                                  <div class="modal-body">
                                   <p>Customer Id:<span id="CustomerID"></span></p>
                                   <p>Customer Name:<span id="CustomerName"></span></p>
                                   <p>Customer Email:<span id="CustomerEmail"></span></p>
                                   <p>Balance:<span id="CurrentBalance"></span></p>
                                   <p>Details:<span id="Details"></span></p>

                                     
                                  
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                     
      </div>
    </div>
  </div>
</div>
<script>
	function showDetails(button){
		var CustomerID = button.id;
        $.ajax({
        	url:"view.php",
        	method:"GET",
        	data:{"CustomerID":CustomerID},
        	success:function(response){
        		//alert(response);
        		var row = JSON.parse(response);
        		$("#CustomerID").text(row.CustomerID);
        		$("#CustomerEmail").text(row.CustomerEmail);
        		$("#CustomerName").text(row.CustomerName);
        		$("#CurrentBalance").text(row.CurrentBalance);
        		$("#Details").text(row.Details);
        		$("#exampleModalLabel").text(row.CustomerName);
        		
        	}
        });
	}
</script>

	     </td>  
 
	     	</tr>
	     	

	     	
	     	<?php
	     }

     	     	echo "<table>";
     	     }
	     	else{
	     		echo "0 result";
	     	 
	     }
	     ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	     	?>
	  
	     	
	     	

           


        
    
    

    
</table>	     	 
        
	     	
</body>
</html>
<?php include "footer.php"?>
