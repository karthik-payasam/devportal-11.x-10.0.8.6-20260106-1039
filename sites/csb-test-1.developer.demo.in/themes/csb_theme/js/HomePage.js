console.log("222");
document.documentElement.setAttribute("dir", "ltr"); //sliding

jQuery(document).ready(function () {

  jQuery('.productslider').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: false,
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
    ]
  });


  jQuery('.flex-next').on('click', function () {
    jQuery('.productslider').flexslider("play");
  });

  jQuery('.flex-prev').on('click', function () {
    jQuery('.productslider').flexslider("play");
  });


  jQuery('#how-it-slider').flexslider({
    animation: "slide"
  });

});

