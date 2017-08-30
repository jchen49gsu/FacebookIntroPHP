    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>htmlCssProject</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-inverse navnar-fixed-top">
                <div class="container-fluid">

                    <!-- Logo -->
                    <div class="navbar-header">
                        <a href="https://www.facebook.com" class="navbar-brand">Facebook</a>
                    </div>

                    <!-- Menu Items -->
                    <div>
                        <ul class="nav navbar-nav">
                            <li ><a href="secondPage.php">Home</a></li>
                            <li ><a href="history.php">History</a></li>
                            <li ><a href="products.php">Products</a></li>

                            <!-- drop down menu -->
                                <li class="active" class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li ><a href="me.php">Me</a></li>
                                            <li><a href="resources.php">Resources</a></li>
                                        </ul>
                                </li>
                        </ul>

                            <!--right align -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="firstpage.php">Return</a></li>
                                </ul>
                    </div>
                 </div>
            </nav>

                


            <div class="col-md-12 text-left">
              <h1 class ="title-super text-thin">Resources</h1>
            </div>

            <div class="me">
            <div class="row text-left">
                    <div class="col-md-12">
                        
                           <h5> <font size="5"> Following are resource I used as references.</font></h5>
                                <dl>
                                    <dt>pcmag link:</dt>
                                        <dd>
                                            <p>
                                                <a href="https://www.pcmag.com/feature/320360/10-years-later-facebook-s-design-evolution" target="_top">10 Years Later: Facebook's Design Evolution</a>
                                            </p>
                                        </dd>
                                    <dt>Instagram link:</dt>
                                        <dd>
                                            <p>
                                                <a href="hhttps://en.wikipedia.org/wiki/Instagram" target="_top">Instagram</a>
                                            </p>
                                        </dd>
                                        <dt>whatsApp link:</dt>
                                        <dd>
                                            <p>
                                                <a href="https://en.wikipedia.org/wiki/WhatsApp" target="_top">whatApp</a>
                                            </p>
                                        </dd>
                                        <dt>Oculus link:</dt>
                                        <dd>
                                            <p>
                                                <a href="https://en.wikipedia.org/wiki/Oculus_VR" target="_top">Oculus</a>
                                            </p>
                                        </dd>
                                </dl>
                    
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-muted">Designed by Jing Chen </p>
            </div>
            <!-- /.container -->
        </footer>
    </body>
    </html>


