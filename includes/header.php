<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>QC Pride in Memory | <?php echo $title?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsiveNavBar.css">
</head>


<body>
    <header>
        <nav class="navbar hide">
            <div class="navcontent justify">
                <a href="" class="nav-logo">
                    <img src="images/header-logo.png" alt="logo">
                </a>
                <!--Burger Menu for Mobile, resize the screen to see it works-->
                <div class="burger navbar-toggle" id="js-navbar-toggle">
                    <div class="l1"></div>
                    <div class="l2"></div>
                    <div class="l3"></div>
                </div>

                <!--This where the nav bar menu list is -->
                <ul class="mainnav list-style-remove" id="menu">
                    <?php include'nav.html'?>
                </ul>
            </div>
        </nav>