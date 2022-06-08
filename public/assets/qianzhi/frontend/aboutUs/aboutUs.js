define(["../../../../../assets/libs/art-template/dist/template.js"], function (
  Template
) {
  const aboutUs = {
    data: {},

    init() {
      this.events();
    },

    events() {
      $("video").on("contextmenu", function () {
        return false;
      });

      var mySwiper = new Swiper ('.swiper', {
        slidesPerView: 3,
        grid: {
          rows: 2,
        },
        spaceBetween: 0,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
      })  
    }
    
  };

  return {
    aboutUs: aboutUs.init(),
  };
});
