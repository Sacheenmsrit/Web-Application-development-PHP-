 <?php
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
$BatchNo = $_POST["BatchNo"];
$url = $_POST["URL"];
$price = $_POST["PRICE"];
$dec = $_POST["Description"];
$quan = $_POST["Quantity"];

$sql = "INSERT INTO Pesticides (BatchNo, URL, PRICE, DESCRIPTION, Quantity) VALUES ('$BatchNo', '$url', '$price', '$dec', '$quan')";
if ($conn->query($sql) === TRUE) {
   
   header("Location:AdminPesticides.php"); 
exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 


