/* Author: Mimi Flynn mimi at mimiflynn dot com
 *
 **/

/*jslint undef: true, sloppy: true, todo: true, vars: true, white: true */

( function($) {

    var HX = HX || {};

    HX.namespace = function(ns_string) {
      var parts = ns_string.split('.'), parent = HX, i;

      // strip redundant leading global
      if (parts[0] === "HX") {
        parts = parts.slice(1);
      }

      for ( i = 0; i < parts.length; i += 1) {
        // create a property if it doesn't exist
        if ( typeof parent[parts[i]] === "undefined") {
          parent[parts[i]] = {};
        }
        parent = parent[parts[i]];
      }
      return parent;
    };

    HX.namespace('HX.Sitewide');

    HX.Sitewide = ( function() {

        var init = function() {

        };

        return {

          init : init

        };

      }());

    HX.namespace('HX.Home');

    HX.Home = ( function() {

        var demoHide = function() {

          $('div.category').on('click', 'a', function(e) {
            
            e.preventDefault();
            $('section.product').show();
            $('section.home').hide();
            
          });

        };

        var init = function() {
          
          demoHide();

        };

        return {

          init : init

        };

      }());
      
    HX.Quiz = ( function() {

        var action = function() {

          $('ol li').on('click', 'a.check', function(e) {
            
            e.preventDefault();
            $('section.product').show();
            $('section.home').hide();
            
          });

        };

        var init = function() {
          
          action();

        };

        return {

          init : init

        };

      }());

    HX.namespace('HX.SiteInit');

    HX.SiteInit = function() {

      HX.Sitewide.init();

      HX.Quiz.init();

      if ($('body').hasClass('home')) {
        HX.Home.init();
      }

    };

    /* Document Ready? Do this!
     * ------------------------------------------------------------------------ */
    $(document).ready(function() {

      HX.SiteInit();

    });

  }(jQuery));
