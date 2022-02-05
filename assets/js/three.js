let scene,camera,renderer,controls,exporter,card,plane_front,plane_back;

import * as THREE from 'https://cdn.skypack.dev/three@';
import { OrbitControls } from 'https://cdn.skypack.dev/pin/three@v0.131.3-QQa34rwf1xM5cawaQLl8/mode=imports,min/unoptimized/examples/jsm/controls/OrbitControls.js';
import { GLTFExporter } from 'https://cdn.skypack.dev/pin/three@v0.131.3-QQa34rwf1xM5cawaQLl8/mode=imports,min/unoptimized/examples/jsm/exporters/GLTFExporter.js';



function init(){

    scene = new THREE.Scene();
    
    exporter = new GLTFExporter();

    camera = new THREE.PerspectiveCamera(
        75,
        window.innerWidth / window.innerHeight,
        0.5,
        500
    );
    
    renderer = new THREE.WebGLRenderer({antialias:true,alpha:true});

    renderer.setSize(window.innerWidth,window.innerHeight);

    document.getElementById('canvas2').appendChild(renderer.domElement);

    controls = new OrbitControls(camera, renderer.domElement);

    card = new THREE.Object3D();

    var Ftexture = new THREE.Texture(document.getElementById('result'));
    var Btexture = new THREE.TextureLoader().load( './assets/card/back.png' );

    document.getElementById('result').onload = () =>  { Ftexture.needsUpdate = true };


    window.makeCard3D = async function (){


        const geometry = new THREE.BoxGeometry( 6.5, 4.5, 0.01 );

        plane_front = new THREE.Mesh( 
            geometry,
            new THREE.MeshBasicMaterial( { map: Ftexture,side: THREE.FrontSide,transparent: true} ));
        plane_back = new THREE.Mesh( 
            geometry, 
            new THREE.MeshBasicMaterial( { map: Btexture ,side : THREE.BackSide,transparent: true} ) );

        plane_back.position.z -= 0.015;

        await card.add( plane_front );
        await card.add( plane_back );
        await scene.add(card);

        function save( blob, filename ) {

            link.href = URL.createObjectURL( blob );
            link.download = filename;
            link.click();

            // URL.revokeObjectURL( url ); breaks Firefox...

        }

        function saveString( text, filename ) {

            save( new Blob( [ text ], { type: 'text/plain' } ), filename );

        }
        function downloadJSON( json, filename ) {

            saveString( JSON.stringify( json ), filename );  

        }

        document.getElementById('result_o').onclick = ()=>{

            exporter.parse( scene, function ( gltf ) {
            
                downloadJSON( gltf,'covidcard.gltf' );
            
            } );

        }

        return 0;

    }


    camera.position.z = 8;

    animate();

}



function animate(){

    requestAnimationFrame(animate);
    renderer.render(scene,camera);
    controls.update();
    
    if(plane_front != undefined){
        scene.rotation.y += 0.006
    }
    
}
function onResize(){
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth,window.innerHeight);
}
window.addEventListener("resize",onResize);

init();


