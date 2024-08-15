

?><?php
// Database connection details
$dbhost = "localhost:3307";
$dbuser = "root";
$dbpass = "";
$dbname = "safiridb";

// Enable error reporting for mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Connect to the database
    $con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    
    // Check connection
    if ($con->connect_error) {
        throw new Exception("Connection failed: " . $con->connect_error);
    }
    
    // Optionally, you can echo a success message if needed
    // echo "Connected successfully";

} catch (Exception $e) {
    // Handle connection error
    die("Connection failed: " . $e->getMessage());
}
?>

