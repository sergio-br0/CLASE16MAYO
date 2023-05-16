<?php
try {
    $conexion = new PDO("informix:host=host.docker.internal; service=9088;database=MDN; server=informix; protocol=onsoctcp;EnableScrollableCursors=1", "informix", "in4mix");
    echo "conexión exitosa";
} catch (PDOException $e) {
    echo "NO SE CONECTO A LA BD";
    echo "<br>";
    echo $e->getMessage();
}
echo "<br>";
echo "mensaje despues de la conexión";
echo"BOLVITO RODRIGUEZ";