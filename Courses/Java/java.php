<!DOCTYPE html>
<html lang="en">

<head>
<?php
include  'includes/head1.php';

include  dirname(__DIR__).'../includes/head.php';

?>





	<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'><link rel="stylesheet" href="css/style_course.css">
	<style>
		
	
		
		#column2 {
      flex: 4;
      background-color: rgb(250, 246, 255);
      overflow: auto; /* Allow for scrolling if content exceeds column height */
      padding: 10px;
      width: 100%;
      height: 100vh; /* Full height of the viewport */
      border: none;

      .hidethis {
      display: none; /* Hide this by default */
    }
    }
	
	
	  </style>
</head>
<body>

<?php
include  dirname(__DIR__).'/preppros/includes/header.php';

?>
	<!-- <nav class="navbar navbar-expand-lg ftco-navbar-light1" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand img d-flex justify-content-center" href="index.html"
				style="background-image: url('images/logo.png'); height: 90x; width: 90px;"></a>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="profile.html" class="nav-link">My Profile</a></li>
				</ul>
			</div>
		</div>
	</nav>
	END nav -->
	<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tab-content");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tab-links");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
<!-- partial:index.partial.html -->
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Java Course</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Index</p>
                <li class="active">
                    <!-- <a href="java_module1.html" target="iframe" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Module 1</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu"> -->
                        <li>
                            <a href="abt.html"    target="iframe" >Introduction</a>
                        </li> 
                        <li>
                            <a href="java_module1.html"    target="iframe" >Module 1</a>
                        </li> 
                        <!-- <li>
                            <a href="java_module2.html" target="iframe">Servlets</a>
                        </li>
                        <li>
                            <a href="quiz/" target="iframe">Take Test</a>
                        </li> -->
                    <!-- </ul> -->
                </li>
                <li>
                    <a href="java_module2.html" target="iframe">Module 2</a>
                </li>
                <li>
                    <li>
                        <a href="java_module2.html" target="iframe">Module 3</a>
                    </li>
                </li>
                <li>
                    <a href="#" target="iframe">Module 4</a>
                </li>
               
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to Courses</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

           
            <div id="frame2">
        <div class="loadhere">
            <iframe id="column2" name="iframe" frameborder="0" src="abt.html">
              
            </iframe>
            
        </div>
    </div>
    </div></div>
<!-- partial -->
  <script  src="js/script.js"></script>
  <script>
    function loadContent(url) {
      $('.loadhere').load(url);
    }
  </script>

  
</body>
</html>
