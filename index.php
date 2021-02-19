<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como debe quedar mi APP</title>
</head>
<body>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<!-- Font owesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

<!--Swit-alert 2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.14.1/dist/sweetalert2.all.min.js"></script>

<style>
#buscador_pro_2{
    display:none;
}

    fieldset{
        border: solid 2px transparent;
    }
    table, th, td {
            border: 1px solid black;
            color: white;
            width: 100%;
            font-weight: bold;
            text-transform: uppercase;
        }
        body{
            background-image: linear-gradient(to right,#355C7D,#6C5B7B,#C06C84);
        }
    #label_codigo_venta,#nombre_pro_venta{
        display: none;
    }
    #buscador_pro_2{
        width:80%;
        padding:7px;
      
        margin: 0 auto;
    }
    #buscador_pro{
        display:none;
        width:80%;
        padding:7px;
        display:flex!important;
        justify-content: center;
        align-items:center;
        margin: 0 auto;
    }
    #vista_registro{
        display:none;
    }
    #vista_listar{
        display:none;
    }
    #vista_vender{  
        display:none;
    }
    .emo_menu input{
        padding: 10px;
        width: 80%;
        margin-bottom: 4vh;
    }
    .emo_menu{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
        border: solid 2px gold;
        height: auto;
        margin: 30vh auto;
        padding-top: 4vh;
    }
    table, th, td {
        border: 1px solid black;
        color: black;
        width: 100%;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
    }
    .contenedor_celular h2{
        text-align: center;
    }
    input#valor_pex {
        padding: 6px;
        width: 100%;
        margin-bottom: 2vh;
    }

    .mensaje_cel{
        width: 100%;
        height: 8vw;
        background-color:greenyellow;
        color: white;
        font-weight: 800;
        display: none;
        text-align: center;
        font-size: 6vw;
    }
    .contenedor_celular,.contenedor_celular_2{
        display: none;
        margin: 0 auto;
    }
    .codicional_camara{
        display: none;
    }
    .filete{
        margin:0 auto;
        width:70%;
        padding:20px;
        display:flex;
        flex-wrap: wrap;
        background: oldlace;
    }
    .cajita{
        width:98%;
        padding:6px;
        margin-bottom: 16px;
    }
    .txt_barra{
        display: none;
    }
    .cajita_barra{
        width:98%;
        padding:6px;
        display:none;
    }
    .boton-form{
        width: 60%;
        padding: 6px;
        margin: 10px auto 0 auto;
        display: block;
    }
    .codicional{
        margin: 0 auto;
        width: 100%;
    }
    .label_duro {
    display:none; 
    padding: 10px;
    border: solid 2px red;
    background: gold;
    }
    .espacito{
        margin:23px;
    }
    /******************************************  ESTILOS DE LA CAMARA DE EDTEAM *****************************************************************/
        #contenedor video,#contenedor_2 video{
            max-width: 100%;
            width: 100%;
            height:15rem;
        }
        #contenedor,#contenedor_2{
            max-width: 100%;
            position:relative;
        }
        canvas{
            max-width: 100%;
        }
        canvas.drawingBuffer{
            position:absolute;
            top:0;
            left:0;
        }
</style>


<div class="emo_menu">
    <input type="button" value="Registrar producto" onclick="vista_registro()">
    <input type="button" value="Listar Producto"    onclick="vista_listar()">
    <input type="button" value="Vender producto"    onclick="vista_vender()">
</div>




