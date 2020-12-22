<?php
    session_start();
    include('../_conexion.php');
    $response=new stdClass();
    
    $codpro=$_SESSION['num'];

    $sql2="UPDATE producto SET prepro = prepro-100
        where codpro='$codpro'";

        $result2=mysqli_query($con,$sql2);
        if ($result2) {
            $response->state=false;
            $response->detail="Con descuento";
        }else{
            $response->state=false;
            $response->detail="No se pudo descontar producto. Intente más tarde";
        }

    mysqli_close($con);
    header('Content-Type: application/json');
    echo json_encode($response);
    ?>