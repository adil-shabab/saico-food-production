// category slider 
// $('.category-carousel').owlCarousel({
//     loop:true,
//     margin:0,
//     nav:true,
//     dots:false,
//     navText: ["<i class='arrow fa-solid fa-chevron-left'></i>","<i class='arrow fa-solid fa-chevron-right'></i>"],
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:2
//         },
//         1000:{
//             items:3
//         }
//     }
// })



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




// input js 
// JavaScript for label effects only
$(window).load(function(){
    $(".input-field input").val("");
    
    $(".input-effect input").focusout(function(){
        if($(this).val() != ""){
            $(this).addClass("has-content");
        }else{
            $(this).removeClass("has-content");
        }
    })
});