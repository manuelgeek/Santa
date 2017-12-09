<?php
include 'controller.php';
?>
<!DOCTYPE html>
<html lang="en">
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <meta name="description" content="App:Lab KE wishes you a Merry Christmas and a Prosperous Happy New Year 2018" />
    <meta name="keywords" content="Festive Season, Christmas, New Year" />
    <meta name="author" content="Apps:Lab"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

  <title>App:Lab | Festive Greetings Custom </title>
    <!-- ===========================
    FAVICONS
    =========================== -->
  <link rel="icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />
   <!-- ===========================
    STYLESHEETS
    =========================== --> 
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
        <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">

    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/demo.css" rel="stylesheet">  

  <link href='http://fonts.googleapis.com/css?family=Raleway:400,900,600|Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="http://parsleyjs.org/src/parsley.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.3/cropper.css">

  <style type="text/css">
  /* Limit image width to avoid overflow the container */
  img {
    max-width: 100%; /* This rule is very important, please do not ignore this! */
  }

  #canvas {
    height: 200px;
    width: 200px;
    background-color: #ffffff;
    cursor: default;
    border: 1px solid #2ECD99;
  }
</style>

  </head>
  <body>
    <div class="container">
      <div class="demo-headline">
        <h1 class="demo-logo">
          <div class="logo"></div>
          Santa
          <small>Create customized message</small>
        </h1>
      </div> <!-- /demo-headline -->
    <?php
        if(isset($error))
      {
        foreach($error as $error)
        {
           ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
        }
      }
    ?>

    <!-- <h3 class="demo-panel-title">Input Area</h3> -->
    <form method="POST" enctype="multipart/form-data" data-parsley-validate>
      <div class="row">
        <div class="col-sm-7 col-sm-offset-2">
          <div class="form-group">
            <input type="text" name="name" value="" placeholder="Name" class="form-control" required="" />
          </div>
        </div>

        <div class="col-sm-7 col-sm-offset-2">
          <div class="form-group">
            <input type="text" name="email" value="" placeholder="Email" class="form-control" required="" />
          </div>
        </div>

        <div class="col-sm-7 col-sm-offset-2">
          <div class="form-group">
            <textarea  name="message" value="" placeholder="Message" class="form-control" required="" ></textarea>
          </div>
        </div>

        <div class="col-sm-7 col-sm-offset-2">
        
                              <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>Your Image</h6>
                             
                              
                                <div class="col-md-6">
                                  
                                  <!-- Below are a series of inputs which allow file selection and interaction with the cropper api -->
                                  <input type="file" id="fileInput" class="form-control" accept="image/*"  />
                                 
                                </div>
                                <div class="col-md-6">
                                  <input type="button" class="btn btn-default" id="btnCrop" value="Crop" />
                                  <input type="button" class="btn btn-default" id="btnRestore" value="Restore" />                                 
                                </div>  
                                <br>
                                <div class="seprator-block clearfix"></div>
                                <div class="col-md-6">
                                  <div>
                                    <canvas id="canvas">
                                      Your browser does not support the HTML5 canvas element.
                                    </canvas>
                                  </div>
                                </div>    

                                <div class="col-md-6" id="result"></div>
                               
                            
                            
        </div>

        <div class="col-sm-7 col-sm-offset-2">
          <div class="form-group">
           <button type="submit" name="create" class="btn btn-block btn-lg btn-success">Create Link</button>
          </div>
        </div>
        
      </div> <!-- /row -->
    </form>

  </div>

  <footer>
        <div class="container">
             
            <div class="row bottom-footer text-center-mobile">
           
                <div class="col-sm-8">
                    
                     <p>&copy; <?php echo date('Y'); ?>  <a href="https://www.appslab.co.ke"><b>Apps:Lab </b></a> Design by<a href="https://manuel.appslab.co.ke"><b> Manu El</b></p>
                     
                       
                </div>
                <div class="col-sm-4  text-center-mobile">
                    <ul class="social-footer">
                        <li><a href="https://www.facebook.com/onyach.magak"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/emash_magak"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/+EmashMagak"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/manuel-magak-90441a116"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


</body>
<script src="js/jquery2.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.3/cropper.js"></script>

    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
 <script src="js/flat-ui.min.js"></script>
 <script type="text/javascript"> 
      var canvas  = $("#canvas"),
    context = canvas.get(0).getContext("2d"),
    $result = $('#result');

$('#fileInput').on( 'change', function(){
    if (this.files && this.files[0]) {
      if ( this.files[0].type.match(/^image\//) ) {
        var reader = new FileReader();
        reader.onload = function(evt) {
           var img = new Image();
           img.onload = function() {
             context.canvas.height = img.height;
             context.canvas.width  = img.width;
             context.drawImage(img, 0, 0);
             var cropper = canvas.cropper({
               aspectRatio: 16 / 18
             });
             $('#btnCrop').click(function() {
                // Get a string base 64 data url
                var croppedImageDataURL = canvas.cropper('getCroppedCanvas').toDataURL("image/png"); 
                $result.append( $('<img>').attr('src', croppedImageDataURL) );
                // var croppedImageBlob = canvas.cropper('getCroppedCanvas').toBlob("image/png");
                $result.append( $("<input type='hidden' name='photo' required >").attr('value', croppedImageDataURL) );
                // Upload cropped image to server if the browser supports `canvas.toBlob`
          // $().cropper('getCroppedCanvas').toBlob(function (blob) {
          //   var formData = new FormData();

          //   formData.append('photo', blob);

          // });
              // document.getElementById("photo").value = 66 ;
                
             });
             $('#btnRestore').click(function() {
               canvas.cropper('reset');
               $result.empty();
             });
           };
           img.src = evt.target.result;
        };
        reader.readAsDataURL(this.files[0]);
        
      }
      else {
        alert("Invalid file type! Please select an image file.");
      }
    }
    else {
      alert('No file(s) selected.');
    }
});</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.0/parsley.min.js"></script>
</html>