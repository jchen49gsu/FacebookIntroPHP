<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width", initial-scale=1">
    <title> firstPage</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body> 
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive" src="image/fackbookBackground.jpg" alt="secondPage" class="thumbnails" id="secondPage" />
                <script>
                  var images = document.getElementsByTagName("img");
                  for(var i = 0; i < images.length; i++) {
                     var image = images[i];
                     image.onclick = function(event) {
                        window.location.href = this.id + '.php';
                    };
                  }
               </script>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="secondPage.php" class="btn btn-info" role="button">Start Facebook exploring!</a>
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