<fieldset id="vista_registro" class="filete" >
    <div class="contenedor_de_registro">
                <center><h2>Lectura de codigo de barra</h2></center>
                <legend>Registrar Producto</legend>
                <label for="">Ingrese Nombre</label>
                <input type="text" name="" id="nombre_pro" class="cajita">

                <label for="">Ingrese Precio</label>
                <input type="text" name="" id="precio_pro" class="cajita">

                <label for="">Ingrese Cantidad</label>
                <input type="text" name="" id="cantidad_pro" class="cajita">

                <div class="codicional">
                        <label for="cbox1">Usar codigo de barra del producto?</label>
                        <p>
                            <input type="radio" name="color" id="si_tengo">
                                <label for="si_tengo">SI</label>
                            <input type="radio" name="color" id="no_tengo">
                                <label for="no_tengo">NO</label>
                        </p>
                </div>
                <div class="codicional_camara">
                        <label for="cbox1">Pistola o Celular?</label>
                        <p>
                            <input type="radio" name="color" id="pistola">
                                <label for="pistola">Pistola</label>
                            <input onclick="activar_camara_cel()" type="radio" name="color" id="celular">
                                <label for="celular">Celular</label>
                        </p>
                </div>     

                <label class="txt_barra" for="">Codigo de barra capturado</label>
                <input type="text" name="" id="codigo_barra" class="cajita_barra" disabled>
                <center class="espacito"><label class="label_duro">Codigo automatico...</label></center>

                <button onclick="enviar_datos()" class="boton-form">Registrar</button>
    </div><!--.contenedor_de_registro-->

    <div class="contenedor_celular">
                <h2>Captando codigo!!!</h2>
               
                
                <input type="text" id="valor_pex" disabled>    
                <div class="mensaje_cel"></div>
                
    </div>
    
    <div id="contenedor"></div>
                
    

</fieldset>


<fieldset id="vista_listar">
    <div class="contenedor_de_registro">
    <center><h2>Listando codigo de barra</h2></center>

    <table id="mytable" class="table table-bordred table-striped">
          <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Codigo_barra</th>
                <th>Editar</th>
                <th>Borrar</th>
          </thead>
          <tbody id="id_body">
          </tbody>
    </table>

    
</fieldset><br><br><br>



<fieldset id="vista_vender">
    <div class="contenedor_de_registro_2">
        <center><h2>Comprar con codigo </h2></center>
        <label for="label_codigo_venta" id="label_codigo_venta">Ingrese codigo:</label>
        <input type="text" name="" id="nombre_pro_venta" class="cajita">
        <div class="codicional_camara_2">
                            <label for="cbox1">Pistola o Celular?</label>
                            <p>
                                <input type="radio" name="color" id="pistola_venta_2">
                                    <label for="pistola_venta_2">Pistola</label>
                                <input onclick="activar_camara_cel_2()" type="radio" name="color" id="celular_venta_2">
                                    <label for="celular_venta_2">Celular</label>
                            </p>

                                
    </div> 

    <input type="submit" id="buscador_pro_2"  value="Buscar"> 
    

    <hr>
    <table id="mytable_venta" class="table table-bordred table-striped" style="display:none">
        <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Accion</th>
        </thead>
        <tbody id="id_body_venta">
        </tbody>
    </table>

    <!-- Activando camara para hacer la transaccion--->
    <div class="contenedor_celular_2">
                <h2>Captando codigo!!!</h2>
               
                
                <input type="text" id="valor_pex_2" disabled>    
                <div class="mensaje_cel_2"></div>
                
    </div>
    
    <div id="contenedor_2"></div>

</fieldset>





