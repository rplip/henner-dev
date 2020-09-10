$(document).ready(function () {

    init();
    /** Permet de créer un submenu */
    $('#menu-item-60').attr('class', 'submenu');
    $('#menu-item-60 > a').addClass('disabled');

    if (window.matchMedia("(min-width: 760px)").matches) {
            $('#topnavmobile').toggleClass('displaynone'); // Au dessus de 760px
            $('#sidebar').on('mouseover', function () {
                $('#sidebar').removeClass('active');
                $('#content').removeClass('active');
                $('#logo').addClass('active');
                $('#menuburger').addClass('displaynone');
                $('#menuarrow').removeClass('displaynone');
                $('#social').addClass('active');
                $('#wrapper').addClass('active');
                $('#sidebar-navbar-collapse-1').removeClass('collapse');
            });

            $('#sidebar').on('mouseout', function () {
                $('#sidebar').addClass('active');
                $('#content').addClass('active');
                $('#logo').removeClass('active');
                $('#menuburger').removeClass('displaynone');
                $('#menuarrow').addClass('displaynone');
                $('#social').removeClass('active');
                $('#wrapper').removeClass('active');
                $('#sidebar-navbar-collapse-1').addClass('collapse');
            });


      } else {
            $('#topnavdesktop').toggleClass('displaynone'); //En dessous de 760px
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
                $('#logo').toggleClass('active');
                $('#menuburger').toggleClass('displaynone');
                $('#menuarrow').toggleClass('displaynone');
                $('#social').addClass('displaynone');
                $('#wrapper').toggleClass('active');
                $('#sidebar-navbar-collapse-1').toggleClass('collapse');
            });
            $('#sidebarHeader').after('<div id="HG">Henner Group</div>');
            $('#social').addClass('displaynone');

            /** Ordre du menu en vue mobile */
            $('.menu-item-328').toggleClass('col-10 order-1 d-flex'); /* Mon compte */
            $('.menu-item-66').toggleClass('col-3 order-4'); /* Henner Particuliers */
            $('.menu-item-67').toggleClass('col-3 order-6'); /* Henner entreprise */
            $('.menu-item-68').toggleClass('col-6 order-5'); /* Soluton Courtage */
            $('.menu-item-69').toggleClass('displaynone'); /* Henner Groupe */
            $('.menu-item-424-fr').toggleClass('col-1 order-2'); /* Drapeau français */
            $('.menu-item-424-en').toggleClass('col-1 order-3'); /* Drapeau UK */
        }

    $('#sidebarCollapse').on('touchstart', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
        $('#logo').toggleClass('active');
        $('#menuburger').toggleClass('displaynone');
        $('#menuarrow').toggleClass('displaynone');
        $('#social').toggleClass('displaynone');
        $('#wrapper').toggleClass('active');
        $('#sidebar-navbar-collapse-1').toggleClass('collapse');
        
    });

    function init()
    {
    // set-up regular buttons
    var menuItemElements = document.getElementsByClassName('menu-item');
    for (var i = 0; i < menuItemElements.length; i++) {
        menuItemElements[i].onclick = resetSubmenus;
    }
    // set-up buttons with submenu
    resetSubmenus();
    }

    function openSubmenu()
    {
        resetSubmenus();
        this.setAttribute('class','submenu');
        this.onclick = resetSubmenus;
    }

    function resetSubmenus()
    {
        var submenuElements = document.getElementsByClassName('submenu');
        for (var i = 0; i < submenuElements.length; i++) {
        submenuElements[i].setAttribute('class','submenu active');
        submenuElements[i].onclick = openSubmenu;
        }
    }


});

