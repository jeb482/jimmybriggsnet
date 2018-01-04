<?php $GLOBALS['root'] = "http://127.0.0.1/jimmybriggsnet"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<nav class="navbar-custom navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="<?php echo $GLOBALS['root']  . "/index.php" ?>">Jimmy Briggs</a>
 
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class=" navbar-nav text-md-center nav-right">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $GLOBALS['root']  . "/index.php" ?>">About<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo  $GLOBALS['root']  . "/publications.php"?>">Publications</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $GLOBALS['root']  . "/teaching.php"?>">Teaching</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $GLOBALS['root']  . "/projects.php"?>">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php  echo $GLOBALS['root']  . "/resume.php"?>">Resume</a>
        </li>
      </ul>
      <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
      <li  class="nav-item">
      <a class="fa fa-linkedin nav-link" target="_blank" href="https://www.linkedin.com/in/jimmy-briggs/"></a>
      </li>
      <li class="nav navbar-nav pull-right">  
      <a class="fa fa-envelope nav-link" target="_blank" href="mailto:jimmy@jimmybriggs.net"></a>
      </li>
      </ul>

    </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    </nav>
