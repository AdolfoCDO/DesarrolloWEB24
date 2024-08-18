<?php
/* Paa mostrar un mensaje utilizamos echo */
/* Cada comando debe terminar con punto y coma  ; */

    echo "hola" . "<br>";

/* Cada variable se declara con el signo de dolar */
$cadena = " Bienvenidos a desarrollo web...";
echo $cadena  . "<br>";
$cadena2 = "sesion no. 5";
$cadena3 = $cadena . " --- " . $cadena2;
echo $cadena3;
echo " con strlen / mb_strlen se obtiene la longitud <br>";
echo "El largo de la variable $ cadena3 es: " . strlen($cadena3) . " <br>";
echo " con strtoupper se convierten a mayusculas <br>";
echo "La variable $ cadena3 en mayusculas: " . strtoupper($cadena3) . " <br>";
echo " con strtolower se convierten a minusculas <br>";
echo "La variable $ cadena3 en minusculas: " . strtolower($cadena3) . " <br>";
echo " con ucfirst se convierten a mayuscula primera letra <br>";
echo "La variable $ cadena3 en con cada palabra con su primer letra en mayuscula: " . ucfirst($cadena3) . " <br>";
echo " con ucwords se convierten a mayuscula primera letra de una frase <br>";
echo " con trim (ltrim  - rtrim) quitar espacios en blanco <br>";
echo " con str_replace se reemplaza un texto y es case sensitive <br>";
echo " con strpos se busca un string y es case sensitive <br>";
echo " con strrpos se busca un string y devuelve ultima aparicion y es case sensitive <br>";
echo " con substr devuelve una parte de un string y es case sensitive <br>";

$edad = 45;
echo "Edad: " . $edad. "<br>";
$edad1 = $edad + 5;
echo $edad1 . "<br>";
echo "round ceil (redondea hacia arriba) max  min  pow log  rand <br>";
echo "number_format <br>";
echo "intval convierte string a numero entero <br>";
echo "floatval convierte string a numero flotante <br>";
echo "is_long verifica si un valor es numero <br>";
/* Constantes */
define("Pi", 3.15);
const pi = 3.15;
echo Pi . "<br>";
echo Pi + pi . "<br>";
echo Pi - Pi . "<br>";
echo Pi * pi . "<br>";
echo number_format(Pi) . "<br>";
echo __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";


/* Funciones */
function miFuncion01()
{
    
    echo "El nombre de mi funcion es " . __FUNCTION__ . "<br>";
    
}

miFuncion01();

/* Arrays indexados */
echo "Arrays indexados <br>";
$vehiculos = array("bus","moto","carro");
echo "Los vehiculos son " . $vehiculos[1] . "<br>";
$vehiculos[1] = "bicileta";                
echo "Los vehiculos son " . $vehiculos[1] . "<br>";
/* Arrays asociativos */
echo "Arrays asociativos <br>";
$fruta = array("mango"=>4,"melon"=>10);
$fruta["mango"] = 5;
$fruta["melon"] = 7;
echo "Las cantidad de frutas son " . $fruta["mango"] ."<br>";
/* Arrays multidimensionales */
echo "Arrays multidimensionales <br>";
$fruta = array(
            array("mango",5,2.75),
            array("melon",7,11.05),
            array("fresa",9,12.25)
            );
echo "Se tiene " . $fruta[0][0] . " " . $fruta[0][1] . " " . $fruta[0][2] . "<br>";                 
echo "Se tiene " . $fruta[1][0] . " " . $fruta[1][1] . " " . $fruta[1][2] . "<br>";  


echo "<br>";
class MiClase 
{
    private $edad;
    public function setEdad()
    {
        $this->edad = 15;
    }
    public function getEdad()
    {
        return $this->edad;
    }
}

$miClase = new MiClase();
$miClase->setEdad();
echo "La edad que indica el objeto es: " . $miClase->getEdad() . " y el largo de la variable es " . is_long($miClase->getEdad()) . "<br>";
echo "<br>";
?>