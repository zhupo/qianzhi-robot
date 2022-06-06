define(["../../../../../assets/libs/art-template/dist/template.js"], function (
  Template
) {
  const aboutUs = {
    data: {},

    init() {
      this.events();
    },

    events() {
      $('video').on('contextmenu', function () {
        return false;
      });
    },
  };

  return {
    aboutUs: aboutUs.init(),
  };
});
