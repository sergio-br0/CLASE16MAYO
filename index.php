<?php

function dividir(int $numero1, int $numero2) : void {
    echo $numero1 / $numero2;
}
try{
    dividir(10,0);
}catch(Exception $excepcion){
    echo $excepcion->getMessage();
}
$resultado = dividir(10,5);
echo $resultado;
echo "<br>";
echo "Todo funcionó correctamente";
