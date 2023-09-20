
<script defer src= "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" > </script>
<script defer src="{{ asset('dist/js/owl.carousel.min.js') }}"></script>
{{-- <script type="text/javascript" defer src="https://cdn.datatables.net/v/dt/dt-1.12.1/b-2.2.3/cr-1.5.6/fc-4.1.0/fh-3.2.4/r-2.3.0/rr-1.2.8/sl-1.4.0/datatables.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}


<script type="module">

    // wait for document to finish loading and run domReady function
if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", domReady);
} else {
  domReady();
}

function domReady(){
  let drawer = document.querySelector('#drawer-navigation');
  drawer.classList.toggle('hidden');

}

$(window).on("scroll", function () {
    if ($(this).scrollTop() > 50) {
        $("header").addClass("not-transparent");
    }
    else {
        $("header").removeClass("not-transparent");
    }
});

$(document).ready(function() {
$('#iw-testimonials.owl-carousel').owlCarousel({
autoplay: true,
center: true,
loop: true,
margin: 0,
autoplayHoverPause: true,
navText : ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
responsiveClass: true,
responsive: {
    0: {
    items: 1,
    nav: false
    },
    767: {
    items: 1,
    nav: false
    },
    1000: {
    items: 2,
    nav: true,
    },
    1200: {
    items: 3,
    nav: true,
    }
}
})


$('#iw-leadership-slider.owl-carousel').owlCarousel({
autoplay: true,
// center: true,
loop: true,
margin: 20,
autoplayHoverPause: true,
navText : ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
responsiveClass: true,
responsive: {
    0: {
    items: 1,
    nav: true
    },
    600: {
    items: 2,
    nav: false
    },
    1000: {
    items: 3,
    margin: 50,
    nav: true,
    dots:false,
    loop: true
    }
}
})

$('#iw-individualized-results-slider.owl-carousel').owlCarousel({
autoplay: true,
autoplayTimeout: 3000,
animateOut: 'fadeOut',
// center: true,
loop: true,
margin: 20,
autoplayHoverPause: true,
navText : ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
responsiveClass: true,
responsive: {
    0: {
    items: 1,
    nav: false,
    dots:false
    },
    600: {
    items: 1,
    nav: false
    },
    1000: {
    items: 1,
    nav: false,
    dots:false,
    loop: true
    }
}
})

$('#iw-benefits-slider.owl-carousel').owlCarousel({
autoplay: 2000,
autoplayTimeout: 3000,
animateOut: 'fadeOut',
// center: true,
loop: true,
margin: 20,
autoplayHoverPause: true,
navText : ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
responsiveClass: true,
responsive: {
    0: {
    items: 1,
    nav: false,
    dots:false
    },
    600: {
    items: 1,
    nav: false
    },
    1000: {
    items: 1,
    nav: false,
    dots:false,
    loop: true
    }
}
})
})

</script>
