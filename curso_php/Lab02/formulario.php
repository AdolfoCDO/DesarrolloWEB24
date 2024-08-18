<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Promedio Ponderado</title>
</head>
<body>
    <h1>Calculadora de Promedio Ponderado</h1>

    <form method="post" action="">
        <div id="materias">
            <div class="materia">
                <label for="asignatura1">Asignatura:</label>
                <input type="text" name="asignaturas[]" required>
                
                <label for="nota1">Nota:</label>
                <input type="number" name="notas[]" step="0.01" min="0" max="100" required>
                
                <label for="peso1">Peso (%):</label>
                <input type="number" name="pesos[]" step="0.01" min="0" max="100" required>
            </div>
        </div>
        
        <button type="button" onclick="agregarMateria()">Agregar otra materia</button>
        <input type="submit" value="Calcular Promedio Ponderado">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $asignaturas = $_POST['asignaturas'];
        $notas = $_POST['notas'];
        $pesos = $_POST['pesos'];

        $total_peso = array_sum($pesos);
        
        if ($total_peso != 100) {
            echo "<p style='color:red;'>Error: La suma de los pesos debe ser igual a 100%.</p>";
        } else {
            $promedio_ponderado = 0;
            
            foreach ($notas as $index => $nota) {
                $promedio_ponderado += $nota * ($pesos[$index] / 100);
            }
            
            echo "<h2>Resultado:</h2>";
            echo "<p>El promedio ponderado es: " . round($promedio_ponderado, 2) . "</p>";
        }
    }
    ?>

    <script>
        function agregarMateria() {
            var div = document.createElement('div');
            div.className = 'materia';
            div.innerHTML = `
                <label>Asignatura:</label>
                <input type="text" name="asignaturas[]" required>
                
                <label>Nota:</label>
                <input type="number" name="notas[]" step="0.01" min="0" max="100" required>
                
                <label>Peso (%):</label>
                <input type="number" name="pesos[]" step="0.01" min="0" max="100" required>
            `;
            document.getElementById('materias').appendChild(div);
        }
    </script>
</body>
</html>
