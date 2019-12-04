$(document).ready(function(){
    $('.morelike-slider').slick({
        dots: false,
        arrows: true,
        infinite: false,
        speed: 600,
        // autoplay: true,
        // autoplaySpeed: 2000,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }  
        ]
    });

    $('.netbeins-tab-container ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('.netbeins-tab-container ul.tabs li').removeClass('current');
        $('.netbeins-tab-container .tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
        
        $('.morelike-slider').slick('reinit');

    })

    $(".netbeins-slide-description .close" ).click(function(){
        $(this).parent('.netbeins-slide-description').slideUp(200);
    });




// document close
});