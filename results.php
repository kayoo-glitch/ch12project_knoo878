<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <h1>Project: Searching a Database with PHP and MySQL</h1>
    <p>Name: Kay Nae Oo</p>
    <p>Date: 11/8/2026</p>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = trim($_POST['email']);
        $s_email = filter_var($_POST["s_email"],FILTER_SANITIZE_STRING);

        $dh = new DataHandler();
        $results = $dh->getStudentByEmail('1')

        echo "<table class='fullborder'><tr><th>Student ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr><tr>";
        echo "<td>".$results['studentID']."</td>";
        echo "<td>".$results['firstName']."</td>";
        echo "<td>".$results['lastName']."</td>";
        echo "<td>".$results['email']."</td>";
        echo "</tr></table>";
    }
    ?>
</body>
</html>
