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
        <div class="align-self-center" align="center">
        <h1>SparrowHawk <a class="fa fa-github nav-link" href="https://github.com/jeb482/sparrowhawk" target="_blank"></a></h1>
        <p>An augmented reality engine for interactive fabrication</p>
        <span class="badge badge-pill badge-c-sharp">C#</span>
        <span class="badge badge-pill badge-opengl">OpenGL</span>
        <span class="badge badge-pill badge-openvr">OpenVR</span>
        </center>
        </div>
        </div>
  
      <h2>Synopsis</h2>  
      <p>
      We wanted to build a system in which a user could design a 3D model and
      have it printed at the same time in the same place by a Robotic Modeling
      Assistant. But how do we make sure that the user knows what she's building
      while keeping her apprised of a robot acitively working in her space? Our 
      idea was an augmented reality rendering and interaction framework. For
      compatibility with an existing code base, the system would have to be written
      as a Rhinoceros plugin. Thus, I led a small team to develop a C# codebase
      for the project. The result, SparrowHawk, is the augmented reality rendering
      and UI engine behind
      <a href="<?php echo $GLOBALS['root']  . "/publications/roma.php"?>">RoMA
      </a>, our CHI '18 paper.
      </p>
      
      <h2>Architecture</h2>
      <p>
      SparrowHawk follows a basic model-view-controller architecture. A data class,
      Scene, serves as the "model," keeping track of the state of the design 
      process. A visualization class, VrRenderer, uses OpenGL and OpenVR to 
      present a "view" of the design to the user. A game logic class, VrGame, 
      works as a "controller" for the application, running the game loop and 
      exectuting mathematical functions as needed for a given user action.
      These three major classes are supported by a host of utility classes
      sorted into appropriate subpackages.
      </p>
      
      <p>
      SparrowHawk outsources its CAD functionality to Rhino, calling relevant
      commands to produce CAD-friendly objects. To ensure a smooth experience 
      for the user, we delegate communication between the VR application 
      and Rhino to a separate thread. For example, when the user creates a 
      cylinder, she 
      </p>
      
      <h2>Engineering</h2>
      <p>
      Designing SparrowHawk as a Rhino plugin that also serves a SteamVR app
      presented some unique challenges. How do we pass data between the 
      various parts of our app? How do we make sure the head-mounted display
      doesn't freeze up during long computations? Below, I'll discuss some of the
      engineering choices we made and why we made them.
      <p>
      
      <h3>Impatient Producer-Consumer Queue</h3>
      <p>
      The producer-consumer queue is a standard design pattern for passing messages 
      between threads, in which one subprocess (the producer) enqueues messages into
      a shared queue and another (the consumer) dequeues and handles the messages.
      We implemented a producer-consumer queue to pass messages between the Rhino 
      plugin and the VR application.
      </p>
      
      
      <center>
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