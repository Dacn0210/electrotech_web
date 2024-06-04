<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ElectroTech | Inicio</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous">
        <link rel="stylesheet" href="public\css\styles.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="shortcut icon" href="public/img/icono.ico">
    </head>
    <body>
        <header id="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#"><img
                            src="public\img\Logo.png" alt="Logo"
                            class="img-fluid" width="100"></a>
                    <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item registro">
                                <a class="nav-link" href="#clientes">¡Quiero
                                    registrarme!</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item login">
                                <a class="nav-link" href="view\login.php"><i
                                        class="fa-solid fa-arrow-right-to-bracket"></i>
                                    Ingresar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section id="hero" style="margin-top: 50px;">
                <div class="container">
                    <div class="row" data-aos="fade-up"
                        data-aos-duration="1000">
                        <article class="col-lg-5">
                            <img id="img1" src="public\img\img-hero.png"
                                class="img-fluid" alt="Hero">
                        </article>
                        <article class="col-lg-7 cont-info">
                            <h1 class="titulo">¿Que es ElectroTech?</h1>
                            <p>Bienvenido a ElectroTech, el sistema de
                                información líder diseñado para optimizar la
                                gestión de inventarios y facilitar la
                                facturación en el punto de venta. Nuestra
                                plataforma intuitiva y eficiente es la
                                herramienta perfecta para comerciantes y
                                empresarios que buscan mejorar sus procesos
                                operativos y aumentar la productividad de su
                                negocio</p>

                            <p id="parrafoOculto"
                                style="display: none;"><strong>Únete a
                                    la Revolución con ElectroTech</strong>
                                <br>
                                Descubre cómo ElectroTech puede transformar tu
                                negocio. Nuestro objetivo es proporcionarte las
                                herramientas necesarias para que puedas
                                enfocarte en lo que realmente importa: hacer
                                crecer tu negocio y satisfacer a tus
                                clientes</p>
                        </article>
                    </div>
                </div>
            </section>
        </header>
        <main id="main">
            <section id="Mision-Vision-Obj">
                <div class="container">
                    <h2>Conoce Más de Nosotros</h2>
                    <div class="row" data-aos="fade-down"
                        data-aos-duration="1000">
                        <article class="col-lg-4 col-md-6">
                            <div class="card-MVO">
                                <img src="public/img/Mision.png" alt="Mision">
                                <h3>Misión</h3>
                                <h4>Nuestra Misión en ElectroTech</h4>
                                <p>Es empoderar a los negocios mediante
                                    soluciones tecnológicas innovadoras que
                                    optimicen la gestión de inventarios y la
                                    facturación, mejorando la eficiencia
                                    operativa y aumentando la rentabilidad</p>
                            </div>
                        </article>
                        <article class="col-lg-4 col-md-6">
                            <div class="card-MVO">
                                <img src="public/img/Vision.png" alt="Vision">
                                <h3>Visión</h3>
                                <h4>Nuestra Visión en ElectroTech</h4>
                                <p>Aspiramos a ser el referente global en
                                    soluciones tecnológicas para la gestión de
                                    inventarios y facturación, ofreciendo una
                                    plataforma que sea sinónimo de innovación,
                                    confiabilidad y excelencia</p>
                            </div>
                        </article>
                        <article class="col-lg-4 col-md-6">
                            <div class="card-MVO">
                                <img src="public/img/Objetivo.png"
                                    alt="P.Objetivo">
                                <h3>Objetivo</h3>
                                <h4>Objetivo Principal</h4>
                                <p>Optimizar la gestión de inventarios y la
                                    facturación para aumentar la eficiencia y
                                    rentabilidad de los negocios</p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section id="Escogenos" style="margin-bottom: 100px;">
                <div class="container mt-4">
                    <div class="row" data-aos="fade-down"
                        data-aos-duration="1000">
                        <div class="col-md-6">
                            <img src="public/img/Escogenos.svg"
                                class="img-fluid" alt="Escogenos"
                                style="margin-top: 50px;">
                        </div>
                        <div class=" col-md-6">
                            <h2 class="titulo">¿Porqué escogernos?</h2>
                            <div class="accordion" id="accordionExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne"
                                            aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <i
                                                class="fa-regular fa-circle-check"
                                                style="color: var(--primary-color);padding-right: 10px;font-size: 24px;"></i>Gestión
                                            integral del inventario
                                        </button>
                                    </h2>
                                    <div id="collapseOne"
                                        class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            ElectroTech ofrece un control
                                            preciso y automatizado de
                                            inventarios, permitiendo a los
                                            negocios evitar desabastecimientos y
                                            optimizar su stock. La
                                            monitorización en tiempo real
                                            garantiza que siempre se tenga
                                            visibilidad sobre los niveles de
                                            inventario
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <i
                                                class="fa-regular fa-circle-check"
                                                style="color: var(--primary-color);padding-right: 10px;font-size: 24px;"></i>Facturación
                                            simplificada y segura
                                        </button>
                                    </h2>
                                    <div id="collapseTwo"
                                        class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Nuestra plataforma facilita la
                                            creación de facturas detalladas y
                                            cumple con todas las normativas
                                            fiscales. Esto asegura que las
                                            transacciones se realicen de manera
                                            eficiente y sin errores, brindando
                                            confianza tanto al negocio como a
                                            los clientes
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree"
                                            aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <i
                                                class="fa-regular fa-circle-check"
                                                style="color: var(--primary-color);padding-right: 10px;font-size: 24px;"></i>Análisis y reportes avanzados
                                        </button>
                                    </h2>
                                    <div id="collapseThree"
                                        class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            ElectroTech proporciona herramientas de análisis potentes que permiten generar informes personalizados. Estos insights ayudan a tomar decisiones estratégicas basadas en datos, mejorando la eficiencia operativa y las oportunidades de crecimiento
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour"
                                            aria-expanded="false"
                                            aria-controls="collapseFour">
                                            <i
                                                class="fa-regular fa-circle-check"
                                                style="color: var(--primary-color);padding-right: 10px;font-size: 24px;"></i>Interfaz intuitiva y fácil de usar
                                        </button>
                                    </h2>
                                    <div id="collapseFour"
                                        class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Diseñada pensando en la experiencia del usuario, ElectroTech ofrece una interfaz amigable que facilita la navegación y el uso del sistema, incluso para personas sin experiencia técnica. Esto reduce la curva de aprendizaje y mejora la productividad desde el primer día
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive"
                                            aria-expanded="false"
                                            aria-controls="collapseFive">
                                            <i
                                                class="fa-regular fa-circle-check"
                                                style="color: var(--primary-color);padding-right: 10px;font-size: 24px;"></i>Soporte técnico dedicado
                                        </button>
                                    </h2>
                                    <div id="collapseFive"
                                        class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Nuestro equipo de soporte está siempre disponible para ayudar con cualquier consulta o problema, asegurando que los usuarios puedan operar sin interrupciones. Ofrecemos asistencia rápida y eficiente para maximizar la satisfacción del cliente
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix"
                                            aria-expanded="false"
                                            aria-controls="collapseSix">
                                            <i
                                                class="fa-regular fa-circle-check"
                                                style="color: var(--primary-color);padding-right: 10px;font-size: 24px;"></i>Adaptabilidad y escalabilidad
                                        </button>
                                    </h2>
                                    <div id="collapseSix"
                                        class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            ElectroTech es una solución flexible que puede adaptarse a las necesidades específicas de cualquier negocio, sin importar su tamaño. Además, nuestra plataforma está diseñada para crecer junto con tu negocio, incorporando nuevas funcionalidades y mejorando continuamente para satisfacer las demandas cambiantes del mercado
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="clientes">
                <div class="container mt-5" data-aos="fade-down" data-aos-duration="1000">
                    <div class="row justify-content-center">
                        <div class="col-md-6 container-form">
                            <h2 class="text-center mb-4 titulo">¡Regístrate ahora!</h2>
                            <p class="text-center mb-4">
                                Sé el primero en recibir descuentos exclusivos para nuestros clientes registrados. ¡No te
                                pierdas las ofertas!
                            </p>
                            <form method="POST">
                                <?php
                                include "model/conexion.php";
                                include "controller/registro_cliente.php";
                                ?>
                                <div class="form-group">
                                    <label for="nombres" class="label-color">Numero de documento:</label>
                                    <input type="number" class="form-control form-input" id="nit_cliente" name="nit_cliente" required>
                                </div>
                                <div class="form-group">
                                    <label for="nombres" class="label-color">Nombres:</label>
                                    <input type="text" class="form-control form-input" id="nombres" name="nombres" required>
                                </div>
                                <div class="form-group">
                                    <label for="apellidos" class="label-color">Apellidos:</label>
                                    <input type="text" class="form-control form-input" id="apellidos" name="apellidos" required>
                                </div>
                                <div class="form-group">
                                    <label for="correo" class="label-color">Correo electrónico:</label>
                                    <input type="email" class="form-control form-input" id="correo" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="telefono" class="label-color">Telefono:</label>
                                    <input type="number" class="form-control form-input" id="telefono" name="telefono" required>
                                </div>
                                <div class="termycond">
                                    <input type="checkbox" required placeholder="tyc">
                                    <label for="tyc" id="tyc">Aceptar Términos y Condiciones</label>
                                </div>
                                <div class="btn-container">
                                    <button name="btnRegistrarcli" value="cliente" type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Enviar</button>
                                </div>
    
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section id="Equipo">
                <div class="container" data-aos="fade-up" data-aos-duration="1000">
    
                    <div class="section-title">
                        <h2 class="text-center titulo">Nuestro Equipo de Desarrollo</h2>
                        <p class="text-center">Los integrantes que participaron en el desarrollo inicial de este proyecto y
                            fueron cruciales para su éxito. Gracias a su dedicación y esfuerzo, sentaron las bases sólidas
                            para su desarrollo futuro. Su trabajo riguroso y minucioso permitió establecer los objetivos
                            claros y definir las estrategias necesarias para alcanzarlos.</p>
                    </div>
    
                    <div class="row especial">
    
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="member">
                                <img src="public\img\team\Jose.jpeg" class="img-fluid" alt="Jose">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Jose Hibañez</h4>
                                        <span>Desarrollador</span>
                                    </div>
                                    <div class="social">
                                        <a href="https://github.com/Jose-daniel27"><i class="fa-brands fa-github"></i></a>
                                        <a href="https://www.instagram.com/sett_27060/"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xl-4 col-lg-4 col-md-6" data-wow-delay="0.1s">
                            <div class="member">
                                <img src="public\img\team\Heidy.jpg" class="img-fluid" alt="Heidy">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Heidy Cardenas</h4>
                                        <span>Desarrolladora en Jefe</span>
                                    </div>
                                    <div class="social">
                                        <a href="https://github.com/HeidyCardenas1903"><i class="fa-brands fa-github"></i></a>
                                        <a href="https://www.instagram.com/whoisheidy___/"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xl-4 col-lg-4 col-md-6" data-wow-delay="0.2s">
                            <div class="member">
                                <img src="public\img\team\Diego.jpg" class="img-fluid" alt="Diego">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Diego Castillo</h4>
                                        <span>Sub-Jefe en Desarrollo</span>
                                    </div>
                                    <div class="social">
                                        <a href="https://github.com/Dacn0210"><i class="fa-brands fa-github"></i></a>
                                        <a href="https://www.instagram.com/mr.dacn/"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row especial">
                        <div class="col-xl-4 col-lg-6 col-md-6" data-wow-delay="0.3s">
                            <div class="member">
                                <img src="public\img\team\william.jpg" class="img-fluid" alt="William">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>William Riaño</h4>
                                        <span>Desarrollador</span>
                                    </div>
                                    <div class="social">
                                        <a href="https://github.com/willi08422"><i class="fa-brands fa-github"></i></a>
                                        <a href="https://instagram.com/william_riano_19?igshid=MXZwNTh1Nmxqemh5dA=="><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xl-4 col-lg-6 col-md-6" data-wow-delay="0.3s">
                            <div class="member">
                                <img src="public\img\team\Santiago.jpg" class="img-fluid" alt="Santiago">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Santiago Martinez</h4>
                                        <span>Desarrollador</span>
                                    </div>
                                    <div class="social">
                                        <a href="https://github.com/Santiago2431"><i class="fa-brands fa-github"></i></a>
                                        <a href="https://instagram.com/un_pendejo_aqui?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer id="footer">
            <div class="footer-top" data-aos="fade-up" data-aos-duration="1000">
                <div class="container">
                    <div class="row">
                        <div class="col-6 footer-info">
                            <h3>ElectroTech</h3>
                            <p>
                                Calle 100 #7-24<br>
                                Bogotá, Colombia<br><br>
                                <strong>Telefono:</strong> +57 1 7654389<br>
                                <strong>Email:</strong> soporteelectrotech@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
    
                        <div class="col-6 footer-links">
                            <h4>Links Útiles</h4>
                            <ul>
                                <li><i class="fa-solid fa-chevron-right"></i> <a href="#header">Inicio</a></li>
                                <li><i class="fa-solid fa-chevron-right"></i> <a href="#mision">Nuestra mision</a></li>
                                <li><i class="fa-solid fa-chevron-right"></i> <a href="#escogenos">¿Porqué escoger
                                        Electrotech?</a></li>
                                <li><i class="fa-solid fa-chevron-right"></i> <a href="#Equipo">Equipo de trabajo</a></li>
                            </ul>
                        </div>
    
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>ElectroTech</span></strong>. Todos los derechos reservados
                </div>
            </div>
        </footer>
        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/909a90592e.js"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        AOS.init();
    </script>
        <script src="public\js\script.js"></script>
    </body>
</html>