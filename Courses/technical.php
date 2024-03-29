<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include  dirname(__DIR__) . '/includes/head1.php';

    include  dirname(__DIR__) . '/includes/head.php';

    ?>




    <style>

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
    position: fixed;
    margin-top: 100px;
 
}


#sidebar {
    min-width: 315px;
    max-width: 315px;
    background: rgb(0 123 255 / 22%);
    color: #fff;
    transition: all 0.3s;
    
}

#column2{
    padding: 0;
}


#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #ce4be814;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 20px;
    font-size: 1.5em;

}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #dfe1ec08;

}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #955db4 !important;
    color: #c97c7c !important;
}

#content {
    width: 100%;
    padding-bottom: 80px;
    min-height: 100vh;
    transition: all 0.3s;
    overflow-y: auto; /* Enable vertical scrolling for content */
    height: 100vh; /* Adjust this value as needed */
    
    
}
#content::-webkit-scrollbar {
    display: none;
}

        #column2 {
            flex: 4;
            background-color: rgb(250, 246, 255);
            overflow: auto;
            /* Allow for scrolling if content exceeds column height */
            padding: 0px;
            width: 100%;
            height: 100%;
            /* Full height of the viewport */
            border: none;

            .hidethis {
                display: none;
                /* Hide this by default */
            }
        }
    </style>
</head>

<body>
    <?php
    include  dirname(__DIR__) . '/includes/header.php';

    ?>
 
 
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Aptitude Questions</h3>
            </div>
            <ul class="list-unstyled components">

            <p>Index</p>
            </ul>
        
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <iframe id="column2" name="iframe" frameborder="0" src=" <?php echo $base_url; ?>ide/index.html" target="iframe">

            </iframe>

        </div>
    </div>
    </div>
    </div>
    <!-- partial -->
    <script src="js/script.js"></script>
    <script>
        function loadContent(url) {
            $('.loadhere').load(url);
        }
    </script>
    <script src="<?php echo $base_url; ?>/js/profile_pic_dd.js"></script>


</body>

</html>