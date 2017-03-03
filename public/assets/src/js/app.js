var mediaLarge = '1440px';
var mediaMedium = '1024px';

// Define App Namespace
var app = {
  // Initializer
  init: function() {
    //app.enquire();
  },

  enquire : function() {

    enquire.register("screen and (max-width: " + mediaLarge + ")", {
      match : function() {
        console.log('Match');
      },
      setup : function() {
        console.log('Setup');
      },
      unmatch : function() {
        console.log('Unmatch');
      }
    });
  }

};
// Initialize App
jQuery(function($){app.init();});
