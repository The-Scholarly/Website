
<html>
<body>

File: <?php echo isset($_POST['pdf_upload']) ? $_POST['pdf_upload'] : ''; ?><br>

</body>
</html>

<?php
$servername = "35.242.161.44";
$username = "cillian1";
$password = "cillianadam1";
$dbname = "customer_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$fileName = $_FILES['pdf_upload']['name'];
$fileTmpName = $_FILES['pdf_upload']['tmp_name'];
$fileSize = $_FILES['pdf_upload']['size'];
$fileError = $_FILES['pdf_upload']['error'];
$fileType = $_FILES['pdf_upload']['type'];

$sql = "INSERT INTO upload_article (pdf_upload)
VALUES ('$fileTmpName')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
