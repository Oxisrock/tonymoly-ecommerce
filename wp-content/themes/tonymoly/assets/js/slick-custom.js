  $(document).ready(function () {
    $('#home-slide').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: true,
      speed: 1500,
      // Caso de Emergencia
      // prevArrow: $('#slick-prev1'),
      // nextArrow: $('#slick-next2')
      // Caso de Emergencia
    });
    $('#home-banner').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: true,
      speed: 1500,
      // Caso de Emergencia
      // prevArrow: $('#slick-prev1'),
      // nextArrow: $('#slick-next2')
      // Caso de Emergencia
    });
    $('#home-slide-midle').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: true,
      speed: 1500,
      // Caso de Emergencia
      // prevArrow: $('#slick-prev1'),
      // nextArrow: $('#slick-next2')
      // Caso de Emergencia
    });
    $('#favoritos-slide').slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: true,
      speed: 1500,
      // Caso de Emergencia
      // prevArrow: $('#slick-prev1'),
      // nextArrow: $('#slick-next2')
      // Caso de Emergencia
    });
    $('#products-slide').slick({
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: false,
      autoplaySpeed: 4000,
      arrows: true,
      speed: 1500,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            lazyLoad: 'ondemand',
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false,
            lazyLoad: 'ondemand',
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false,
            lazyLoad: 'ondemand',
            
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
      // Caso de Emergencia
      // prevArrow: $('#slick-prev1'),
      // nextArrow: $('#slick-next2')
      // Caso de Emergencia
    });

    $('#products-offerts').slick({
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: false,
      autoplaySpeed: 4000,
      arrows: true,
      speed: 1500,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            lazyLoad: 'ondemand',
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false,
            lazyLoad: 'ondemand',
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false,
            lazyLoad: 'ondemand',
            
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
      // Caso de Emergencia
      // prevArrow: $('#slick-prev1'),
      // nextArrow: $('#slick-next2')
      // Caso de Emergencia
    });

    $('#products-news-slide').slick({
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: false,
      autoplaySpeed: 4000,
      arrows: true,
      speed: 1500,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            lazyLoad: 'ondemand',
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false,
            lazyLoad: 'ondemand',
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false,
            lazyLoad: 'ondemand',
            
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
      // Caso de Emergencia
      // prevArrow: $('#slick-prev1'),
      // nextArrow: $('#slick-next2')
      // Caso de Emergencia
    });
    //Settings carousel product - start
     $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      autoplay: true,
      focusOnSelect: true,
      autoplaySpeed:4000,
    });
    //Settings carousel product - end
    $('#blog').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: true,
      speed: 1500,
      // Caso de Emergencia
      // prevArrow: $('#slick-prev1'),
      // nextArrow: $('#slick-next2')
      // Caso de Emergencia
    });
    $('#tonytv').slick({
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: false,
      autoplaySpeed: 4000,
      arrows: true,
      speed: 1500,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            lazyLoad: 'ondemand',
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false,
            lazyLoad: 'ondemand',
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false,
            lazyLoad: 'ondemand',
            
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
      // Caso de Emergencia
      // prevArrow: $('#slick-prev1'),
      // nextArrow: $('#slick-next2')
      // Caso de Emergencia
    });
    $('.product_gallery').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      speed: 1500,
      fade: true,
      // Caso de Emergencia
      // prevArrow: $('#slick-prev1'),
      // nextArrow: $('#slick-next2')
      // Caso de Emergencia
    });
  });
