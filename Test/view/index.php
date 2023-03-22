<?php
include_once('./Test/controller/coursesController.php');
include_once('./Test/controller/jobsController.php');
include_once('./Test/controller/languagesController.php');
include_once('./Test/controller/projectsController.php');
include_once('./Test/controller/skillssController.php');
include_once('./Test/controller/personalDataController.php');
var_dump(getCourses());
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8">
        <title>Julia Menardi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" href="styles.css" />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous"
        />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body class="bg-light text-dark" >
        <!-- Nav Bar -->
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid mt-4">            
                <ul class="d-flex list-unstyled">
                    <li>

                    </li>
                </ul>
            </div>
        </nav>
               
        
        <!-- PORTFOLIO  -->
        <section class="h-100 gradient-custom-2">

            <div class="container py-1 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-9 col-xl-10  text-center ">
                        <div class="card">

                        <!-- Foto de perfil y banner  -->
                            <div>
                                <div class="rounded-top d-flex flex-row" style="background-color:  #2a8797; height:200px;">
                                    <div class="d-flex flex-row">
                                        <div style="width: 200px; margin-top: 50px;">
                                            <img src="./assets/fotoPerfil.jpg"
                                            alt="Julia Menardi" class="img-fluid mt-5 rounded-circle ml-5"
                                            style="width: 150px; z-index: 1">
                                        </div>
                                        <div class="d-flex flex-col">
                                            <video style="min-width: 100%;" playsinline autoplay muted loop >          
                                                <source src="./assets/bannerVideo.mp4" type="video/mp4"/>
                                            </video>
                                        </div>  
                                    </div>
                                </div>  
                            </div>
                            <div class="col text-center">
                                <div class="pt-4 text-black d-flex justify-content-center text-center">
                                    <h2>Julia Menardi    -    Full Stack Developer Jr.</h2>
                                </div>
                                <hr>
                            </div>
                            <div class="p-4 text-black justify-content-center text-center">
                                <div class="d-flex justify-content-center text-center py-1">
                                    <div class="px-3">
                                        <span class="p-3 m-2"><a href="mailto:julimenardi@hotmail.com"><i class="fa fa-envelope"></i></a> julimenardi@hotmail.com</span>
                                        
                                    </div>
                                    <div class="px-3">
                                        <span class="p-3 m-2"><i class="fa fa-mobile" aria-hidden="true"></i> +34 722 871216</span>
                                    
                                    </div>
                                    <div class="px-3">
                                      <span class="p-3 m-2"><a href="https://es.linkedin.com/in/julia-menardi-106353206" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
                                    </div>
                                    <div class="px-3">
                                      <span class="p-3 m-2"><a href="https://github.com/julinm" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></span>
                                   </div>   
                                </div>
                              </div>
                        </div>
                    </div>
                        

                        <!-- Información  -->
                        
                    <div class="col col-lg-9 col-xl-10">
                        <div class="card mt-2">
                            <div class="card-body p-4 text-black">
                                <div class="mb-5">
                                    <div class="p-4" style="background-color: #f8f9fa;">
                                        <p>Soy una programadora Full Stack Jr. con muchas ganas de crecer en esta profesión.</p>
                                        <p>Actualmente, cuento con conocimientos en HTML, CSS, Bootstrap, PHP y MySQL. También he realizado algunos cursos sobre JavaScript y Python. Me estoy familiarizando con otras tecnologías como Git, Docker y SpringBoot.</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-1 text-info">Experiencia Laboral</p>
                                </div>

                                <!-- EXPERIENCIA LABORAL -->
                                <div class="row g-2">
                                    <div class="col mb-2 bg-light rounded-left ml-2">
                                        <h3>Programadora Full Stack </h4>
                                        <img src="./assets/besoccer_logo.jpg" class="rounded-circle float-left mr-3" style="width: 20px;" alt="logo BeSoccer">
                                        <h4>BeSoccer</h4>
                                        <p> Junior: Noviembre 2022 - Actualidad</p>
                                        <p> Trainee: Marzo 2022 - Noviembre 2022</p>
                                        <p> Mis tareas consisten en:</p>
                                        <ul>
                                          <li> Desarrollar software que utiliza el departamento de datos.</li>
                                          <li> Testear software desarrollado por mis compañeros.</li>
                                          <li> Realizar mantenimiento de código.</li>
                                          <li> Comunicar al departamento de datos el modo de uso de las nuevas herramientas desarrolladas.</li>
                                        </ul>
                                        <p>PHP - MySQL - HTML - Bootstrap - Laravel - Docker - GitLab</p>

                                    </div>
                                    <div class="col mb-2 ml-2 mr-2 bg-light rounded-right">
                                        <h3>Administradora de datos </h4>
                                        <img src="./assets/besoccer_logo.jpg" class="rounded-circle float-left mr-3" style="width: 20px;" alt="logo BeSoccer">
                                        <h4>BeSoccer</h4>
                                        <p> Agosto 2019 - Noviembre 2022</p>
                                        <p> Mis tareas consistieron en:</p>
                                        <ul>
                                          <li> Añadir, editar y eliminar datos de jugadores, equipos, partidos, ligas, entre otros.</li>
                                          <li> Seguir hasta 40 partidos en vivo, añadiendo sus datos.</li>
                                          <li> Responder correos a clientes y usuarios.</li>
                                          <li> Moderar comentarios del foro.</li>
                                        </ul>
                                        <p>Trabajo bajo presión - Trabajo en equipo - Gestión del tiempo </p>
                                    </div>
                                </div>
                                <hr>

                            <!-- EDUCACION -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-1 mt-3 text-info">Formación</p>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-2 ml-2 bg-light rounded-right">
                                        <h4>Programación Full Stack</h4>
                                        <p>Argentina Programa</p>
                                        <p>Marzo 2022 - en curso</p>
                                        <p>HTML - CSS - Bootstrap - POO - Angular</p>
                                    </div>
                                    <div class="col mb-2 ml-2 mr-2 bg-light rounded-right">
                                      <h4>JavaScript</h4>
                                      <p>Udemy  - Noviembre 2021 </p>
                                      <p> HTML - CSS</p>
                                  </div>
                                  <div class="col mb-2 ml-2 mr-2 bg-light rounded-right">
                                      <h4>Responsive Web Design</h4>
                                      <p>freeCodeCamp - Junio 2021</p>
                                      <p> JavaScript - POO - AJAX</p>
                                  </div>
                                  <div class="col mb-2 ml-2 mr-2 bg-light rounded-right">
                                    <h4>HTML 5</h4>
                                    <p>Udemy - Abril 2021</p>
                                    <p> HTML - CSS</p>
                                  </div>   
                                </div>
                                <hr>
                                

                            <!-- IDIOMAS -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="lead fw-normal mb-1 mt-3 text-info">Idiomas </h4>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-2 ml-2 bg-light rounded-right pt-2">
                                        <p>Español</p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-animated bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2 ml-2 mr-2 bg-light rounded-right pt-2">
                                        <p>Inglés</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                            <!-- HARD AND SOFT SKILLS -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-0 mt-3 text-info">Habilidades</p>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-2 ml-2 bg-light rounded-right pt-2">                            
                                        <p>Back-End (PHP, MySQL)</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2 ml-2 mr-2 bg-light rounded-right pt-2">                            
                                        <p>Front-End (HTML, CSS, Bootstrap)</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row g-2">
                                    <div class="col mb-2 ml-2 bg-light rounded-right pt-2">
                                        <p>Trabajo en equipo</p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-stripped bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2 ml-2  mr-2 bg-light rounded-right pt-2">
                                        <p>Adaptabilidad</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-2 ml-2 bg-light rounded-right pt-2">                           
                                        <p>Resolución de problemas</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2 ml-2 mr-2 bg-light rounded-right pt-2">                           
                                        <p>Proactividad</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                            <!-- PROYECTOS -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-1 mt-3 text-info">Proyectos</p>
                                </div>
                                <div class="row g-2">
                                  <div class="col m-2 bg-light rounded-right pt-2">  
                                    <div id="carouselProyects" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img src="./assets/besoccer_logo.jpg" class="d-none d-md-block" alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                            <a href=""> IR </a>                                      </div>
                                        </div>
                                        <div class="carousel-item">
                                          <img src="..." class="" alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                            <a href=""> IR </a>
                                          </div>
                                        </div>
                                        <div class="carousel-item">
                                          <img src="..." class="" alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                            <a href=""> IR </a>                                      </div>
                                        </div>
                                      </div>
                                      <button class="carousel-control-prev border-0" type="button" data-target="#carouselProyects" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                                      </button>
                                      <button class="carousel-control-next border-0" type="button" data-target="#carouselProyects" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="false"></span>
                                      </button>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 

        <footer class="footer text-center mt-3">
            <p> Contáctame al +34 722871216 o a mi correo julimenardi@hotmail.com y conversemos! </p>
        </footer>
  </body>
