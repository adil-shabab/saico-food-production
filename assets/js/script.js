



$(document).ready(function(){
    setTimeout(()=> {
        $('.loader').remove();
    } , 800); // after 8 sec it will remove.
});





$(window).scroll(function(){
    if ($(this).scrollTop() > 150) {
        $('.navbar').addClass('fixed-top bg-white z-index')
    }
    else{
        $('.navbar').removeClass('fixed-top')
    }
  });

// category slider 
$('.category-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots:false,
    navText: ["<i class='arrow fa-solid fa-chevron-left'></i>","<i class='arrow fa-solid fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})



//testimonial slider
$('.testimonialCarousel').slick({
    infinite: true,
    slidesToShow: 2,
    margin: 10,
    slidesToScroll: 1,
    // autoplay: true,
    dots: false,
    arrows: true,
    responsive: [{
            breakpoint: 1099,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});








//testimonial slider
$('.testimonialCarousel2').slick({
    infinite: true,
    slidesToShow: 2,
    margin: 10,
    slidesToScroll: 1,
    // autoplay: true,
    dots: false,
    arrows: true,
    responsive: [{
            breakpoint: 1099,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});



var $owl = $('.award-carousel');

$owl.children().each( function( index ) {
  $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
});

$owl.owlCarousel({
  center: true,
  loop: true,
  items: 5,
  responsive:{
    0:{
        items:1
    },
    600:{
        items:3
    },
    1000:{
        items:4
    }
}
});

$(document).on('click', '.owl-item>div', function() {
  // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
  var $speed = 300;  // in ms
  $owl.trigger('to.owl.carousel', [$(this).data( 'position' ), $speed] );
});


