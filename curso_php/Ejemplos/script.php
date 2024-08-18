<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Personal</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Mi Portafolio</h1>
            <nav>
                <ul>
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#aboutme">Mi reseña en proyectos web</a></li>
                    <li><a href="#projects">Mis proyectos</a></li>
                    <li><a href="#about">Metodología que utilizo</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section id="home" class="intro">
            <div class="container">
                <h2>Mi reseña en proyectos web</h2>
                <p>Hola, soy un desarrollador web apasionado por crear experiencias digitales impresionantes. Aquí encontrarás algunos de mis trabajos recientes y un poco más sobre mí.</p>
            </div>
        </section>

        <section id="projects" class="projects">
            <div class="container">
                <h2>Mis Proyectos</h2>
                <div class="project-grid">
                    <div class="project-item">
                        <!--<img src="/Imagenes/PP_Proy01.png" alt="Proyecto 1"> --> <!-- Contiene / antes del nombre de carpeta-->
                        <img src="Imagenes/PP_Proy01.png" alt="Proyecto 1">
                        <h3>Proyecto 1</h3>
                        <p>Descripción breve del proyecto 1.</p>
                    </div>
                    <div class="project-item">
                        <img src="Imagenes/PP_Proy02.jpg" alt="Proyecto 2">
                        <h3>Proyecto 2</h3>
                        <p>Descripción breve del proyecto 2.</p>
                    </div>
                    <div class="project-item">
                        <img src="Imagenes/PP_Proy03.jpg" alt="Proyecto 3">
                        <h3>Proyecto 3</h3>
                        <p>Descripción breve del proyecto 3.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container-img">
                <div class="project-item1">
                  <img src="Imagenes/PP_Metodologia.png" alt="SCRUM">
                </div>
              </div>
            <div class="container">    
              <h2>Metodología que utilizo</h2>
              <p>La metodología que he utilizado para desarrollar páginas web es...</p>
            </div>
        </section>
        <section>
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
        </section>
        <section id="contact" class="contact">
            <div class="container">
                <h2>Contacto</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje:</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Mi Portafolio Personal</p>
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
