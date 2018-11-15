<?php
include "connect.php";
$target_dir = "img/";
if($_FILES["fileToUpload"]["name"]){
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    $PictureName =  basename($_FILES["fileToUpload"]["name"]);
    $pieces = explode(".", $PictureName);


    $path = getcwd();
    $t = microtime(true);
    $micro = sprintf("%06d",($t - floor($t)) * 1000000);
    $PictureName = $pieces[0].date("Y-m-d H:i:s").".$micro$t.";
    $PictureName = str_replace(".","","$PictureName");
    $PictureName = str_replace("-","","$PictureName");
    $PictureName = str_replace(":","","$PictureName");
    $PictureName = str_replace(" ","","$PictureName");
    

    $PictureName = $PictureName.$pieces[1];


    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            
            $uploadOk = 1;
        } else {
            
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    
    
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            rename("$target_file","$target_dir"."$PictureName");
            
        } else {

        
        }
    }
}else{
    $PictureName = filter_input(INPUT_POST, 'picture', FILTER_SANITIZE_STRING);
}


$txtName = filter_input(INPUT_POST, 'txtName', FILTER_SANITIZE_STRING);
$txtMsg = filter_input(INPUT_POST, 'txtMsg', FILTER_SANITIZE_STRING);
$ID = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_STRING);
$sql = "UPDATE `news_information` SET `NEWS_ID`= $ID,`NEWS_NAME`= '$txtName',`NEWS_DETAILS`= '$txtMsg',`SUBMIT_DATE`= NOW(),`NEWS_PICTURE`= '$PictureName'";
$objQuery = mysqli_query($objCon,$sql);
if($objQuery){
    echo '<script>alert("Insert complete");window.location = "index.php"</script>';
}
?>