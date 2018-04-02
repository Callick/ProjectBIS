 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "billinginformationsystem";
$cid=$_POST['cid'];
$cname=$_POST['cname'];
$date=$_POST['date'];
$description=$_POST['description'];
$paid=$_POST['paid'];
$dues=$_POST['dues'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE store_info Set ('C_name'='cname', 'Date'='$date', 'Description'='$description', 'Paid'='$paid', 'Dues'='$dues') where ('C_ID'='$cid)'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 