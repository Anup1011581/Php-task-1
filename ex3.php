<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Form Submission Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<form method="get">
    First Name: <input type="text" name="First_Name">
    <br>
    Last Name: <input type="text" name="Last_Name">
    <br>
    <input type="submit">
</form>

<?php
if (isset($_GET['First_Name']) && isset($_GET['Last_Name'])) {
    echo "<h3> Hello " . ($_GET['First_Name']) . " " . ($_GET['Last_Name']) . ",
        You are welcome to my site.
    </h3>";
}
?>

</body>
</html>



