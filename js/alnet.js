$(function() {
    // Menu principal (nav.mobile ul)
    var listaMenuPrincipal = $('nav.mobile ul');
    listaMenuPrincipal.hide(); // Garante que o menu principal comece fechado
    $('.botao-menu-mobile').find('i').removeClass('fa-times').addClass('fa-bars');

    $('nav.mobile').click(function() {
        var listaMenu = $('nav.mobile ul');
        if (listaMenu.is(':hidden') == true) {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars').addClass('fa-times');
            listaMenu.slideToggle();
        } else {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-times').addClass('fa-bars');
            listaMenu.slideToggle();
        }
    });

    // Menu de login (nav.mobile .menu-login)
    var listaMenuLogin = $('nav.mobile .menu-login');
    var iconeLogin = $('.botao-menu-mobile').find('i');
    listaMenuLogin.hide().removeClass('visible'); // Garante que o menu de login comece fechado
    iconeLogin.removeClass('fa-times').addClass('fa-bars'); // Define o ícone inicial

    $('.botao-menu-mobile').click(function(e) {
        e.preventDefault();
        if (listaMenuLogin.is(':hidden') == true) {
            iconeLogin.removeClass('fa-bars').addClass('fa-times');
            listaMenuLogin.addClass('visible').slideDown();
        } else {
            iconeLogin.removeClass('fa-times').addClass('fa-bars');
            listaMenuLogin.removeClass('visible').slideUp();
        }
    });

    // Menu de idiomas (nav.mobile2)
    var listaMenuIdiomas = $('nav.mobile2 .menu-idiomas');
    var iconeIdiomas = $('.botao-menu-mobile2').find('i');
    listaMenuIdiomas.hide().removeClass('visible'); // Garante que o menu está escondido
    iconeIdiomas.removeClass('fa-times').addClass('fa-globe'); // Define o ícone inicial

    $('.botao-menu-mobile2').click(function(e) {
        e.preventDefault();
        if (listaMenuIdiomas.is(':hidden') == true) {
            iconeIdiomas.removeClass('fa-globe').addClass('fa-times');
            listaMenuIdiomas.addClass('visible').slideDown();
        } else {
            iconeIdiomas.removeClass('fa-times').addClass('fa-globe');
            listaMenuIdiomas.removeClass('visible').slideUp();
        }
    });

    $('nav.mobile2 .menu-idiomas select').click(function(e) {
        e.stopPropagation();
    });

    // Impede que cliques no formulário de login acionem o toggle
    $('nav.mobile .menu-login form').click(function(e) {
        e.stopPropagation();
    });
});