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
       <div class="row jumbotron">
        <div class="col-md-4"><img src="images/headshot_warm.jpg"   class="img-fluid img-circle"></center></div>
        <div class="col-md-8 col-md-offset-4 align-self-center" align="center">

        <h1>Jimmy Briggs</h1>
        <p>Computer Graphics, Mixed Reality, HCI</p>
        <p><span class="d-md-none">
        <a class="fa fa-linkedin nav-link" target="_blank" href="https://www.linkedin.com/in/jimmy-briggs/"></a>
        <a class="fa fa-envelope nav-link" target="_blank" href="mailto:jimmy@jimmybriggs.net"></a>
        </span></p>
        </center>
        </div>
        
    
    </div>
      <div class="starter-template">
        
        
        <p>I am a second year M.S. student at the Cornell
        University Department of <a href="https://www.cs.cornell.edu/" target="_blank">Computer Science.</a> I am co-advised by 
        <a href="http://www.cs.cornell.edu/~srm/" target="_blank">Steve Marschner</a> and 
        <a href="https://www.cs.cornell.edu/~francois/" target="_blank">François Guimbretière</a>. My research interests
        include real-time rendering, numerics, and human-computer interaction. I expect to complete my degree
        in May 2018.
        </p>
        <p>
        I received my bachelor's degree in Computer Science, specializing in Computer Graphics, from Cornell
        in 2016. Prior to Cornell, I studied Pure and Applied Mathematics for two years at Boston University.
        During my gap year between BU and Cornell, I worked full-time as a programmer. For full details 
        on my professional background, please see my <a href="resume.php">resume</a>.        
        </p>

        
    <div class="card">
    <table class="table table-sm table-striped table-responsive-sm">
    <th span="col" colspan="2"><center>News</center></th>
    <tr>
    <td>February 2018</th>
    <td>RoMA featured in <a href="https://techcrunch.com/2018/02/19/combining-augmented-reality-3d-printing-and-a-robotic-arm-to-prototype-in-real-time/" target="_blank">
        Techcrunch</a>,
        <a href="https://www.fastcodesign.com/90161386/this-designer-and-robot-working-in-perfect-unison-is-the-future-of-making" target="_blank">FastCo.Design</a>, 
        <a href="http://news.cornell.edu/stories/2018/02/augmented-reality-takes-3-d-printing-next-level target="_blank"">Cornell Chronicle</a>.</td></tr>
    <tr>
    <td>December 2017</th>
    <td>RoMA: Robotic Modeling Assistant paper accepted to <a href="https://chi2018.acm.org/" target="_blank">CHI</a>.</td></tr>
    <tr>
    <td>August 2017</th>
    <td>Completed R&D internship at <a href="http://blueskystudios.com/" target="_blank">Blue Sky Studios</a>. Film credit in <a href="http://www.imdb.com/title/tt3411444/" target="_blank">Ferdinand</a>.</td></tr>
    <tr>
    <td>May 2017</th>
    <td>Excellence in Teaching Award for Discrete Mathematics.</td>
    </tr>
    </table>
    </div>
    </div>
        
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