<?php
session_start();
//Está en kg/m3
define("SUNMASS",1989000000000000000000000000000);  //Está en kg
define("SUNLUMINOSITY",382800000000000000000000000); //Está en vattios
$conn = mysqli_connect("127.0.0.1", "root", "", "sistemas");

if(isset($_POST['star_mod_submit'])){
   
$star_name = $_SESSION['star_name'];
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

   $sql2 = " UPDATE ".$_SESSION['sys_name']."_star  SET star_radius ='$star_radius',star_radius_sunrel ='$star_radius_sunrel',star_temperature ='$star_temperature',star_volume_km3= '$star_volume_km3',star_mass='$star_mass',star_mass_sunrel ='$star_mass_sunrel',
star_luminosity = '$star_luminosity',star_luminosity_sunrel='$star_luminosity_sunrel',star_lifespan='$star_lifespan'
WHERE star_name ='$star_name';";
$result2 = mysqli_query($conn,$sql2); 
if($result2){
  header('location:../sys_view.php');
}else{
    var_dump($conn);
}  
 }



 


        

?>