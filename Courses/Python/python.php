<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include dirname(__DIR__) . '../../includes/head1.php';
    include dirname(__DIR__) . '../../includes/head.php';
    ?>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer
        src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer
        src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../../css/style_course.css">
    <style>
        #column2 {
            flex: 4;
            background-color: rgb(250, 246, 255);
            overflow: auto;
            /* Allow for scrolling if content exceeds column height */
            padding: 7px;
            width: 100%;
            height: 100vh;
            /* Full height of the viewport */
            border: none;
        }

        .hidethis {
            display: none;
            /* Hide this by default */
        }
    </style>
</head>

<body>
    <?php
    include dirname(__DIR__) . '../../includes/header.php';
    ?>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Course</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Index</p>
                <!-- <li class="active">
                    <a href="java_module1.php" target="iframe">Java Module 1</a>
                </li> -->
                <li>
                    <a href="python_module1.php" target="iframe">Python Module 1</a>
                </li>
                <li>
                    <a href="python_module2.php" target="iframe">Python Module 2</a>
                </li>
                <li>
                    <a href="python_module3.php" target="iframe">Python Module 3</a>
                </li>
                <li>
                    <a href="python_module4.php" target="iframe">Python Module 4</a>
                </li>
                <!-- Add links to other courses as needed -->
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="resources.php" class="article">Back to Courses</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <iframe id="column2" name="iframe" frameborder="0" src="java_module1.php"></iframe>
        </div>
    </div>

    <script src="js/script.js"></script>
    <script>
        function loadContent(url) {
            $('.loadhere').load(url);
        }
    </script>

</body>

</html>
