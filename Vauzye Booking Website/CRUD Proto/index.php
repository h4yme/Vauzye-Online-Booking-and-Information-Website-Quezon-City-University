<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
<table>
    <tr>  
    <td>Name of Place</td>
        <td><input type="text" name="fname">
        </td>
    </tr>
    <tr>
        
        <td><label for="des">Description</label> </td>
        <td><textarea name="des"></textarea>
        </td>
    </tr>
    <tr>
    <tr>
        
        <td><label>Select Image File:</label></td>
        <td><input type="file" name="image"></td>
        <td><input type="submit" name="submit" value="Upload">
        </td>
    </tr>
</table>
</form>
</body>
</html>