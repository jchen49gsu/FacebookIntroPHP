    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>htmlCssProject</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />
        <meta property="og:url"           content="file:///Users/jchen6/Documents/coding/web%20development/html%20&amp;&amp;%20css%20project/htmlCssProject%20copy/me.php" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato"> 
        <link rel="stylesheet" href="css/contact.css">    
    </head>
    <body>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

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
              <h1 class ="title-super text-thin">About me</h1>
        </div>       

        <div class="col-md-12 text-left">
        <blockquote>
        <p>There is no such thing as a 'self-made' man. We are made up of thousands of others. Everyone who has ever done a kind deed for us, or spoken one word of encouragement to us, has entered into the make-up of our character and of our thoughts, as well as our success.</p>
        <footer>George Burton Adams</footer>
        </blockquote>
        </div>

        <div class="me">
        <div class="row text-left">
                <div class="col-md-12">
                    
                       <h5> <font size="5"> I would love to learn from you.Following are my contact information:</font></h5>
                            <dl>
                                <dt>Email:</dt>
                                    <dd>
                                        <p>
                                            <a href="mailto:jchen49gsu@gmail.com?Subject=Hello%20" target="_top">Send me Email</a>
                                        </p>
                                    </dd>
                                <dt>Linkedin:</dt>
                                    <dd> 
                                         <p>
                                        <a href="https://www.linkedin.com/in/jchen3/">Visit my Linkedin</a>
                                        </p>
                                    </dd>
                                <dt>Github:</dt>
                                    <dd> 
                                        <a href="https://github.com/jchen49gsu">Visit my Github</a>
                                    </dd>
                                    <dt>Sample project:</dt>
                                    <dd> 
                                        <a href="project.php">Visit my project for photographer</a>
                                    </dd>
                            </dl>
                
                </div>
            </div>
        </div>

        <!-- Contact Section -->
 <?php
    define("TITLE", "Contact Us | Franklin's Fine Dining");
    
?>

    <div id="contact">
        

        <?php
    
        // Check for Header Injections
        function has_header_injection($str) {
            return preg_match( "/[\r\n]/", $str );
        }
        
        
        if (isset($_POST['contact_submit'])) {
            
            // Assign trimmed form data to variables
            // Note that the value within the $_POST array is looking for the HTML "name" attribute, i.e. name="email"
            $name   = trim($_POST['name']);
            $email  = trim($_POST['email']);
            $msg    = $_POST['message']; // no need to trim message
        
            // Check to see if $name or $email have header injections
            if (has_header_injection($name) || has_header_injection($email)) {
                
                die(); // If true, kill the script
                
            }
            
            if (!$name || !$email || !$msg) {
                echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
                exit;
            }
            
            // Add the recipient email to a variable
            $to = "brad@brightsidestudios.ca";
            
            // Create a subject
            $subject = "$name sent a message via your contact form";
            
            // Construct the message
            $message .= "Name: $name\r\n";
            $message .= "Email: $email\r\n\r\n";
            $message .= "Message:\r\n$msg";
            
            // If the subscribe checkbox was checked
            if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe' ) {
            
                // Add a new line to the $message
                $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
                
            }
        
            $message = wordwrap($message, 72); // Keep the message neat n' tidy
        
            // Set the mail headers into a variable
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
            $headers .= "From: " . $name . " <" . $email . ">\r\n";
            $headers .= "X-Priority: 1\r\n";
            $headers .= "X-MSMail-Priority: High\r\n\r\n";
        
            
            // Send the email!
            mail($to, $subject, $message, $headers);
        ?>
        
        <!-- Show success message after email has sent -->
        <h5>Thanks for contactingJing!</h5>
        <p>Please allow 24 hours for a response.</p>
        <p><a href="firstpage.php" class="button block">&laquo; Go to Home Page</a></p>
        
        <?php
            } else {
        ?>
        <div class="col-md-12 text-left">
                    <hr>
        
        <h1>Get in touch with me!</h1>
           </div>  
    
        <form method="post" action="" id="contact-form">
        
          <div class="col-md-12 text-left">
              <label for="name">Name</label>
           </div>  
           <div class="col-md-12 text-left">
            <input type="text" id="name" name="name">
           </div>    

           <div class="col-md-12 text-left">
              <label for="email">Email</label>
           </div> 
           <div class="col-md-12 text-left">
              <input type="email" id="email" name="email">
           </div> 

           <div class="col-md-12 text-left">
              <label for="message">Comment</label>
           </div> 
           <div class="col-md-12 text-left">
              <textarea id="message" name="message"></textarea>
           </div> 

            <div class="col-md-12 text-left">
              <input type="checkbox" id="subscribe" value="Subscribe" name="subscribe"> <label for="subscribe">Subscribe to newsletter</label>
           </div> 
           <div class="col-md-12 text-left">
              <input type="submit" class="button next" name="contact_submit" value="Send Message">
           </div>   
        </form>
        
        <?php
            }
        ?>
        <hr>



        <!-- Google Map -->
        <div id="googleMap" class="w3-grayscale" style="width:100%;height:450px;"></div>

        <!-- Add Google Maps -->
        <script>
        function myMap()
        {
          myCenter=new google.maps.LatLng(41.878114, -87.629798);
          var mapOptions= {
            center:myCenter,
            zoom:12, scrollwheel: false, draggable: false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
          };
          var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

          var marker = new google.maps.Marker({
            position: myCenter,
          });
          marker.setMap(map);
        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

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