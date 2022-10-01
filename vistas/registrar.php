<?php
include("con_db.php");

if($conex){
    echo "Todo correcto";
    if(isset($_POST['enviar'])){
        $nombreEstudiante = $_POST['nombreEstudiante'];
        $cursoEstudiante = $_POST['cursoEstudiante'];
        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];
        $p3 = $_POST['p3'];
        $p4 = $_POST['p4'];
        $p5 = $_POST['p5'];
        $p6 = $_POST['p6'];
        $p7 = $_POST['p7'];
        $p8 = $_POST['p8'];
        $p9 = $_POST['p9'];
        $p10 = $_POST['p10'];
        $p11 = $_POST['p11'];
        $p12 = $_POST['p12'];
        $p13 = $_POST['p13'];
        $p14 = $_POST['p14'];
        $p15 = $_POST['p15'];
        $p16 = $_POST['p16'];
        $p17 = $_POST['p17'];
        $p18 = $_POST['p18'];
        $p19 = $_POST['p19'];
        $p20 = $_POST['p20'];
        $p21 = $_POST['p21'];
        $p22 = $_POST['p22'];
        $p23 = $_POST['p23'];
        $p24 = $_POST['p24'];
        $p25 = $_POST['p25'];
        $p26 = $_POST['p26'];
        $p27 = $_POST['p27'];
        $p28 = $_POST['p28'];
        $p29 = $_POST['p29'];
        $p30 = $_POST['p30'];
        echo $nombreEstudiante;
        $consulta = "INSERT INTO librodigital.prueba1 (nombreEstudiante, cursoEstudiante, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18, p19, p20, p21, p22, p23, p24, p25, p26, p27, p28, p29, p30) VALUES ('$nombreEstudiante','$cursoEstudiante', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15', '$p16', '$p17', '$p18', '$p19', '$p20', '$p21', '$p22', '$p23', '$p24', '$p25', '$p26', '$p27', '$p28', '$p29', '$p30');
        ";

        $resultado = mysqli_query($conex, $consulta);

        if ($resultado){
            echo"<script>
                alert('Prueba guardada correctamente');
                location.href = './principal.html';
            </script> ";
        }else{
            echo"<script>
                alert('Sucedio un inconveniente de conexion pruebe nuevamente');
                location.href = './principal.html';
            </script> ";
        }
    }
}else{
    echo "Paso algo";
}
?>


