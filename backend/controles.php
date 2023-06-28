<?php

//para imprimir errores en ejecucion;

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

    header('Content-Type:application/json');
    
    require_once ("Conectar.php");
    require_once ("models.php");

    $camper= new Camper();


    $body=json_decode(file_get_contents("php://input"),true);

    switch($_GET["op"]){
        
        case "GetAll"://Obtener los registros de la tabla

            $datos=$camper->get_empleados();//Metodo get
            echo json_encode($datos); 

        break;


        case "GetEm"://Obtener los registros de la tabla

            $datos=$camper->get_empresa();//Metodo get
            echo json_encode($datos); 

        break;

        case "GetCt"://Obtener los registros de la tabla

            $datos=$camper->get_Cotizacion();//Metodo get
            echo json_encode($datos); 

        break;

        case "GetPr"://Obtener los registros de la tabla

            $datos=$camper->get_Productos();//Metodo get
            echo json_encode($datos); 

        break;

        case "GeFactura"://Obtener los registros de la tabla

            $datos=$camper->get_Factura();//Metodo get
            echo json_encode($datos); 

        break;

   

        case "GetId":

            $datos=$camper->get_camper_id($_GET["id"]);
            echo json_encode($datos);
            
        break;




        case "insert":
            $data = $camper->insert_cotizacion($body['id_Alquiler'],$body['empleado'], $body['cliente'], $body['producto'],$body['cantidad'],$body['obra'], $body['precio_dia'], $body['fecha_salida'], $body['fecha_entrega'], $body['total'],$body['detalle']);   
            echo json_encode("Insertado correctamente");
            break;

        case "update":

            $datos=$camper->update_camper($body["id"],$body["imagen"],$body["nombre"],$body["edad"] ,$body["promedio"] ,$body["nivelCAmpus"], $body["nivelIngles"] , $body["especialidad"] , $body["direccion"] , $body["celular"] , $body["ingles"] , $body["Ser"] , $body["Review"] , $body["Skills"] , $body["Asitencia"]);
            echo json_encode("camper actualizado correctamente");
          
            break;
        
        case "delete":
        
            $datos=$camper->delete_camper($_GET["id"]);
            echo json_encode("camper eliminado correctamente");
          
            break;
    }

    

?>