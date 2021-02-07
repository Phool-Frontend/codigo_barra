
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como debe quedar mi APP</title>
</head>
<body>

<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/barcode-all.js"></script>



<style>
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
    .contenedor_celular{
        /*height: 40vh;*/
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
        #contenedor video{
            max-width: 100%;
            width: 100%;
            height:15rem;
        }
        #contenedor{
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
    <div class="contenedor_de_registro">
    <center><h2>Comprar con codigo </h2></center>
    <label for="">Ingrese codigo:</label>
    <input type="text" name="" id="nombre_pro_venta" class="cajita">
    <div class="codicional_camara">
                        <label for="cbox1">Pistola o Celular?</label>
                        <p>
                            <input type="radio" name="color" id="pistola_venta">
                                <label for="pistola_venta">Pistola</label>
                            <input onclick="activar_camara_cel()" type="radio" name="color" id="celular_venta">
                                <label for="celular_venta">Celular</label>
                        </p>

                       
    </div> 

    <input type="submit" id="buscador_pro" value="Buscar">

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
</fieldset>





<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
   
    $('#si_tengo').click(function(e){
        $('.codicional').hide();
        $('.codicional_camara').show();
        
    });
    $('#no_tengo').click(function(e){
        $('.codicional').hide();
        //$('.txt_barra').hide();
        //$('.cajita_barra').hide();
        $('.label_duro').show();    
    });
    $('#pistola').click(function(){
        $('.codicional_camara').hide();
        $('.txt_barra').show();
        $('.cajita_barra').show();
    });
    $('#celular').click(function(){
        $('.contenedor_de_registro').hide();
        $('.contenedor_celular').show();
        //emo_infinito();
        //$('.cajita_barra').show();
    });

    $("#no_tengo").click(function(){
        

        var cod_barra_seteado = $("#codigo_barra").val();

        if(cod_barra_seteado == ''){
            //console.log('Tratar los datos');

            //captando hora
            var currentdate = new Date();
            var fecha_D_M_A   =   currentdate.getDate()+ "" +(currentdate.getMonth()+1) + "" +currentdate.getFullYear();
            var hora_H_M  = currentdate.getHours() + "" + currentdate.getMinutes();

            ///////////// Tratar los datos ///////////////////
 
            cod_barra_seteado = hora_H_M+fecha_D_M_A;

            $("#no_tengo").val(cod_barra_seteado);
            //console.log(cod_barra_seteado);
            //////////////////////////////////////////////////
            //enviar_datos(cod_barra_seteado);
        }else{
            console.log('No hacer nada xd');
        }
    })
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
                //alert(hola);
                $("#valor_pex").val(hola);
                $('#contenedor').hide();

                var mensaje_succes = '<h2 style="font-size:smaller">Codigo detectado...</h2>';
                $(".mensaje_cel").html(mensaje_succes);
                $(".mensaje_cel").show();
                
                //Meter esto en un timeout de 3 segundos
                setTimeout(function(){ 
                     limpia_camara_barra(hola);
                },2500);
    }

    function limpia_camara_barra(hola){
        //alert("Estas --> limpia_camara_barra()");
        //alert("Parametro pasado es:");
        //alert(hola);
        //Para poner stop musica de fondo
        //myAudio.pause();
        //myAudio.currentTime = 0;
        //myAudio.muted = true

        $('.contenedor_celular').hide();
        $(".contenedor_de_registro").show();
        $('.codicional_camara').hide();
        $(".txt_barra").show();

        //Metemos el valor del otro input a este input :v
        $(".cajita_barra").show();
        $(".cajita_barra").val(hola);
        
    }
    
    function enviar_datos(){

            var cod_barra_seteado = $("#no_tengo").val();
            var cod_barra         = $("#codigo_barra").val();

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
         
    }

    function clasificando_barra(cod_barra,confirma) {
        console.log(confirma);
        $.ajax({
            type: "POST",
            async:true,
            url: 'crud.php',
            data: {
                opcion          : 'agregar',
                nombre          : $("#nombre_pro").val(),
                precio          : $("#precio_pro").val(),
                cantidad        : $("#cantidad_pro").val(),
                codigo_barra    : cod_barra,
                confirma        : confirma,
                id_producto     : $("#id").val() 
            },
            success: function (r) {
                //console.log(r);
            },
            error: function (request, status, error) {
                alert(request.responseText);
                }
            }); 
    }
    /*
    var currentdate = new Date();
    var fecha_A_M_D   =  currentdate.getFullYear()+ "/" + (currentdate.getMonth()+1)+ "/" + currentdate.getDate();
    var hora_H_M_S  = currentdate.getHours() + ":" + currentdate.getMinutes() + ":" + currentdate.getSeconds();
    currentdate.toLocaleTimeString('en-US', {hour: '2-digit', minute:'2-digit'})
    */   
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
        $('.codicional_camara').show()
        $('#pistola_venta').click(function(){
            $('.codicional_camara').hide();
            $(".codicional_camara").click(function(){
                    $("#nombre_pro_venta").focus();
                    $("#buscador_pro").show();
                    evaluar_codigo();         
             });
        })
           
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
    
</script>

