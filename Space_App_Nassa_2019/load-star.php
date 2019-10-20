<?php
session_start();
$sys_name = $_SESSION['sys_name'];
$conn = mysqli_connect("127.0.0.1", "root", "", "sistemas");
$sql2 = "SELECT * FROM ".$sys_name."_star";
$result2 = mysqli_query($conn,$sql2);
$resultCheck2 = mysqli_num_rows($result2);

if($resultCheck2 >0 ){
    while($row = mysqli_fetch_assoc($result2)){
       $star_name =$row['star_name'];
        $star_radius =$row['star_radius'];
        $star_radius_sunrel =$row['star_radius_sunrel'];
        $star_temperature =$row['star_temperature'];
        $star_volume_km3 =$row['star_volume_km3'];
        $star_mass =$row['star_mass'];
        $star_mass_sunrel =$row['star_mass_sunrel'];
        $star_luminosity =$row['star_luminosity'];
        $star_luminosity_sunrel =$row['star_luminosity_sunrel'];
        $star_lifespan =$row['star_lifespan'];
        $star_type =$row['star_type'];
        echo $star_name."</br>";
        echo $star_radius."</br>";
        echo $star_radius_sunrel."</br>";
        echo $star_temperature."</br>";
        echo $star_volume_km3."</br>";
        echo $star_mass."</br>";
        echo $star_mass_sunrel."</br>";
        echo $star_luminosity."</br>";
        echo $star_luminosity_sunrel."</br>";
        echo $star_lifespan."</br>";
        
        
        


    }
}
?>