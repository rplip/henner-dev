<div class="wrapper" id="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="active">
            <div class="sidebar-header" id="sidebarHeader">
                <a href="https://extranetoko.fr/henner/index.php">
                <img src="https://extranetoko.fr/henner/wp-content/uploads/2020/09/henner-logo.jpg" alt="Logo Henner" id="logo">
                <!--<img src="asset/images/henner-logo.jpg" alt="Logo Henner" class="activelogo">-->
                </a>
            </div>

            <?php 
            wp_nav_menu( array(
                'theme_location' => 'menu-2',
                'menu_class'     => 'primary-menu navbar-nav nav',
                'container'      => 'div',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'sidebar-navbar-collapse-1',
            ) );
            ?>
            
            <!-- Page Content  -->
        <div id="content" class="active">
    
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
    
                    <button type="button" id="sidebarCollapse" class="btn iconcolor">
                        <i class="fas fa-bars" id="menuburger"></i>
                        <i class="fas fa-times displaynone" id="menuarrow"></i>
                    </button>
                </div>
            </nav>
        </div>

            <div id="social" class="container">
                <div class="row socialIcons justify-content-start">
                  <button type="button" class="btn"><a href="#"><i class="fab fa-twitter-square"></i></a></button>
                  <button type="button" class="btn"><a href="#"><i class="fab fa-facebook-square"></i></a></button>
                  <button type="button" class="btn"><a href="#"><i class="fab fa-linkedin"></i></a></button>
                  <button type="button" class="btn"><a href="#"><i class="fab fa-instagram-square"></i></a></button>
                </div>
    
        </nav>
    
        
    </div>