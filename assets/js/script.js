$('.category-carousel').owlCarousel({
    loop:true,
    margin:0,
    // nav:true,
    dots:false,
    // navText: ["<i class='arrow fa-solid fa-chevron-left'></i>","<i class='arrow fa-solid fa-chevron-right'></i>"],
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