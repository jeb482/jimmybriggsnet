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
  
    <?php include 'navbar.php' ?>
    
    <div class="container">
    <h1>Publications</h1>

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-2">
            <img class="img-thumbnail img-fluid mx-auto" src="images/thesis_teaser.jpg" alt="A floating cylinder in a long tunnel."> 
        </div>
        <div class="col-md-10">
         <h2 class="featurette-heading">Egocentric and Allocentric Schemes for Material Understanding</h2>
          <p class="lead"><strong>Jimmy Briggs</strong><span class="text-muted">. Master's Thesis, 2019. [<a href="<?php echo  $GLOBALS['root']  . "/publications/jimmythesis.pdf"?>" download>pdf</a>]
        </div>
    </div>
    
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-2">
            <img class="img-thumbnail img-fluid mx-auto" src="images/view_manage_teaser.png" alt="Image of a map with many small red circles on it."> 
        </div>
        <div class="col-md-10">
         <h2 class="featurette-heading">View Management for Lifelong Visual Maps</h2>
          <p class="lead">Nandan Banerjee, Ryan C. Connolly, Dimitri Lisin, <strong>Jimmy Briggs</strong>, Manjunath Narayana, and Mario E. Munich. <span class="text-muted">
          <a href="https://www.iros2019.org" target="_blank">IROS 2019</a>. [<a href="<?php echo  $GLOBALS['root']  . "/publications/banerjee_iros2019.pdf"?>" download>pdf</a>]</span> </p>
        </div>
    </div>
    
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-2">
            <img class="img-thumbnail  img-fluid mx-auto" src="images/grids_teaser.png" alt="Two maps with different overlays of colorful rectangles."> 
        </div>
        <div class="col-md-10">
         <h2 class="featurette-heading">Lifelong Mapping Using Adaptive Local Maps</h2>
          <p class="lead">Nandan Banerjee, Dimitri Lisin, <strong>Jimmy Briggs</strong>, Martin Llofriu, and Mario E. Munich. <span class="text-muted">
          <a href="https://www.ecmr2019.eu" target="_blank">ECMR 2019</a>. [<a href="<?php echo  $GLOBALS['root']  . "/publications/banerjee_ecmr2019.pdf"?>" download>pdf</a>] </span> </p>
        </div>
      </div>
    
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-2">
            <img class="img-thumbnail  img-fluid mx-auto" src="images/roma_teaser.jpg" alt="Image of ROMA: Interactive Robotic Assistant"> 
        </div>
        <div class="col-md-10">
         <h2 class="featurette-heading">RoMA: Interactive Fabrication with Augmented Reality and a Robotic 3D Printer</h2>
          <p class="lead">Huaishu Peng, <strong>Jimmy Briggs</strong>, Cheng-Yao Wang, Kevin Guo, Joseph Kider, Stefanie Mueller, Patrick Baudisch, François Guimbretière.
          <a href="https://chi2018.acm.org/" target="_blank">CHI 2018</a>.  [<a href="<?php echo  $GLOBALS['root']  . "/publications/roma.pdf"?>" download>pdf</a>] </p>
         </div>
      </div>

      <hr class="featurette-divider">

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