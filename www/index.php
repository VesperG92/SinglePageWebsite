<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="CGR Asociados: Asesoría jurídica integral con más de 20 años de experiencia en servicios legales para particulares, empresas y comunidades de propietarios.">
    <title>CGR Asociados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

    <style>
        .hero {
            position: relative;
            background-image: url('./resources/scott-graham-OQMZwNd3ThU-unsplash.jpg');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 85vh;
        }

        .separador {
            position: relative;
            background-image: url('./resources/alberto-di-maria-0T5NfHxS9HE-unsplash.jpg');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 50vh;
        }

        .bg-light-transparent {
            background-color: rgba(255, 255, 255, 0.8);
        }

        hr {
            color: #CA1639;
        }

        h1,
        h2,
        h3,
        p,
        strong {
            color: #44558B;
        }

        .carousel-item {
            height: 40vh;
            /* Ajusta la altura del carrusel según tus necesidades */
            min-height: 300px;
        }

        .carousel-item img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            /* Ajusta la imagen para que cubra el área del contenedor */
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 20px;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center;
        }

        @media (max-width: 768px) {
            .carousel-caption {
                bottom: 15px;
            }
            .carousel-item {
            height: 70vh;
            /* Ajusta la altura del carrusel según tus necesidades */
            min-height: 300px;
        }
        }

        .eleccion {
            text-align: center;
        }

        .btn-primary {
            background-color: #CA1639;
            color: white;
        }

        .btn-primary:hover {
            background-color: #44558B;
        }

        .btn-secondary:hover {
            background-color: #CA1639;
        }

        .btn-secondary:focus {
            background-color: #44558B;
        }

        .featurette-divider {
            margin: 5rem 0;
            /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
            font-weight: 300;
            line-height: 1;
            /* rtl:remove */
            letter-spacing: -.05rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-light" id="inicio">
        <div class="container-fluid ms-3">
            <a class="navbar-brand" href="index.html">
                <img src="LOGO.jpg" alt="Logo" width="100" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end me-3" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#inicio">Inicio</a>
                    <a class="nav-link" href="#elige">Elige CGR</a>
                    <a class="nav-link" href="#asesoria">Asesoría Integral</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="col-xxl-8 px-4 py-5 hero">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6 bg-light-transparent rounded p-4 justify-content-center">
                <h1 class="display-5  lh-1 mb-3">CGR Asociados</h1>
                <hr class="my-4">
                <p class="lead">Trabajamos desde hace más de veinte años
                    con la vocación de prestar el mejor servicio juridico integral
                    a particulares, empresas y comunidades de propietarios.</p>
                <strong>Servicio independiente, personalizado, riguroso y profesional</strong>
            </div>
        </div>
    </div>
    <div class="container eleccion mt-5 mb-2">
        <h2 class="mt-5 mb-5" id="elige">¿Porqué Elegir CGR Asociados?</h2>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-3">
                <img width="140" height="140" src="./resources/experiencia.png" alt="Placeholder: 140x140">
                <h3 class="mt-4 mb-4">Experiencia</h3>
                <p>Más de 20 años prestando servicios jurídicos a más de medio millar de clientes que confian en nuestra
                    gestión y capacidad de trabajo.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img width="140" height="140" src="./resources/Propiedad_horizontal.png" alt="Placeholder: 140x140">
                <h3 class="mt-4 mb-4">Especialización</h3>
                <p>Nos hemos especializado en Propiedad Horizontal y continuamos nuestra expansión en áreas como la
                    supresión de barreras arquitectónicas o la violencia de género.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img width="140" height="140" src="./resources/Team.png" alt="Placeholder: 140x140">
                <h3 class="mt-4 mb-4">Profesionalidad</h3>
                <p>Le ofrecemos una visión legal cercana, dinámica e independiente apoyada en nuestro equipo profesional
                    y en una red externa de abogados colaboradores.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img width="140" height="140" src="./resources/formación.png" alt="Placeholder: 140x140">
                <h3 class="mt-4 mb-4">Formación</h3>
                <p>Creemos en la formación y adaptación contínua, y en nuestra responsabilidad social y esfuerzo para
                    afrontar los retos presentes y futuros de nuestros clientes.</p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container marketing -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./resources/carlos-torres-sFOz8gRBejo-unsplash.jpg" alt="Imagen 1" class="d-block w-100">
                <!-- Reemplaza con la ruta de tu imagen -->
                <div class="container">
                    <div class="carousel-caption bg-light-transparent rounded p-4">
                        <h1>Expertos en Asesoría Jurídica y Gestión Legal</h1>
                        <p>Nuestra experiencia y profesionalidad, combinadas con un trabajo en equipo eficiente, nos
                            permiten asegurar un asesoramiento legal de confianza. La satisfacción de nuestra amplia
                            cartera de clientes es testimonio de la calidad de nuestros servicios.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Saber más</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="./resources/alex-folguera-cUJXS8gvg0U-unsplash.jpg" alt="Imagen 2" class="d-block w-100">
                <!-- Reemplaza con la ruta de tu imagen -->
                <div class="container">
                    <div class="carousel-caption bg-light-transparent rounded p-4">
                        <h1>Soluciones Proactivas para su Tranquilidad</h1>
                        <p>En CGR Asociados, nos adelantamos a los problemas para evitar imprevistos y preocupaciones
                            innecesarias. Nuestro objetivo es que usted pueda disfrutar de su tranquilidad sin
                            contratiempos. Ofrecemos un servicio independiente, personalizado y riguroso, siempre con la
                            máxima profesionalidad.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Saber más</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./resources/maeva-vigier-i8YCqGzwQVc-unsplash.jpg" alt="Imagen 3" class="d-block w-100">
                <!-- Reemplaza con la ruta de tu imagen -->
                <div class="container">
                    <div class="carousel-caption bg-light-transparent rounded p-4">
                        <h1>Especialistas en Ley de Propiedad Horizontal</h1>
                        <p>Somos especialistas en Ley de Propiedad Horizontal y contamos con una vasta experiencia en la
                            gestión de comunidades de propietarios. Además, cubrimos diversas áreas del derecho,
                            incluyendo derecho civil, laboral, matrimonial, declaraciones de impuestos, arrendamientos,
                            herencias y mucho más.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Saber más</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette mx-5 d-flex align-items-center">
        <div class="col-md-7 order-md-2 ">
            <h2 class="featurette-heading">Al frente de CGR Asociados</h2>
            <p class="lead">Sandra Cortés Fernández
                Fundadora de la firma y abogada con más de veinte años de trayectoria profesional; Colegiada ICASV 4.952
                del Ilustre Colegio de Abogados del Señorío de Vizcaya. Es especialista en Ley de Propiedad Horizontal,
                CAFB 36.036, y Asesoría Fiscal.</p>
        </div>
        <div class="col-md-5 order-md-1 d-flex align-items-center justify-content-center">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded-circle"
                width="400" height="400" src="./resources/Sandra_cortés.jpg" alt="Placeholder: 500x500">

        </div>
    </div>
    <hr class="featurette-divider">

    <div class="container mt-5" id="asesoria">
        <h2 class="text-center mb-5">Asesoría Integral</h2>

        <div class="text-center mb-5">
            <p>En CGR Asociados le damos el respaldo de una asesoría que entiende sus problemas. <br>Por eso, apoyamos a
                nuestros nuevos clientes en internet con un 10% de descuento en sus gestiones. <br> <strong>Seleccione
                    el
                    servicio que necesite y pídanos presupuesto sin compromiso.</strong></p>
            <button class="btn btn-secondary btn-form" onclick="showForm('comunidadesForm')">Comunidades de
                Propietarios</button>
            <button class="btn btn-secondary btn-form" onclick="showForm('asesoramientoForm')">Asesoramiento
                Jurídico</button>
        </div>

        <!-- Formulario de Comunidades de Propietarios -->
        <form id="comunidadesForm" action="https://formsubmit.co/gloriafrancocu@gamil.com" method="POST" style="display:none;">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="form-group mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="direccion">Dirección de Comunidad</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="viviendas">Número de Viviendas</label>
                        <input type="number" class="form-control" id="viviendas" name="viviendas" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="locales">Número de Locales</label>
                        <input type="number" class="form-control" id="locales" name="locales" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="garajes">Número de Garajes</label>
                        <input type="number" class="form-control" id="garajes" name="garajes" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="trasteros">Número de Trasteros</label>
                        <input type="number" class="form-control" id="trasteros" name="trasteros" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="duracion">Duración Actual de Cargos del Presidente y Administrador</label>
                        <input type="text" class="form-control" id="duracion" name="duracion" required>
                    </div>
                    <p>Selecciona los servicios que tiene tu comunidad</p>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="ascensor" name="ascensor">
                        <label class="form-check-label" for="ascensor">Ascensor</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="portero" name="portero">
                        <label class="form-check-label" for="portero">Portero</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="limpieza" name="limpieza">
                        <label class="form-check-label" for="limpieza">Servicio de Limpieza</label>
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label for="observacion">Observaciones</label>
                        <textarea class="form-control" id="observacion" name="observacion" rows="4" required></textarea>
                    </div>
                    <div class="form-group form-check mt-3 mb-3">
                        <input type="checkbox" class="form-check-input" id="privacidad" name="privacidad" required>
                        <label class="form-check-label" for="privacidad">Acepto la <a href="privacidad.html">cláusula de
                                privacidad</a></label>
                    </div>

                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>

        <!-- Formulario de Asesoramiento Jurídico -->
        <form id="asesoramientoForm" action="https://formsubmit.co/gloriafrancocu@gmail.com" method="POST" style="display:none;">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="form-group mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="servicio">Tipo de Servicio</label>
                        <select class="form-control" id="servicio" name="servicio" required>
                            <option value="" selected disabled>Seleccione un servicio</option>
                            <option value="abogados">Abogados</option>
                            <option value="gestion_empresarial">Gestión Empresarial</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="consulta">Consulta</label>
                        <textarea class="form-control" id="consulta" name="consulta" rows="4" required></textarea>
                    </div>
                    <div class="form-group form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="privacidad2" name="privacidad2" required>
                        <label class="form-check-label" for="privacidad2">Acepto la <a
                                href="privacidad.html"></a>cláusula de privacidad</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
            
        </form>
        <div id="confirmationMessage" class="alert alert-success text-center" style="display: none;">
            Formulario enviado. Nos pondremos en contacto contigo.
        </div>
    </div>
    <div class="col-xxl-8 px-4 py-5 separador">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

        </div>

    </div>
    
    <div class="container-fluid">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; 2022 CGR Asociados Av. Lehendakari Aguirre 131, Bilbao</p>

            <a href="/"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="./LOGO.jpg" width="100" alt="">
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Inicio</a></li>
                <li class="nav-item"><a href="#elige" class="nav-link px-2 text-muted">CGR</a></li>
                <li class="nav-item"><a href="#asesoria" class="nav-link px-2 text-muted">Asesoria Integral</a></li>
            </ul>
        </footer>
    </div>


    <script>
        // Configura ScrollReveal
        ScrollReveal().reveal('.eleccion .col-lg-3', {
            delay: 200,  // Retraso en milisegundos
            distance: '20px', // Distancia de desplazamiento
            origin: 'bottom', // Desde dónde aparece (abajo)
            easing: 'ease-in-out', // Tipo de animación
            interval: 500, // Intervalo entre cada elemento
            reset: true
        });

        function showForm(formId) {
            document.getElementById('comunidadesForm').style.display = 'none';
            document.getElementById('asesoramientoForm').style.display = 'none';
            document.getElementById(formId).style.display = 'block';
        }

        function showForm(formId) {
            document.getElementById('comunidadesForm').style.display = 'none';
            document.getElementById('asesoramientoForm').style.display = 'none';
            document.getElementById(formId).style.display = 'block';
        }

        document.getElementById('comunidadesForm').addEventListener('submit', function (event) {
            event.preventDefault();
            submitForm(this);
        });

        document.getElementById('asesoramientoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            submitForm(this);
        });

        function submitForm(form) {
            var formData = new FormData(form);

            fetch('process.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('confirmationMessage').style.display = 'block';
                    form.reset();
                    setTimeout(() => {
                        document.getElementById('confirmationMessage').style.display = 'none';
                    }, 5000);
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</body>

</html>