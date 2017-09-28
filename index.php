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
      <div class="starter-template">
        <h1>About me</h1>
        <p>I am a second year M.S. student at the Cornell
        University Department of <a href="https://www.cs.cornell.edu/">Computer Science.</a> I am co-advised by 
        <a href="http://www.cs.cornell.edu/~srm/">Steve Marschner</a> and 
        <a href="https://www.cs.cornell.edu/~francois/">François Guimbretière</a>. My research interests
        include real-time rendering, numerics, and human-computer interaction. I expect to complete my degree
        in May 2018.
        </p>
        <p>
        I recieved my undergraduate degree in Computer Science, specializing in Computer Graphics, from Cornell
        in 2016. Prior to Cornell, I studied Pure and Applied Mathematics for two years at Boston University.
        During my gap year between BU and Cornell, I worked full-time as a programmer. For full details 
        on my professional background, please see my <a href="resume.php">resume</a>.        
        </p>
        <p>
        In my free time, I play competitive video games and several varieties of flute. I also draw, write,
        and participate in local activism.
        </p>
        
      </div>

    <?php include 'footer.php' ?>
    </div><!-- /.container -->

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