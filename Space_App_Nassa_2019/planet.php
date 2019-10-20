<html>
    <head>
      <style>
          body {margin: 0}
          canvas {width: 100%; height: 100%;}
    </style>
    </head>
    <body>
    
    <canvas id="myCanvas"></canvas>

<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "sistema");
$sql = "SELECT * FROM planetas;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        switch($row['material']){
            case "Ar":
                $color = "0x000000";
                break;
                case "Fe":
                $color = "#FF0000";
                break;
                case "H":
                $color = "#C0C0C0";
                break;
        }
echo "
<p>".$row['namae']."</p>
<p>".$row['taipu']."</p>
<p>".$row['size']."</p>
<p>".$row['material']."</p>
<script src='js/three.min.js'></script> 

<script>
 


	var scene, camera, renderer;  
	var geometry,geometry2,material,mesh,ring;
    
    
    var light, light1;

	init(); 
	animate();

	function init() {       

		scene = new THREE.Scene(); 
		camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 10000 ); 
        

		camera.position.z = 1000;
  
        
        
        light = new THREE.AmbientLight(0xFDB813,0.1);   //generamos luz ambiental
        scene.add(light);
        
        light1 = new THREE.PointLight(0xFDB813,10);     //generamos un punto de luz
        scene.add(light1);
        
        

       material = new THREE.MeshNormalMaterial( { color:0xd2b48c, wireframe: true });    //definimos el color de la figura y el tipo de superficie         true: vertices   false:solido
        
        
      
        
        //Material 1
		geometry = new THREE.SphereGeometry(".$row['size'].", 50, 50 ); //Creamos una esfera de medidas (radio,Nvertices x, Nvertices Y))
		mesh = new THREE.Mesh( geometry, material ); //definimos mesh como la combinacion de la figura y el color-material
		scene.add( mesh ); 
        mesh.position.set(0,0,0);
        
    
        geometry2 = new THREE.RingGeometry(350, 230, 62 );
        ring = new THREE.Mesh( geometry2, material );
        scene.add(ring);
        
        ring.rotation.x += 1.8;
        
        
        //cambios a render para cambiar el color del fondo
		renderer = new THREE.WebGLRenderer({canvas: document.getElementById('myCanvas'),antialias:true});             //Sirve para renderizar la pieza
        renderer.setClearColor(0xC0C0C0);
        renderer.setPixelRatio(window.devicePixelRatio);
		renderer.setSize( window.innerWidth, window.innerHeight ); //definimos los parametros de renderizado, en este caso toda la pantalla

		document.body.appendChild( renderer.domElement );  
        

	}

	function animate() {         //Inicio de la funcion de animacion

		requestAnimationFrame( animate ); 

        //Movimiento del planeta
		mesh.rotation.y += 0.01;
		
        ring.rotation.z += -0.005;
        
		renderer.render( scene, camera );

	}

</script>";
    }
}

   
?>
            </body>
</html>