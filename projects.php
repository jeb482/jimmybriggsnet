<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Jimmys CSS -->
    <link rel="stylesheet" href="css/defaults.css">

    <title>Jimmy Briggs</title>
    <link rel="icon" href="images/favicon.ico">
  </head>
  <body>
  
    <!-- Nav menu stuff -->
    <?php include 'navbar.php' ?>

    
    <div class="container">
        <h1>Projects</h1>
        <p>This page is still under construction. Here are some pictures you can look forward to.
        </p>
        
      <!--<div class="container">
      <img src="images/maile.jpg" class ="teaser" alt="Avatar" class="image">
      <div class="middle">
      <div class="text-image">Chainmail</div>
      </div>
      </div>
      </div> -->
      <div class="text-center">
        <img src="images/maile.jpg" class="img-circle" alt="a picture of my chainmail shirt" height="200" width="200">
        <img src="images/wakame_teaser.jpg" class="img-circle" alt="photon mapped cornell box scene" height="200" width="200">
        <img src="images/kb.jpg" class="img-circle" alt="hybrid image of Kavita Bala with the Statue of Liberty" height="200" width="200">
        <img src="images/panorama.jpg" class="img-circle" alt="Auto-panorama" height="200" width="200">
      </div>
    
    </div><!-- /.container -->
    <?php include 'footer.php' ?>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 
    <!-- mascripts -->
    <script type="text/javascript">
        $(function() {
            var url=window.location.href;
            $("a").each(function() {
                if (url == (this.href)) {
                    $(this).closest("li").addClass("active");
                    $(this).closest("li").parent().parent().addClass("active");
                }
            });
        });
    </script>

 </body>
</html>