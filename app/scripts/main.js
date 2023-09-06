jQuery(function () {

    // nav
    jQuery('.btopenMenu').click(function () {
        jQuery('.navMenu').addClass('openMenu');
    });
    jQuery('.closeNav').click(function () {
        jQuery('.navMenu').removeClass('openMenu');
    });

    jQuery('.navMenu a').click(function () {
        jQuery('.navMenu').removeClass('openMenu');
    });

    // header on scroll
    jQuery(function () {
        var header = jQuery("#header");
        var scroll = jQuery(window).scrollTop();
        if (scroll >= 20) {
            header.addClass("stick");
        } else {
            header.removeClass("stick");
        }

        jQuery(window).scroll(function () {
            var scroll = jQuery(window).scrollTop();
            if (scroll >= 20) {
                header.addClass("stick");
            } else {
                header.removeClass("stick");
            }
        });
    });

    // // smooth scroll
    // if (window.location.hash) {
    //     jQuery('#faca-parte').addClass('fixPaddingtHash');
    // } else {
    //     jQuery('#faca-parte').removeClass('fixPaddingtHash');
    // }
    jQuery('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                jQuery('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 600);
                return false;
            }
        }
    });
});

//  rellax
var rellax = new Rellax('.rellax', {
    center: true
});

// aos
AOS.init({
    easing: 'ease-in-out',
    duration: 800,
    once: true,
    mirror: false,
});

// parallax 
new universalParallax().init({
    speed: 4
});

jQuery(function () {
    // maks
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
        spOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };
    jQuery('.phone').mask(SPMaskBehavior, spOptions);
    jQuery('.cnpj').mask('00.000.000/0000-00', {reverse: true});

});

jQuery('button.btn[type="submit"]').click(function () {
    jQuery(this).html("Aguarde! Processando...").addClass('disabled');
});

var formct1 = document.querySelector('.wpcf7-form');

formct1.addEventListener('wpcf7mailsent', function (event) {
    jQuery(this).find(':button[type="submit"]').html("Enviado com sucesso!");
    jQuery('button.btn[type="submit"]').removeClass('disabled');
    console.log('wpcf7mailsent')

}, false);
formct1.addEventListener('wpcf7invalid', function (event) {
    jQuery(this).find(':button[type="submit"]').html("Erro ao enviar. Tente novamente!");
    jQuery('button.btn[type="submit"]').removeClass('disabled');
    console.log('wpcf7invalid')

}, false);
formct1.addEventListener('wpcf7mailfailed', function (event) {
    jQuery(this).find(':button[type="submit"]').html("Erro ao enviar. Tente novamente!");
    jQuery('button.btn[type="submit"]').removeClass('disabled');
    console.log('wpcf7mailfailed')

}, false);

/*
 * Replace all SVG images with inline SVG
 */
document.querySelectorAll('img.svg').forEach(function (img) {
    var imgID = img.id;
    var imgClass = img.className;
    var imgURL = img.src;

    fetch(imgURL).then(function (response) {
        return response.text();
    }).then(function (text) {

        var parser = new DOMParser();
        var xmlDoc = parser.parseFromString(text, "text/xml");

        // Get the SVG tag, ignore the rest
        var svg = xmlDoc.getElementsByTagName('svg')[0];

        // Add replaced image's ID to the new SVG
        if (typeof imgID !== 'undefined') {
            svg.setAttribute('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if (typeof imgClass !== 'undefined') {
            svg.setAttribute('class', imgClass + ' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        svg.removeAttribute('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if (!svg.getAttribute('viewBox') && svg.getAttribute('height') && svg.getAttribute('width')) {
            svg.setAttribute('viewBox', '0 0 ' + svg.getAttribute('height') + ' ' + svg.getAttribute('width'))
        }

        // Replace image with new SVG
        img.parentNode.replaceChild(svg, img);

    });

});