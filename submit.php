<?php

// $conn = new mysqli("localhost", "root", "", "admission_db");
$conn = new mysqli("sql207.infinityfree.com", "if0_41760617", "TSA123456 ", "if0_41760617_tsa");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$father = $_POST['father'];
$dob = $_POST['dob'];
$class = $_POST['class'];
$school = $_POST['school'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "INSERT INTO students (name, father_name, dob, class, school, phone, address, status)
VALUES ('$name', '$father', '$dob', '$class', '$school', '$phone', '$address', 'Pending')";

?>
<!DOCTYPE html>
<html>
<head>
<title>Submit</title>

<style>
body{
    font-family:Arial;
    text-align:center;
    background:linear-gradient(to right,#4facfe,#00f2fe);
    margin:0;
    padding-top:100px;
}

.back{
    position:absolute;
    top:15px;
    left:15px;
    background:white;
    padding:8px 15px;
    border-radius:10px;
    text-decoration:none;
    color:black;
    font-weight:bold;
}

.box{
    background:white;
    display:inline-block;
    padding:30px;
    border-radius:15px;
}
</style>

</head>
<body>

<a href="/tsa/admission.html" class="back">⬅ Back</a>

<div class="box">

<?php
if ($conn->query($sql) === TRUE) {
    echo "<h2>Form Submitted Successfully ✅</h2>";
} else {
    echo "<h2>Error: ".$conn->error."</h2>";
}

$conn->close();
?>

</div>

</body>
</html>