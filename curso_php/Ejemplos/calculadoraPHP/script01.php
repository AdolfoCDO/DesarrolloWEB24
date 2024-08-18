<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>
    <link rel="stylesheet" href="estilos_script01.css">
</head>

<body>
    <header>
    <h2>Ejemplo de calculadora con el uso de un formulario y mandando datos a un servidor </h2>
    </header>
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

  
    ?>
    <div class="calculadora_base">
        <br>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Variable X: <br><input type="text" name="var_x" value=0><br>
            Variable Y: <br><input type="text" name="var_y" value=0><br>
            <br>
            <label for="Operaciones">Operaciones:</label>
                <select id="operacion" name="operacion">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                </select>
            <br>
            <br>
            <!--
            <div class="buttons">
                <button type="submit" name="action" value="+" class="btn">+</button>
                <button type="submit" name="action" value="-" class="btn">-</button>
                <button type="submit" name="action" value="/" class="btn">/</button>
                <button type="submit" name="action" value="*" class="btn">*</button>
            </div> 
            -->
            <button type="submit" name="submit" value="=" class="btn">=</button>
            </form>
    </div>
    <br>
    <footer>
        <?php
        if($flag == 1)
        {
            echo "Al seleccionar la operacion: ". $operacion . " con la variable X =  " . $var_x . " y la variable Y = " . $var_y . " el resultado es: " . $resultado;
        }
        $flag = 0;
        ?>
    </footer>
</body>
</html>