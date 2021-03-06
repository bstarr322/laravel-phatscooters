// Superfish v1.7.2 - jQuery menu widget
!function(s){var e=function(){var e={bcClass:"sf-breadcrumb",menuClass:"sf-js-enabled",anchorClass:"sf-with-ul",menuArrowClass:"sf-arrows"},n=/iPhone|iPad|iPod/i.test(navigator.userAgent),t=function(){var s=document.documentElement.style;return"behavior"in s&&"fill"in s&&/iemobile/i.test(navigator.userAgent)}(),o=(function(){n&&s(window).load(function(){s("body").children().on("click",s.noop)})}(),function(s,n){var t=e.menuClass;n.cssArrows&&(t+=" "+e.menuArrowClass),s.toggleClass(t)}),i=function(n,t){return n.find("li."+t.pathClass).slice(0,t.pathLevels).addClass(t.hoverClass+" "+e.bcClass).filter(function(){return s(this).children("ul").hide().show().length}).removeClass(t.pathClass)},r=function(s){s.children("a").toggleClass(e.anchorClass)},a=function(s){var e=s.css("ms-touch-action");e="pan-y"===e?"auto":"pan-y",s.css("ms-touch-action",e)},h=function(e,o){var i="li:has(ul)";s.fn.hoverIntent&&!o.disableHI?e.hoverIntent(u,f,i):e.on("mouseenter.superfish",i,u).on("mouseleave.superfish",i,f);var r="MSPointerDown.superfish";n||(r+=" touchend.superfish"),t&&(r+=" mousedown.superfish"),e.on("focusin.superfish","li",u).on("focusout.superfish","li",f).on(r,"a",l)},l=function(e){var n=s(this),t=n.siblings("ul");t.length>0&&t.is(":hidden")&&(n.one("click.superfish",!1),"MSPointerDown"===e.type?n.trigger("focus"):s.proxy(u,n.parent("li"))())},u=function(){var e=s(this),n=d(e);clearTimeout(n.sfTimer),e.siblings().superfish("hide").end().superfish("show")},f=function(){var e=s(this),t=d(e);n?s.proxy(c,e,t)():(clearTimeout(t.sfTimer),t.sfTimer=setTimeout(s.proxy(c,e,t),t.delay))},c=function(e){e.retainPath=s.inArray(this[0],e.$path)>-1,this.superfish("hide"),this.parents("."+e.hoverClass).length||(e.onIdle.call(p(this)),e.$path.length&&s.proxy(u,e.$path)())},p=function(s){return s.closest("."+e.menuClass)},d=function(s){return p(s).data("sf-options")};return{hide:function(e){if(this.length){var n=this,t=d(n);if(!t)return this;var o=t.retainPath===!0?t.$path:"",i=n.find("li."+t.hoverClass).add(this).not(o).removeClass(t.hoverClass).children("ul"),r=t.speedOut;e&&(i.show(),r=0),t.retainPath=!1,t.onBeforeHide.call(i),i.stop(!0,!0).animate(t.animationOut,r,function(){var e=s(this);t.onHide.call(e)})}return this},show:function(){var s=d(this);if(!s)return this;var e=this.addClass(s.hoverClass),n=e.children("ul");return s.onBeforeShow.call(n),n.stop(!0,!0).animate(s.animation,s.speed,function(){s.onShow.call(n)}),this},destroy:function(){return this.each(function(){var n=s(this),t=n.data("sf-options"),i=n.find("li:has(ul)");return t?(clearTimeout(t.sfTimer),o(n,t),r(i),a(n),n.off(".superfish").off(".hoverIntent"),i.children("ul").attr("style",function(s,e){return e.replace(/display[^;]+;?/g,"")}),t.$path.removeClass(t.hoverClass+" "+e.bcClass).addClass(t.pathClass),n.find("."+t.hoverClass).removeClass(t.hoverClass),t.onDestroy.call(n),void n.removeData("sf-options")):!1})},init:function(n){return this.each(function(){var t=s(this);if(t.data("sf-options"))return!1;var l=s.extend({},s.fn.superfish.defaults,n),u=t.find("li:has(ul)");l.$path=i(t,l),t.data("sf-options",l),o(t,l),r(u),a(t),h(t,l),u.not("."+e.bcClass).superfish("hide",!0),l.onInit.call(this)})}}}();s.fn.superfish=function(n){return e[n]?e[n].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof n&&n?s.error("Method "+n+" does not exist on jQuery.fn.superfish"):e.init.apply(this,arguments)},s.fn.superfish.defaults={hoverClass:"sfHover",pathClass:"overrideThisToUse",pathLevels:1,delay:800,animation:{opacity:"show"},animationOut:{opacity:"hide"},speed:"normal",speedOut:"fast",cssArrows:!0,disableHI:!1,onInit:s.noop,onBeforeShow:s.noop,onShow:s.noop,onBeforeHide:s.noop,onHide:s.noop,onIdle:s.noop,onDestroy:s.noop},s.fn.extend({hideSuperfishUl:e.hide,showSuperfishUl:e.show})}(jQuery);

jQuery(function($){
 // MEGAMENU TOGGLE
  var mobFlag = 0;

  megamenuToggle = function() {
    if ( $(window).width() > 991 ) {
      $('#megamenu').removeClass('megamenu_mobile').addClass('megamenu_desktop');

      $('#megamenu .level_1').superfish({
        animation: {height: 'show'},
        speed: 'fast'
      });

      $('#megamenu .level_1, #megamenu .level_3').removeAttr('style');

      $('#megamenu_mobile_toggle').unbind('.mobileMenu');

      $('.level_1_trigger').unbind('.mobileMenu');
      $('.level_2_trigger').unbind('.mobileMenu');

      $(document).unbind('.mobileMenu');

      mobFlag = 0;
    }
    else {
      $('#megamenu').removeClass('megamenu_desktop').addClass('megamenu_mobile');

      $('#megamenu .level_1').superfish('destroy');

      if ( mobFlag == 0 ) {
        menuMobile();
        mobFlag = 1;
      };
    };
  };

  $(window).on('load resize', function() {
    megamenuToggle();
  });




  // MEGAMENU MOBILE
  menuMobile = function() {
    $("#megamenu_mobile_toggle").on('click.mobileMenu', function(){
      $(".level_1").stop().slideToggle("slow");

      $(this).toggleClass("active");
    });

    $('.level_1_trigger').on('click.mobileMenu', function() {
      $(this).parent().parent().find('.level_2_wrap').slideToggle('slow');

      $(this).toggleClass('active');

      return false;
    });

    $('.level_2_trigger').on('click.mobileMenu', function(){
      $(this).parent().find('.level_3').slideToggle('slow');

      $(this).toggleClass('active');

      return false;
    });

    $('.megamenu_mobile h2').on('click touchstart', function(e){
      e.stopPropagation();
    });

    $(document).bind('click.mobileMenu', function(){
      $(".level_1").slideUp("slow");
      $(".megamenu_mobile").find("h2").removeClass("active");
    });
  };
  
  $('.carousel').carousel({
    interval: 3500
  });

  /* ================= Default Select2 ================= */
  $("[rel=select2]").select2({
      
  });
  $("[rel=taginput]").select2({
      tags: true,
      tokenSeparators: [',']
  });
  
  /* ================= bootstrap-datetimepicker ================= */
  $(".input-group.date").datetimepicker({
      format: 'DD/MM/YYYY'
  });
  
  $(".input-group.datetime").datetimepicker({
      format: 'DD/MM/YYYY LT',
      sideBySide: true
  });
});