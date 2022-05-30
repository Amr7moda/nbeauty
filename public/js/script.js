
// nav
var fix = document.querySelector('.fix');
var search = document.querySelector('.search');

window.onscroll = ch;
function ch() {
    if (window.scrollY >= 50) {
        fix.style.position = 'fixed';
        fix.style.top = 0 + 'px';
        fix.style.width = 100 + '%';
        search.style.position = 'fixed';
        search.style.top = 58 + 'px';
    } else {
        fix.style.position = 'relative';
        search.style.position = 'absolute';
        search.style.top = 61 + 'px';
    }

    if (window.scrollY >= 50 && window.innerWidth <= 768) {
        search.style.position = 'fixed';
        search.style.top = 146 + 'px';
    } elseif(window.scrollY >= 50); {
        search.style.position = 'absolute';
        search.style.top = 147 + 'px';
    }
}



//live search
let old_content = $('.navbar-collapse .container-fluid .navbar').html();

$(document).on('keyup', '#search', function () {
    var search_content = $(this).val();
    var search = document.querySelector('.scroll');

    if (search_content != "") {
        search.style.height = 230 + 'px'
        $.ajax({
            url: '/search',
            method: 'GET',
            data: { search_content },
            dataType: 'json',
            success: function (data) {
                $('.search').html(data.row_result);
            }
        })
    } else {
        $('.search').html('');
        search.style.height = 0 + 'px'
    }


});

var path = window.location.pathname;
var page = path.split("/").pop();
var home = document.querySelector('#n1');
var skin = document.querySelector('#n2');
var lash = document.querySelector('#n3');

if (page == 'skincare') {
    skin.style.color = '#f3268b';
    skin.style.backgroundColor = 'white';
    skin.style.borderColor = '#dee2e6' + '#dee2e6' + '#fff';
}

if (page == 'home') {
    home.style.color = '#f3268b';
    home.style.backgroundColor = 'white';
    home.style.borderColor = '#dee2e6' + '#dee2e6' + '#fff';
}

if (page == 'lashes') {
    lash.style.color = '#f3268b';
    lash.style.backgroundColor = 'white';
    lash.style.borderColor = '#dee2e6' + '#dee2e6' + '#fff';
}



// <!-- Initialize Swiper -->
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});


// <!-- Initialize Swiper2 -->
if (window.innerWidth >= 768) {
    var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 3,
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });
    console.log('a');

} else {
    var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 2,
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    console.log('b');

}



