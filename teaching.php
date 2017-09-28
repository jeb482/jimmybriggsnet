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
        <h1>Teaching</h1>
        <p>During both my graduate and undergraduate careers, I have served as a teaching assistant for
        a variety of courses serving freshmen through seniors. I am consistently reviewed positively by students, 
        professors, and other teaching assistants, and have recieved multiple awards for excellence in teaching. 
        Below, I provide a list of courses for which I have served as a TA.
        </p>
        
  
        <table class="table table-striped">
        <tr>
        <th>Semester</th>
        <th>School</th>
        <th>Course</th>
        </tr>
        </tr>
        <td>Spring 2013</td>
        <td>BU</td>
        <td><a href="http://cs-people.bu.edu/dgs/courses/cs111-old/" target="_blank">CS 111</a>: Introduction to Programming I</td>
        </tr>
        </tr>
        <td>Fall 2013</td>
        <td>BU</td>
        <td><a href="http://www.cs.bu.edu/~snyder/cs112/" target="_blank">CS 112</a>: Data Structures</td>
        </tr>
        </tr>
        <td>Fall 2015</td>
        <td>Cornell</td>
        <td><a href="http://www.cs.cornell.edu/courses/cs4620/2015fa/index.shtml" target="_blank">CS 4620</a>: Introduction to Computer Graphics</td>
        </tr>
        </tr>
        <td>Spring 2016</td>
        <td>Cornell</td>
        <td><a href="http://www.cs.cornell.edu/courses/cs4820/2016sp/" target="_blank">CS 4820</a>: Introduction to Analysis of Algorithms</td>
        </tr>
        </tr>
        <td>Fall 2016</td>
        <td>Cornell</td>
        <td><a href="http://www.cs.cornell.edu/courses/cs2800/2016fa/" target="_blank">CS 2800</a>: Discrete Math (Head TA)</td>
        </tr>
        </tr>
        <td>Spring 2017</td>
        <td>Cornell</td>
        <td><a href="http://www.cs.cornell.edu/courses/cs2800/2016sp/" target="_blank">CS 2800</a>: Discrete Math (Head TA)</td>
        </tr>
        </tr>
        <td>Fall 2017</td>
        <td>Cornell</td>
        <td><a href="http://www.cs.cornell.edu/courses/cs2800/2017fa/" target="_blank">CS 2800</a>: Discrete Math (Head TA)</td>
        </tr>

        </table>
      </div>

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