$(document).ready(function(){


    $('.responsive').slick({
        dots: false,
        infinite: false,
        arrows: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
        }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
    }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
}
}
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
});


    $('.slick-slide').hover(function(){
        var list = $('.slick-slide');

        // alert(list.width());
        // alert(list.length);
        var sum=0;
        list.each(function(){
            sum += parseInt(list.width());
        });
        $(this).css({
            "min-width": "350px", 
            "min-height": "260px"
        });
        
        setTimeout(function(){
            console.log(sum);
        }, 1000);

        // var listWidth = list.width();
        // alert(listWidth);
        //$(this).parents('.slick-track').
    }, function(){
        $(this).css({
            "min-width": "auto", 
            "min-height": "auto"
        });
    }
    );

// document close
});