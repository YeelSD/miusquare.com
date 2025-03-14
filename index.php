<?php
$tab = $_GET['tab'] ?? 1;
if ($tab > 4) {
    $tab = 1;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MGR37QS9');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="description" content="MIU ofrece servicios especializados en balanceo, diagnóstico y actualización de sistemas HVAC, garantizando control ambiental óptimo para industrias exigentes.">
    <title>Miu Square | Inicio </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link href="plugins/sliders/owlCarousel/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/sliders/owlCarousel/css/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/flaticon/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pages/landing-page/style.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGR37QS9"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="navHeadWrapper" class="navHeaderWrapper header-image">
        <!-- NavBar -->
        <!-- Brand -->
        <div class="">
            <nav class="navbar navbar-expand-lg bg-faded header-nav">
                <div class="container">
                    <div class="col-xl-4 col-lg-3 col-6 ">
                        <a class="navbar-brand" href="index.html"><img src="assets/img/logo-color-2.png" alt=""></a>
                    </div>

                    <div class="col-6 text-right d-lg-none d-block">
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon flaticon-left-menu"></span>
                        </button>
                    </div>

                    <div class="col-xl-8 col-lg-9">
                        <!-- Links -->
                        <div class="collapse navbar-collapse justify-content-end" id="nav-content">
                            <ul class="navbar-nav text-center mt-lg-0 mt-5">
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="index.html">INICIO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="#whyusWrapper">SERVICIOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="#ourThoughtsWrapper2">NOSOTROS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="#ourThoughtsWrapper3">PUBLICACIONES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="#footerWrapper">CONTACTO</a>
                                </li>
                            </ul>
                            <form class="form-inline justify-content-lg-start justify-content-center mt-lg-0 mt-5">
                                <button class=""><a href="tel:3346604735" class="phone-header">33 3801-3080</a></button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- /NavBar -->

        <!-- Header -->
        <div id="headerWrapper" class="container col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-lg-0 mt-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 order-lg-1 order-2 align-self-center  mb-lg-0 mb-5">
                        <div class="site-header-inner  mt-lg-0 mt-5 text-center">
                            <h4 class="">Datos Confiables</h4>
                            <h2>Especialistas para puesta en marcha de sistemas, balanceo y diagnóstico HVAC</h2>
                            <div class="text-center" id="nav-content">
                                <a href="tel:3346604735" class="btn btn-danger m-3 js-scroll-trigger p-3">Llámanos</a>
                                <a href="#footerWrapper" class="btn btn-danger m-3 js-scroll-trigger p-3">Escríbenos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Header -->
    </div>

    <div class="container">
        <div class="col-md-12 text-center mt-5">
            <h3 class="section-title mb-1">Garantizamos el Rendimiento Óptimo de tus instalaciones</h3>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="container scroll-offset">
        <div id="whyusWrapper" class="row">
            <div class="col-md-12 text-center mb-1">
                <h2 class="section-title mb-5">Servicios </h2>
            </div>

            <div class="col-md-12">
                <ul class="nav nav-pills mb-5 justify-content-between" id="pills-tab" role="tablist">
                    <li class="col-xl-3 col-lg-3 col-md-6 col-12 nav-item mb-4 text-center">
                        <a class="nav-link <?php if ($tab == '1') {
                                                echo 'active';
                                            }; ?>" id="pills-sketch-tab" data-toggle="pill" href="#pills-sketch" role="tab" aria-controls="pills-sketch" aria-selected="<?php if ($tab == '1') {
                                                                                                                                                                            echo 'true';
                                                                                                                                                                        } else {
                                                                                                                                                                            echo 'false';
                                                                                                                                                                        }; ?>">
                            <i class="flaticon-speedometer-tool"></i>
                            <h6 class="mt-3 mb-3">Puesta en Marcha HVAC</h6>
                            <span class="arrow"></span>
                        </a>
                    </li>

                    <li class="col-xl-3 col-lg-3 col-md-6 col-12 nav-item mb-4 text-center">
                        <a class="nav-link <?php if ($tab == '2') {
                                                echo 'active';
                                            }; ?>" id="pills-design-tab" data-toggle="pill" href="#pills-design" role="tab" aria-controls="pills-design" aria-selected="<?php if ($tab == '2') {
                                                                                                                                                                            echo 'true';
                                                                                                                                                                        } else {
                                                                                                                                                                            echo 'false';
                                                                                                                                                                        }; ?>">
                            <i class="flaticon-gear-2"></i>
                            <h6 class="mt-3 mb-3">Balanceo HVAC</h6>
                            <span class="arrow"></span>
                        </a>
                    </li>

                    <li class="col-xl-3 col-lg-3 col-md-6 col-12 nav-item mb-4 text-center">
                        <a class="nav-link <?php if ($tab == '3') {
                                                echo 'active';
                                            }; ?>" id="pills-development-tab-2" data-toggle="pill" href="#pills-development-2" role="tab" aria-controls="pills-development-2" aria-selected="<?php if ($tab == '3') {
                                                                                                                                                                                                    echo 'true';
                                                                                                                                                                                                } else {
                                                                                                                                                                                                    echo 'false';
                                                                                                                                                                                                }; ?>">
                            <i class="flaticon-package"></i>
                            <h6 class="mt-3 mb-3">Recolección de Datos</h6>
                            <span class="arrow"></span>
                        </a>
                    </li>

                    <li class="col-xl-3 col-lg-3 col-md-6 col-12 nav-item mb-4 text-center">
                        <a class="nav-link <?php if ($tab == '4') {
                                                echo 'active';
                                            }; ?>" id="pills-development-tab" data-toggle="pill" href="#pills-development" role="tab" aria-controls="pills-development" aria-selected="<?php if ($tab == '4') {
                                                                                                                                                                                            echo 'true';
                                                                                                                                                                                        } else {
                                                                                                                                                                                            echo 'false';
                                                                                                                                                                                        }; ?>">
                            <i class="flaticon-setting-3"></i>
                            <h6 class="mt-3 mb-3">Diagnóstico</h6>
                            <span class="arrow"></span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade <?php if ($tab == '1') {
                                                    echo 'show active';
                                                }; ?>" id="pills-sketch" role="tabpanel" aria-labelledby="pills-sketch-tab">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img alt="image-sample" src="assets/img/servicios-1.jpg" class="img-fluid">
                            </div>
                            <div class="col-md-6 align-self-center site-content-inner">
                                <h4 class="mb-4">Puesta en Marcha.</h4>
                                <p class="font-weight-bold">Arranque de nuevos sistemas</p>
                                <p class="text-justify">Se caracteriza por un enfoque integral y personalizado. Este proceso comienza con un análisis exhaustivo de las necesidades del cliente, lo que permite diseñar soluciones a medida que optimizan la eficiencia operativa. El equipo de Miu Square se dedica a implementar tecnologías avanzadas, asegurando una transición fluida desde los sistemas anteriores.</p>
                                <p class="text-justify">La filosofía de Miu Square se basa en el soporte continuo, lo que asegura que los sistemas no solo arranquen sin problemas, sino que también evolucionen con las demandas del negocio. Esto transforma la puesta en marcha en una experiencia colaborativa y exitosa.</p>
                            </div>
                            <!-- <div class="col-md-12 text-center">
                                <button class="btn mt-5 mb-4">Learn More</button>
                            </div> -->
                        </div>
                    </div>

                    <div class="tab-pane fade <?php if ($tab == '2') {
                                                    echo 'show active';
                                                }; ?>" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img alt="image-sample" src="assets/img/nosotros-3.jpg" class="img-fluid">
                            </div>
                            <div class="col-md-6 align-self-center site-content-inner">
                                <h4 class="mb-4">Balanceo de Sistemas HVAC.</h4>
                                <p class="font-weight-bold">Ajuste de flujos de aire y presiones diferenciales</p>
                                <p class="text-justify">El balanceo de sistemas HVAC es un proceso fundamental que Miu Square realiza con gran precisión y atención al detalle. Este servicio implica el ajuste de flujos de aire y presiones diferenciales para garantizar un funcionamiento óptimo de los sistemas de climatización.</p>
                                <p class="text-justify">Miu Square emplea técnicas avanzadas y herramientas de medición especializadas para evaluar el rendimiento de cada componente del sistema. A través de un análisis minucioso, identifican desbalances que puedan afectar la eficiencia energética y el confort de los espacios. Su enfoque se basa en personalizar las soluciones según las necesidades específicas de cada instalación, asegurando que el aire circulante sea homogéneo y que las temperaturas se mantengan adecuadas en todas las áreas.</p>
                            </div>
                            <!-- <div class="col-md-12 text-center">
                                <button class="btn mt-5 mb-4">Learn More</button>
                            </div> -->
                        </div>
                    </div>

                    <div class="tab-pane fade <?php if ($tab == '3') {
                                                    echo 'show active';
                                                }; ?>" id="pills-development-2" role="tabpanel" aria-labelledby="pills-development-tab-2">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img alt="image-sample" src="assets/img/servicios-4.jpg" class="img-fluid">
                            </div>
                            <div class="col-md-6 align-self-center site-content-inner">
                                <h4 class="mb-4">Servicio de Recolección de Datos.</h4>
                                <p class="text-justify">El servicio de recolección de datos es fundamental para el análisis y optimización del rendimiento de sistemas en diversas industrias. Este proceso implica la instalación de sensores y dispositivos de monitoreo que capturan información en tiempo real sobre variables críticas, como temperatura, humedad, flujo de aire y consumo energético.</p>
                                <p class="text-justify">Los datos recopilados permiten a los ingenieros y técnicos identificar tendencias, detectar anomalías y realizar diagnósticos precisos. Además, la información obtenida facilita la toma de decisiones informadas sobre mantenimiento, ajustes operativos y mejoras en la eficiencia. En un entorno donde la sostenibilidad y la eficiencia energética son cada vez más prioritarias, contar con un sistema de recolección de datos robusto se traduce en un rendimiento óptimo y en la reducción de costos operativos a largo plazo.</p>
                            </div>
                            <!-- <div class="col-md-12 text-center">
                                <button class="btn mt-5 mb-4">Learn More</button>
                            </div> -->
                        </div>
                    </div>

                    <div class="tab-pane fade <?php if ($tab == '4') {
                                                    echo 'show active';
                                                }; ?>" id="pills-development" role="tabpanel" aria-labelledby="pills-development-tab">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img alt="image-sample" src="assets/img/servicios-3.jpg" class="img-fluid">
                            </div>
                            <div class="col-md-6 align-self-center site-content-inner">
                                <h4 class="mb-4">Diagnóstico, Evaluación y Actualización de Sistemas Críticos.</h4>
                                <p class="text-justify">Miu Square se destaca en el diagnóstico, evaluación y actualización de sistemas críticos, un proceso esencial para garantizar la continuidad y eficiencia operativa de las empresas. Su enfoque comienza con un diagnóstico detallado que identifica posibles fallas y áreas de mejora en los sistemas existentes.</p>
                                <p class="text-justify"> A través de una evaluación exhaustiva, analizan el rendimiento y la capacidad de los sistemas, asegurando que cumplan con las normativas y estándares de la industria. Con esta información, Miu Square propone actualizaciones tecnológicas que no solo optimizan el funcionamiento, sino que también integran soluciones innovadoras adaptadas a las necesidades específicas de cada cliente. Su equipo de expertos se compromete a implementar estas mejoras de manera efectiva, minimizando interrupciones y maximizando la productividad.</p>
                            </div>
                            <!-- <div class="col-md-12 text-center">
                                <button class="btn mt-5 mb-4">Learn More</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome to our agency -->

    <!-- Partners -->
    <div class="container">
        <div id="companyWrapper">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner mb-1">
                    <h2 class="section-title mb-5">Clientes del Grupo JCA TI </h2>
                </div>

                <div class="col-xl-12">
                    <div class="partnersSlider owl-carousel owl-theme">
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-1.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-2.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-3.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-4.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-5.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-6.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-7.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-18.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-8.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-9.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-10.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-11.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-12.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-13.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-14.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-15.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-16.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-17.png" class="img-fluid" alt="image-clients">
                        </div>
                        <div class="slide-item">
                            <img src="assets/img/clientes/cliente-19.png" class="img-fluid" alt="image-clients">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Partners -->

    <div class="container">
        <div id="ourThoughtsWrapper2" class="row">
            <div class="col-md-12 text-center mb-1">
                <h2 class="section-title mb-5">Un poco sobre nosotros</h2>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 site-image-inner  align-self-center order-1  mb-5">
                <img src="assets/img/nosotros-1.jpg" class="img-fluid" alt="image-sample">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 align-self-center order-2  mb-5">
                <p class="text-justify">Miu Square es una empresa fundada en 2022, parte de un grupo corporativo con más de 6 años de servicio en el mercado, y está dedicada a brindar servicios especializados como lo son: balanceo de sistemas HVAC, diagnóstico de sistemas HVAC existentes, evaluación y actualización de sistemas críticos, todo esto para industrias con necesidades estrictas de control ambiental. Nuestro impacto radica en garantizar que estos sistemas operen con precisión, mejorando la calidad del ambiente de trabajo y asegurando el cumplimiento de normativas vigentes. Es por esto, que para brindarle a nuestros clientes un servicio de excelencia, estamos constantemente actualizando nuestros conocimientos regulatorios y por eso seguimos asociaciones como ISPE.</p>
                <p class="text-justify">Miu Square se enfoca en diagnósticos, pruebas y actualizaciones para ayudar a las empresas a mantener la integridad de sus operaciones y a reaccionar de manera efectiva ante desafíos ambientales, fortaleciendo así su competitividad en el sector.</p>
            </div>
        </div>
    </div>

    <!-- Our Thoughts -->
    <div class="container mb-3">
        <div id="ourThoughtsWrapper3" class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 text-center mb-1">
                <h2 class="section-title mb-5">Publicaciones </h2>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 mb-5 site-image-inner public-1">
                <div class="container">
                    <p class=""><i class="flaticon-social mx-2"></i>MiuSquare</a><i class="flaticon-clock mx-2"></i><span class="post-meta-info">18 Febrero de 2025</span></p>
                    <img src="assets/img/QUE-ES-EL-REPSE.jpg" class="img-fluid" alt="hvac-mexico">
                </div>
                <div class="container">
                    <h3 class="webelive">¿Qué es el REPSE?</h3>
                    <p class="text-justify"><strong>REPSE</strong> significa <strong>Registro de Proveedores de Servicios Especializados</strong> y se introdujo en México como parte de las reformas laborales realizadas en el 2021. El REPSE fue creado para regular la práctica de la subcontratación de servicios, particularmente cuando las empresas contratan a proveedores externos para realizar tareas u operaciones específicas.</p>
                    <p class="text-justify">La subcontratación ha sido una práctica en México desde hace mucho tiempo, especialmente en industrias que requieren habilidades especializadas, así como en sectores como tecnología, limpieza, seguridad, logística y manufactura. Sin embargo, existe una creciente preocupación de que algunas empresas estén utilizando los acuerdos de externalización como una forma de evitar el pago de prestaciones, seguridad social y otras obligaciones legales debidas a los trabajadores. </p>
                    <p class="text-justify">El objetivo principal del REPSE es eliminar las prácticas abusivas asociadas a la ...</p>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 mb-5 site-image-inner public-1">
                <div class="container">
                    <p class=""><i class="flaticon-social mx-2"></i>MiuSquare</a><i class="flaticon-clock mx-2"></i><span class="post-meta-info">5 Febrero de 2025</span></p>
                    <img src="assets/img/capacitacion-dc3.jpeg" class="img-fluid" alt="hvac-mexico">
                </div>
                <div class="container">
                    <h3 class="webelive">¿Qué es la capacitación DC3 y para qué sirve?</h3>
                    <p class="text-justify">La capacitación es uno de los aspectos más importantes de las organizaciones. Sin ella, se ven disminuidas la productividad y calidad en el trabajo. Para cumplir con estas capacitaciones de forma legal, en México existen constancias con validez oficial conocidas coloquialmente como "DC3", ya que su nombre oficial, de acuerdo con la Secretaría de Trabajo y Previsión Social (STPS), es “Constancia de Desarrollo de Competencias”. </p>
                    <p class="text-justify">Las empresas tienen la responsabilidad de impartir cursos a su personal con el fin de que se encuentren con una capacitación eficiente (teórica y práctica) de acuerdo con las actualizaciones que surjan en el sector y las normativas que les competan. </p>
                    <h5 class="webelive"><strong>¿Qué es una constancia DC3?</strong></h5>
                    <p class="text-justify">La DC3 es una Constancia de Desarrollo de competencias laborales. Acredita ...</p>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 mb-4 site-image-inner public-1">
                <div class="container">
                    <p class=""><i class="flaticon-social mx-2"></i>MiuSquare</a><i class="flaticon-clock mx-2"></i><span class="post-meta-info">29 Enero de 2025</span></p>
                    <img src="assets/img/prueba-h.png" class="img-fluid" alt="hvac-mexico">
                </div>
                <div class="container">
                    <h3 class="webelive">La importancia de las pruebas de hermeticidad a la red de conductos de sistemas HVAC y los criterios a cuidar para su aplicación.</h3>
                    <p class="text-justify">La mayoría de los sistemas de aire acondicionado y ventilación utilizan algún tipo de conductos para transportar el aire tratado a donde sea necesario siendo la excepción de esta regla los sistemas sin conductos, tal como equipos divididos, ventiladores axiales y sistemas que operan por radiación y convección como las vigas frías.</p>
                    <p class="text-justify">En este escrito omitiremos los conductos textiles, puesto que algunos de ellos operan bajo el principio de micro difusión y su superficie se convierte en el medio de difusión del aire; sin embargo, en sistemas convencionales de conductos el aire es conducido a través de un conducto cerrado desde y hacía el equipo de tratamiento de aire...</p>
                </div>
            </div>
            <div class="container text-center" id="nav-content">
                <a href="publicaciones.php" class="btn btn-danger m-2 js-scroll-trigger p-2">Ver Más</a>
            </div>
        </div>
    </div>
    <!-- /Our Thoughts -->

    <!-- Footer -->
    <div id="footerWrapper" class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mx-auto col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 site-content-inner text-md-center text-center copyright">
                            <h2 class="mb-1">Marcas</h2>
                            <div class="container">
                                <a class="navbar-brand" href="https://www.atmosingenieria.com/" target="_blank"><img src="assets/img/atmos-footer-blanco.png" alt=""></a>
                                <a class="navbar-brand" href="https://jcati.com/" target="_blank"><img src="assets/img/jca-footer-blanco.png" alt=""></a>
                                <a class="navbar-brand" href="https://ispe.org/" target="_blank"><img src="assets/img/ispe-footer-blanco.png" alt=""></a>
                                <p class="">Nos esforzamos por mantener los más altos estándares de excelencia en la industria farmacéutica mediante prácticas rigurosas y procesos innovadores.</p>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 site-content-inner text-md-right text-center">
                            <h2 class="mb-4 text-center">Contáctanos</h2>
                            <form action="procesar_formulario.php" class="mb-4" method="POST">
                                <div class="row mb-2">
                                    <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                        <input type="text" class="form-control mb-4" name="name" placeholder="Nombre*">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <input type="phone" class="form-control mb-4" name="phone" placeholder="Teléfono*">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <input type="text" class="form-control mb-4" name="email" placeholder="Correo*">
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <input type="text" class="form-control mb-4" name="empresa" placeholder="Empresa*">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-sm-6 col-12">
                                        <p class="text-center mb-1">*Selecciona tu Estado</p>
                                        <select name="estado" class="form-control mb-4" id="estado" required>


                                            <option value="Aguascalientes">Aguascalientes</option>
                                            <option value="Baja California">Baja California</option>
                                            <option value="Baja California Sur">Baja California Sur</option>
                                            <option value="Campeche">Campeche</option>
                                            <option value="Chiapas">Chiapas</option>

                                            <option value="Chihuahua">Chihuahua</option>
                                            <option value="CDMX">CDMX</option>
                                            <option value="Coahuila">Coahuila</option>
                                            <option value="Colima">Colima</option>
                                            <option value="Durango">Durango</option>

                                            <option value="Estado de México">Estado de México</option>
                                            <option value="Guanajuato">Guanajuato</option>
                                            <option value="Guerrero">Guerrero</option>
                                            <option value="Hidalgo">Hidalgo</option>
                                            <option value="Jalisco">Jalisco</option>

                                            <option value="Michoacán">Michoacán</option>
                                            <option value="Morelos">Morelos</option>
                                            <option value="Nayarit">Nayarit</option>
                                            <option value="Nuevo León">Nuevo León</option>
                                            <option value="Oaxaca">Oaxaca</option>

                                            <option value="Puebla">Puebla</option>
                                            <option value="Querétaro">Querétaro</option>
                                            <option value="Quintana Roo">Quintana Roo</option>
                                            <option value="San Luis Potosí">San Luis Potosí</option>
                                            <option value="Sinaloa">Sinaloa</option>

                                            <option value="Sonora">Sonora</option>
                                            <option value="Tabasco">Tabasco</option>
                                            <option value="Tamaulipas">Tamaulipas</option>
                                            <option value="Tlaxcala">Tlaxcala</option>
                                            <option value="Veracruz">Veracruz</option>

                                            <option value="Yucatán">Yucatán</option>
                                            <option value="Zacatecas">Zacatecas</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <p class="text-center mb-1">*Giro de Empresa</p>
                                        <select name="giro" class="form-control" id="giro" required>


                                            <option value="Alimenticio">Alimenticio</option>
                                            <option value="Construcción">Construcción</option>
                                            <option value="Farmacéutica">Farmacéutica</option>
                                            <option value="Manufactura">Manufactura</option>
                                            <option value="Tecnología">Tecnología</option>
                                            <option value="Otro">Otro</option>


                                        </select>
                                    </div>

                                    <div class="col-sm-12 col-12">
                                        <p class="text-center mb-1">*Mensaje</p>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" placeholder="Cuéntanos a detalle sobre tu proyecto"></textarea>
                                    </div>

                                    <div class="col-sm-12 col-12 mt-4 box-captcha">
                                        <div class="g-recaptcha" data-sitekey="6LedkFoqAAAAAE18gXkxeh3KsT-udljUHESgThod"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-primary mt-4" value="Enviar">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 site-content-inner text-md-center text-center copyright">
                            <h2 class="mb-4">Ubicación</h2>
                            <p><i class="flaticon-location-1"></i> Av. Sta. Margarita 4199
                                Local A-14, Plaza d´Lucca Col.Valle Real, C.P:45200,
                                Zapopan, Jalisco.</p>
                            <p><i class="flaticon-telephone"></i> <a href="tel:523338013080" class="phone-footer"> +52 33 3801-3080</a> <br>
                                <i class="flaticon-telephone"></i><a href="tel:523338013080" class="phone-footer"> +52 33 3160-3681</a>
                            </p>

                            <p><i class="flaticon-send-fill-1"></i> contacto@miusquare.com</p>
                            <a class="navbar-brand" href="index.html"><img src="assets/img/logo-blanco.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer -->

    <a href="https://wa.me/523347896006" rel="noopener noreferrer" target="_blank" class="whatsapp-bubble">WhatsApp</a>

    <!-- Mini Footer -->
    <div id="miniFooterWrapper" class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="position-relative">
                        <div class="arrow text-center">
                            <img alt="image-icon" src="assets/img/footer-arrow.svg" class="img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mx-auto col-lg-6 col-md-6 site-content-inner text-md-left text-center copyright align-self-center">
                            <p class="mt-md-0 mt-4 mb-0">© 2025 <a href="https://yeel.com.mx/" target="_blank">Derechos Reservados</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Mini Footer -->

    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="plugins/sliders/owlCarousel/js/owl.carousel.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pages/landing-page/script.js"></script>
</body>

</html>