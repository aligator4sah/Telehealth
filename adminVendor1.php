<?php
require("common.php");

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "db is connected";
}


?>

<!DOCTYPE html><html lang="en">

<head>
    <!-- Basic informations -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Site informations -->
    <title>Administrator Visualization</title>


    <!-- Open Graph -->
    <meta property="og:title" content="Free Aurora Template">
    <meta property="og:description" content="Free HTML5 Template created by Dominik Serafin.">
    <meta property="og:url" content="http://serafin.io/aurora-template/">
    <meta property="og:image" content="http://serafin.io/aurora-template/content/og_image.png">


    <!-- Fonts -->
    <link href="style/fonts/webfont-raleway/webfont-raleway.css" rel="stylesheet" type="text/css">
    <link href="style/fonts/webfont-font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">

    <!-- Stylesheets -->
    <link href="style/css/global.css" type="text/css" rel="stylesheet" media="all">

    <!-- Scripts preload -->
    <!--[if lt IE 9]><script src="style/js/html5shiv.js"></script><![endif]-->

    <style>
        input[type=text] {
            width: 70%;
            padding: 14px 18px;
            background-color: transparent;
            color:white;
            margin: 8px 0;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
            top: 50%;
        }

        .button {
            background-color: transparent;
            border: 3px solid #ccc;
            color: white;
            padding: 10px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 24px;

            cursor: pointer;

        }


        .a{
            color:white;
            font-size: 22px;
        }


    </style>
</head>

<body>






<!-- Some Helper Stuff -->
<div id="start" class="start">&nbsp;</div>
<div class="maxwidth1050">&nbsp;</div>







<!-- Header -->
<header class="header">
    <div class="header__wrapper">
        <div class="header__hamburger">
            <div class="header__hamburger-block">&nbsp;</div>
            <div class="header__hamburger-block">&nbsp;</div>
            <div class="header__hamburger-block">&nbsp;</div>
        </div>

        <nav class="header__navigation">
            <a href="adminVisual.php">
                <div class="js-smooth-scroll  header__navigation-element">Overview...</div>
            </a>
            <a href="adminVisual.php#experience">
                <div class="header__navigation-element  header__navigation-element--experience">Vendor Selection</div>
            </a>
            <a href="adminVisual.php#features">
                <div class="header__navigation-element  header__navigation-element--features">Patient Provider</div>
            </a>
            <a href="adminVisual.php#realizations">
                <div class="header__navigation-element  header__navigation-element--realizations">Data Management</div>
            </a>
            <a href="individualSearch.php">
                <div class="header__navigation-element  header__navigation-element--contact">Individual Search</div>
            </a>
            <a href="adminlogin1">
                <div class="header__navigation-element  header__navigation-element--contact">Log out</div>
            </a>
        </nav>

        <a href="adminVisual.php" class="header__title-wrapper  js-smooth-scroll">
            <div class="header__title-main">Tele Health</div>
            <div class="header__title-sub">By School of Health and Rehabilitation</div>
        </a>

    </div>

</header>


<body>

<!----- Individual Search ---->
<section id="adminSearch" class="experience">

    <div class="experience__hollow-arrow">&nbsp;</div>
    <div class="experience__wrapper">
        <div class="section-header">
            <div class="section-header__title  section-header__title--experience">Individual Search</div>
            <div class="section-header__subtitle">Please input username to start search</div>

        </div>
        <br> <br> <br> <br>


    </div>



</section>
<script src="style/js/dependencies.min.js" type="text/javascript"></script>
<script src="style/js/global.js" type="text/javascript"></script>
</body>

</html>