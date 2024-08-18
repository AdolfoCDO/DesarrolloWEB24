<!DOCTYPE HTML>
<html>
<head>
</head>

<body>
<?php

/* Definicion de variables */
$name = $email = $website = $comment = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

/* Comprobacion del formulario con REQUEST_METHOD 
Si el formulario se logra enviar, la comprobacion se realiza, 
de lo contrario se regresa un formluario en blanco */
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);

    if (empty($_POST["name"]))
    {
        $nameErr = "El nombre es obligatorio";
    }
    else 
    {
        $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["email"]))
    {
        $emailErr = "El email es obligatorio";
    }
    else 
    {
        $email = test_input($_POST["email"]);
    }    

    if (empty($_POST["website"]))
    {
        $website = "";
    }
    else 
    {
        $website = test_input($_POST["website"]);
    }    

    if (empty($_POST["comment"]))
    {
        $comment = "";
    }
    else 
    {
        $comment = test_input($_POST["comment"]);
    }        
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<h2> Formulario de validacion de datos</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nombre: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    WebSite: <input type="text" name="website"><br>
    Comentario: <textarea name="comment" rows="6" cols="50"></textarea><br>
    <input = type="submit" name="Submit" value="Enviar formluario">
</form>

<?php
echo "<h3>Los datos son:</h3>.<br>";
echo "Tu Nombre es: " . $name . "<br>";
echo "Tu Email es: " . $email . "<br>";
echo "Tu website es: " . $website . "<br>";
echo "Tus comentarios son: " . $comment . "<br>";
?>
</body>
</html>