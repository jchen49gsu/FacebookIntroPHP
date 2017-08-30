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
                            <li class="active"><a href="products.php">Products</a></li>

                            <!-- drop down menu -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="me.php">Me</a></li>
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
              <h1 class ="title-super text-thin">Products</h1>
            </div>

            <div class="col-md-12 text-left">
              <h1 class ="introduction text-muted">This page will introduce Facebook's main products. The content is based on the wikipedia website. For more resources, plese click About -> Resources. </h1>
            </div>
            

            

                <div class="col-md-12 text-left">
                  <h2 class ="text-thin">Instagram</h2>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="instagram1">
                            <img class="img-responsive" src="image/instagram.jpeg" alt="instagram">
                        </div>
                    </div>
                    <div class="col-md-8 text-left">
                       <div class="instagram">
                      <p> <font size="4"color="#e95950"> <b> Instagram </b>  is a mobile, desktop, and Internet-based photo-sharing application and service that allows users to share pictures and videos either publicly or privately. Instagram was acquired by Facebook in April 2012 for approximately US$1 billion in cash and stock. </font>
                      </p> 
                      </div>            
                </div>

                <div class="col-md-12 text-left">
                  <h2 class ="text-thin">whatsApp</h2>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="whatsApp1">
                            <img class="img-responsive" src="image/whatsApp.jpeg" alt="whatsApp">
                        </div>
                    </div>
                    <div class="col-md-8 text-left">
                       <div class="whatsApp">
                      <p> <font size="4"color="#075e54"> <b> WhatsApp Messenger </b> is a freeware and cross-platform instant messaging service for smartphones.It uses the Internet to make voice calls, one to one video calls; send text messages, images, GIF, videos, documents, user location, audio files, phone contacts and voice notes to other users using standard cellular mobile numbers. </font>
                      </p> 
                      </div>            
                </div>

                <div class="col-md-12 text-left">
                  <h2 class ="text-thin">Oculus</h2>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="Oculus1">
                            <img class="img-responsive" src="image/oculus.png" alt="oculus">
                        </div>
                    </div>
                    <div class="col-md-8 text-left">
                       <div class="oculus">
                      <p> <font size="4"color="#000000"> <b> Oculus VR</b>  is an American technology company founded by Palmer Luckey in June 2012 in Irvine, California, now based in Menlo Park. It specializes in virtual reality hardware and software products.. </font>
                      </p> 
                      </div>            
                </div>





    </div>

    <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-muted">Design by Jing Chen </p>
            </div>
            <!-- /.container -->
        </footer>
    </body>
    </html>