<script>

    //Ejemplo de click cn funcion anonima y dentro show y hide
    [].forEach.call( document.querySelectorAll( '#si_tengo' ), function ( a ) {
        a.addEventListener( 'click', function ( e ) {
            
            document.querySelectorAll(".codicional").forEach(box =>{ box.style.display = "none"});
            document.querySelectorAll(".codicional_camara").forEach(box =>{ box.style.display = "block"});

            e.preventDefault();
        }, false );
    });


    [].forEach.call( document.querySelectorAll( '#no_tengo' ), function ( a ) {
        a.addEventListener( 'click', function ( e ) {
            

            document.querySelectorAll(".codicional").forEach(box =>{ box.style.display = "none"});
            document.querySelectorAll(".label_duro").forEach(box =>{ box.style.display = "block"});


            e.preventDefault();
        }, false );
    });

    [].forEach.call( document.querySelectorAll( '#pistola' ), function ( a ) {
        a.addEventListener( 'click', function ( e ) {
            

            document.querySelectorAll(".codicional_camara").forEach(box =>{ box.style.display = "none"});
            document.querySelectorAll(".txt_barra").forEach(box =>{ box.style.display = "block"});
            document.querySelectorAll(".cajita_barra").forEach(box =>{ box.style.display = "block"});

            document.querySelectorAll(".codicional_camara").forEach(box =>{ box.style.display = "none"});
            document.querySelectorAll(".txt_barra").forEach(box =>{ box.style.display = "block"});
            document.querySelectorAll(".cajita_barra").forEach(box =>{ box.style.display = "block"});
            
         


            e.preventDefault();
        }, false );
    });

    [].forEach.call( document.querySelectorAll( '#pistola_venta_2' ), function ( a ) {
        a.addEventListener( 'click', function ( e ) {
            

            document.querySelectorAll("#label_codigo_venta").forEach(box =>{ box.style.display = "block"});
            document.querySelectorAll("#nombre_pro_venta").forEach(box =>{ box.style.display = "block"});
            document.querySelectorAll("#buscador_pro_2").forEach(box =>{ box.style.display = "block"});
            document.querySelectorAll(".codicional_camara_2").forEach(box =>{ box.style.display = "none"});

            e.preventDefault();
        }, false );
    });


    [].forEach.call( document.querySelectorAll( '#celular' ), function ( a ) {
        a.addEventListener( 'click', function ( e ) {
            
            document.querySelectorAll(".contenedor_de_registro").forEach(box =>{ box.style.display = "none"});
            document.querySelectorAll(".contenedor_celular").forEach(box =>{ box.style.display = "block"});
        
            e.preventDefault();
        }, false );
    });


    [].forEach.call(document.querySelectorAll('#no_tengo'),function(a) {
        a.addEventListener('click',function(e){
            
            var cod_barra_seteado = document.getElementById("codigo_barra").value;
        

            if(cod_barra_seteado == ''){
                //console.log('Tratar los datos');

                //captando hora
                var currentdate = new Date();
                var fecha_D_M_A   =   currentdate.getDate()+ "" +(currentdate.getMonth()+1) + "" +currentdate.getFullYear();
                var hora_H_M  = currentdate.getHours() + "" + currentdate.getMinutes();

                ///////////// Tratar los datos ///////////////////
    
                cod_barra_seteado = hora_H_M+fecha_D_M_A;

            
                document.getElementById("no_tengo").value = cod_barra_seteado;
                //inputNombre.value = "DYP"; ---> Este deberia haber insertado valor al input pero el de arriba dio

            }else{
                console.log('No hacer nada xd');
            }


        
        e.preventDefault();
        },false);
    });


    [].forEach.call(document.querySelectorAll('#celular_venta_2'),function(a) {
        a.addEventListener('click',function(e){
            
           
            document.querySelectorAll(".codicional_camara_2").forEach(box =>{ box.style.display = "none"});
        
        e.preventDefault();
        },false);
    });
  
   
</script>
<!--************************************************* COPY CODIGO DE BARRA  *********-->
    

<script src="js/quagga.min.js"></script>

