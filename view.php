
 
 

 <?php
        $servername = "localhost";
        $username   = "root";
        $password   = "root";
        $dbname     = "myfirstsite";


        $con = mysqli_connect( $servername, $username, $password, $dbname);
        if($con->connect_error){
	die("Connection failed: " . $con->connect_error);
}
    $CustomerID = $_GET["CustomerID"];

	$sql = "SELECT  * FROM `accountholderinfo` WHERE CustomerID =$CustomerID" ;
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_object($result);
	echo json_encode($row);
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
	