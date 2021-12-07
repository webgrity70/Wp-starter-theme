$(document).ready(function(){


    var height = $('.topHeader').outerHeight();

    $(window).scroll(function() {
        if($(this).scrollTop() > height)
        {
            $(".header").addClass("fixedHeader");
            
        }
        else if($(this).scrollTop() <= height)
        {
             $(".header").removeClass("fixedHeader");
            
        }     
    });



    $("#homecarousel").carousel({
        interval: 6000,
    });


    $(".footerFormCont .wpcf7-form-control").focus(function(){
        $(this).parent().parent().find(".subLabel").children('span').fadeOut(200);
    }).blur(function() {
        var inputVal = $(this).val();
        if ( inputVal=="" ||  inputVal==" " ) {
            $(this).parent().parent().find(".subLabel").children('span').fadeIn(200);
        }
    });


    $(".footerFormCont .wpcf7-form-control").each(function( index ) {
      /*console.log( index + ": " + $( this ).val() );*/
        if( !$( this ).val()  ){
            $(this).parent().parent().find(".subLabel").children('span').fadeIn(200);
        }
        else{
            $(this).parent().parent().find(".subLabel").children('span').fadeOut(200);
        }
    });


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
