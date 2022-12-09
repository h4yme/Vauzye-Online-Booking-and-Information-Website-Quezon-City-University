<?php
$databaseHost = 'localhost';
$databaseName = 'vauzyedatas';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>
<?php
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM contact_inquiries WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
}
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require'phpmailer/src/Exception.php';
require'phpmailer/src/PHPMailer.php';
require'phpmailer/src/SMTP.php';
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$email=$_POST['name'];
    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='jaimesaldrichmanicar@gmail.com';
    $mail->Password='adctnwzcyzehfoqw';
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('jaimesaldrichmanicar@gmail.com');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject=$_POST['subj'];
    $mail->Body=$_POST['message'];
    $mail->send();
echo "<script>alert('Message Sent')</script>";
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<br/><br/>

	<form name="update_user" method="post" action="#">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $email;?>></td>
			</tr>
            <tr>
				<td>Subject</td>
				<td><input type="text" name="subj" id=""></textarea></td>
			</tr>
			<tr>
				<td>Message</td>
				<td><textarea name="message" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>