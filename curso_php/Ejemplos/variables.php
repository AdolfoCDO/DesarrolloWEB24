<?php
                /* Strings */
                /* Imprimir texto con echo*/
                echo "Este es un mensaje de texto<br>";
                echo "Vamos a declarar diferentes tipos de variables <br>";
                /* Uso de string */
                echo " con punto . se concatena un string <br>";
                echo " con strlen / mb_strlen se obtiene la longitud <br>";
                echo " con strtoupper se convierten a mayusculas <br>";
                echo " con strtolower se convierten a minusculas <br>";
                echo " con ucfirst se convierten a mayuscula primera letra <br>";
                echo " con ucwords se convierten a mayuscula primera letra de una frase <br>";
                echo " con trim (ltrim  - rtrim) quitar espacios en blanco <br>";
                echo " con str_replace se reemplaza un texto y es case sensitive <br>";
                echo " con strpos se busca un string y es case sensitive <br>";
                echo " con strrpos se busca un string y devuelve ultima aparicion y es case sensitive <br>";
                echo " con substr devuelve una parte de un string y es case sensitive <br>";
                /*echo " con explode / implode se convierte un string en un array <br>";*/
                echo " con strcmp se comparan los string y es case sensitive <br>";
                $variable = "GRUpo  ";
                $Variable = "Desarrollo WEB";
                $Resultado = $variable . " " . $Variable;
                echo "Hola " . $variable . " " . $Variable . "<br>";
                echo strlen ($variable) . "<br>";
                echo strtoupper ($variable) . "<br>";
                echo strtolower ($variable) . "<br>";
                echo ucfirst (strtolower($variable)) . "<br>";
                echo ucwords (strtolower($Resultado)) . "<br>";
                echo trim (strtolower($Resultado)) . "<br>";
                echo str_replace ("WEB","HTTP",$Resultado) . "<br>";
                echo strpos ($Resultado, "WeB") . "<br>";
                echo strrpos ($Resultado, "r") . "<br>";
                echo substr ($Resultado, 3,2) . "<br>";
                echo strcmp ("GRUPO", "GRUPO") . "<br>";
                /*$EjeArray = explode ($Resultado);
                echo  $EjeArray. "<br>";*/
                /* Numeros */
                echo " + - / * %  ** (exponente) abs (valor absoluto) <br>";
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
                class MiClase {
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
                echo is_long($miClase->getEdad()) . "<br>";
                echo is_integer("6d") . "<br>";
                echo is_int(6) . "<br>";
                echo is_float(6.2) . "<br>";
                echo var_dump(is_double(6)) . "<br>"; /*valor y tipo de una variable is_nan nor a number   is_numeric*/
                echo "casteo de numero <br>";
                $num = "22.47";
                $int_cast = (float)$num;
                echo $int_cast . "<br>";
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
                
                sort($fruta); /* rsort */
                /* is_null isset si esta inicializada  empty*/
                print_r($fruta);         
                echo "<br>";
                /* cambiar tipo de dato a una variable */
                echo "se hace con settype(variable, tipo) .<br>";
                $cadena = "d25.68";
                settype($cadena, "float");
                echo $cadena;
                ?>