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
$sql = "SELECT * FROM UserDetails WHERE UserName = '$uname'";
$result = $conn->query($sql);


$flag=0;
if ($result->num_rows > 0) 
{
     while($row = $result->fetch_assoc()) 
     {
			echo "First Name : ".$row['FirstName']."<br>";
			echo "Last Name : ".$row['LastName']."<br>";
			echo "Date of Birth : ".$row['DOB']."<br>";
			echo "Sex : ".$row['Sex']."<br>";
			echo "Nationality : ".$row['Nationality']."<br>";
			echo "Mobile No : ".$row['MobileNo']."<br>";
			echo "Email Id : ".$row['EmailId']."<br>";
			echo "User Name : ".$row['UserName']."<br>";
			echo "Hint : ".$row['Hint']."<br>";
		
	 }
}
	$conn->close();
?>


