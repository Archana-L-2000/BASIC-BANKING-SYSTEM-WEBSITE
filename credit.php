

<?php include "config.php";
        
	
   


	if(isset($_POST['submit']))
	{
	$from = $_GET['CustomerID'];
	$to   = $_POST['rid'];
	$amount = $_POST['Amt'];

	$sql = "SELECT * from accountholderinfo where CustomerID = $from";
	$query = mysqli_query($conn,$sql);
	$sql1 = mysqli_fetch_array($query);
	


    $sql = "SELECT * from accountholderinfo where  CustomerID = $to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);
    



    
    if (($amount)<0)
   {
       
        echo "<script>alert('Oops! Negative values cannot be transferred');
                          window.history.go(-1);
                         </script>";
    }

  
    
    else if($amount > $sql1['CurrentBalance']) 
    {
        
        
         echo "<script> alert('Sorry! Insufficient Balance');
                               window.history.go(-1);
                         </script>";
    }
    


    
    else if($amount == 0){

        
          echo "<script> alert('Oops! Zero value cannot be transferred');
                               window.history.go(-1);
                         </script>";
     }


    else {
         
               
                $newbalance = $sql1['CurrentBalance'] - $amount;
                $sql = "UPDATE accountholderinfo set CurrentBalance=$newbalance where CustomerID=$from";
                mysqli_query($conn,$sql);
             
                  
                
                $newbalance = $sql2['CurrentBalance'] + $amount;
                $sql = "UPDATE accountholderinfo set CurrentBalance=$newbalance where CustomerID=$to";
                mysqli_query($conn,$sql);
                
                
                $sid =$sql1['CustomerName'];
                $rid =$sql2['CustomerName'];
                $Id =$sql1['CustomerID'];
                $bal =$sql1['CurrentBalance'];
                echo $Id; 
                echo $sid;
                echo $rid;                
                
                $sql3 = 
                "INSERT INTO `transfer`(`s_no`, `Sender`, `Receiver`, `Credit`, `Account_Balance`,`DateTime`,`Sender_ID`) VALUES (0,'$sid','$rid','$amount','$bal',now(),'$Id')";
                
	
	
                $query=mysqli_query($conn,$sql3);
                	 
                if($query){
                     echo "<script> alert('Transaction Successful');
                               window.location='insert.php';
                         </script>";
                         include 'insert.php';
                    
                }



                $newbalance= 0;
                $amount =0;
        }

        
    
}
mysqli_close($conn);
?>

<?php include "footer.php"?>





	