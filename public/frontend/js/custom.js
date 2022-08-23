$(window).on("load scroll", function(e) {
    var scroll = $(window).scrollTop();

    if (scroll >= 150) {
        $("html").addClass("scrolling");
    } else {
        $("html").removeClass("scrolling");
    }
    if (scroll >= 5) {
        $(".page-animate").fadeOut();
    }
});

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    let lang = getCookie("language");
    if (lang != "") {
        $("html").attr("lang", lang);
    } else {
        setCookie("language", 'th', 1);
        $("html").attr("lang", "th");
    }
}



$(document).ready(function() {
    var activeLang = 'th';
    checkCookie();

    $(".lang").on('click', function(event) {
        var $this = $(this);
        if ($this.hasClass("lang-th")) {
            $("html").attr("lang", "th");
            activeLang = 'th';

        } else if ($this.hasClass("lang-en")) {
            $("html").attr("lang", "en");
            activeLang = 'en';

        } else {
            $("html").attr("lang", "ch");
        }
        setCookie("language", activeLang, 1);

    });




    /*===================Bootstrap scrollspy ==================*/

    $("a.target").on('click', function(event) {
        event.preventDefault();
        var hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function() {});
    });

    $(".totop").click(function() {
        $("html, body").animate({ scrollTop: 0 }, 1300);
    });

    /*------------[Start] Menu  ------------*/

    $("body").removeClass("nav-opened");
    $('<div class="page-blocker"></div>').appendTo('body');

    $('.navbar-toggle, .page-blocker').click(function() {
        $("html").toggleClass("nav-opened");
    });

    /*------------[Start] Bootstrap  dropdown ------------*/

    $(".select.dropdown").each(function() {
        var $selectItem = $(this);
        $selectItem.find(".dropdown-menu li").click(function(i) {

            var selText = $(this).text();
            if ($(this).index() == 0) {
                $(this).parent().parent().find('a[data-bs-toggle] span.value').html(selText).removeClass('selected');
            } else {
                $(this).parent().parent().find('a[data-bs-toggle] span.value').html(selText).addClass('selected');
            }

            $selectItem.find(".dropdown-menu li").removeClass('li-selected');
            $(this).addClass('li-selected');

        });
    });

    /*------------[Start] form ------------*/

    $(".form .form-control, .form .form-select").focus(function() {
        $(this).parent().addClass("has-value input-focus")

    }).blur(function() {
        $(this).parent().addClass("has-value").removeClass("input-focus");

        if ($(this).val() === '') {
            $(this).parent().removeClass("has-value");
        }
    });


    var swiperbanner = new Swiper('.swiper-banner', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        loop: true,
        observer: true,
        effect: 'fade',
        observeParents: true,
        watchOverflow: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination.banner",
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next.banner',
            prevEl: '.swiper-button-prev.banner',
        }

    });

    var swiperbrand = new Swiper('.swiper-brands', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        loop: true,
        observer: true,
        effect: 'fade',
        observeParents: true,
        watchOverflow: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination.brands",
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next.brands',
            prevEl: '.swiper-button-prev.brands',
        }

    });

    
    var swipernews = new Swiper('.swiper-news', {
        slidesPerView: 2,
        spaceBetween: 30,
        speed: 800,
        loop: true,
        observer: true,
        effect: 'slide',
        autoHeight: true,
        observeParents: true,
        watchOverflow: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination.news",
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next.news',
            prevEl: '.swiper-button-prev.news',
        },
        breakpoints: {
            1025: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            577: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            0: {
                slidesPerView: 2,
            },
        }

    });


});


$(window).on("load", function() {

    $(".preload").fadeOut();

    setTimeout(function() {
        $("html").addClass("page-loaded");
    }, 500);


    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    if (isMobile.any()) {
        $("html").addClass("device");
    } else {
        $("html").addClass("pc");
    }


    var ua = window.navigator.userAgent;
    var isIE = /MSIE|Trident/.test(ua);

    if (isIE) {
        $("html").addClass("ie");
    }

    $('.modal').on("hidden.bs.modal", function(e) {
        if ($('.modal:visible').length) {
            $('body').addClass('modal-open');
        }
    });


    $('img.svg-js').each(function() {
        var $img = jQuery(this);
        var imgURL = $img.attr('src');
        var attributes = $img.prop("attributes");

        $.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Remove any invalid XML tags
            $svg = $svg.removeAttr('xmlns:a');

            // Loop through IMG attributes and apply on SVG
            $.each(attributes, function() {
                $svg.attr(this.name, this.value);
            });

            // Replace IMG with SVG
            $img.replaceWith($svg);
        }, 'xml');
    });
});


/*------------[Start] Height [vh] ------------*/

let vh_static = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vhs', `${vh_static}px`);

let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);
window.addEventListener('resize', () => {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
});

/*------------[Start] Header color ------------*/

window.sections = [...document.querySelectorAll('.section')];
window.lastScrollTop = window.pageYOffset;

window.addEventListener('scroll', onScroll);

function onScroll() {
    const scrollTop = window.pageYOffset;

    const section = window.sections
        .map(section => {
            const el = section;
            const rect = el.getBoundingClientRect();
            return { el, rect };
        })
        .find(section => section.rect.bottom >= (window.innerHeight * 0.2));
    //document.body.className = ""; 
    //document.body.classList.add(section.el.getAttribute('data-bg'));
    document.body.className = section.el.getAttribute('data-bg');
}
