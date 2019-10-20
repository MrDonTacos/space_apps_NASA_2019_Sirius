<?php
session_start();
echo "<form action='upload_planets.php' method ='POST'></br>";
for($i=0;$i<$_SESSION['planet_rocky_number'];$i++){
    echo" Ingresará los datos de sus planetas Rocosos</br>
    Nombre del planeta ".$i.":</br>
    <input type='text' name='planet_name_rocky".$i."' required>
    </br>
Seleccione el radio que quiere para su planeta ".$i." rocoso (473km-14,200km):</br>  
    <input type='range' name='planet_radius_rocky".$i."' min='43.7' max='1420' required></br>
    Seleccione la distancia que quiere entre su planeta ".$i." rocoso y la estrella central del sistema(60,000,000km-227,900,000km):</br>
    <input type='range' name='planet_stardistance_km_rocky".$i."' min='400' max='5000' required ></br>
    <input type = 'text' name='planet_type_rocky".$i."' value='Rocky' hidden>";
    

   
}
for($i=0;$i<$_SESSION['planet_gassy_number'];$i++){
    echo"
    Ingresará los datos de sus planetas gaseosos</br>
    Nombre del planeta ".$i.":</br>
    <input type='text' name='planet_name_gassy".$i."' required>
    </br>
Seleccione el radio que quiere para su planeta ".$i." gaseoso (5,000km-30,000km):</br>  
    <input type='range' name='planet_radius_gassy".$i."' min='25' max='150' required></br>
    Seleccione la distancia que quiere entre su planeta ".$i." gaseoso y la estrella central del sistema(60,000,000km-227,900,000km):</br>
    <input type='range' name='planet_stardistance_km_gassy".$i."' min='400' max='1520' required ></br>
    <input type = 'text' name='planet_type_gassy".$i."' value='Gassy' hidden>";
    

   
}
echo " <input type='submit' name='submit_planets'>Proceder</br>
    </form>";
?>