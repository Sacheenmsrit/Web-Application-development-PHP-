
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AgriInfo";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$uname = $_SESSION['CurrentUser'];
$sql = "SELECT BatchNo FROM UserDetails WHERE UserName = '$uname'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
     while($row = $result->fetch_assoc()) 
     {
			$batch=$row['BatchNo'];		
	 }
}
$sql = "SELECT * FROM Pesticides WHERE BatchNo = '$batch'";
$flag=0;
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	
     while($row = $result->fetch_assoc()) 
     {
			$image = $row["URL"];
		
			?><img src="<?php $image ?>" alt="name" height="50%" width="50%" >
			<?php
			echo "<br>"."BatchNo : ".$row['BatchNo']."<br>";
			echo "Description : ".$row['DESCRIPTION']."<br>";
			echo "Quantity : ".$row['Quantity']."<br>";
			echo "Price : ".$row['PRICE']."<br>";
}
}
	$conn->close();
?>


