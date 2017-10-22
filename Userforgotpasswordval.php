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
$sql = "SELECT Hint FROM UserDetails WHERE value=0";
$result = $conn->query($sql);
$password = $_POST["password"];
$hint = $_POST["hint"];
$UserName = $_POST["UserName"];
$flag=0;
if ($result->num_rows > 0) 
{
     while($row = $result->fetch_assoc()) 
     {
        if($hint == $row["Hint"])
		{
			$flag=1;
		}
	 }
}
if($flag == 1)
{
	$sql = "UPDATE UserDetails SET UserName = '$UserName' , Password = '$password' WHERE Hint = '$hint'";
	if ($conn->query($sql) === TRUE)
	{header("Location:Userloginaftersignin.html"); 
		echo "Record updated successfully";
		
	} 
	else 
	{
		echo "Error updating record: " . $conn->error;
	}
}
else
	
			header("Location:GiveHint.html"); 
?>


