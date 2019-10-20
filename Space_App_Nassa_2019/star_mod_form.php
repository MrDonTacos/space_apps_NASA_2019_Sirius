
<html>
<head>
<title>
    </title>
    </head>
<body>
    <p>Actualizar estrella</p>
<form action="star_mod_process.php" method="POST">

<?php  
    
session_start();
$star_type = $_SESSION['star_type'] ;


switch($star_type){
    case "O Type Star":
        $ti = 30000;
        $tf = 35000;
        $rstari = 6.6*695700;
        $rstarf = 10*695700;
        $li = 30000*62300000000000000000000000000;
        $lf = 35000*62300000000000000000000000000;
        $smassi = 16*1989000000000000000000000000000;
        $smassf = 19*1989000000000000000000000000000;
            
  echo "Seleccione el radio que quiere para su estrella(".$rstari." - ".$rstarf."):
    <input type='range' name='star_radius' min='".$rstari."' max='".$rstarf."'></br>
    Ingrese la temperatura que desea en su estrella(".$ti."K-".$tf."K):
    <input type='range' name='star_temperature' min='".$ti."' max='".$tf."'>
    </br>
    Defina la masa de la estrella(".$smassi."kg-".$smassf."kg):
    <input type='range' name='star_mass' min='".$smassi."' max='".$smassf."'></br>
Imgrese la luminosidad de la estrella(".$li."L-".$lf."L)
    <input type='range' name='star_luminity' min='".$li."' max='".$lf."'></br>
    ";
            break;
        case "B Type Star":
        $ti = 10000;
        $tf = 30000;
        $rstari = 1.8*695700;
        $rstarf = 6.6*695700;
        $li = 25*62300000000000000000000000000;
        $lf = 30*62300000000000000000000000000;
        $smassi = 2.1*1989000000000000000000000000000;
        $smassf = 16*1989000000000000000000000000000;
            
  echo "Seleccione el radio que quiere para su estrella(".$rstari." - ".$rstarf."):
    <input type='range' name='star_radius' min='".$rstari."' max='".$rstarf."'></br>
    Ingrese la temperatura que desea en su estrella(".$ti."K-".$tf."K):
    <input type='range' name='star_temperature' min='".$ti."' max='".$tf."'>
    </br>
    Defina la masa de la estrella(".$smassi."kg-".$smassf."kg):
    <input type='range' name='star_mass' min='".$smassi."' max='".$smassf."'></br>
Imgrese la luminosidad de la estrella(".$li."L-".$lf."L)
    <input type='range' name='star_luminity' min='".$li."' max='".$lf."'></br>
    ";
            break;
        case "A Type Star":
        $ti = 7500;
        $tf = 10000;
        $rstari = 1.4*695700;
        $rstarf = 1.8*695700;
        $li = 5*62300000000000000000000000000;
        $lf = 25*62300000000000000000000000000;
        $smassi = 1.4*1989000000000000000000000000000;
        $smassf = 2.1*1989000000000000000000000000000;
            
  echo "Seleccione el radio que quiere para su estrella(".$rstari." - ".$rstarf."):
    <input type='range' name='star_radius' min='".$rstari."' max='".$rstarf."'></br>
    Ingrese la temperatura que desea en su estrella(".$ti."K-".$tf."K):
    <input type='range' name='star_temperature' min='".$ti."' max='".$tf."'>
    </br>
    Defina la masa de la estrella(".$smassi."kg-".$smassf."kg):
    <input type='range' name='star_mass' min='".$smassi."' max='".$smassf."'></br>
Imgrese la luminosidad de la estrella(".$li."L-".$lf."L)
    <input type='range' name='star_luminity' min='".$li."' max='".$lf."'></br>
    ";
            break;
        case "F Type Star":
        $ti = 6000;
        $tf = 7500;
        $rstari = 1.15*695700;
        $rstarf = 1.4*695700;
        $li = 1.5*62300000000000000000000000000;
        $lf = 5*62300000000000000000000000000;
       $smassi = 1.04*1989000000000000000000000000000;
        $smassf =  1.4*1989000000000000000000000000000;
            
  echo "Seleccione el radio que quiere para su estrella(".$rstari." - ".$rstarf."):
    <input type='range' name='star_radius' min='".$rstari."' max='".$rstarf."'></br>
    Ingrese la temperatura que desea en su estrella(".$ti."K-".$tf."K):
    <input type='range' name='star_temperature' min='".$ti."' max='".$tf."'>
    </br>
    Defina la masa de la estrella(".$smassi."kg-".$smassf."kg):
    <input type='range' name='star_mass' min='".$smassi."' max='".$smassf."'></br>
Imgrese la luminosidad de la estrella(".$li."L-".$lf."L)
    <input type='range' name='star_luminity' min='".$li."' max='".$lf."'></br>
    ";
            break;
        case "G Type Star":
        $ti = 5200;
        $tf = 6000;
        $rstari = 0.96*695700;
        $rstarf = 1.15*695700;
        $li = 0.6*62300000000000000000000000000;
        $lf = 1.5*62300000000000000000000000000;
        $smassi = 0.8*1989000000000000000000000000000;
        $smassf =  1.4*1989000000000000000000000000000;
            
  echo "Seleccione el radio que quiere para su estrella(".$rstari." - ".$rstarf."):
    <input type='range' name='star_radius' min='".$rstari."' max='".$rstarf."'></br>
    Ingrese la temperatura que desea en su estrella(".$ti."K-".$tf."K):
    <input type='range' name='star_temperature' min='".$ti."' max='".$tf."'>
    </br>
    Defina la masa de la estrella(".$smassi."kg-".$smassf."kg):
    <input type='range' name='star_mass' min='".$smassi."' max='".$smassf."'></br>
Imgrese la luminosidad de la estrella(".$li."L-".$lf."L)
    <input type='range' name='star_luminity' min='".$li."' max='".$lf."'></br>
    ";
            break;
        case "K Type Star":
        $ti = 3200;
        $tf = 5200;
        $rstari = 0.7*695700;
        $rstarf = 0.96*695700;
        $li = 0.08*62300000000000000000000000000;
        $lf = 0.6*62300000000000000000000000000;
        $smassi =  0.45*1989000000000000000000000000000;
        $smassf =  0.8*1989000000000000000000000000000;
            
  echo "Seleccione el radio que quiere para su estrella(".$rstari." - ".$rstarf."):
    <input type='range' name='star_radius' min='".$rstari."' max='".$rstarf."'></br>
    Ingrese la temperatura que desea en su estrella(".$ti."K-".$tf."K):
    <input type='range' name='star_temperature' min='".$ti."' max='".$tf."'>
    </br>
    Defina la masa de la estrella(".$smassi."kg-".$smassf."kg):
    <input type='range' name='star_mass' min='".$smassi."' max='".$smassf."'></br>
Imgrese la luminosidad de la estrella(".$li."L-".$lf."L)
    <input type='range' name='star_luminity' min='".$li."' max='".$lf."'></br>
    ";
            break;
        case "M Type Star":
        $ti = 2400;
        $tf = 3200;
        $rstari = 0.07*695700;
        $rstarf = 0.7*695700;
        $li = 0*62300000000000000000000000000;
        $lf = 0.8*62300000000000000000000000000;
      $smassi =  0.08*1989000000000000000000000000000;
        $smassf = 0.45 *1989000000000000000000000000000;
            
  echo "Seleccione el radio que quiere para su estrella(".$rstari." - ".$rstarf."):
    <input type='range' name='star_radius' min='".$rstari."' max='".$rstarf."'></br>
    Ingrese la temperatura que desea en su estrella(".$ti."K-".$tf."K):
    <input type='range' name='star_temperature' min='".$ti."' max='".$tf."'>
    </br>
    Defina la masa de la estrella(".$smassi."kg-".$smassf."kg):
    <input type='range' name='star_mass' min='".$smassi."' max='".$smassf."'></br>
Imgrese la luminosidad de la estrella(".$li."L-".$lf."L)
    <input type='range' name='star_luminity' min='".$li."' max='".$lf."'></br>
    ";
            break;
        case "White Dwarf":
        $ti = 7500;
        $tf = 29000;
        $rstari = 0.01*695700;
        $rstarf = 0.011*695700;
        $li = 0.00055*62300000000000000000000000000;
        $lf = 0.01*62300000000000000000000000000;
      
            
  echo "Seleccione el radio que quiere para su estrella(".$rstari." - ".$rstarf."):
    <input type='range' name='star_radius' min='".$rstari."' max='".$rstarf."'></br>
    Ingrese la temperatura que desea en su estrella(".$ti."K-".$tf."K):
    <input type='range' name='star_temperature' min='".$ti."' max='".$tf."'>
    </br>
Imgrese la luminosidad de la estrella(".$li."L-".$lf."L)
    <input type='range' name='star_luminity' min='".$li."' max='".$lf."'></br>
    ";
        
            break;
        case "Giant Star":
        $ti = 3000;
        $tf = 5000;
        $rstari = 10*695700;
        $rstarf = 99*695700;
        $li = 10*62300000000000000000000000000;
        $lf = 100*62300000000000000000000000000;
       
            
  echo "Seleccione el radio que quiere para su estrella(".$rstari." - ".$rstarf."):
    <input type='range' name='star_radius' min='".$rstari."' max='".$rstarf."'></br>
    Ingrese la temperatura que desea en su estrella(".$ti."K-".$tf."K):
    <input type='range' name='star_temperature' min='".$ti."' max='".$tf."'>
    </br>
Imgrese la luminosidad de la estrella(".$li."L-".$lf."L)
    <input type='range' name='star_luminity' min='".$li."' max='".$lf."'></br>
    ";
            break;
        case "Super Giant Star":
        $ti = 3199;
        $tf = 3200;
        $rstari = 100*695700;
        $rstarf = 1000*695700;
        $li = 10000*62300000000000000000000000000;
        $lf = 100000*62300000000000000000000000000;
            
  echo "Seleccione el radio que quiere para su estrella(".$rstari." - ".$rstarf."):
    <input type='range' name='star_radius' min='".$rstari."' max='".$rstarf."'></br>
    Ingrese la temperatura que desea en su estrella(".$ti."K-".$tf."K):
    <input type='range' name='star_temperature' min='".$ti."' max='".$tf."'>
    </br>
Imgrese la luminosidad de la estrella(".$li."L-".$lf."L)
    <input type='range' name='star_luminity' min='".$li."' max='".$lf."'></br>
    ";
    break;
}
?>
    <input type="submit" name="star_mod_submit" value="súbelo perro">
    </form>
    </body>
</html>
