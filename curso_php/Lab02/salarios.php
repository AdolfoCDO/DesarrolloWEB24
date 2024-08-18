<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Promedio Salarial</title>
</head>
<body>

    <h1>Calculadora de Promedio Salarial</h1>

    <form method="post" action="">
        <label for="nombre1">Nombre 1:</label>
        <input type="text" name="nombres[]" required>
        
        <label for="salario1">Salario 1:</label>
        <input type="number" name="salarios[]" step="0.01" required>
        <br><br>

        <label for="nombre2">Nombre 2:</label>
        <input type="text" name="nombres[]" required>
        
        <label for="salario2">Salario 2:</label>
        <input type="number" name="salarios[]" step="0.01" required>
        <br><br>

        <label for="nombre3">Nombre 3:</label>
        <input type="text" name="nombres[]" required>
        
        <label for="salario3">Salario 3:</label>
        <input type="number" name="salarios[]" step="0.01" required>
        <br><br>

        <input type="submit" value="Calcular Promedio Salarial">
    </form>

    <?php
    // Verificar si el formulario ha sido enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Capturar los datos del formulario
        $nombres = $_POST['nombres'];
        $salarios = $_POST['salarios'];

        // Inicializar variables
        $total_salarios = 0;
        $numero_personas = count($salarios);

        // Sumar los salarios
        foreach ($salarios as $salario) {
            $total_salarios += $salario;
        }

        // Calcular el promedio
        $promedio_salarial = $total_salarios / $numero_personas;

        // Mostrar resultados
        echo "<h2>Resultados</h2>";
        echo "<ul>";
        for ($i = 0; $i < $numero_personas; $i++) {
            echo "<li>" . htmlspecialchars($nombres[$i]) . ": $" . number_format($salarios[$i], 2) . "</li>";
        }
        echo "</ul>";
        echo "<p><strong>Promedio Salarial:</strong> $" . number_format($promedio_salarial, 2) . "</p>";
    }
    ?>

</body>
</html>
