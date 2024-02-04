<?php
include(dirname(__DIR__) . '/functions/db.php');
?>



<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
    <!-- <span><img src="#" alt="image" height="58px"></span> -->
      <a class="navbar-brand" href="<?php echo $base_url;?>home.php"><span>Prep</span>Pros</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="<?php echo $base_url;?>premium.php" class="nav-link" style="color: yellow;">Premium</a></li>
          <li class="nav-item active"><a href="<?php echo $base_url;?>home.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="<?php echo $base_url;?>about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="<?php echo $base_url;?>resources.php" class="nav-link">Resources</a>
          <!-- <!-- <li class="nav-item"><a href="#"class="nav-link"> Interview Preparation</a></li> -->
          <!-- <li class="nav-item"><a href="blog_details.html"class="nav-link">All Problems</a></li> -->
          <li class="nav-item"><a href="<?php echo $base_url;?>blog.php"class="nav-link">Articles</a></li> 
          <li class="nav-item"><a href="<?php echo $base_url;?>instructor.php" class="nav-link">Instructor</a></li>
          <li class="nav-item"><a href="<?php echo $base_url;?>contact.php" class="nav-link">Contact</a></li>


        
          <li class="nav-item"><a href="<?php echo $base_url;?>login&signup/login.php" class="nav-link">Login</a></li>
         <li class="nav-item"><a href="<?php echo $base_url;?>login&signup/register.php" class="nav-link">Signup</a></li>
                
    
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <script src="<?php echo $base_url;?>/js/profile_pic_dd.js"></script>