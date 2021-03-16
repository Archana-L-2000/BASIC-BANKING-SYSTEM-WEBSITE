
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <head>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.style {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
form>#table{
	margin-right:150px;
}
</style>
</head>

	<?php include "header.php";?>
	<div class="container-fluid">
<?php
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include"config.php";
$sid =$_GET['CustomerID'];
$sql ="SELECT * FROM accountholderinfo where CustomerID =$sid";
$result = mysqli_query($conn,$sql);
if(!$result){

 echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);

?>
<form  action = "credit.php?CustomerID=<?php echo $sid ?>" method="post" name ="tcredit" class="tabletext"  style = "margin:0px 0px 0px 0px; width: 100%;">
	
	<br>
	<br>
	
	 <table class="table table-striped table-condensed table-bordered " id ="table" style="color:white; background:radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%); margin:0px 0px 0px 0px;  " >
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['CustomerID'] ?></td>
                    <td class="py-2"><?php echo $rows['CustomerName']	 ?></td>
                    <td class="py-2"><?php echo $rows['CustomerEmail'] ?></td>
                    <td class="py-2"><?php echo $rows['CurrentBalance'] ?></td>
                </tr>
            </table>
            <br>
       
  
  
  <br>
  <div class="style">
  
  <label for="to"><p style="color:black;">Transfer to:</p></label>
  <select id="to" name="rid" class ="form-control" required>
    
    <option value="" disabled selected>Choose</option>
    <?php
    include"config.php";
$sid =$_GET['CustomerID']; 
$sql ="SELECT * FROM accountholderinfo WHERE CustomerID !=$sid" ;
$result =mysqli_query($conn,$sql);
if(!$result){
	echo "Error".$sql."<br>".mysqli_error($conn);

}
while($rows = mysqli_fetch_assoc($result)){
	?>

<option class="table" value="<?php echo $rows['CustomerID'];?>" >
                
                    <?php echo $rows['CustomerName'] ;?> (Balance: 
                    <?php echo $rows['CurrentBalance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>

    
  </select> <br>
  <br>
  
  <p style="color:black;">Amount:<p> <input type="number" name="Amt" placeholder="enter amount to be credited">
  <br>
  <br>

  <!--<input type="submit" onclick="myFunction()" value="Submit"></p>-->
 <a href="credit.php?CustomerID= <?php echo $_GET['CustomerID'] ?>"> <button type="submit"   name="submit" class="btn btn-primary" >Submit</button></a></div>
</form>


<br>
<br>

<a href ="transaction.php"  ><button class ="button" style="background-color: red; margin-left: 50px;"><span>See transaction history</span></button></a>

</div>
</body>
</html>
<?php include "footer.php"?>