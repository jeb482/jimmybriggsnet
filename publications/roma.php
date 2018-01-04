<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Jimmys CSS -->
    <link rel="stylesheet" href="../css/defaults.css">

    <title>Jimmy Briggs</title>
    <link rel="icon" href="../images/favicon.ico">
  </head>
  <body>
    

  
    <!-- Nav menu stuff -->
    <?php include '../navbar.php' ?>
    
    <div class="container">
       <div class="row jumbotron">
        <div class="col-md-4"><img src="../images/roma_teaser.jpg"   class="img-fluid"></center></div>
        <div class="col-md-8 col-md-offset-4 align-self-center" align="center">

        <h1>RoMA: Interactive Fabrication with a Robotic Arm 3D Printer </h1>
        <p>Huaishu Peng, <strong>Jimmy Briggs</strong>, Cheng-Yao Wang, Kevin Guo, Joseph Kider, Stefanie Mueller, Patrick Baudisch, François Guimbretière. 
        <span class="text-muted"><a href="https://chi2018.acm.org/" target="_blank">CHI 2018</a> to appear.</span></p>
        <p>
        <span class="badge badge-pill badge-c-sharp">C#</span>
        <span class="badge badge-pill badge-cpp">C++</span>
        <span class="badge badge-pill badge-opengl">OpenGL</span>
        <span class="badge badge-pill badge-openvr">OpenVR</span>
        </p>
        </center>
        </div>
        </div>
      <h2>Abstract</h2>  
      <p>
      We present the Robotic Modeling Assistant (RoMA), a system providing a fast, precise, 
      hands-on modeling experience. As a designer creates a new design using RoMA AR CAD editor,
      features are constructed concurrently by a 3D printing robotic arm sharing the same design
      volume. The partially printed physical model then serves as a tangible reference for the
      designer as she adds new elements to her design. RoMA’s proxemics-inspired handshake mechanism
      between the designer and the 3D printing robotic arm allows the designer to quickly interrupt
      printing to access a printed area or to indicate that the robot can take full control of the
      model to finish printing. RoMA lets users integrate real-world constraints into a design rapidly,
      allowing them to create well-proportioned cooking implements or to extend existing objects.
      We conclude by presenting the strengths and limitations of our current design.
      </p>
      
      
      <center>
      
      <p><i>Video and more details coming soon.</i></p>
      </center>

    </div><!-- /.container -->
    <?php include '../footer.php' ?>
    
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