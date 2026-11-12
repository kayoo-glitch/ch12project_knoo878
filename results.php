<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <h1>Project: Searching a Database with PHP and MySQL</h1>
    <p>Name: Kay Nae Oo</p>
    <p>Date: 11/11/2026</p>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = trim($_POST['email']);
        $email = filter_var($_POST["email"],FILTER_SANITIZE_STRING);

        $con = MySQLi_connect("localhost","taus_web_user","dzCW!].h)bX9jo]W","taus_data");
        if (MySQLi_connect_errno()) {
            die("The connection has failed: " . MySQLi_connect_error());
        }

        $dh = new DataHandler();
        $results = $dh->getStudentByEmail('$email')

        if($results != null)
        {
        echo "<div class="message">"
        echo "<table class='fullborder'><tr><th>Student ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr><tr>";
        echo "<td>".$results['studentID']."</td>";
        echo "<td>".$results['firstName']."</td>";
        echo "<td>".$results['lastName']."</td>";
        echo "<td>".$results['email']."</td>";
        echo "</tr></table>";
        echo "</div>"
        }
        else
        {
            echo "<p>No Records Has Gotten Found</p>";
        }
        <a href="index.php">Return Back To index.php</a>
    }
    ?>
</body>
</html>
