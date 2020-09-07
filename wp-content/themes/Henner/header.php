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
              <div class="col-2">
                  <a href="#">Henner Particulier</a>
              </div>
              <div class="col-2">
                <a href="#">Hennere Entreprises</a>
              </div>
              <div class="col-3">
                <a href="#">Henner Solutions Courtage</a>
              </div>
              <div class="col-2 bg-white text-dark">
                <a href="#">Le Groupe Henner</a>
              </div>
              <div class="col-2" style="background : #00338e;">
                <a href="https://www.hennerMonCompte.fr">Mon compte</a>
             </div>
              <div class="col-1">
                FR/ENG
              </div>
              <?php 
                wp_nav_menu ( array (
                'theme_location' => 'Nav menu' ,
                'menu_class' => 'Nav menu', 
                ) ); 
              ?>
            </div>
            <div class="row align-items-center" id="topnavmobile">
                <button class="btn col-6 align-self-start text-left"><a href="#">Mon compte</a></button>
                <button class="btn col-6 align-self-end text-right"><a href="#">FR|EN</a></button>
                <div class="col-3 text-center"><a href="#">Henner<br/>Particulier</a></div>
                <div class="col-6 text-center"><a href="#">Henner<br/>Solutions Courtage</a></div>
                <div class="col-3 text-center"><a href="#">Henner<br/>Entreprises</a></div>
                
            </div>
          </div>
    </div>

    