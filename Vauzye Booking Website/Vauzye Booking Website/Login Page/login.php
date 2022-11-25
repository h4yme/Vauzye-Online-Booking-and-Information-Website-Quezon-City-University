<?php
include_once 'conn.php';
?>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $uname=$_POST['Username'];
    $pass=$_POST['Passw'];
    $sql="select * from adminlist where Username='$uname' and Passw0rd='$pass'";
    $result=$conn->query($sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1){
        header("Location:/VAUZYE BOOKING WEBSITE/Admin Panel/Admin.html");    
    }
    else{
        echo"<script>alert('Unsuccessful Login, please put right credentials')</script>";
    }
}



?>
</body>
</html>




