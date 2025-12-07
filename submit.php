<?php
// submit.php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fullname = $_POST['fullname'];
    $index = $_POST['index'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $center = $_POST['center'];
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Successful</title>
</head>
<body>

<h2>Candidate Registration Submitted Successfully!</h2>

<p><strong>Full Name:</strong> <?php echo $fullname; ?></p>
<p><strong>UNEB Index Number:</strong> <?php echo $index; ?></p>
<p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
<p><strong>Gender:</strong> <?php echo $gender; ?></p>
<p><strong>School/Center:</strong> <?php echo $center; ?></p>

<br>
<a href="reg.html">Back to Registration Form</a>

</body>
</html>