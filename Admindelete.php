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
$sql = "DELETE FROM UserDetails WHERE UserName = '$uname'";
$conn->query($sql);
$conn->close();
header("Location:Mainhomepage.html"); 
?>


