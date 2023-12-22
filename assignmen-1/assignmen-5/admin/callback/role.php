<?php
include("../../config/config.php");
if(isset($_GET['title']) && trim($_GET['title'])!=''){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "insert into role(name,description)values('$title','$description')";
    $checkresult = $conn->query($query);
    if($checkresult){
        $_SESSION['status']='pass';
        header("location:../role.php");
        die;
    }
}
$_SESSION['status']='fail';
header("location:../role.php");
die;




    //insert into tablename('columns','columns')values('','');
    //update tablename set column1=value, column2=value where id=1
    //delete * from tablename where id=1
   
else{
    header("location:../role.php");
        
    }



?>