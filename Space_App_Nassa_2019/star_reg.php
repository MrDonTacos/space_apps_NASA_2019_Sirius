<?php
session_start();
//Está en kg/m3
define("SUNMASS",1989000000000000000000000000000);  //Está en kg
define("SUNLUMINOSITY",382800000000000000000000000); //Está en vattios
$conn = mysqli_connect("127.0.0.1", "root", "", "sistemas");

if(isset($_POST['submit_star'])){
$_SESSION['planet_number_total'] = $_POST['planet_rocky_number']+$_POST['planet_gassy_number']; 
$_SESSION['planet_rocky_number']=$_POST['planet_rocky_number'];
    $_SESSION['planet_gassy_number']=$_POST['planet_gassy_number'];
$star_name = $_POST['star_name'];
$star_radius = $_POST['star_radius'];
$star_radius_sunrel = $star_radius/695510;
$star_temperature = $_POST['star_temperature'];
$star_volume_km3 = (4*3.14159*(pow($star_radius,3)))/3; //Determinar el volumen de la esfera en km3
//$star_volume_m3 = $star_volume_km3*1000000000; //Convertir de km3 a m3
$star_mass = $_POST['star_mass'];  //calcular la masa en kg con la densidad del hidrógeno que multiplica al volumen en m3
$_SESSION['star_mass']= $star_mass;
$star_mass_sunrel = $star_mass/SUNMASS;
$star_luminosity = $_POST['star_luminity'];
$star_luminosity_sunrel = $star_luminosity/SUNLUMINOSITY;
$star_lifespan = 10000000000*pow(($star_mass_sunrel),-2.5); //eL RESULTADO ESTÁ EN AÑOS
   
$sql1 = "CREATE TABLE ".$_SESSION['sys_name']."_star( 
star_name VARCHAR(60) NOT NULL, 
star_radius DOUBLE NOT NULL,
star_radius_sunrel FLOAT NOT NULL,
star_temperature FLOAT NOT NULL,
star_volume_km3 DOUBLE NOT NULL,
star_mass DOUBLE NOT NULL,
star_mass_sunrel FLOAT NOT NULL,
star_luminosity FLOAT NOT NULL,
star_luminosity_sunrel FLOAT NULL,
star_lifespan DOUBLE NOT NULL,
star_type VARCHAR(60) NOT NULL,
star_color VARCHAR(30) NOT NULL
)";
    
$result1 = mysqli_query($conn,$sql1);
      
 }

$star_type = $_SESSION['star_type'];
if( $star_type == "O Type Star"){
    
$star_color = "000074";

     
}else if( $star_type == "B Type Star"){
        
$star_color = "0000FF";
 
     
}else if( $star_type == "A Type Star"){
    
$star_color = "33FFF6";

     
}else if($star_type == "F Type Star"){
$star_color = "FFF700";

     
}else if($star_type == "G Type Star"){
$star_color = "FFC600";
 
     
}else if( $star_type == "K Type Star"){
$star_color = "FE9A00";
 
     
}else if($star_type == "M Type Star"){
$star_color = "FF0000";
 
     
}else if($star_type == "White Dwarf Star"){
$star_color = "FFFFFF";
 
     
}else if($star_type == "Giant Star"){
$star_color = "FF8F99";
 
     
}else if($star_type == "Super Giant Star"){
if($star_temperature<=3200){
    $star_color = "FF1F00";
}else if(($star_temperature>3200)&&($star_temperature<=5199)){
    $star_color = "FBFF00";
}else if(($star_temperature<=7499)&&($star_temperature>=6000)){
      $star_color = "FFFFFF";
}else{
  $star_color = "00D8FF";    
}
     
}    
      
        
$sql2 = " INSERT INTO ".$_SESSION['sys_name']."_star (star_name, star_radius,star_radius_sunrel,star_temperature,star_volume_km3,star_mass,star_mass_sunrel,
star_luminosity,star_luminosity_sunrel,star_lifespan,star_type,star_color) VALUES ('$star_name','$star_radius','$star_radius_sunrel','$star_temperature','$star_volume_km3','$star_mass','$star_mass_sunrel','$star_luminosity','$star_luminosity_sunrel','$star_lifespan','$star_type','$star_color');";
$result2 = mysqli_query($conn,$sql2); 
if($result2){
    header('location:../create_planets.php');
}else{
    var_dump($conn);
}
 
?>


    
    
    
    
    
    
    
    
    