<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "sistemas");
if(isset($_POST['submit_sys'])){
    
$sys_name = $_POST['sys_name'];
$sys_creator = $_POST['sys_creator'];
$sql1 = "SELECT * FROM sysdata WHERE sys_name LIKE '%$sys_name%'";
$result1 = mysqli_query($conn,$sql1);
$queryresults = mysqli_num_rows($result1);
    
    if($queryresults > 0){
        
        header('location:../create_sys.php');
        
    }else{
        
$_SESSION['sys_name'] = $sys_name;       
$sql2 = "INSERT INTO sysdata (sys_name,sys_creator) VALUES ('$sys_name','$sys_creator');";
$result = mysqli_query($conn,$sql2);
        
if($result){
    
     header('location:../star_type_def.php');
}else{
    
    var_dump($conn);
} 
 }
    }

 
?>