<?php
session_start();
include "connect.php";
$target_dir = "images/";
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
    $PictureName = "profile.png";
}
if(copy($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
{

$txtName = filter_input(INPUT_POST, 'txtName', FILTER_SANITIZE_STRING);
$txtLink = filter_input(INPUT_POST, 'txtLink', FILTER_SANITIZE_STRING);
$txtMsg = filter_input(INPUT_POST, 'txtMsg', FILTER_SANITIZE_STRING);
$sql = "INSERT INTO `news_information`(`NEWS_NAME`, `NEWS_DETAILS`, `NEWS_PICTURE`,`NEWS_LINK`,`NEWS_FILE`) VALUES ('$txtName','$txtMsg','$PictureName','$txtLink','".$_FILES["filUpload"]["name"]."')";
$objQuery = mysqli_query($objCon,$sql);

}
if($objQuery){
    if($_SESSION["USERNAME"]!=''){
        echo '<script>alert("Insert complete");window.location = "indexad.php"</script>';
    }else{
        echo '<script>alert("Insert complete");window.location = "index.php"</script>';
    }
}
?>