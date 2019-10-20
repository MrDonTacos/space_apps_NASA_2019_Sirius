<?php

class Planetas_rocky extends dbh{
    const EARTHMASS= 5972000000000000000000000;
 const PLANETSRHO = 5973.6; //kg/m3 
const GRAVITATIONCONST = 0.00000000006679;
    const LS = 300000;
    const PI = 3.14159;
   public $planet_name_rocky;
    public $planet_radius_rocky; 
    public $planet_radius_earel_rocky; 
    public $planet_volume_km3_rocky;
    public $planet_volume_m3_rocky;
    public $planet_mass_rocky;
public $planet_mass_earel_rocky;
public $planet_stardistance_km_rocky;
public $planet_stardistance_lm_rocky;
public $planet_ttime_rocky;
public $planet_rtime_rocky;
public $planet_gforce_rocky;

    
public function __construct($planet_name_rocky,$planet_radius_rocky,$planet_stardistance_km_rocky){
    $this->planet_name_rocky = $planet_name_rocky;
        $this->planet_radius_rocky = $planet_radius_rocky*10;
        $this->planet_stardistance_km_rocky = $planet_stardistance_km_rocky *150000;
}
    public function DataCalc($star_mass){
        $this->planet_radius_earel_rocky =  $this->planet_radius_rocky/6371;
         $this->planet_volume_km3_rocky = (4*PI*pow($this->planet_radius_rocky,3))/3 ;
         $this->planet_volume_m3_rocky =  $this->planet_volume_km3_rocky*1000000000;
         $this->planet_mass_rocky =  $this->planet_volume_m3_rocky*PLANETSRHO;
         $this->planet_mass_earel_rocky = $this->planet_mass_rocky/EARTHMASS;
         $this->planet_stardistance_lm_rocky =( $this->planet_stardistance_km_rocky/LS)/60;
         $this->planet_ttime_rocky =sqrt(((4*PI*PI)/(GRAVITATIONCONST)*($star_mass))*pow($this->planet_radius_rocky,3));
         $this->planet_rtime_rocky =  $this->planet_mass_earel_rocky*24;
         $this->planet_gforce_rocky = (GRAVITATIONCONST*( $this->planet_mass_rocky/pow( $this->planet_radius_rocky,2)))/1000000;
    }
public function dbINSERT($sys_name){
    $sql = "INSERT INTO ".$sys_name."_rocky_planets (
    planet_name_rocky,
planet_radius_rocky,
planet_radius_earel_rocky,
planet_mass_rocky,
planet_mass_earel_rocky,
planet_stardistance_km_rocky,
planet_stardistance_lm_rocky,
planet_ttime_rocky,
planet_rtime_rocky,
planet_gforce_rocky,
planet_type_rocky) VALUES (' 
$this->planet_name_rocky',
' $this->planet_radius_rocky',
' $this->planet_radius_earel_rocky',
' $this->planet_mass_rocky',
' $this->planet_mass_earel_rocky',
' $this->planet_stardistance_km_rocky',
' $this->planet_stardistance_lm_rocky',
' $this->planet_ttime_rocky',
'$this->planet_rtime_rocky',
'$this->planet_gforce_rocky',
'Rocky')";
    $this->connect()->query($sql);
    
}
    

}

class Planetas_gassy extends dbh{
    const EARTHMASS= 5972000000000000000000000;
 const PLANETSRHO = 5973.6; //kg/m3 
const GRAVITATIONCONST = 0.00000000006679;
    const LS = 300000;
    const PI = 3.14159;
   public $planet_name_gassy;
    public $planet_radius_gassy; 
    public $planet_radius_earel_gassy; 
    public $planet_volume_km3_gassy;
    public $planet_volume_m3_gassy;
    public $planet_mass_gassy;
public $planet_mass_earel_gassy;
public $planet_stardistance_km_gassy;
public $planet_stardistance_lm_gassy;
public $planet_ttime_gassy;
public $planet_rtime_gassy;
public $planet_gforce_gassy;

    
public function __construct($planet_name_gassy,$planet_radius_gassy,$planet_stardistance_km_gassy){
    $this->planet_name_gassy = $planet_name_gassy;
        $this->planet_radius_gassy = $planet_radius_gassy*10;
        $this->planet_stardistance_km_gassy = $planet_stardistance_km_gassy *150000;
}
    public function DataCalc($star_mass){
        $this->planet_radius_earel_gassy =  $this->planet_radius_gassy/6371;
         $this->planet_volume_km3_gassy = (4*PI*pow($this->planet_radius_gassy,3))/3 ;
         $this->planet_volume_m3_gassy =  $this->planet_volume_km3_gassy*1000000000;
         $this->planet_mass_gassy =  $this->planet_volume_m3_gassy*PLANETSRHO;
         $this->planet_mass_earel_gassy = $this->planet_mass_gassy/EARTHMASS;
         $this->planet_stardistance_lm_gassy =( $this->planet_stardistance_km_gassy/LS)/60;
         $this->planet_ttime_gassy =sqrt(((4*PI*PI)/(GRAVITATIONCONST)*($star_mass))*pow($this->planet_radius_gassy,3));
         $this->planet_rtime_gassy =  $this->planet_mass_earel_gassy*24;
         $this->planet_gforce_gassy = (GRAVITATIONCONST*( $this->planet_mass_gassy/pow( $this->planet_radius_gassy,2)))/1000000;
    }
public function dbINSERT($sys_name){
    $sql = "INSERT INTO ".$sys_name."_gassy_planets (
    planet_name_gassy,
planet_radius_gassy,
planet_radius_earel_gassy,
planet_mass_gassy,
planet_mass_earel_gassy,
planet_stardistance_km_gassy,
planet_stardistance_lm_gassy,
planet_ttime_gassy,
planet_rtime_gassy,
planet_gforce_gassy,planet_type_gassy) VALUES (' $this->planet_name_gassy',' $this->planet_radius_gassy',' $this->planet_radius_earel_gassy',' $this->planet_mass_gassy',' $this->planet_mass_earel_gassy',' $this->planet_stardistance_km_gassy',' $this->planet_stardistance_lm_gassy',' $this->planet_ttime_gassy','$this->planet_rtime_gassy','$this->planet_gforce_gassy','Gassy')";
    $this->connect()->query($sql);

}
     }
?>