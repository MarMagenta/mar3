<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prometheus</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="fenix.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="barr-navegacion">
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Conocenos</a>
            <a href="#">Biblioteca</a>
            <a href="#">Archivos</a>
            <a class="login-boton" href="#">Login</a>
        </nav>
    </div>
        <section class="textos-header">
            <h1>¿Estas listo para el ENURM?</h1>
            <h2>Conoce mas</h2>
            <button class="boton">Registrate</button>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M-0.27,54.78 C149.99,150.00 349.20,-49.98 508.17,111.03 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill:#f1faff;"></path>
            </svg></div>


        <section class="modal">
            <div class="contenedor-modal">
                <form method="post">
                    <h3>Registrate</h3>
                    <input type="text" name="nombre" placeholder="Nombre Completo">
                    <input type="text" name="email" placeholder="Correo Electronico">
                    <input type="text" name="contraseña" placeholder="Contraseña">
                    <input type="text" name="fecha" placeholder="Fecha de Nacimiento">
                    <input type="submit" name="registrate" placeholder="Registro">
                </form>
                <?php 
                // include("con-db.php");
                ?>
        </section>
    


        <section class="modal-login">
            <div class="contenedor-modal">
                <img src="" alt="" class="imagen-modal">
                <h3>Ingresa</h3>
               <div class="full-datos-login">
                        <label for="email">Ingrese su Correo Electronico</label>
                        <input class="regitro" type="email" name="email" id="email"
                            placeholder="Ingrese su correo electronico">
                    </div>
                <div class="full-datos-login">
                    <div class="datos ">
                        <label for="password" style="display: block;"> Contraseña </label>
                        <input class="regitro" type="password" name="password" id="password"
                            placeholder="Ingrese su contraseña">
                    </div>
                </div>
                <a class="botton-login" id="botton-login" href="#">Login</a>
            </div>
        </section>

    </header>
    <main>
        <div class="container__card">

            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(img1.jpg);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h3>Conoce Todo lo relacionado al UNARM</h3>
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="body__card_back">
                            <h3>Lorem ipsum dolor sit amet.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ab quas recusandae voluptatum aliquid tempore animi corporis voluptas. Tempore neque iure necessitatibus voluptas nesciunt animi dolores incidunt delectus sapiente illum.</p>
                            <input type="button" value="Leer Más">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(img21.jpg);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h3>Mira las Estadisticas de aprobacion el examen por Universidades</h3>
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="body__card_back">
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ab quas recusandae voluptatum aliquid tempore animi corporis voluptas. Tempore neque iure necessitatibus voluptas nesciunt animi dolores incidunt delectus sapiente illum.</p>
                            <input type="button" value="Leer Más">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card__father">
                <div class="card">
                    <div class="card__front" style="background-image: url(img31.jpg);">
                        <div class="bg"></div>
                        <div class="body__card_front">
                            <h3>Comienza a estudiar ahora</h3>
                        </div>
                    </div>
                    <div class="card__back">
                        <div class="body__card_back">
                            <h3>Lorem ipsum, dolor sit amet consectetur adipisicing.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ab quas recusandae voluptatum aliquid tempore animi corporis voluptas. Tempore neque iure necessitatibus voluptas nesciunt animi dolores incidunt delectus sapiente illum.</p>
                            <input type="button" value="Leer Más">
                        </div>
                    </div>
                </div>
            </div>

        </div>  

    </main>
    <script  src="app.js"></script>
    <div class="footer">
        <div class="contactanos"></div>
        <div class="contactanos"></div>
        <div class="contactanos"></div>
    </div>
</body>

</html>