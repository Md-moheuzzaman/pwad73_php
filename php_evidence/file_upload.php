<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File upload</title>
</head>
<body>
    <h3>File Upload Using PHP</h3>
    <?php 
    echo "<pre>";
    print_r($_FILES);


   $name = $_FILES['myfile']['name'] ;
    $size = $_FILES['myfile']['size'] ;
    $fileTmpName = $_FILES['myfile']['tmp_name'] ;
    $targetpath = "upload/$name";
    $status = true; 

    //Allowed file type

    $allowedType = ["jpg", "pdf"];
    
    //Allowed size 400kb

    $size_kb = $size/1024;

     $fileExt = pathinfo($name, PATHINFO_EXTENSION);

     //Filetype check
    if(!in_array($fileExt, $allowedType)){
        echo "File type not allowed <br><br>";
        $status = false;
    }

    //File size Check
    if($size_kb > "400"){
        echo "Size not allowed <br><br>";
        $status = false; 
    }
    if($status){
        move_uploaded_file($fileTmpName, $targetpath)
        echo "Success";
    }
    
    //  else{
    //     move_uploaded_file($fileTmpName, $targetpath);
    //     echo "Success";
    // }
    

    move_uploaded_file($fileTmpName, $targetpath);

    
    
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile"> <br> <br>
        <input type="submit" name="upload" value="UPLOAD">

    </form>
</body>
</html>