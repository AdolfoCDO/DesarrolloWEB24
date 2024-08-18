<?php

    /* Definicion de variables */
    $var_x = $var_y = $resultado = 0;
    $var_xErr = $var_yErr = $resultadoErr = 0;
    $operacion = "";
    $flag = 0;

    function sumaVariables(int $varX, int $varY)
    {
        return $varX + $varY;
    }
    function restaVariables($varX, $varY)
    {
        return $varX - $varY;
    }
    function multiplicaVariables($varX, $varY)
    {
        return $varX * $varY;
    }
    function divideVariables($varX, $varY)
    {
        return $varX / $varY;
    }   

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $var_x = (int)$_POST["var_x"];
        $var_y = (int)$_POST["var_y"];
        $resultado = 0;
        $operacion = $_POST["operacion"];
        switch ($_POST["operacion"])
        {
            case "+":
                    $resultado = sumaVariables($var_x, $var_y);
                break;
            case "-":
                    $resultado = restaVariables($var_x, $var_y);
                break;    
            case "/":
                    $resultado = divideVariables($var_x, $var_y);
                break;    
            case "*":
                    $resultado = multiplicaVariables($var_x, $var_y);
                break;            
        }
        if($var_x != 0 && $var_y != 0)
        {
            $flag = 1;
        }
        /*echo $resultado;
        $_GET["display"] = $resultado;*/
    }

  
    