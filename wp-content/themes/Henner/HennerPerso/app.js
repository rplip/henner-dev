$(document).ready(function () {

    if (window.matchMedia("(min-width: 760px)").matches) {
        $('#topnavmobile').toggleClass('displaynone'); // Au dessus de 760px
        $('#sidebar').on('mouseover', function () {
            $('#sidebar').removeClass('active');
            $('#content').removeClass('active');
            $('#logo').addClass('active');
            $('#menuburger').addClass('displaynone');
            $('#menuarrow').removeClass('displaynone');
            //$('#social').removeClass('displaynone');
            $('#social').addClass('active');
            $('#wrapper').addClass('active');
        });

        $('#sidebar').on('mouseout', function () {
            $('#sidebar').addClass('active');
            $('#content').addClass('active');
            $('#logo').removeClass('active');
            $('#menuburger').removeClass('displaynone');
            $('#menuarrow').addClass('displaynone');
            //$('#social').addClass('displaynone');
            $('#social').removeClass('active');
            $('#wrapper').removeClass('active');
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
        });
        $('#sidebarHeader').after('<div id="HG">Henner Group</div>');
        $('#social').addClass('displaynone');
      }

    $('#sidebarCollapse').on('touchstart', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
        $('#logo').toggleClass('active');
        $('#menuburger').toggleClass('displaynone');
        $('#menuarrow').toggleClass('displaynone');
        $('#social').toggleClass('displaynone');
        $('#wrapper').toggleClass('active');
    });

});

