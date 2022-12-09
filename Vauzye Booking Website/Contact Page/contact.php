<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Vauzye</title>
    <link rel="stylesheet" href="contact-style.css">
    <script src="https://kit.fontawesome.com/9ee1ccdc0c.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="/VAUZYE BOOKING WEBSITE/Images/Icon.png">
</head>
<body>
    <header>
        <img src="/VAUZYE BOOKING WEBSITE/Images/Logo.png" alt="" class="logo" width="200px">
        <nav>
            <ul class="nav_links">
                <li><a href="/VAUZYE BOOKING WEBSITE/Guest Page/index.html">Home</a></li>
                <li><a href="/VAUZYE BOOKING WEBSITE/Flights Page/flights.html">Flights</a></li>
                <li><a href="#">Hotels</a></li>
                <li><a href="/VAUZYE BOOKING WEBSITE/Explore Page/explore.html">Explore</a></li>
                <li><a href="/VAUZYE BOOKING WEBSITE/About Page/About-us.html">About</a></li>
                <li><a href="#" id="active">Contact Us</a></li>
            </ul>
        </nav>
        <span><input type="text" name="search" placeholder="Search a place" class="search"><i class="fa-solid fa-magnifying-glass"></i></span> 
    </header>
<div class="container">
    <div class="child">
     <h1>Get in Touch</h1>
    </div>
</div>
<div class="cont2">
    <div class="child2">
        <img src="/VAUZYE BOOKING WEBSITE/Images/Logo.png" width="150px">
        <h1>Contact Us</h1>
        <p>We want to hear from you. Contact us anytime.</p>

        <table>
            <form action="#" method="post">
                <tr>
                    <td>
                        Name <input type="text" name="users_name">
                    </td>
                </tr>
                <tr>
                    <td>
                        E-mail <input type="text" name="email_add">
                    </td>
                </tr>
                <tr>
                    <td>
                        Message <input type="text" name="users_inquiry">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button name="submit">Send Feedback</button>
                    </td>
                </tr>
            </form>
        </table>
        <div class="design-box"></div>
    </div>
</div>
<!--Footer-->

<div class="footer">
    <div class="child3">
        <!---<img src="/VAUZYE BOOKING WEBSITE/Images/white logo.png" alt="">--->
        <hr>
    </div>
</div>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="vauzyedatas";
$conn = mysqli_connect($servername, $username, $password, $dbname);



if (isset($_POST['submit'])){
    $name=$_POST['users_name'];
    $email=$_POST['email_add'];
    $feedback=$_POST['users_inquiry'];
    $query= "INSERT INTO contact_inquiries(name, email, inquiry, submittedtime) VALUES('$name','$email', '$feedback', NOW())";

    $result= mysqli_query($conn, $query);
    if ($result){
        echo "<script>alert('Message sent')</script>";
        
    }else{
        echo "<script>alert('Message failed sending')</script>" ;
    }
}
?>

</form>
</body>
</html>