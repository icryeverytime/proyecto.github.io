    <?php
    session_start();
    include('../_conexion.php');
    $response=new stdClass();

    $datos=[];
    $i=0;
    $sql="select * from producto where estado=1";
    $result=mysqli_query($con,$sql);

    while($row=mysqli_fetch_array($result)){
        $obj=new stdClass();
        $obj->prepro=$row['prepro'];
        $datos[$i]=$obj;
        $i++;
    }
    $response->datos=$datos;

    $codpro=$_SESSION['num'];

    //$valor = datos[$codpro].cantpro-1;


    $sql2="UPDATE producto SET prepro= prepro-100
        where codpro=$codpro";

        $result2=mysqli_query($con,$sql2);
        if ($result2) {
            $response->state=false;
            $response->detail="Ya no hay mas de este producto";
        }else{
            $response->state=false;
            $response->detail="No se pudo agregar producto. Intente más tarde";
        }

    mysqli_close($con);
    header('Content-Type: application/json');
    echo json_encode($response);
    ?>