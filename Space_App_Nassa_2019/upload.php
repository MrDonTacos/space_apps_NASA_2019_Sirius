<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "sistema");
if(isset($_POST['sub'])){
    
$namae = $_POST['namae'];
$size = $_POST['size'];
$taipu = $_POST['taipu'];
$material = $_POST['material'];

$sql = "INSERT INTO planetas (namae,size,taipu,material) VALUES ('$namae','$size','$taipu','$material');";
$result = mysqli_query($conn,$sql);
 }
if($result){
    header('location:../planet.php');
}else{
    var_dump($conn);
}
 
?>