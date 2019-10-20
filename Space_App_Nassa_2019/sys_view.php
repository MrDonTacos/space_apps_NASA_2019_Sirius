     
<?php
include('head_search_bar.php');
session_start();
include("dbhconn.php");
include("Planet_Download.php");
$conn = mysqli_connect("127.0.0.1", "root", "", "sistemas");
$sys_name = $_SESSION['sys_name'];
$sql1 = "SELECT * FROM sysdata WHERE sys_name = '$sys_name';";
$result1 = mysqli_query($conn,$sql1);
$resultCheck1 = mysqli_num_rows($result1);

if($resultCheck1 >0 ){
    while($row = mysqli_fetch_assoc($result1)){
        $sys_creator = $row['sys_creator'];
        $sys_date = $row['sys_date'];
    }
}


$sql2 = "SELECT * FROM ".$sys_name."_star";
$result2 = mysqli_query($conn,$sql2);
$resultCheck2 = mysqli_num_rows($result2);

if($resultCheck2 >0 ){
    while($row = mysqli_fetch_assoc($result2)){
        $star_radius =$row['star_radius']/400000;
        $star_color = $row['star_color'];
        $star_name = $row['star_name'];

    }
}
    $_SESSION['star_name'] = $star_name;
         
        
  echo "<script id='body_gen' src='js/three.min.js'></script>
   <script src='js/OrbitControls.js'></script>

<script>
 
var controls, camera, scene, renderer, render;    
var geometry_s,material,mesh_s;
    ";
