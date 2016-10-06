<!doctype html>
<!--Conditionals for IE9 Support-->
<!--[if IE 9]><html lang="en" class="ie ie9"><![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <title>Inovuz</title>
    <meta name="description" content="Intégrate a la comunidad web y haz que tu negocio de el salto a la era digital, desarrollamos aplicaciones web y aplicaciones móviles para tu idea o negocio, diseñamos estrategias y administramos campañas de Email Martketing, SEO, Search and Social Ads" />
    <meta name="keywords" content="paginas web, desarrollo web, aplicaciones, apps, marketing digital, videovigilancia" />
    <meta name="author" content="Inovuz" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
    <!--Bootstrap 3.3.2-->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--Icon Fonts-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <!--Animations-->
    <link href="css/animate.css" rel="stylesheet" media="screen">
    <!--Theme Styles-->
    <link href="css/theme-styles.css" rel="stylesheet" media="screen">
    <!--Color Schemes-->
    <link class="color-scheme" href="css/colors/color-default.css" rel="stylesheet" media="screen">
    <!--Modernizr-->
    <script src="js/libs/modernizr.custom.js"></script>
    <!--Adding Media Queries and Canvas Support for IE8-->
    <!--[if lt IE 9]>
    <script src="js/plugins/respond.min.js"></script>
    <script src="js/plugins/excanvas.js"></script>
    <![endif]-->
  </head>
  <!--Body-->
  <body class="space-top">
    <!--Page Preloading-->
    <div id="preloader"><div id="spinner"></div></div>
    
    <!--Login Modal-->
    <div class="light-skin modal fade" tabindex="-1" role="form" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Login here</h4>
          </div>
          <div class="modal-body">
            <form class="login-form" role="form">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter Username" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password" required>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
          </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
          
          <!--Header-->
          <header class="stiky-header">
            <div class="container group">
              <!--
              <a class="logo" href="index.html"><img src="img/logo-dark.png" alt="Inovuz"/></a>-->
              <a href="#" class="logo">
                <img src="inovuz.png" width="150px" class="img-responsive">
              </a>
              <!-- <a class="logo-mobile" href="index.html"><img src="img/logo-mobile.png" alt="Inovuz"/></a> -->
              <div class="navi-toggle group">
                <span class="dot"></span><span class="line"></span>
                <span class="dot"></span><span class="line"></span>
                <span class="dot"></span><span class="line"></span>
                <span class="dot"></span><span class="line"></span>
              </div>
              <!--
              <a class="btn btn-primary btn-login" href="#" data-toggle="modal" data-target="#loginModal"><i class="icon-user"></i>Login</a>
              -->
              <nav class="main-navi">
                <ul>
                  <li class="active"><a class="scroll-up" href="#">Home</a></li>
                  <li><a class="scroll" href="#features">Servicios</a>
                </li>
                <li><a class="scroll" href="#clients">Nuestros Clientes</a>
              </li>
              <li><a class="scroll" href="#pricing">Precios</a>
            </li>
            <li><a class="scroll" href="#team">Nuestro Equipo</a>
          </li>
          <li><a class="scroll" href="#contacts">Contacto</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
<!--Hero Unit with Slider-->
<section class="hero">
  <div class="container">
    
    <!--Hero Slider-->
    <div class="row">
      <div class="hero-slider">
        <div class="slide first-slide">
          <div class="col-lg-5 col-md-5 col-sm-5 animated">
            <h2 style="margin-top:50px;" class="text-light text-left">Integra tu negocio al mundo digital</h2>
            <p>Llega a nuevos y potenciales clientes integrándote al mundo digital.</p>
            <p>Diseñamos y construimos páginas web, aplicaciones móviles, marketing digital que haran que tu negocio llegue a nuevas fronteras</p>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-7 animated">
            <img class="pull-right" src="img/hero-slider/pub1.png" width="689" height="659" alt="Components and Styles"/>
          </div>
        </div>
        <!--
        <div class="slide">
          <div class="col-lg-5 col-md-5 col-sm-5 animated fadeInUp">
            <h2 style="margin-top:50px;" class="text-light text-left">Coming Soon Page</h2>
            <p>Have a look at Ultima Coming soon page!</p>
            <p>While your landing page is under construction show your visitors beautiful coming soon page with the coundown and subscription form.</p>
            <p>And they always stay connected.</p>
            <a class="btn btn-primary" href="coming-soon.html">Go to Coming soon page</a>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-7 animated fadeInRight">
            <img class="iphone" src="img/hero-slider/iphone.png" width="649" height="400" alt="Coming Soon Page"/>
          </div>
        </div>
        -->
        <!--
        <div class="slide">
          <div class="col-lg-4 col-md-4 col-sm-4 animated fadeInDown">
            <h2 style="margin-top:70px;" class="text-light text-left">Some Heading</h2>
            <p>You shall not pass this theme!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            <a class="btn btn-primary" href="#">Push it!</a>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 animated fadeInRight">
            <div class="video">
              <img src="img/hero-slider/macbook.png" width="782" height="422" alt=""/>
              <div class="vide-holder">
                <iframe src="//player.vimeo.com/video/79036490?byline=0&amp;portrait=0&amp;color=ffeeac" width="720" height="405"></iframe>
              </div>
            </div>
          </div>
        </div>
        -->
      </div>
      </div><!--Close Hero Slider-->
    </div>
    </section><!--Close Hero-->
    
    <!--Features-->
    <section class="page-block" id="features">
      <div class="container">
        <div class="row page-header">
          <h2>Servicios</h2>
          <span>Haga crecer su negocio</span>
        </div>
        <div class="row features">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="feature-img"><img src="img/features/1.svg" width="124" height="120" alt="Editable colors"/></div>
            <h3>Servicios de TI</h3>
            <p style="font-size: 17px">Contamos con un equipo de programadores expertos en desarrollo de aplicaciones web y móviles, hechas a la medida para que su negocio o idea crezca. ¿Páginas Web, Aplicaciones Móviles, Sitemas de control de nómina, inventariado o contable?. No se preocupe nosotros lo hacemos, usted enfóquese en su negocio</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="feature-img"><img src="img/features/2.svg" width="131" height="131" alt="All you need for start"/></div>
            <h3>Marketing Digital</h3>
            <p style="font-size: 17px">El objetivo de Inovuz es crear estrategias enfocadas en Marketing Digital donde nuestros clientes tengan la oportunidad de posicionarse dentro del mercado global. Nuestra experiencia en  Social Media, Comunity manager, SEO, Mailing, analítica digital y Publicidad on-line son herramientas que nos permiten dar atención personalizada a cada uno de nuestro clientes.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="feature-img"><img src="img/features/3.svg" width="72" height="72" alt="Clean code"/></div>
            <h3>Videovigilancia</h3>
            <p style="font-size: 17px">Los mejores Sistemas de monitorio en el mercado y con gran variedad de opciones para todo tipo de ambientes que le permiten proteger a los suyos, como a su casa y  oficina.</p>
          </div>
        </div>
      </div>
      <!--
      
    </section>
    -->
    <!--Charts-->
    <!--
    <section class="page-block less-space-bottom" id="charts">
      <div class="container">
        <div class="row page-header">
          <h2>Animated charts</h2>
          <span>Subtext for header</span>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 chart">
            <h3>Line Chart</h3>
            <canvas id="lineChart" width="550" height="320"></canvas>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 chart">
            <h3>Bar Chart</h3>
            <canvas id="barChart" width="550" height="320"></canvas>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 chart">
            <h3>Pie Chart</h3>
            <div class="group">
              <div class="pie-chart">
                <canvas id="pieChart" width="260" height="260"></canvas>
              </div>
              <div class="pie-chart-legend animated-legend">
                <div style="color:#ff6f69;" class="label"><span>20%</span>Item01</div>
                <div style="color:#e7e7ea;" class="label"><span>25%</span>Item02</div>
                <div style="color:#313447;" class="label"><span>40%</span>Item01</div>
                <div style="color:#ffad10;" class="label"><span>15%</span>Item02</div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 chart">
            <h3>Doughnut Chart</h3>
            <div class="group">
              <div class="pie-chart">
                <canvas id="doughnutChart" width="260" height="260"></canvas>
              </div>
              <div class="pie-chart-legend animated-legend">
                <div style="color:#ff6f69;" class="label"><span>20%</span>Item01</div>
                <div style="color:#e7e7ea;" class="label"><span>25%</span>Item02</div>
                <div style="color:#313447;" class="label"><span>40%</span>Item01</div>
                <div style="color:#ffad10;" class="label"><span>15%</span>Item02</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      -->
    </section>
    <!--Gallery-->
    <section class="page-block" id="clients">
      <div class="container">
        <div class="row page-header">
          <h2>Nuestros Clientes</h2>
          <span>Conoce nuestros últimos proyectos y colaboraciones</span>
        </div>
        <div class="row">
          <ul class="gallery">
            <li>
              <a href="https://winu.mx" target="_blank" data-largesrc="img/gallery/winu.png" data-title="WINU" data-description="WINU es una plataforma comunitaria que facilita la solución de problemas a través de un intercambio de conocimientos de manera inmediata y remota.">
                <img src="img/gallery/winu.png" alt="thumb01"/>
                <span class="img-caption">Winu</span>
              </a>
            </li>
            <li>
              <a href="http://www.climayconfort.com" target="_blank" data-largesrc="img/gallery/clima.png" data-title="Clima y Confort" data-description="Clima & Confort es una empresa comprometida con la calidad y el buen trato, dedicada al mantenimiento e instalación de equipos de refrigeración y aire acondicionado. También elaboramos e instalamos proyectos de extracción e inyección de aire, refrigeración y ductos.">
                <img src="img/gallery/clima.png" alt="thumb02"/>
                <span class="img-caption">Clima y Confort</span>
              </a>
            </li>
            <li>
              <a href="http://www.herramientascela.com" target="_blank" data-largesrc="img/gallery/herramientas.png" data-title="Herramientas Cela" data-description="HERRAMIENTAS CELA, es una empresa 100% mexicana, fundada en 1990. Se inicio como fabricante de herramientas, mas poco tiempo después se introdujo en la fabricación de maquinaria para madera, destacándose en este ultimo como una empresa innovadora a nivel nacional.">
                <img src="img/gallery/herramientas.png" alt="thumb02"/>
                <span class="img-caption">Herramientas Cela</span>
              </a>
            </li>
            <li>
              <a href="http://tlaxcala.reqsiaa.com" target="_blank" data-largesrc="img/gallery/siaa.png" data-title="SIAA" data-description="Sistema Integral de Administración de Adquisiciones para el Gobierno del Estado de Tlaxcala">
                <img src="img/gallery/siaa.png" alt="thumb04"/>
                <span class="img-caption">SIAA</span>
              </a>
            </li>
            <li>
              <a href="http://www.metropolitandiario.com" target="_blank" data-largesrc="img/gallery/metropolitan.png" data-title="Metropolitan Diario" data-description="Las noticias mas relevantes y de interés a nivel mundial. El mejor contenido en Metropolitan Diario, TV, News y Metropolitan Radio.">
                <img src="img/gallery/metropolitan.png" alt="thumb05"/>
                <span class="img-caption">Metropolitan Diario</span>
              </a>
            </li>
            <li>
              <a href="http://comparahora.com" target="_blank" data-largesrc="img/gallery/compara.png" data-title="Comparahora" data-description="Comparahora.com: El comparador gratuito No.1 en México que te permite tomar mejores decisiones, ahorrando tiempo y dinero a la hora de contratar alguno de los servicios. ">
                <img src="img/gallery/compara.png" alt="thumb06"/>
                <span class="img-caption">Comparahora</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/gallery/bremen.png" data-title="Bremen" data-description="Grupo Bremen Consultores S.C. es una firma que brinda a sus clientes un servicio profesional-integral y personalizado, en donde se busca encontrar las soluciones óptimas a sus necesidades, con la máxima eficiencia, en tiempo y respuesta inmediata.">
                <img src="img/gallery/bremen.png" alt="thumb07"/>
                <span class="img-caption">Bremen</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/gallery/bondzuweb.png" data-title="Bondzu" data-description="Bondzù es una iniciativa de educación y concientización utilizando los nuevos medios de comunicación que permite internet. Hace uso intensivo de las redes sociales, aplicaciones para teléfonos inteligentes y páginas web.">
                <img src="img/gallery/bondzu.png" alt="thumb08"/>
                <span class="img-caption">Bondzu</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!--Pricing Plans-->
    <section class="page-block" id="pricing">
      <div class="container">
        <div class="row page-header">
          <h2>Nuestros Precios</h2>
          <span>Aprovecha nuestros precios de introducción</span>
        </div>
        <!--Tabs-->
        <div class="container-fluid">
          <div class="row">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs central">
              <li class="active"><a href="#clean-code" data-toggle="tab">Páginas Web</a></li>
              <li><a href="#font-icons" data-toggle="tab">Marketing Digital</a></li>
              <!--<li><a href="#more" data-toggle="tab">Otros</a></li>-->
            </ul>
          </div>
        </div>
        <div class="container">
          <div class="row tab-content central">
            <div class="tab-pane fade in active col-lg-12" id="clean-code">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 animated fadeInRight">
                  <div class="pricing-plan">
                    <div class="header">
                      <h3>Paquete 1</h3>
                      <span class="price">$850</span>
                    </div>
                    <div class="body">
                      <uL>
                        <li>Página Web de plantilla</li>
                        <li>Dominio Gratis (.com)</li>
                        <li>Hosting (1 año)</li>
                        <li>1 -4 secciones</li>
                        <li>1 video y 10 imágenes</li>
                        <li>Formulario de contacto</li>
                        <li>Soporte</li>
                      </uL>
                      <div class="buy-btn"><a class="btn btn-primary scroll" href="#contacts">Contáctanos y contrata</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 animated fadeInRight">
                  <div class="pricing-plan highlited">
                    <div class="header">
                      <h3>Paquete 2</h3>
                      <span class="price">$1200</span>
                    </div>
                    <div class="body">
                      <uL>
                        <li>Página Web de plantilla</li>
                        <li>Dominio Gratis (.com)</li>
                        <li>Hosting (1 año)</li>
                        <li>1 -7 secciones</li>
                        <li>2 videos y 15 imágenes</li>
                        <li>Formulario de contacto</li>
                        <li>5 cuentas de correo</li>
                        <li>Soporte</li>
                      </uL>
                      <div class="buy-btn"><a class="btn btn-primary scroll" href="#contacts">Contáctanos y contrata</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 animated fadeInRight">
                  <div class="pricing-plan">
                    <div class="header">
                      <h3>Paquete 3</h3>
                      <span class="price">$1800</span>
                    </div>
                    <div class="body">
                      <uL>
                        <li>Página Web de plantilla</li>
                        <li>Dominio Gratis (.com)</li>
                        <li>Hosting (1 año)</li>
                        <li>1 -10 secciones</li>
                        <li>4 videos y 20 imágenes</li>
                        <li>Formulario de contacto</li>
                        <li>10 cuentas de correo</li>
                        <li>Soporte</li>
                      </uL>
                      <div class="buy-btn"><a class="btn btn-primary scroll" href="#contacts">Contáctanos y contrata</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <br><br>
              <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <h3 class="text-center">¿Necesitas más?</h3>
                  <h4 class="text-center">Desarrollamos proyectos a la medida</h4>
                  <h3 class="text-center">¡Contáctanos!</h3>
                </div>
              </div>
            </div>
            <div class="tab-pane fade col-lg-12" id="font-icons">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="pricing-plan">
                    <div class="header">
                      <h3>Paquete Básico</h3>
                      <span class="price">$5,000</span>
                    </div>
                    <div class="body">
                      <uL>
                        <li>Creación de Social Media Plan</li>
                        <li>Creación/administración de 2 perfiles de redes sociales</li>
                        <li>Diseño y personalización básica de 2 perfiles de redes sociales seleccionados. (logotipo, banner y fondo)</li>
                        <li>Distribución de contenido creado por el cliente (4 entradas por semana de cada red social)</li>
                        <li>Revisión de comentarios</li>
                        <li>Identificación de mensajes importantes para el cliente</li>
                        <li>Eliminar Spam</li>
                        <li>Informe Semanal</li>
                        <li>Servicio de Lunes a Domingo</li>
                      </uL>
                      <div class="buy-btn"><a class="btn btn-primary scroll" href="#contacts">Contáctanos y contrata</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="pricing-plan highlited">
                    <div class="header">
                      <h3>Paquete Intermedio</h3>
                      <span class="price">$10,000</span>
                    </div>
                    <div class="body">
                      <uL>
                        <li>Creación de Social Media Plan</li>
                        <li>Creación/administración de 2 perfiles de redes sociales</li>
                        <li>Diseño y personalización básica de 2 perfiles de redes sociales seleccionados. (logotipo, banner y fondo)</li>
                        <li>Búsqueda de posibles clientes en las redes</li>
                        <li>Creación de álbumes con las distintas gamas de productos</li>
                        <li>Edición de fotografías si el cliente lo requiere</li>
                        <li>Edición de un video básico (de 1 o 2 minutos) con fotografías proporcionadas por el cliente</li>
                        <li>Interacción con otras cuentas</li>
                        <li>Cambios de portada</li>
                        <li>Uso de herramientas segmentación de mercados</li>
                        <li>Distribución de contenido creado por el cliente (5 entradas por semana de cada red social)</li>
                        <li>Revisión de comentarios</li>
                        <li>Identificación de mensajes importantes para el cliente</li>
                        <li>Eliminar Spam</li>
                        <li>Informe Semanal</li>
                        <li>Servicio de Lunes a Domingo</li>
                      </uL>
                      <div class="buy-btn"><a class="btn btn-primary scroll" href="#contacts">Contáctanos y contrata</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="pricing-plan">
                    <div class="header">
                      <h3>Paquete Completo</h3>
                      <span class="price">$15,000</span>
                    </div>
                    <div class="body">
                      <uL>
                        <li>Creación de Social Media Plan</li>
                        <li>Creación/administración de 2 perfiles de redes sociales</li>
                        <li>Diseño y personalización básica de 2 perfiles de redes sociales seleccionados. (logotipo, banner y fondo)</li>
                        <li>Búsqueda de posibles clientes en las redes</li>
                        <li>Creación de álbumes con las distintas gamas de productos</li>
                        <li>Edición de fotografías si el cliente lo requiere</li>
                        <li>Edición de 2 videos básico (de 1 o 2 minutos) con fotografías proporcionadas por el cliente</li>
                        <li>Interacción con otras cuentas</li>
                        <li>Cambios de portada</li>
                        <li>Uso de herramientas segmentación de mercados</li>
                        <li>Distribución de contenido creado por el cliente (6 entradas por semana de cada red social)</li>
                        <li>Revisión de comentarios</li>
                        <li>Identificación de mensajes importantes para el cliente</li>
                        <li>Eliminar Spam</li>
                        <li>Mailing</li>
                        <li>Informe Semanal</li>
                        <li>Servicio de Lunes a Domingo</li>
                      </uL>
                      <div class="buy-btn"><a class="btn btn-primary scroll" href="#contacts">Contáctanos y contrata</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <h3 class="text-center">¿Necesitas más?</h3>
                  <h4 class="text-center">Desarrollamos proyectos a la medida</h4>
                  <h3 class="text-center">¡Contáctanos!</h3>
                </div>
              </div>
            </div>
            <div class="tab-pane fade col-lg-12" id="more">
              <div class="row">
                <div class="col-lg-6 col-md-6 animated fadeInLeft">
                  <img class="img-center" src="img/features/3.png" alt="More Features"/>
                </div>
                <div class="col-lg-6 col-md-6 animated fadeInRight">
                  <div class="row">
                    <div class="col-lg-12">
                      <h2>More features overview</h2>
                      <p class="double-space-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-2"><i class="feature-icon icon-youtube"></i></div>
                    <div class="col-lg-10">
                      <p class="double-space-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-2"><i class="feature-icon icon-compass"></i></div>
                    <div class="col-lg-10">
                      <p class="double-space-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-2"><i class="feature-icon icon-cog"></i></div>
                    <div class="col-lg-10">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>
    
    <!--FAQ-->
    <!--
    <section class="page-block faq" id="faq">
      <div class="container">
        <div class="row page-header">
          <h2>FAQ</h2>
          <span>Subtext for header</span>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-4">
            <img class="img-center" src="img/faq-icon.png" alt="FAQ"/>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="panel-group" id="accordion-faq">
              <div class="panel">
                <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion-faq" href="#collapse1">FAQ 01
                  <div class="indicator"><div class="icon"><span class="hr-line"></span><span class="vr-line"></span></div></div>
                </a>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.
                  </div>
                </div>
              </div>
              <div class="panel">
                <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion-faq" href="#collapse2">FAQ 02
                  <div class="indicator"><div class="icon"><span class="hr-line"></span><span class="vr-line"></span></div></div>
                </a>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.
                  </div>
                </div>
              </div>
              <div class="panel">
                <a class="panel-heading" data-toggle="collapse" data-parent="#accordion-faq" href="#collapse3">FAQ 03
                  <div class="indicator"><div class="icon"><span class="hr-line"></span><span class="vr-line"></span></div></div>
                </a>
                <div id="collapse3" class="panel-collapse collapse in">
                  <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->
    <!--Testimonials-->
    <section class="page-block color" id="testimonials">
      <div class="container">
        <div class="row page-header">
          <h2 class="text-light">Testimonios</h2>
        </div>
        <div class="row">
          <div id="testimonials-slider" class="testimonials-slider carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#testimonials-slider" data-slide-to="0" class="active"></li>
              <li data-target="#testimonials-slider" data-slide-to="1"></li>
              <li data-target="#testimonials-slider" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                      <img class="img-circle img-center" src="img/testimonials/andy.png" width="192" height="192" alt="Dexter Dirk"/>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">
                      <blockquote>
                        <p class="text-light">Necesitaba llevar mi negocio al comercio en línea, en iNovuz me dieron las herramientas necesarias.</p>
                      <footer class="text-light">Lujac Pets</footer>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="container">
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-4">
                    <img class="img-circle img-center" src="img/testimonials/tules.png" width="192" height="192" alt="Richard Roe"/>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8">
                    <blockquote>
                      <p class="text-light">Me brindaron la asesoría y servicios profesionales para atender el mercado que mi producto iba dirigido.</p>
                    <footer class="text-light">Corporativo Ferreterías del Sur</footer>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <img class="img-circle img-center" src="img/testimonials/oso.png" width="192" height="192" alt="Jonathan Doe"/>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8">
                  <blockquote>
                    <p class="text-light">Emprendedores que les apasiona lo que hacen y tienen la experiencia para lograrlo.</p>
                  <footer class="text-light">Bremen</footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!--Mobile Apps-->
<!--
<section class="page-block mobile-apps" id="apps">
<div class="container">
  <div class="row page-header">
    <h2>Mobile apps</h2>
    <span>Subtext for header</span>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row space-bottom">
            <div class="col-lg-9 col-md-9">
              <h3>Run on any device</h3>
            </div>
            <div class="col-lg-3 col-md-3">
              <img class="img-center" src="img/apps-icon.png" alt="Mobile Apps"/>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10 col-md-11">
              <a class="btn btn-primary btn-block" href="#"><i class="icon-android"></i>Available on Google Play</a>
              <a class="btn btn-primary btn-block" href="#"><i class="icon-apple"></i>Available on App Store</a>
              <a class="btn btn-primary btn-block" href="#"><i class="icon-windows8"></i>Windows Marketplace</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8 col-md-8">
      <img class="double-space-top" src="img/tablet.png" alt="Mobile Apps"/>
    </div>
  </div>
</div>
</section>
-->
<!--Team-->
<section class="page-block team" id="team">
<div class="container">
  <div class="row page-header">
    <h2>Nuestro Equipo</h2>
    <span>Mentes que cambian los paradigmas</span>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
      <img class="img-circle-thumbnail img-center" src="https://scontent.fpbc1-2.fna.fbcdn.net/t31.0-8/11021352_10152730383752817_4801429228100075459_o.jpg" alt="Carlos Cuamatzin"/>
      <h3>Carlos Cuamatzin</h3>
      <p>Director de Desarrollo Tecnológico</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <img class="img-circle-thumbnail img-center" src="https://scontent.fpbc1-2.fna.fbcdn.net/v/t1.0-9/1236631_10151792177409463_1528297109_n.jpg?oh=40ee2f526f71bb1c0935bfca9140d975&amp;oe=5883A4CA" alt="Issac Martínez"/>
      <h3>Issac Martínez</h3>
      <p>Director de Proyectos</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <img class="img-circle-thumbnail img-center" height="360px" src="img/team/den.png" alt="Denisse Herrera"/>
      <h3>Denisse Cuamatzin</h3>
      <p>Directora de Marketing</p>
    </div>
  </div>
</div>
</div>
</section>
<!--Contacts-->
<section class="page-block contacts" id="contacts">
<div class="container">
<div class="row page-header">
  <h2>Contacto</h2>
  <span>¿Tienes una pregunta?</span>
</div>
<div class="col-lg-4 col-md-4 col-lg-offset-2">
  <div class="row space-bottom">
    <div class="col-lg-8 col-md-8">
      <h3>¿Dónde estamos?</h3>
    </div>
    <div class="col-lg-4 col-md-4">
      <img class="img-center" src="img/contacts/map.png" alt="Adress"/>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <p>Avenida 15 poniente 3701, Colonia La Paz. Puebla, Puebla.</p>
    </div>
  </div>
  <div class="row space-bottom">
    <div class="col-lg-8 col-md-8">
      <h3>Contactos</h3>
    </div>
    <div class="col-lg-4 col-md-4">
      <img class="img-center" src="img/contacts/phone.png" alt="Contacts"/>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <p>+52 222 563 03 62<br/>+52 222 185 80 70<br/>+52 222 694 66 92<br/>contacto@inovuz.com<br/>hola@inovuz.com</p>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-4 col-lg-offset-1">
  <div class="row space-bottom">
    <div class="col-lg-8 col-md-8">
      <h3>Contáctanos</h3>
    </div>
    <div class="col-lg-4 col-md-4">
      <img class="img-center" src="img/contacts/plan.png" alt="D"/>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <form class="feedback-form ajax-form">
        <div class="form-group">
          <label class="sr-only" for="name1">Name</label>
          <input type="text" class="form-control" name="name" id="name1" placeholder="Nombre">
        </div>
        <div class="form-group">
          <label class="sr-only" for="email1">Email</label>
          <input type="email" class="form-control" name="email" id="email1" placeholder="Email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="message">Message</label>
          <textarea class="form-control" name="message" id="message" rows="5" placeholder="Mensaje"></textarea>
        </div>
        <button type="button" class="btn btn-primary" id="enviarMensaje">Enviar</button>
        <!-- Validation Response -->
        <div class="response-holder"></div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</section>
<!--Footer-->
<footer class="footer">
<div class="container">
<div class="row">
<div class="col-lg-12">
  <h2 class="text-center text-light">Síguenos en Facebook</h2>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="row">
        <div class="col-md-3 col-md-offset-4">  
          <a href="https://www.facebook.com/inovuz/" target="_blank">
            <img src="img/gallery/facebook.svg" alt="" class="img-responsive center-block">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</footer>
<!--Scroll To Top Button-->
<div id="scroll-top" class="scroll-up"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
<!--Javascript (jQuery) Libraries and Plugins-->
<script src="js/libs/jquery-1.11.2.min.js"></script>
<script src="js/libs/jquery.easing.1.3.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/plugins/gallery.js"></script>
<script src="js/plugins/jquery.fitvids.js"></script>
<script src="js/plugins/jquery.bxslider.min.js"></script>
<script src="js/plugins/waypoints.min.js"></script>
<script src="js/landing2.js"></script>
<script>
  $('#enviarMensaje').click(function(event) {
    var nombre = $('#name1').val();
    var email = $('#email1').val();
    var mensaje = $('#message').val();
    if(nombre != '' && email != '' && mensaje != ''){
      $.ajax({
        url: '/email/' + nombre + '/' + email + '/' + mensaje,
        type: 'GET'
      })
      .done(function() {
        console.log("success");
        alert("Gracias, en breve nos ponemos en contacto contigo")
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
      
    }
    else {
      alert("Todos los campos son requeridos")
    }
  });
</script>
</body><!--Close Body-->
</html>