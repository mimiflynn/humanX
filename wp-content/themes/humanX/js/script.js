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


        

        var init = function() {

          

        };

        return {

          init : init

        };

      }());

    HX.namespace('HX.SiteInit');

    HX.SiteInit = function() {

      HX.Sitewide.init();

      if ($('body').hasClass('home')) {
        HX.Home.init();
      }

      /*
       * Set site to browser size
       * ---------------------------------------------------------------------- */
      if ($('html').hasClass('no-touch')) {

        HX.Sitewide.setScreenSize();
        $(window).resize(HX.Sitewide.setScreenSize);

      }

      if ($('body').hasClass('blog') || $('body').hasClass('single')) {

        $('aside').stickyScroll({
          container : '#single'
        });

      }

    };

    /* Document Ready? Do this!
     * ------------------------------------------------------------------------ */
    $(document).ready(function() {

      HX.SiteInit();

    });

  }(jQuery));
