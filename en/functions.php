<?php
function my_header($title) {
    $title = "Shavarite - " . $title;
    ?>
    <!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black">
            <title><?php echo $title ?></title>
            <link rel="stylesheet" href="../css/normalize.min.css">
            <link href="../css/styles.css" rel="stylesheet" />
            <link href="../css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        </head>
        <body>
            <div id="site-wrap">
                <header>
                    <div id="header-container">
                        <h1>
                            <a href="../index.php">
                                <img id="logo" src="../images/shavari-logo.png"/>
                            </a>
                        </h1>
                        <nav>
                            <ul id="main-nav-list" class="nav-list">
                                <li>
                                    <a href="project.php">the project</a>
                                </li>
                                <li>
                                    <a href="history.php">a bit of history</a>
                                </li>
                                <li>
                                    <a href="reedfilters.php">about the reed beds</a>
                                </li>
                                <li>
                                    <a href="work.php">technical plan</a>
                                </li>
                                <li>
                                    <a href="nature.php">back to the nature</a>
                                </li>
                                <li>
                                    <a href="people.php">for the people</a>
                                </li>
                                <li class="camp-logo">
                                    <a href="#"><img id="logo" src="../images/shavari-camp-logo.png"/></a>
                                </li>
                                <li>
                                    <a href="contacts.php">contact us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </header>

                <?php
            }

include '../footer.php';
