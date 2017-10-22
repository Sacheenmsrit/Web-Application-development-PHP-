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
$BatchNo = $_POST["batch"];
$user = $_SESSION['CurrentUser'];
$sql = "UPDATE UserDetails SET BatchNo='$BatchNo' Where UserName = '$user'";



if ($conn->query($sql) === TRUE) {
    header("Location:UserFertizers.php"); 
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 
