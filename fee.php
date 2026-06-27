<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fee Structure</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #f5f5f5;
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

/* Heading */
h1 {
    text-align: center;
    margin-top: 50px;
}

/* Table container */
.table-box {
    width: 90%;
    max-width: 400px;
    margin: 30px auto;
    background: white;
    padding: 15px;
    border-radius: 10px;
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    border-bottom: 1px solid #ccc;
    text-align: center;
}

th {
    background: #4facfe;
    color: white;
}
</style>

</head>
<body>

<a href="admission.html" class="back">⬅ Back</a>

<h1>Fee Details</h1>

<div class="table-box">

<table>
    <tr>
        <th>Class</th>
        <th>Monthly Fee</th>
    </tr>

    <?php
    $fees = [
        "Class 8" => "₹400",
        "Class 9" => "₹450",
        "Class 10" => "₹500"
    ];

    foreach($fees as $class => $fee) {
        echo "<tr>
                <td>$class</td>
                <td>$fee</td>
              </tr>";
    }
    ?>

</table>

</div>

</body>
</html>