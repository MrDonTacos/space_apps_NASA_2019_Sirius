<?php
session_start();
define("EARTHMASS",5972000000000000000000000);
define("PLANETSRHO",5973.6); //kg/m3 
define("GRAVITATIONCONST",0.00000000006679);
define("LS",300000);
define("PI",3.14159);
include("dbhconn.php");
include("Planetas.php");
$conn = mysqli_connect("127.0.0.1", "root", "", "sistemas");
$submit_planets = $_POST['submit_planets'];

if(isset($submit_planets)){
    $sql1 = "CREATE TABLE ".$_SESSION['sys_name']."_rocky_planets (
planet_name_rocky VARCHAR(60) NOT NULL,
planet_radius_rocky FLOAT NOT NULL,
planet_radius_earel_rocky FLOAT NOT NULL,
planet_mass_rocky FLOAT NOT NULL,
planet_mass_earel_rocky FLOAT NOT NULL,
planet_stardistance_km_rocky FLOAT NOT NULL,
planet_stardistance_lm_rocky FLOAT NOT NULL,
planet_ttime_rocky FLOAT NOT NULL,
planet_rtime_rocky FLOAT NOT NULL,
planet_gforce_rocky FLOAT NOT NULL,
planet_type_rocky VARCHAR(10) NOT NULL,
planet_id_rocky INT(2) AUTO_INCREMENT PRIMARY KEY NOT NULL
)";
 mysqli_query($conn,$sql1);
    
 $sql2 = "CREATE TABLE ".$_SESSION['sys_name']."_gassy_planets (
planet_name_gassy VARCHAR(60) NOT NULL,
planet_radius_gassy FLOAT NOT NULL,
planet_radius_earel_gassy FLOAT NOT NULL,
planet_mass_gassy FLOAT NOT NULL,
planet_mass_earel_gassy FLOAT NOT NULL,
planet_stardistance_km_gassy FLOAT NOT NULL,
planet_stardistance_lm_gassy FLOAT NOT NULL,
planet_ttime_gassy FLOAT NOT NULL,
planet_rtime_gassy FLOAT NOT NULL,
planet_gforce_gassy FLOAT NOT NULL,
planet_type_gassy VARCHAR(10) NOT NULL,
planet_id_gassy INT(2) AUTO_INCREMENT PRIMARY KEY NOT NULL
)";
 mysqli_query($conn,$sql2);

for($i=0;$i<$_SESSION['planet_rocky_number'];$i++){
    $planet_names[$i]=$_POST['planet_name_rocky'.$i.''];
     $planet_diameters[$i]=$_POST['planet_radius_rocky'.$i.''];
    $planet_stardistances_km[$i]=$_POST['planet_stardistance_km_rocky'.$i.''];
    $planet= new Planetas_rocky($planet_names[$i],$planet_diameters[$i],$planet_stardistances_km[$i]);
    $planet->DataCalc($_SESSION['star_mass']);
    $planet->dbINSERT($_SESSION['sys_name']);
    
}

    for($i=0;$i<$_SESSION['planet_gassy_number'];$i++){
    $planet_names[$i]=$_POST['planet_name_gassy'.$i.''];
     $planet_diameters[$i]=$_POST['planet_radius_gassy'.$i.''];
    $planet_stardistances_km[$i]=$_POST['planet_stardistance_km_gassy'.$i.''];
    $planet= new Planetas_gassy($planet_names[$i],$planet_diameters[$i],$planet_stardistances_km[$i]);
    $planet->DataCalc($_SESSION['star_mass']);
    $planet->dbINSERT($_SESSION['sys_name']);
    
}
header('location:../sys_view.php');
 }



?>