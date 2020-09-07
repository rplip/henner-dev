<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Henner</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-replace-svg="nest"></script>
    
    <!-- Our CSS is uploaded with wp_head()-->
    <?php wp_head(); ?>
</head>

<body>

    <div class="topnav">
        <div class="container" id="topnavcontainer">
          <div class="row align-items-center" id="topnavdesktop">
              <?php 
                wp_nav_menu ( array (
                'theme_location' => 'menu-1' ,
                'menu_class' => 'topnavul',
                'container'      => 'div',
                'container_class' => 'row align-items-center',
                'container_id'    => 'topnavdesktop',
                ) ); 
              ?>
            </div>
            <div class="row align-items-center" id="topnavmobile">
                <div class="col-6 align-self-start text-left"><a href="#">Mon compte</a></div>
                <div class="col-6 align-self-end text-right"><a href="#">FR|EN</a></div>
                <div class="col-3 text-center"><a href="#">Henner<br/>Particulier</a></div>
                <div class="col-6 text-center"><a href="#">Henner<br/>Solutions Courtage</a></div>
                <div class="col-3 text-center"><a href="#">Henner<br/>Entreprises</a></div>
            </div>
          </div>
    </div>

    