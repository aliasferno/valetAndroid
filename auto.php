<?php
    include('config.php');
    $post = json_decode(file_get_contents("php://input"), true);
    $tarifa_base = 2;

    if($post['accion'] == 'Insertar'){
        $sentencia = sprintf("INSERT INTO ingreso_auto (auto_placa, modelo, anio, color, fecha, entrada, salida) values ('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
            $post['placa'],
            $post['modelo'],
            $post['anio'],
            $post['color'],
            $post['fecha'],
            $post['entrada'],
            $post['salida'],
        );
        $result = mysqli_query($mysqli, $sentencia);

        if($result){
            $respuesta = json_encode(array('estado' => true, 'mensaje' => 'Datos ingresados'));
        } else{
            $respuesta = json_encode(array('estado' => false, 'mensaje' => 'Error al ingresar los datos'));
        }
        echo $respuesta;
    }

    if($post['accion'] == 'consultar'){
        $sentencia = sprintf('select * from ingreso_auto');
        $result = mysqli_query($mysqli, $sentencia);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $datos[] = array(
                    'codigo' => $row['cod_auto'],
                    'placa' => $row['auto_placa'],
                    'modelo' => $row['modelo'],
                    'fecha' => $row['fecha'],
                    'entrada' => $row['entrada'],
                );
            }
            $respuesta = json_encode(array('estado' => true, 'autos' => $datos));
        }else{
            $respuesta = json_encode(array('estado' => false, 'mensaje' => 'No existen registros'));
        }
        echo $respuesta;
    }

    if($post['accion'] == 'Datos'){
        $sentencia = sprintf("select * from ingreso_auto where cod_auto ='%s'", $post['codigo']);
        $result = mysqli_query($mysqli, $sentencia);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $datos[] = array(
                'codigo' => $row['cod_auto'],
                'placa' => $row['auto_placa'],
                'modelo' => $row['modelo'],
                'anio' => $row['anio'],
                'color' => $row['color'],
                'fecha' => $row['fecha'],
                'entrada' => $row['entrada'],
                'salida' => $row['salida'],
            );
            $respuesta = json_encode(array('estado' => true, 'auto' => $datos)); 
        }else{
            $respuesta = json_encode(array('estado' => false, 'mensaje' => 'No existe el auto')); 
        }
        echo $respuesta;
    }

    if($post['accion'] == 'Actualizar'){
        $post['placa'];
        $post['modelo'];
        $post['anio'];
        $post['color'];
        $post['fecha'];
        $post['entrada'];
        $post['salida'];
        $post['codigo'];
        $tarifaTotal = $post['tarifa_total'];

        $sentencia = sprintf("UPDATE ingreso_auto SET auto_placa = '%s', modelo = '%s', anio = '%s', color = '%s', fecha = '%s', entrada = '%s', salida = '%s' WHERE cod_auto = '%s'",
            $placa,
            $modelo,
            $anio,
            $color,
            $fecha,
            $entrada,
            $salida,
            $codigo,
        );
        $result = mysqli_query($mysqli, $sentencia);

        if($result){
            $respuesta = json_encode(array('estado' => true, 'mensaje' => 'Datos actualizados'));
        } else{
            $respuesta = json_encode(array('estado' => false, 'mensaje' => 'Error al actualizar'));
        }
        echo $respuesta;
    }
?>