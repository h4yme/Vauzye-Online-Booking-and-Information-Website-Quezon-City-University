<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0px;
        }
        .success{
            background-color:green;
            width:250px;
            padding:10px;
            text-align:center;
            font-size:20px;
            display:none;
        }
        .failed{
            background-color:red;
            width:250px;
            padding:10px;
            text-align:center;
            font-size:20px;
            display:none;
        }
    </style>
</head>
<body>
    <div class="success">
    File Successfully uploaded
    </div>
    <div class="failed">
        File Failed to upload
    </div>



<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    $fname=$_POST['fname'];
    $des=$_POST['des'];
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into luzon (name_place, image, description, time_created) VALUES ('$fname', '$imgContent', '$des', NOW())"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = '<style> .success{ display:inline;}</style>'; 
            }else{ 
                $statusMsg = '<style> .failed{ display:inline;}</style>'; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>


</body>
</html>