</html>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8">
        <title>Julia Menardi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" href="styles.css" />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous"
        />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body class="bg-light text-dark" >
        <!-- Nav Bar -->
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid mt-4">            
                <ul class="d-flex list-unstyled">
                    <li>

                    </li>
                </ul>
            </div>
        </nav>
               
        
        <!-- PORTFOLIO  -->
        <section class="h-100 gradient-custom-2">

            <div class="container py-1 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-9 col-xl-10  text-center ">
                        <div class="card">

                        <!-- Foto de perfil y banner  -->
                            <div>
                                <div class="rounded-top d-flex flex-row" style="background-color:  #2a8797; height:200px;">
                                    <div class="d-flex flex-row">
                                        <div style="width: 200px; margin-top: 50px;">
                                            <img src="./assets/fotoPerfil.jpg"
                                            alt="Julia Menardi" class="img-fluid mt-5 rounded-circle ml-5"
                                            style="width: 150px; z-index: 1">
                                        </div>
                                        <div class="d-flex flex-col">
                                            <video style="min-width: 100%;" playsinline autoplay muted loop >          
                                                <source src="./assets/bannerVideo.mp4" type="video/mp4"/>
                                            </video>
                                        </div>  
                                    </div>
                                </div>  
                            </div>
                            <div class="col text-center">
                                <div class="pt-4 text-black d-flex justify-content-center text-center">
                                    <h2>Julia Menardi    -    Full Stack Developer Jr.</h2>
                                </div>
                                <hr>
                            </div>
                            <div class="p-4 text-black justify-content-center text-center">
                                <div class="d-flex justify-content-center text-center py-1">
                                    <div class="px-3">
                                        <span class="p-3 m-2"><a href="mailto:julimenardi@hotmail.com"><i class="fa fa-envelope"></i></a> julimenardi@hotmail.com</span>
                                        
                                    </div>
                                    <div class="px-3">
                                        <span class="p-3 m-2"><i class="fa fa-mobile" aria-hidden="true"></i> +34 722 871216</span>
                                    
                                    </div>
                                    <div class="px-3">
                                      <span class="p-3 m-2"><a href="https://es.linkedin.com/in/julia-menardi-106353206" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
                                    </div>
                                    <div class="px-3">
                                      <span class="p-3 m-2"><a href="https://github.com/julinm" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></span>
                                   </div>   
                                </div>
                              </div>
                        </div>
                    </div>
                        

                        <!-- Información  -->
                        
                    <div class="col col-lg-9 col-xl-10">
                        <div class="card mt-2">
                            <div class="card-body p-4 text-black">
                                <div class="mb-5">
                                    <div class="p-4" style="background-color: #f8f9fa;">
                                        <p>Soy una programadora Full Stack Jr. con muchas ganas de crecer en esta profesión.</p>
                                        <p>Actualmente, cuento con conocimientos en HTML, CSS, Bootstrap, PHP y MySQL. También he realizado algunos cursos sobre JavaScript y Python. Me estoy familiarizando con otras tecnologías como Git, Docker y SpringBoot.</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-1 text-info">Experiencia Laboral</p>
                                </div>

                                <!-- EXPERIENCIA LABORAL -->
                                <div class="row g-2">
                                    <div class="col mb-2 bg-light rounded-left ml-2">
                                        <h3>Programadora Full Stack </h4>
                                        <img src="./assets/besoccer_logo.jpg" class="rounded-circle float-left mr-3" style="width: 20px;" alt="logo BeSoccer">
                                        <h4>BeSoccer</h4>
                                        <p> Junior: Noviembre 2022 - Actualidad</p>
                                        <p> Trainee: Marzo 2022 - Noviembre 2022</p>
                                        <p> Mis tareas consisten en:</p>
                                        <ul>
                                          <li> Desarrollar software que utiliza el departamento de datos.</li>
                                          <li> Testear software desarrollado por mis compañeros.</li>
                                          <li> Realizar mantenimiento de código.</li>
                                          <li> Comunicar al departamento de datos el modo de uso de las nuevas herramientas desarrolladas.</li>
                                        </ul>
                                        <p>PHP - MySQL - HTML - Bootstrap - Laravel - Docker - GitLab</p>

                                    </div>
                                    <div class="col mb-2 ml-2 mr-2 bg-light rounded-right">
                                        <h3>Administradora de datos </h4>
                                        <img src="./assets/besoccer_logo.jpg" class="rounded-circle float-left mr-3" style="width: 20px;" alt="logo BeSoccer">
                                        <h4>BeSoccer</h4>
                                        <p> Agosto 2019 - Noviembre 2022</p>
                                        <p> Mis tareas consistieron en:</p>
                                        <ul>
                                          <li> Añadir, editar y eliminar datos de jugadores, equipos, partidos, ligas, entre otros.</li>
                                          <li> Seguir hasta 40 partidos en vivo, añadiendo sus datos.</li>
                                          <li> Responder correos a clientes y usuarios.</li>
                                          <li> Moderar comentarios del foro.</li>
                                        </ul>
                                        <p>Trabajo bajo presión - Trabajo en equipo - Gestión del tiempo </p>
                                    </div>
                                </div>
                                <hr>

                            <!-- EDUCACION -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-1 mt-3 text-info">Formación</p>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-2 ml-2 bg-light rounded-right">
                                        <h4>Programación Full Stack</h4>
                                        <p>Argentina Programa</p>
                                        <p>Marzo 2022 - en curso</p>
                                        <p>HTML - CSS - Bootstrap - POO - Angular</p>
                                    </div>
                                    <div class="col mb-2 ml-2 mr-2 bg-light rounded-right">
                                      <h4>JavaScript</h4>
                                      <p>Udemy  - Noviembre 2021 </p>
                                      <p> HTML - CSS</p>
                                  </div>
                                  <div class="col mb-2 ml-2 mr-2 bg-light rounded-right">
                                      <h4>Responsive Web Design</h4>
                                      <p>freeCodeCamp - Junio 2021</p>
                                      <p> JavaScript - POO - AJAX</p>
                                  </div>
                                  <div class="col mb-2 ml-2 mr-2 bg-light rounded-right">
                                    <h4>HTML 5</h4>
                                    <p>Udemy - Abril 2021</p>
                                    <p> HTML - CSS</p>
                                  </div>   
                                </div>
                                <hr>
                                

                            <!-- IDIOMAS -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="lead fw-normal mb-1 mt-3 text-info">Idiomas </h4>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-2 ml-2 bg-light rounded-right pt-2">
                                        <p>Español</p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-animated bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2 ml-2 mr-2 bg-light rounded-right pt-2">
                                        <p>Inglés</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                            <!-- HARD AND SOFT SKILLS -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-0 mt-3 text-info">Habilidades</p>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-2 ml-2 bg-light rounded-right pt-2">                            
                                        <p>Back-End (PHP, MySQL)</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2 ml-2 mr-2 bg-light rounded-right pt-2">                            
                                        <p>Front-End (HTML, CSS, Bootstrap)</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row g-2">
                                    <div class="col mb-2 ml-2 bg-light rounded-right pt-2">
                                        <p>Trabajo en equipo</p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-stripped bg-info" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2 ml-2  mr-2 bg-light rounded-right pt-2">
                                        <p>Adaptabilidad</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-2 ml-2 bg-light rounded-right pt-2">                           
                                        <p>Resolución de problemas</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col mb-2 ml-2 mr-2 bg-light rounded-right pt-2">                           
                                        <p>Proactividad</p>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                            <!-- PROYECTOS -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-1 mt-3 text-info">Proyectos</p>
                                </div>
                                <div class="row g-2">
                                  <div class="col m-2 bg-light rounded-right pt-2">  
                                    <div id="carouselProyects" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img src="./assets/besoccer_logo.jpg" class="d-none d-md-block" alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                            <a href=""> IR </a>                                      </div>
                                        </div>
                                        <div class="carousel-item">
                                          <img src="..." class="" alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                            <a href=""> IR </a>
                                          </div>
                                        </div>
                                        <div class="carousel-item">
                                          <img src="..." class="" alt="...">
                                          <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                            <a href=""> IR </a>                                      </div>
                                        </div>
                                      </div>
                                      <button class="carousel-control-prev border-0" type="button" data-target="#carouselProyects" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                                      </button>
                                      <button class="carousel-control-next border-0" type="button" data-target="#carouselProyects" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="false"></span>
                                      </button>
                                    </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 

        <footer class="footer text-center mt-3">
            <p> Contáctame al +34 722871216 o a mi correo julimenardi@hotmail.com y conversemos! </p>
        </footer>
  </body>
</html>
