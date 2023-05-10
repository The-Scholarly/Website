<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
	if (isset($_POST['submit'])) {
		$file = $_FILES['file'];
		
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];
		
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		
		$allowed = array('pdf', 'jpg', 'jpeg', 'png');
		
		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0) {
			} else {
				echo "There was an error uploading your file";
			}
		} else {
			echo "You cannot upload files of this type!";
		}
	}
</body>
</html>