for($i=0;$i<$_SESSION['planet_rocky_number'];$i++){
    echo "var geometry_rocky".$i.",mesh_rocky".$i.";
    ";
}
for($i=0;$i<$_SESSION['planet_gassy_number'];$i++){
    echo "var geometry_gassy".$i.",mesh_gassy".$i.";
    ";
}
    
    echo "

	init(); 
	animate();

	function init() {       
 

            renderer = new THREE.WebGLRenderer();
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.body.appendChild(renderer.domElement);


            scene = new THREE.Scene();
            camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 10000);
            camera.position.set(1000, 1000, 1000);

  
            controls = new THREE.OrbitControls(camera, renderer.domElement);
     

        
     
        
        

       material_s = new THREE.MeshBasicMaterial( { color:0x".$star_color.", wireframe: true });    
        material = new THREE.MeshBasicMaterial( { color:0xd2b48c, wireframe: true });
          
      
       
		geometry_s = new THREE.SphereGeometry(".$star_radius.", 50, 50 ); 
		mesh_s = new THREE.Mesh( geometry_s, material_s ); 
		scene.add( mesh_s ); 
        mesh_s.position.set(0,0,0);";
    ////////////////////////ROCKY PLANETS
        $planets_rocky = new Planet_Down_rocky();
      $planetsarray_rocky=$planets_rocky->Fetch($sys_name);
            
    for($i=0;$i<$_SESSION['planet_rocky_number'];$i++)
    {
    $planet_radius_rocky = $planetsarray_rocky[$i]['planet_radius_rocky']/200;
    $planet_stardistance_km_rocky = $planetsarray_rocky[$i]['planet_stardistance_km_rocky'];
    $planet_x_axis_rocky = $planet_stardistance_km_rocky /150000; 
    $planet_y_axis_rocky = $planet_x_axis_rocky*2;
        echo" 
        
		geometry_rocky".$i." = new THREE.SphereGeometry(".$planet_radius_rocky.", 50, 50);
            mesh_rocky".$i." = new THREE.Mesh(geometry_rocky".$i.", material); 
            scene.add(mesh_rocky".$i.");
            mesh_rocky".$i.".position.x = ".$planet_x_axis_rocky.";
            mesh_rocky".$i.".position.y = ".$planet_y_axis_rocky.";
            mesh_rocky".$i.".original = mesh_rocky".$i.".position.x;
            mesh_rocky".$i.".originaly = mesh_rocky".$i.".position.y;
            mesh_rocky".$i.".bol = false;";
    }
    
    ///////////////////////Gassy PLANETS
         $planets_gassy = new Planet_Down_gassy();
      $planetsarray_gassy=$planets_gassy->Fetch($sys_name);
            
    for($i=0;$i<$_SESSION['planet_gassy_number'];$i++)
    {
    $planet_radius_gassy = $planetsarray_gassy[$i]['planet_radius_gassy']/200;
    $planet_stardistance_km_gassy = $planetsarray_gassy[$i]['planet_stardistance_km_gassy'];
    $planet_x_axis_gassy = $planet_stardistance_km_gassy /150000; 
    $planet_y_axis_gassy = $planet_x_axis_gassy*2;
        echo" 
        
		geometry_gassy".$i." = new THREE.SphereGeometry(".$planet_radius_gassy.", 50, 50);
            mesh_gassy".$i." = new THREE.Mesh(geometry_gassy".$i.", material); 
            scene.add(mesh_gassy".$i.");
            mesh_gassy".$i.".position.x = ".$planet_x_axis_gassy.";
            mesh_gassy".$i.".position.y = ".$planet_y_axis_gassy.";
            mesh_gassy".$i.".original = mesh_gassy".$i.".position.x;
            mesh_gassy".$i.".originaly = mesh_gassy".$i.".position.y;
            mesh_gassy".$i.".bol = false;";
    }
    
      
        echo"
        
      renderer.setClearColor(0x000000);
            renderer.setPixelRatio(window.devicePixelRatio);
            renderer.setSize(window.innerWidth, window.innerHeight); 

            document.body.appendChild(renderer.domElement);

        

	}

	function animate() {         

		requestAnimationFrame(animate);



            mesh_s.rotation.z += 0.01; //



            
            controls.update();

            renderer.render(scene, camera);

	}
    
     function rotacionNegativa(varUno) {

            if (varUno.bol == false && varUno.position.x <= varUno.original && varUno.position.x >= -(varUno.original - 12)) {
                varUno.position.x -= 1;
                varUno.position.y = Math.sqrt(Math.pow(varUno.originaly, 2) * (1 - (Math.pow(varUno.position.x, 2) / Math.pow(varUno.original, 2))));
                console.log(varUno.position.x + ' ' + varUno.position.y + ' ' + varUno.bol.toString())
            }
            if (varUno.position.x < -(varUno.original - 12) && !varUno.bol) {
                if (varUno.position.x > -varUno.original) {
                    varUno.position.x -= .5;


                    varUno.position.y = Math.sqrt(Math.pow(varUno.originaly, 2) * (1 - (Math.pow(varUno.position.x, 2) / Math.pow(varUno.original, 2))));
                    console.log(varUno.position.x + ' ' + varUno.position.y + ' ' + varUno.bol.toString())
                }
                if (varUno.position.x == -varUno.original) {
                    varUno.bol = true;
                    rotacionPositiva(varUno);
                }
            }
            if (varUno.bol)
                rotacionPositiva(varUno);


        }

        function rotacionPositiva(varUno) {

            if (varUno.bol == true && varUno.position.x >= -varUno.original && varUno.position.x <= (varUno.original - 12)) {
                varUno.position.x += 1;


                varUno.position.y = -Math.sqrt(Math.pow(varUno.originaly, 2) * (1 - (Math.pow(varUno.position.x, 2) / Math.pow(varUno.original, 2))));
                console.log(varUno.position.x + ' ' + varUno.position.y);

            }

            if (varUno.position.x > (varUno.original - 12) && varUno.bol) {
                varUno.position.x += .5;

                varUno.position.y = -Math.sqrt(Math.pow(varUno.originaly, 2) * (1 - (Math.pow(varUno.position.x, 2) / Math.pow(varUno.original, 2))));
                console.log(varUno.position.x + ' ' + varUno.position.y);
                if (varUno.position.x == varUno.original) {
                    varUno.bol = false;
                    rotacionNegativa(varUno);
                }
            }


            if (!varUno.bol)
                rotacionNegativa(varUno);
        }

        function c() {
         ";
            for($i=0;$i<$_SESSION['planet_rocky_number'];$i++){ 
            echo "rotacionNegativa(mesh_rocky".$i.");";
                 }
     for($i=0;$i<$_SESSION['planet_gassy_number'];$i++){ 
            echo "rotacionNegativa(mesh_gassy".$i.");";
                 }
       echo " }

        window.setInterval(c, 1 );

</script>";          



?>
    <button  type="button" onclick="location.href='star_mod_form.php';" >Edición estelar</button>
    
    
    
         </body>
</html>

        
 
