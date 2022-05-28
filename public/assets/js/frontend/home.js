define([
  '../../libs/jquery/src/jquery',
  '../../libs/art-template/dist/template',
  'assets/js/frontend/homeData.js'
], function ($, Template, homeData) {

  const $elms = {
    searchBtn: $("#js-search-btn"),
    searchInput: $("#js-search-input"),
    searchFrom: $("#js-search-from"),

    ourProduct: $('#ourProduct'),
    ourProductTemplate: $('#ourProductTemplate'),

    partners: $('#strategicPartners'),
    partnersTemplate: $('#strategicPartnersTemplate')
  }

  const homePage = {
    data: {

      temp: {
        ourProduct: Template.compile($elms.ourProductTemplate.html()),
        partners: Template.compile($elms.partnersTemplate.html())
      }
    },

    init() {
      this.events()
      this.render()

    },

    render() {
      const that = homePage
      $elms.ourProduct.html(that.data.temp.ourProduct({
        products: homeData.ourProduct
      }))
      $elms.partners.html(that.data.temp.partners({
        partners: homeData.partners
      }))
    },


    events() {
      const that = homePage;
      $elms.searchBtn.off("click").on("click", function () {
        if ($elms.searchInput.is(":visible")) {
          $($elms.searchInput)
            .animate(
              {
                width: "0",
              },
              800
            )
            .hide(1);
        } else {
          $elms.searchInput.show().animate({
            width: "170px",
          });
        }
      });
    },
  };

  return {
    homePage: homePage.init(),
  };
});
