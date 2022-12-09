<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'vauzyedatas';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$result = mysqli_query($mysqli, "SELECT * FROM contact_inquiries ORDER BY id asc");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Email</th> <th>Comments</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['inquiry']."</td>";
        echo "<td><a href='sent-email.php?id=$user_data[id]'>Send email</a>";
    }
    ?>
    </table>
</body>
</html>