<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Check Status</title>

<style>
body {
    font-family: Arial;
    background: #f2f2f2;
}

.box {
    width: 90%;
    max-width: 350px;
    margin: 80px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}

input {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
}

button {
    width: 100%;
    padding: 10px;
    background: blue;
    color: white;
    border: none;
}

.back {
    position: absolute;
    top: 10px;
    left: 10px;
}
</style>

</head>
<body>

<a href="admission.html" class="back">⬅ Back</a>

<div class="box">

<h2>Check Admission Status</h2>

<form method="POST">
<input type="text" name="name" placeholder="Enter Name" required>
<input type="text" name="phone" placeholder="Enter Phone" required>
<button type="submit">Check</button>
</form>

<?php
if(isset($_POST['name'])) {

$conn = new mysqli("sql207.infinityfree.com", "if0_41760617", "TSA123456 ", "if0_41760617_tsa");

$name = $_POST['name'];
$phone = $_POST['phone'];

$result = $conn->query("SELECT status FROM students WHERE name='$name' AND phone='$phone'");

if($result->num_rows > 0){
$row = $result->fetch_assoc();

echo "<h3>Status: " . $row['status'] . "</h3>";

} else {
echo "<h3>No record found ❌</h3>";
}

}
?>

</div>

</body>
</html>