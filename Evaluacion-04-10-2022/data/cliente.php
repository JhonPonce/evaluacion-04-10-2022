<?php
    require_once('database.php');
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

    }else{
        $accion = $_GET['accion'];
        if($accion === 'listar'){
            $sql = "SELECT A.id, razon_social, C.nombre AS tipo_documento,  A.numero_documento ,A.direccion
                    FROM cliente A INNER JOIN tipo_documento C
                    ON A.id_tipo_documento = C.id;";
            $clientes = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            //validacion
            if(count($clientes) > 0){
                $respuesta = [
                    "codigo" => 200,
                    "data" => $clientes
                ];
            }else{
                $respuesta = [
                    "codigo" => 404,
                    "data" => "No hay data disponible"
                ];
            }
            echo json_encode($respuesta);
        }
    }
?>