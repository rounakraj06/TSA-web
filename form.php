<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admission Form</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: linear-gradient(to right, #4facfe, #00f2fe);
}

/* Back button */
.back {
    position: absolute;
    top: 10px;
    left: 10px;
    text-decoration: none;
    background: white;
    padding: 6px 12px;
    border-radius: 6px;
    color: black;
}

/* Form container */
.form-box {
    width: 90%;
    max-width: 400px;
    margin: 80px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
}

/* Heading */
h2 {
    text-align: center;
}

/* Inputs */
input, select, textarea {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Button */
button {
    width: 100%;
    padding: 10px;
    background: #4facfe;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
}
</style>

</head>
<body>+

<a href="admission.html" class="back">⬅ Back</a>

<div class="form-box">

<h2>Admission Form</h2>

<form action="submit.php" method="POST">

<input type="text" name="name" placeholder="Student Name" required>

<input type="text" name="father" placeholder="Father Name" required>

<input type="date" name="dob"
placeholder="DD/MM/YYYY" required>

<select name="class" required>
<option value="">Select Class</option>
<option>Class 8</option>
<option>Class 9</option>
<option>Class 10</option>
</select>

<input type="text" name="school" placeholder="School Name" required>

<input type="text" name="phone" placeholder="Phone Number" required>

<textarea name="address" placeholder="Address" rows="3" required></textarea>

<button type="submit">Submit</button>

</form>

</div>

</body>
</html>