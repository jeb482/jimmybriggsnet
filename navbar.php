<?php $GLOBALS['root'] = "http://127.0.0.1/jimmybriggsnet"; ?>
 <nav class="navbar-custom navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="<?php echo $GLOBALS['root']  . "/index.php" ?>">Jimmy Briggs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
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
    </div>
    </nav>
