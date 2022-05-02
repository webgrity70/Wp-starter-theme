jQuery(document).ready(function($){




    var menu = new MmenuLight(
        document.querySelector( '#navbarSupportedContent' ),
        '(max-width: 991px)'
    );

    var navigator = menu.navigation({
        // selectedClass: 'Selected',
        // slidingSubmenus: true,
        // theme: 'dark',
        // title: 'Menu'
    });

    var drawer = menu.offcanvas({
         position: 'left'
    });

    //  Open the menu.
    document.querySelector( '.navbar-toggler' ).addEventListener( 'click', evnt => {
        evnt.preventDefault();
        drawer.open();
    });



});
