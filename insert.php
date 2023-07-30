    <?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "cart_db"; 
$conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
if (isset($_POST['submit'])) {
    $name1 = $_POST['name'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $repass = $_POST['repass'];
    if($pass!=$repass){
        $msg = "Password not matched!";
        $conn->close(); 
    }
    else{
    $query =  "INSERT INTO `validate`(`name`, `pass`, `email`) VALUES ('$name1','$pass','$email')";
    $result = $conn->query($query); 
    $conn->close(); 
    $msg = "Success, you can ";
    }
}
include "signupResult.php";
?> 