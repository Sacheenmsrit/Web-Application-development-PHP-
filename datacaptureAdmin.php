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
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$country = $_POST["country"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$uname = $_POST["uname"];
$pward = $_POST["pword"];
$hint = $_POST["hint"];
$value = 1;
$sql = "INSERT INTO UserDetails (FirstName, LastName, DOB, Sex, Nationality, MobileNo, EmailId, UserName, Password, Hint, value, BatchNo)
VALUES ('$firstname', '$lastname', '$dob', '$gender', '$country', '$mobile', '$email', '$uname', '$pward', '$hint' , '$value', "0")";
if ($conn->query($sql) === TRUE) {
   ?><a href="loginaftersignin.php">Login</a>
   <a href="Mainhomepage.php">Home Page</a><?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?> 

