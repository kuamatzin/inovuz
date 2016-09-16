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
    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
    <!--Bootstrap 3.3.2-->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--Icon Fonts-->
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="css/icon-moon.css" rel="stylesheet" media="screen">
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
    <div class="light-skin modal fade" id="loginModal" tabindex="-1" role="form" aria-hidden="true">
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
          <h1>Inovuz</h1>
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
            <li><a class="scroll" href="#features">Servicios<i class="fa fa-caret-down"></i></a>
            </li>
            <li><a class="scroll" href="#clients">Nuestros Clientes<i class="fa fa-caret-down"></i></a>
            </li>
            <li><a class="scroll" href="#pricing">Precios<i class="fa fa-caret-down"></i></a>
            </li>
            <li><a class="scroll" href="#team">Nuestro Equipo<i class="fa fa-caret-down"></i></a>
            </li>
            <li><a class="scroll" href="#contacts">Contacto<i class="fa fa-caret-down"></i></a>
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
                <h2 style="margin-top:50px;" class="text-light text-left">Components &amp; Styles</h2>
                <p>Check Ultima Components &amp; Styles page for more features and components.</p>
                <p>Wish to extend your landing page? We offer you simple copy and paste solution with new Components &amp; Styles page.</p>
                <a class="btn btn-primary" href="cs-page.html">Go to Components &amp; Styles</a>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-7 animated">
                <img class="pull-right" src="img/hero-slider/imac.png" width="689" height="659" alt="Components and Styles"/>
              </div>
            </div>
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
            <div class="feature-img"><img src="img/features/feature1.png" width="124" height="120" alt="Editable colors"/></div>
            <h3>Web Services</h3>
            <p>Intégrate a la comunidad web y haz que tu negocio de el salto a la era digital. Haga que su negocio esté disponible las 25 horas del día. Además reduzca los costos operativos de su empresa.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="feature-img"><img src="img/features/feature2.png" width="131" height="131" alt="All you need for start"/></div>
            <h3>Marketing Digital</h3>
            <p>Diseñamos estrategias y administramos campañas de Email Martketing, SEO (Optimización para motores de búsquedas y posicionamiento en buscadores), Search and Social Ads (campañas en Adwords, Facebook, LinkedIn).</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="feature-img"><img src="img/features/feature3.png" width="72" height="72" alt="Clean code"/></div>
            <h3>Clean code</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo.</p>
          </div>
        </div>
      </div>
      <!--Tabs-->
      <div class="container-fluid">
        <div class="row">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs central">
            <li class="active"><a href="#clean-code" data-toggle="tab">Clean Code</a></li>
            <li><a href="#font-icons" data-toggle="tab">Font Icons</a></li>
            <li><a href="#more" data-toggle="tab">More</a></li>
          </ul>
        </div>
      </div>
      <!-- Tab panes -->
      <div class="container">
        <div class="row tab-content central">
          <div class="tab-pane fade in active col-lg-12" id="clean-code">
            <div class="row">
                <div class="col-lg-6 col-md-6 animated fadeInLeft">
                <img src="img/features/1.png" alt="Clean Code"/>
              </div>
                <div class="col-lg-6 col-md-6 animated fadeInRight">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Clean code</h2>
                    <p class="double-space-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-2"><i class="feature-icon icon-support"></i></div>
                  <div class="col-lg-10">
                    <p class="double-space-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-2"><i class="feature-icon icon-map"></i></div>
                  <div class="col-lg-10">
                    <p class="double-space-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-2"><i class="feature-icon icon-gift"></i></div>
                  <div class="col-lg-10">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade col-lg-12" id="font-icons">
            <div class="row">
                <div class="col-lg-6 col-md-6 animated fadeInLeft">
                <img src="img/features/2.png" alt="Font Icons"/>
              </div>
                <div class="col-lg-6 col-md-6 animated fadeInRight">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>800+ Font icons</h2>
                    <p class="double-space-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-2"><i class="feature-icon icon-scissors"></i></div>
                  <div class="col-lg-10">
                    <p class="double-space-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-2"><i class="feature-icon icon-code"></i></div>
                  <div class="col-lg-10">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                  </div>
                </div>
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
    </section>
    
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
    </section>
    -->
    <!--Gallery-->
    <section class="page-block" id="clients">
        <div class="container">
        <div class="row page-header">
          <h2>Nuestros Clientes</h2>
          <span>Conoce nuestros últimos proyectos</span>
        </div>
        <div class="row">
          <ul class="gallery">
            <li>
              <a href="#" data-largesrc="img/gallery/1.jpg" data-title="City Center" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/gallery/th_1.png" alt="thumb01"/>
                <span class="img-caption">City Center</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/gallery/2.jpg" data-title="Beach Van" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/gallery/th_2.png" alt="thumb02"/>
                <span class="img-caption">Beach Van</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/gallery/3.jpg" data-title="Tea Pot" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/gallery/th_3.png" alt="thumb03"/>
                <span class="img-caption">Tea Pot</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/gallery/4.jpg" data-title="Railway Station" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/gallery/th_4.png" alt="thumb04"/>
                <span class="img-caption">Railway Station</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/gallery/5.jpg" data-title="City Center" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/gallery/th_5.png" alt="thumb05"/>
                <span class="img-caption">City Center</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/gallery/6.jpg" data-title="Bicycle Parking" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/gallery/th_6.png" alt="thumb06"/>
                <span class="img-caption">Bicycle Parking</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/gallery/7.jpg" data-title="London Boat" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/gallery/th_7.png" alt="thumb07"/>
                <span class="img-caption">London Boat</span>
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/gallery/8.jpg" data-title="Apple Air" data-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
                <img src="img/gallery/th_8.png" alt="thumb08"/>
                <span class="img-caption">Apple Air</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    
    <!--Application Wizard-->
    <!--
    <section class="page-block" id="wizard">
        <div class="container">
        <div class="row page-header">
          <h2>Application wizard</h2>
          <span>Subtext for header</span>
        </div>
        <div class="row">
            <div class="col-lg-12">
            <div class="wizard">
                <div class="header">
                <h3>Application Wizard</h3>
                <div class="progress-bar group">
                    <div class="overlay"></div>
                    <div class="line"></div>
                    <a class="step-link left current" href="#step01" data-toggle="tab"><span class="status"></span></a>
                    <a class="step-link middle" href="#step02" data-toggle="tab"><span class="status"></span></a>
                    <a class="step-link right" href="#step03" data-toggle="tab"><span class="status"></span></a>
                </div>
              </div>
              
              <form method="post" id="wizard-form" class="wizard-form body" role="form">
   
                <div class="wizard-step fade in active" id="step01">
                <div class="tab-links-wrap">
                    <div class="overlay"></div>
                  <div class="row tab-links">
                   <div class="tab-link active col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <a href="#contact" data-toggle="tab"><i class="fa fa-user"></i><span>Contact details</span></a>
                    </div>
                    <div class="tab-link col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <a href="#background" data-toggle="tab"><i class="fa fa-suitcase"></i><span>Background</span></a>
                    </div>
                    <div class="tab-link col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <a href="#id" data-toggle="tab"><i class="fa fa-check-circle-o"></i><span>ID Proof</span></a>
                    </div>
                    <div class="tab-link col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <a href="#agreement" data-toggle="tab"><i class="fa fa-file-text"></i><span>Agreement</span></a>
                    </div>
                  </div>
                </div>
                  <div class="tabs">
                    <div class="tab row fade in active" id="contact">
                      <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                            <label for="name">Name (required)</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                          </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                            <label for="email">Email (required)</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                            <label for="adress">Adress</label>
                            <input type="text" name="adress" class="form-control" id="adress" placeholder="Enter your adress">
                          </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                            <label for="phone">Phone (required numbers only)</label>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab row fade" id="background">
                      <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                            <label for="education">Educational background</label>
                            <textarea class="form-control" name="education" id="education" rows="8" placeholder="Describe your educational background"></textarea>
                          </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                            <label for="profession">Professional background</label>
                            <textarea class="form-control" name="profession" id="profession" rows="8" placeholder="Describe your professional background"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab row fade" id="id">
                      <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                            <label for="security">Social security no (required numbers only)</label>
                            <input type="text" name="security" class="form-control" id="security" placeholder="Enter social security no" required>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                            <label for="exp_date">ID expiry date</label>
                            <input type="text" name="exp_date" class="form-control" id="exp_date" placeholder="Enter ID expiry date">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab row fade" id="agreement">
                      <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                              <label for="agreem">Agreement no</label>
                              <input type="text" name="agreem" class="form-control" id="agreem" placeholder="Enter agreement no">
                            </div>
                            <div class="form-group">
                              <div class="checkbox custom">
                                <label>
                                  <input class="icheckbox" name="terms" type="checkbox">I have read and agree to the terms of service
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                            <label for="education">Agreement</label>
                            <textarea class="form-control" name="agr_text" id="agr_text" rows="8" placeholder="Write agreement here"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="wizard-step fade" id="step02">
                  <div class="tab-links-wrap">
                    <div class="overlay"></div>
                    <div class="row tab-links">
                      <div class="tab-link active col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="#tab01" data-toggle="tab"><i class="fa fa-anchor"></i>Tab 01</a>
                      </div>
                      <div class="tab-link col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="#tab02" data-toggle="tab"><i class="fa fa-anchor"></i>Tab 02</a>
                      </div>
                    </div>
                  </div>
                  <div class="tabs">
                    <div class="tab row fade in active" id="tab01">
                      <div class="col-lg-12">
                        <div class="row">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6">
                            <label for="field01">Field 01</label>
                            <input type="text" name="field01" class="form-control" id="field01" placeholder="Placeholder">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6">
                            <label for="field02">Field 02</label>
                            <input type="text" name="field02" class="form-control" id="field02" placeholder="Placeholder">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="textarea01">Textarea (required)</label>
                            <textarea class="form-control" name="textarea01" id="textarea01" rows="8" placeholder="Placeholder" required></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab row fade" id="tab02">
                      <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                              <label for="field03">Field 03</label>
                              <input type="text" name="field03" class="form-control" id="field03" placeholder="Placeholder">
                            </div>
                            <div class="form-group">
                              <label for="field04">Field 04</label>
                              <input type="text" name="field04" class="form-control" id="field04" placeholder="Placeholder">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                              <label for="textarea02">Textarea</label>
                              <textarea class="form-control" name="textarea02" id="textarea02" rows="8" placeholder="Placeholder"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="wizard-step fade" id="step03">
                  <div class="tab-links-wrap">
                    <div class="overlay"></div>
                    <div class="row tab-links">
                      <div class="tab-link active col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="#tab03" data-toggle="tab"><i class="fa fa-anchor"></i>Tab 03</a>
                      </div>
                      <div class="tab-link col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="#tab04" data-toggle="tab"><i class="fa fa-anchor"></i>Tab 04</a>
                      </div>
                    </div>
                  </div>
                  <div class="tabs">
                    <div class="tab row fade in active" id="tab03">
                      <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                              <label for="field05">Field 05</label>
                              <input type="text" name="field05" class="form-control" id="field05" placeholder="Placeholder">
                            </div>
                            <div class="form-group">
                              <label for="field06">Field 06</label>
                              <input type="text" name="field06" class="form-control" id="field06" placeholder="Placeholder">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab row fade" id="tab04">
                      <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group">
                              <label for="field07">Field 07</label>
                              <input type="text" name="field07" class="form-control" id="field07" placeholder="Placeholder">
                            </div>
                            <div class="form-group">
                              <label for="field08">Field 08</label>
                              <input type="text" name="field08" class="form-control" id="field08" placeholder="Placeholder">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                              <label for="textarea03">Textarea03</label>
                              <textarea class="form-control" name="textarea03" id="textarea03" rows="8" placeholder="Placeholder"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="wizard-footer group">
                    <div class="buttons">
                    <a class="btn btn-primary prev-tab hidden" href="#">Back</a>
                    <a class="btn btn-primary next-tab" href="#">Continue</a>
                    <input class="btn btn-primary hidden" type="submit" id="submit-wizard" value="Submit form">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->

    <!--Pricing Plans--> 
    <section class="page-block" id="pricing">
        <div class="container">
        <div class="row page-header">
          <h2>Nuestros Precios</h2>
          <span>Aprovecha nuestros precios de introducción</span>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
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
            <div class="col-lg-4 col-md-4 col-sm-4">
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
            <div class="col-lg-4 col-md-4 col-sm-4">
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
          <h2 class="text-light">Testimonials</h2>
          <span class="text-light">Subtext for header</span>
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
                      <img class="img-circle img-center" src="img/testimonials/dirk.png" width="192" height="192" alt="Dexter Dirk"/>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">
                      <blockquote>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="text-light">Carl</footer>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                      <img class="img-circle img-center" src="img/testimonials/roe.png" width="192" height="192" alt="Richard Roe"/>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">
                      <blockquote>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="text-light">Richard Roe</footer>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                      <img class="img-circle img-center" src="img/testimonials/doe.png" width="192" height="192" alt="Jonathan Doe"/>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">
                      <blockquote>
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="text-light">Jonathan Doe</footer>
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
            <p>Software Developer</p>
            <div class="social-networks">
              <a class="icon-facebook tooltipped" href="#" title="Facebook"></a>
              <a class="icon-instagram tooltipped" href="#" title="Instagram"></a>
            </div>
          </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
            <img class="img-circle-thumbnail img-center" src="https://scontent.fpbc1-2.fna.fbcdn.net/v/t1.0-9/1236631_10151792177409463_1528297109_n.jpg?oh=40ee2f526f71bb1c0935bfca9140d975&amp;oe=5883A4CA" alt="Issac Martínez"/>
            <h3>Issac Martínez</h3>
            <p>Project Manager</p>
            <div class="social-networks">
              <a class="icon-twitter tooltipped" href="#" title="Twitter"></a>
              <a class="icon-google-plus tooltipped" href="#" title="Google+"></a>
            </div>
          </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
            <img class="img-circle-thumbnail img-center" height="360px" src="https://scontent.fpbc1-2.fna.fbcdn.net/v/t1.0-9/12650887_10208314749970242_3964168524822679243_n.jpg?oh=b2a4c94dcf77385802d936fbd98db59b&amp;oe=5886125D" alt="Denisse Herrera"/>
            <h3>Denisse Herrera</h3>
            <p>Art director</p>
            <div class="social-networks">
              <a class="icon-youtube tooltipped" href="#" title="Youtube"></a>
              <a class="icon-tumblr tooltipped" href="#" title="Tumblr"></a>
            </div>
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
        <div class="row">
            <div class="col-lg-4 col-md-4">
            <div class="row space-bottom">
                <div class="col-lg-9 col-md-9">
                <h3>What we do</h3>
              </div>
                <div class="col-lg-3 col-md-3">
                <img class="img-center" src="img/contacts/man.png" alt="About Us"/>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-lg-offset-1">
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
                <p>4120 Lenox Avenue, New York, NY, 10035 76 Saint Nicholas Avenue</p>
              </div>
            </div>
            <div class="row space-bottom">
                <div class="col-lg-8 col-md-8">
                <h3>Contacts</h3>
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
                <form method="post" class="feedback-form ajax-form" role="form">
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
                  <button type="submit" class="btn btn-primary">Enviar</button>
                  <!-- Validation Response -->
                  <div class="response-holder"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--Social Networks-->
    <section class="page-block" id="social">
        <div class="container">
        <div class="row page-header">
          <h2>Find us on social networks</h2>
          <span>Subtext for header</span>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="social-networks">
              <a class="icon-facebook tooltipped" href="#" title="Facebook"></a>
              <a class="icon-instagram tooltipped" href="#" title="Instagram"></a>
              <a class="icon-twitter tooltipped" href="#" title="Twitter"></a>
              <a class="icon-google-plus tooltipped" href="#" title="Google+"></a>
              <a class="icon-youtube tooltipped" href="#" title="Youtube"></a>
              <a class="icon-tumblr tooltipped" href="#" title="Tumblr"></a>
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
            <h2 class="text-center text-light">Subscribe to our newsletter</h2>
            <p class="text-light text-center">Sign up now to our newsletter and you'll be one of the first to know when the site is ready:</p>
          </div>
        </div>
        <div class="row">
        
                    <!-- Begin MailChimp Signup Form -->
          <form class="subscribe-form validate" action="http://8guild.us3.list-manage.com/subscribe/post?u=168a366a98d3248fbc35c0b67&amp;id=73d49e0d23" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
            <div class="form-group col-lg-7 col-md-8 col-sm-8 col-lg-offset-1">
              <label class="sr-only" for="mce-EMAIL">Email address</label>
              <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Enter email" required>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_168a366a98d3248fbc35c0b67_73d49e0d23" value=""></div>
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-4"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary btn-block"></div>
          </form>
          <!-- Close MailChimp Signup Form -->
          
        </div>
        <div class="row">
            <div class="col-lg-12">
            <p class="copyright">&copy; 2014 ULTIMA. All Rights Reserved. Designed by  <a href="http://8guild.com/" target="_blank">8Guild</a></p>
          </div>
        </div>
      </div>
    </footer>
    
    <!--Scroll To Top Button-->
    <div id="scroll-top" class="scroll-up"><i class="icon-arrow-up"></i></div>
    
    <!--Javascript (jQuery) Libraries and Plugins-->
    <script src="js/libs/jquery-1.11.2.min.js"></script>
        <script src="js/libs/jquery.easing.1.3.js"></script>
        <script src="js/plugins/bootstrap.min.js"></script>
        <script src="js/plugins/jquery.touchSwipe.min.js"></script>
        <script src="js/plugins/jquery.placeholder.js"></script>
    <script src="js/plugins/icheck.min.js"></script>
    <script src="js/plugins/jquery.validate.min.js"></script>
        <script src="js/plugins/gallery.js"></script>
    <script src="js/plugins/jquery.fitvids.js"></script>
        <script src="js/plugins/jquery.bxslider.min.js"></script>
        <script src="js/plugins/chart.js"></script>
        <script src="js/plugins/waypoints.min.js"></script>
    <script src="js/plugins/smoothscroll.js"></script>
        <script src="js/plugins/color-switcher.js"></script>
    <script src="mailer/mailer.js"></script>
        <script src="js/landing2.js"></script>
    
    <!--Google Remarketing Tag (Placed before </body>)-->
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 966923546;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/966923546/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
    
  </body><!--Close Body-->
</html>
