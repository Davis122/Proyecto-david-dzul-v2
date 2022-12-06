<?php

include 'registro.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$tema = $_POST['tema'];

$query = "INSERT INTO datos(nombre,correo,tema) 
        VALUES('$nombre', '$correo', '$tema')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
    alert("Gracias por comunicarte con nosotros, nos contactaremos lo mas pronto posible")
    window.location = "index.html";
    </script>
    ';

}else{
    echo '
    <script>
    alert("intenta de nuevo, usuario no almacenado exitosamente")
    window.location = "index.html";
    </script>
    ';
}

mysqli_close($conexion);

?>