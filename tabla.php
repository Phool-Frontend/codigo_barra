<?php
    require_once "php/conexion.php";
    $conexion=conexion();
    $sql = "SELECT * from t_productos";
    $result = mysqli_query($conexion,$sql);

?>

<table>
    <caption>Codigo de barras</caption>
    <tr>
        <td>Nombre</td>
        <td>Codigo de barras</td>
    </tr>
<?php
    while($ver=mysqli_fetch_row($result)):
        $arraycodigos[] = (string)$ver[2];
?>

    <tr>
        <td><?php echo $ver[1]; ?></td>
        <td>
            <svg id='<?php echo "barcode".$ver[2]; ?>'></svg>
        </td>
        </tr>
<?php endwhile; ?>
</table>

<script>

    function arrayjsonbarcode(j){
        json = JSON.parse(j);
        
        //Debe estar en un array como este el codigo de barra
        //console.log(json);

        arr  = [];
        for(var x in json){
            arr.push(json[x]);
        }
        return arr;
    }

    jsonvalor = '<?php echo json_encode($arraycodigos) ?>';
    console.log(jsonvalor);

    valores  = arrayjsonbarcode(jsonvalor);
    

    for (let i = 0; i < valores.length; i++) {
        JsBarcode("#barcode" + valores[i], valores[i].toString(),{
            format: "codabar",
            lineColor: "#000",
            width:2,
            hight:30,
            displayValue:true
        });
        
    }
</script>