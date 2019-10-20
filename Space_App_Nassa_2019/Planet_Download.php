<?php

class Planet_Down_rocky extends dbh{

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
   public $result;

public function Fetch($sys_name){
     $sql ="SELECT * FROM ".$sys_name."_rocky_planets"; 
    $query = $this->connect()->query($sql);
    $this->result = array();
    while ($record = mysqli_fetch_array($query)) {
         $this->result[] = $record;
    }
    return $this->result;
}

    }  

class Planet_Down_gassy extends dbh{

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
   public $result;

public function Fetch($sys_name){
     $sql ="SELECT * FROM ".$sys_name."_gassy_planets"; 
    $query = $this->connect()->query($sql);
    $this->result = array();
    while ($record = mysqli_fetch_array($query)) {
         $this->result[] = $record;
    }
    return $this->result;
}

    } 
            
        
        
?>