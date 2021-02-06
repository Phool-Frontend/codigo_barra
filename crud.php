<?php

require_once "php/conexion.php";
$conn = conexion();

//var_dump($_REQUEST);
//die();
$opcion         =   $_POST['opcion'] ?? '';
$id_producto    =   $_POST['id'] ?? '';
$nombre         =   $_POST['nombre'] ?? '';
$precio         =   $_POST['precio'] ?? '';
$cantidad       =   $_POST['cantidad'] ?? '';
$codigo_barra   =   $_POST['codigo_barra'] ?? '';
$confirma		=   $_POST['confirma'] ?? '';




switch ($opcion) {
    case 'agregar':
        if(empty($_REQUEST['id'])){
						
						//var_dump($codigo_barra);
						//************************* STMT -> Prepara - Envia - Recive - Cierra *************************
						//Meto la consulta para el stmt
						$consulta_sql = "INSERT into productos (nombre,precio,cantidad,codigo_barra) values (?,?,?,?)";

						//Preparo stmt
						$stmt = $conn ->prepare($consulta_sql);
						
						//Envio las variables
						$stmt->bind_param('siii', $nombre,$precio,$cantidad,$codigo_barra);
						
						//Recibe el servidor y ejecutar el la consulta sql
						$stmt->execute();
					
						
						///////////////////////////////// SACANDO EL ULTIMO ID /////////////////////
						if($confirma == 'no'):
									//Metemos  ID-hora-dia-año
									$ultimo_id = mysqli_insert_id($conn);					
									$cod_barra_com = $ultimo_id.$codigo_barra;
									//$cod_barra_com = 11;
									//var_dump($cod_barra_com);

									//echo $cod_barra_com;
									$consulta_sql = "update productos set codigo_barra = ? WHERE id_producto = ?";
									//Preparo stmt
									$stmt = $conn ->prepare($consulta_sql);
									//Envio las variables
									$stmt->bind_param('ii', $cod_barra_com,$ultimo_id);
									//Recibe el servidor y rjecutar el la consulta sql
									$stmt->execute();
						endif;
						////////////////////////////////////////////////////////////////////////////
						//Cierro el stmt y base de datos(consulta)
						$stmt->close();
						$conn->close();
						//*********************************************************************************************
				}
					
				else
				{
					//************************* STMT -> Prepara - Envia - Recive - Cierra *************************
					//Meto la consulta para el stmt
					
					$consulta_sql = "update productos set nombre = ? , precio = ? , cantidad = ? , codigo_barra WHERE id_producto = ?";

					//Preparo stmt
					$stmt = $conn ->prepare($consulta_sql);

					//Envio las variables
					$stmt->bind_param('siiii', $nombre,$precio,$cantidad,$codigo_barra,$id_producto);

					//Recibe el servidor y rjecutar el la consulta sql

					$stmt->execute();
					

					//Cierro el stmt y base de datos(consulta)
					$stmt->close();
					$conn->close();
					//*********************************************************************************************
			}
				
    break;

    case 'mostrar':
        # code...
    break;

    case 'borrar':
        # code...
    break;

    case 'editar':
        # code...
    break;

    default:
        echo "No existe opcion";
    break;
}









?>