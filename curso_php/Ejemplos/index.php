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
        <!-- ACA VAMOS A COLOCAR CODIGO PHP -->

        <Section>
                <?php 
                echo "HOLA MUNDO...";
                ?>
             </Section>
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
