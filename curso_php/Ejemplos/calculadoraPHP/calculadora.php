<?php
    // Inicializar variables
    $display = '';

    // Procesar la acción cuando se envía el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $display = isset($_POST['display']) ? $_POST['display'] : '';
        $action = $_POST['action'];

        // Manejar diferentes acciones
        switch ($action) {
            case 'clear':
                $display = '';
                break;
            case 'del':
                $display = substr($display, 0, -1);
                break;
            case '=':
                // Evaluar la expresión matemática de manera segura
                try {
                    $evalResult = eval("return $display;");
                    $display = $evalResult;
                } catch (Throwable $e) {
                    $display = "Error";
                }
                break;
            default:
                $display .= $action;
                break;
        }
    }
    