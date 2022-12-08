<html>
    <head>
        <style>
            .gallery{
                width:830px;
                height:350px;
                border:1px solid black;
            }

            .gallery img{
                width:250px;
                position:relative;
                bottom:50px;
                z-index:-1;
                left:20px;
                border-radius:20px;
                height:200px;
            }

            .gallery h1{
               
                position:relative;
                left:25px;
                top:20px;
                color:white;
            }

            .gallery a{
 text-decoration:none;
            }

            .gallery p{
                max-width:500px;
                position:relative;
                left:300px;
                bottom:250px;
            }

            
        </style>
    </head>



<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// Get image data from database 
$result = $db->query("SELECT image, name, description, site, container FROM images ORDER BY id ASC"); 
?>

<?php if($result->num_rows > 0){ ?> 
     
        <?php while($row = $result->fetch_assoc()){ ?> 
            <div class="<?php echo($row['container']);?>">
           <a href="<?php echo($row['site']);?>"> <h1><?php echo($row['name']); ?></h1>
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> </a>
            <p><b>Description: </b><?php echo($row['description']); ?></p>
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>

</html>