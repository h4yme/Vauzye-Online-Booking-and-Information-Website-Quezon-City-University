
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luzon | Vauzye</title>
    <link rel="stylesheet" href="luzon-style.css">
    <script src="https://kit.fontawesome.com/9ee1ccdc0c.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="/VAUZYE BOOKING WEBSITE/Images/Icon.png">
</head>
<body>
    <header>
        <img src="/VAUZYE BOOKING WEBSITE/Images/Logo.png" alt="" class="logo" width="200px">
        <nav>
            <ul class="nav_links">
                <li><a href="/VAUZYE BOOKING WEBSITE/Guest Page/index.html">Home</a></li>
                <li><a href="/VAUZYE BOOKING WEBSITE/Flight Page/flights.html" >Flights</a></li>
                <li><a href="#">Hotels</a></li>
                <li><a href="#" id="active">Explore</a></li>
                <li><a href="#">About</a></li>
                <li><a href="/VAUZYE BOOKING WEBSITE/Contact Page/contact.php">Contact Us</a></li>
            </ul>
        </nav>
        <span><input type="text" name="search" placeholder="Search a place" class="search"><i class="fa-solid fa-magnifying-glass"></i></span> 
    </header>
<div class="container">
<div class="child">
    <img src="/VAUZYE BOOKING WEBSITE/Images/Place logo.png" width="80px">
    <h1>
        Explore Luzon
    </h1>
    <hr>
    <div class="Baguio">
     <h2 style="text-decoration: underline;">BAGUIO</h2>
    <ul>
        <li>Mines View Park</li>
        <li>Burnham Park</li>
        <li>La Trinidad</li>
        <li>Laperal White House</li>
        <li>The Mansion</li>
    </ul>
</div>
<div class="Bicol">
    <h2>BICOL</h2>
   <ul>
       <li>Mayon Volcano</li>
       <li>Peñafrancia Basilica</li>
       <li>Cagsawa Ruins</li>
       <li>Caramaan Islan</li>
       <li>Binurong Point</li>
   </ul>
</div>
<div class="Vigan">
    <h2>VIGAN</h2>
   <ul>
       <li>Calle Crisologo</li>
       <li>Vigan Cathedral</li>
       <li>Plaza Burgos</li>
       <li>Banaoang Bridge</li>
       <li>Hidden Garden</li>
   </ul>
</div>
<div class="Palawan">
    <h2>PALAWAN</h2>
   <ul>
       <li>Port Barto</li>
       <li>Nacpan Beach</li>
       <li>Plaza Burgos</li>
       <li>Banaoang Bridge</li>
       <li>Hidden Garden</li>
   </ul>
</div>
<div class="Ilocos">
    <h2>ILOCOS NORTE</h2>
   <ul>
       <li>The Bangui Windmills</li>
       <li id="longname1">Kapurpurawan Rock Formation</li>
       <li>Cape Bajeador Lighthouse</li>
       <li>Pagudpud</li>
       <li>Paoay Church</li>
   </ul>
</div>
</div>
</div>
<div class="head-img">
    <img src="/VAUZYE BOOKING WEBSITE/Images/Baguio know.png" width="1200px">
    <h2>What to know about <b>Baguio?</b></h2>
    <p>
        If you prefer cool weather, Baguio is the place to visit. It is known as the "Summer Capital of the Philippines" and is well-known for its tropical pine forests, hence the name "City of Pines."
    </p>
</div>

<div class="explore">
    <h1>EXPLORE BAGUIO</h1>
    <div class="explore-col1-img">
    <img src="/VAUZYE BOOKING WEBSITE/Images/burnham.png" width="600px">
    
    <img src="/VAUZYE BOOKING WEBSITE/Images/mines view.png" width="600px">
    
    </div>
    <div class="explore-col1-des">
    <h2 id="fir">Burnham Park</h2>
    <p id="f-des">If you prefer cool weather, Baguio is the place to visit. It is known as the "Summer Capital of the Philippines" and is well-known for its tropical pine forests, hence the name "City of Pines."</p>
    <h2 id="sec">Mines View Park</h2>
    <p id="s-des">If you prefer cool weather, Baguio is the place to visit. It is known as the "Summer Capital of the Philippines" and is well-known for its tropical pine forests, hence the name "City of Pines.</p> 
</div>
<div class="explore-col2-img">
    <img src="/VAUZYE BOOKING WEBSITE/Images/trinidad.png" width="600px">
    
    <img src="/VAUZYE BOOKING WEBSITE/Images/mansion.png" width="600px">
    
    </div>
    <div class="explore-col2-des">
        <h2 id="fir">La Trinidad</h2>
        <p id="f-des">If you prefer cool weather, Baguio is the place to visit. It is known as the "Summer Capital of the Philippines" and is well-known for its tropical pine forests, hence the name "City of Pines."</p>
        <h2 id="sec">Laperal White Mansion</h2>
        <p id="s-des">If you prefer cool weather, Baguio is the place to visit. It is known as the "Summer Capital of the Philippines" and is well-known for its tropical pine forests, hence the name "City of Pines.</p> 
    </div>
    <?php  
// Database configuration  
$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "";  
$dbName     = "vauzyedatas";  
  
// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}
$result = $db->query("SELECT name_place, image, description FROM luzon WHERE (id % 2)=0"); 
$result2 = $db->query("SELECT name_place, image, description FROM luzon WHERE (id % 2)>0"); 
?>

<?php if($result->num_rows > 0){ ?> 
        <?php while($row = $result->fetch_assoc()){ ?> 
    <div class="explore-col2-img">
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" width="600px">
    
        </div>
        
        <div class="explore-col2-des">
            <h2 id="fir"><?php echo($row['name_place']);?></h2>
            <p id="f-des"><?php echo($row['description']);?></p>
        <?php } ?> 
        <?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
        </div>
</div>
<!---Section 2-->


<!--Footer-->

<div class="footer">
    <div class="child3">
        <!---<img src="/VAUZYE BOOKING WEBSITE/Images/white logo.png" alt="">--->
        <hr>
    </div>
</div>
</body>
</html>