<script>

    function suena_maquinita() {
        var sonido_correcto_barra = new  Audio("sonido/barcode.wav");  
        sonido_correcto_barra.play();
    }

    function suena_error(){
        var sonido_error = new  Audio("sonido/error.mp4");  
        sonido_error.play();
    }

    function activar_camara_cel(){      
        console.log("Ya chapa");
        Quagga.init({
                    inputStream: {
                        constraints: {
                            width: 1920,
                            height: 1080,
                        },
                        name: "Live",
                        type: "LiveStream",
                        target: document.querySelector('#contenedor'), // Pasar el elemento del DOM
                    },
                    decoder: {
                        readers: ["ean_reader"]
                    }
                }, function (err) {
                    if (err) {
                        console.log(err);
                        // Sonido de error de prueba
                        sonido_error.play();
                        return
                    }
                    console.log("Iniciado correctamente");
                    Quagga.start();
                });
                Quagga.onDetected((data) => {
                    suena_maquinita();
                    var hola = data.codeResult.code;
                    // Imprimimos todo el data para que puedas depurar
                    console.log(data);
                    llamada_pro(hola);
                });
    }

    function emo_infinito(){
        var myAudio = new Audio('https://opengameart.org/sites/default/files/audio_preview/swing_0.mp3.ogg'); 
        myAudio.addEventListener('ended', function() {
            this.currentTime = 0;
            this.play();
        }, false);
        myAudio.play();
    }


    /////////////////////////// Ahora biene lo bueno //////////////////////
    //Esta funcion hace todo lo que pasara luego de que lea el codigo de barra en el cel
    function llamada_pro(hola){
                
                document.getElementById("valor_pex").value = hola;
                document.querySelectorAll("#contenedor").forEach(box =>{ box.style.display = "none"});
                var mensaje_succes = '<h2 style="font-size:smaller">Codigo detectado...</h2>';
                document.getElementsByClassName("mensaje_cel")[0].innerHTML = mensaje_succes;
                document.querySelectorAll(".mensaje_cel").forEach(box =>{ box.style.display = "block"});
        
                
                //Meter esto en un timeout de 3 segundos
                setTimeout(function(){ 
                     limpia_camara_barra(hola);
                },2500);
    }

    

    function limpia_camara_barra(hola){

        document.querySelectorAll(".contenedor_celular").forEach(box =>{ box.style.display = "none"});
        document.querySelectorAll(".contenedor_de_registro").forEach(box =>{ box.style.display = "block"});
        document.querySelectorAll(".codicional_camara").forEach(box =>{ box.style.display = "none"});
        document.querySelectorAll(".txt_barra").forEach(box =>{ box.style.display = "block"});

        //Metemos el valor del otro input a este input :v
        document.querySelectorAll(".cajita_barra").forEach(box =>{ box.style.display = "block"});
        document.getElementsByClassName("cajita_barra")[0].value = hola;
       
    }
    
    function enviar_datos(){
           
            var cod_barra_seteado = document.getElementById('no_tengo').value;
            var cod_barra         = document.getElementById('codigo_barra').value;
  
            //console.log(cod_barra_seteado);
            //console.log(cod_barra);
            if(cod_barra_seteado == 'on'){
                //console.log("SI hay cod de barra");
                var confirma = 'si';
                console.log(cod_barra);
                clasificando_barra(cod_barra,confirma);
               
            }else{
                //console.log("No hay cod de barra");
                var confirma = 'no';
                console.log(cod_barra_seteado);
                clasificando_barra(cod_barra_seteado,confirma);
            }

            //console.log(codigo_barra);
            Swal.fire({
                title: '<i class="far fa-laugh" style="font-size:100px;color:blue!important)"></i>',
                text: 'Se agrego correctamente!'
            })
         
    }


    function clasificando_barra(cod_barra,confirma) {
                console.log(confirma);

                var opcion      = 'agregar';
                var nombre      =  document.getElementById("nombre_pro").value;
                var precio      =  document.getElementById("precio_pro").value;
                var cantidad    =  document.getElementById("cantidad_pro").value;
                //var id_producto =  document.getElementById("id_producto").value;
            

                 let datos = new FormData();
                 datos.append('opcion',opcion),
                 datos.append('nombre',nombre),
                 datos.append('precio',precio),
                 datos.append('cantidad',cantidad),
                 datos.append('codigo_barra',cod_barra),
                 datos.append('confirma',confirma)
                 //datos.append('id_producto',id_producto)
             
                 
 
                 fetch('crud.php', {
                   method: 'POST',
                   body: datos
                 })
                 .then(function(response) {
                   if(response.ok) {
                       return response.text()
                   } else {
                       throw "Error en la llamada Ajax";
                   }
 
                 })
                 .then(function(texto) {
                   //console.log(texto);
                   //verificacion_r(texto);
                 })
                 .catch(function(err) {
                   console.log(err);
                 });
        
    }


    function vista_registro(){
        $('#vista_registro').show();
        $('.emo_menu').hide();
    }

    function vista_listar(){
        $('#vista_listar').show();
        $('.emo_menu').hide();
        llamando_productos();
    }

    function vista_vender(){
        $('#vista_vender').show();
        $('.emo_menu').hide();
        ///////////////////////
        $('.codicional_camara').show();
        
        $('#pistola_venta').click(function(){
            $('#nombre_pro_venta').show();
            $('#label_codigo_venta').show();
            $('.codicional_camara').hide();   
            $(".codicional_camara").click(function(){
                    $("#nombre_pro_venta").focus();
                    $("#buscador_pro_2").show();
                    evaluar_codigo();         
             });
        })

        $('#celular_venta_2').click(function(){
            console.log("Borra todo mano gaaa");
            $('.codicional_camara').hide();
            $('#buscador_pro_2').hide();
            $('hr').hide();
            $('#nombre_pro_venta').show();
            $( "#nombre_pro_venta" ).prop("disabled",true); 
            
        });
    }
    ////////////////////////////////////////// AREM0S LA PARTE DE LISTAR PRODUCTOS ///////////////////////////////////////
    
    function llamando_productos(){
            $.ajax({
                type: "POST",
                async:true,
                url: 'crud.php',
                data: {
                    opcion          : 'mostrar',
                    nombre          : $("#nombre_pro").val(),
                    precio          : $("#precio_pro").val(),
                    cantidad        : $("#cantidad_pro").val()
                },
                success: function (results) {
                    
                    dataArr = JSON.parse(results); 
                    //console.log(dataArr);
                    //console.log(dataArr[0].codigo_barra);
                    var str = '';
                    $("#id_body").html(str);	  
                    for(i=0;i<dataArr.length;i++)
                    {
                    //`Con esto vale verga las demas comillas este es el REY`
                    str += '<tr>'+
                        '<td>'+dataArr[i].nombre+'</td>'+
                        '<td>'+dataArr[i].precio+'</td>'+
                        '<td>'+dataArr[i].cantidad+'</td>'+
                        '<td><svg id="barcode'+dataArr[i].codigo_barra+'"></td>'+
                        '<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-sm" data-title="Edit" data-toggle="modal" data-target="#edit" onClick="editar('+dataArr[i].id+');" ><i class="fas fa-pencil-alt"></i></button></p></td>'+
                        '<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-sm" data-title="Delete" data-toggle="modal" data-target="#delete" onClick="borrar('+dataArr[i].id+');" ><i class="fas fa-trash-alt"></i></button></p></td>'+
                        '<input type="hidden" id="delete_id">'+
                        '</tr>';
                    }  
                    $("#id_body").html(str);
                    //////////////////////////////////////////////////////////////////////////////
                    /////// HORA DE METER EL CODIGO DE BARRA////////////////////////  Metodo para sacar arrays
                    var barras = [];
                    for(i=0;i<dataArr.length;i++)
                    {
                        barras.push(dataArr[i].codigo_barra);
                    }
                    console.log(barras);
                    //////////////////////////////////////////////////////////////////
                    for (let i = 0; i < barras.length; i++) {
                        JsBarcode("#barcode" + barras[i], barras[i].toString(),{
                            format: "codabar",
                            lineColor: "#000",
                            width:2,
                            hight:30,
                            displayValue:true
                        });
                        
                    }

                },
                error: function (request, status, error) {
                    alert(request.responseText);
                    }
                });
    }
   
    function evaluar_codigo(){
        $('#buscador_pro').click(function(){
            var valor_input = $('#nombre_pro_venta').val();
            //console.log(valor_input);
                        $.ajax({
                        type: "POST",
                        async:true,
                        url: 'crud.php',
                        data: {
                            opcion          : 'venta_producto',
                            buscar_pro_ma   : valor_input,
                            id_producto     : $("#id").val() 
                        },
                        success: function (results) {
                                dataArr = JSON.parse(results); 
                                //console.log(dataArr);
                                //console.log(dataArr[0].codigo_barra);
                                var str = '';
                                $("#id_body_venta").html(str);	  
                                for(i=0;i<dataArr.length;i++)
                                {
                                //`Con esto vale verga las demas comillas este es el REY`
                                str += '<tr>'+
                                    '<td>'+dataArr[i].nombre+'</td>'+
                                    '<td>'+dataArr[i].precio+'</td>'+
                                    '<td>'+dataArr[i].cantidad+'</td>'+
                                    '<td><button class="btn btn-primary btn-sm" data-venta_pro='+dataArr[i].id_producto+'  onClick="vender_pro('+dataArr[i].id_producto+');" >Vender</button></td>';
                                    
                                    
                                }  
                                $("#id_body_venta").html(str);
                                $('#mytable_venta').show();
                        },
                        error: function (request, status, error) {
                            alert(request.responseText);
                            }
                        }); 
        })
         
               
    }

    function vender_pro(valor){
        console.log(valor);
        $(this).click(function(){$('tbody').hide();});
        //$("[data-venta_pro='120']").hide();
        //$('tbody').hide();
        //$("[data-venta_pro='120']").click(function(){$('tbody').hide();});
    }

    function activar_camara_cel_2(){      
        console.log("Ya chapa");
        Quagga.init({
                    inputStream: {
                        constraints: {
                            width: 1920,
                            height: 1080,
                        },
                        name: "Live",
                        type: "LiveStream",
                        target: document.querySelector('#contenedor_2'), // Pasar el elemento del DOM
                    },
                    decoder: {
                        readers: ["ean_reader"]
                    }
                }, function (err) {
                    if (err) {
                        console.log(err);
                        // Sonido de error de prueba
                        sonido_error.play();
                        return
                    }
                    console.log("Iniciado correctamente en camara_cel_2");
                    Quagga.start();
                });
                Quagga.onDetected((data) => {
                    suena_maquinita();
                    var hola = data.codeResult.code;
                    // Imprimimos todo el data para que puedas depurar
                    console.log(data);
                    llamada_pro_2(hola);
                });
    }

    function llamada_pro_2(hola){
                alert("Llego a funcion llamada_pro_2()");
               
                document.getElementById("nombre_pro_venta").value = hola;
                document.querySelectorAll("#contenedor_2").forEach(box =>{ box.style.display = "none"});
                var mensaje_succes = '<h2 style="font-size:smaller">Codigo detectado...</h2>';
                document.getElementsByClassName("mensaje_cel_2")[0].innerHTML = mensaje_succes;
                document.querySelectorAll(".mensaje_cel_2").forEach(box =>{ box.style.display = "block"});
              
                //Meter esto en un timeout de 3 segundos
                setTimeout(function(){ 
                     limpia_camara_barra_2(hola);
                },2500);
    }
    
    function limpia_camara_barra_2(hola){

        document.querySelectorAll(".contenedor_de_registro_2").forEach(box =>{ box.style.display = "block"});
        document.querySelectorAll(".codicional_camara_2").forEach(box =>{ box.style.display = "none"});





        document.querySelectorAll(".txt_barra_2").forEach(box =>{ box.style.display = "block"});

        //Metemos el valor del otro input a este input :v
        document.querySelectorAll(".cajita_barra").forEach(box =>{ box.style.display = "block"});
        document.getElementsByClassName("cajita_barra")[0].value = hola;

    }

</script>

<!--Barcode libreria-->
<script src="js/barcode-all.js"></script>



